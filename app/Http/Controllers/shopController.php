<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order_item;
use App\Models\orders;
use App\Models\product;
use Razorpay\Api\Api;

use App\Models\user_address;
use App\Models\users;
use App\Models\wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;



class shopController extends Controller
{
    function shop($category = 'All')
    {
        if ($category == "All") {
            $my_product = product::where('in_stock', 'In Stock')->get();
        } else {
            $my_product = product::where('in_stock', 'In Stock')->where('product_type', $category)->get();
        }
        $cart_ids = cart::where('email_id', session('email_id'))->pluck('product_id')->toArray();
        return view('shop.shopcatalog', ['my_product' => $my_product, 'cart_ids' => $cart_ids]);
    }
    function cart()
    {
        return view('shop.cart');
    }
    function checkout()
    {
        $data = user_address::where('email_id', session('email_id'))->get();
        return view('shop.checkout', ['data' => $data]);
    }
    function details()
    {
        return view('shop.pro-details');
    }
    function payment()
    {
        return view('shop.payment');
    }

    function product_view($productid)
    {
        $product = product::where('id', $productid)->get();
        return $product;
    }

    function order_success()
    {
        return view('shop.order_success');
    }

    //product add field
    function product_add(Request $request)
    {
        if ($request->hasfile('image')) {
            $image = $request->file('image');

            // Generate a unique filename for the image
            $filename = $request->pro_name . uniqid() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('products');
            $image->move($destinationPath, $filename);
            $data = [
                "product_type" => $request->pro_type,
                "product_name" => $request->pro_name,
                "price" => (float)$request->price,
                "discount" => (float)$request->discount,
                "added_by" => $request->addedby,
                "Product_image" => $filename,
                "discription" => $request->discription,
                "life_span" => $request->lifespan,
                "in_stock" => $request->stock,
            ];
            product::create($data);

            alert()->success('HarvestHub', 'Product addedd successfully');
            return redirect('/my_product');
        }
    }


    //update product
    function product_update(Request $request)
    {
        $data1 = [
            "product_type" => $request->pro_type1,
            "product_name" => $request->pro_name1,
            "price" => (float)$request->price1,
            "discount" => (float)$request->discount1,
            "discription" => $request->discription1,
            "life_span" => $request->lifespan1,
            "in_stock" => $request->stock1,
        ];
        product::where("id", $request->id1)->update($data1);
        return redirect()->back();
    }

    //add to cart
    function add_to_cart($product_id, $quantity = 1)
    {
        $data = [
            "email_id" => session('email_id'),
            "product_id" => $product_id,
            "Quantity" => $quantity,
        ];
        $exists = cart::where('product_id', $product_id)->where('email_id', session('email_id'))->exists();
        if ($exists) {
            alert()->info('Harvest Hub', 'Product already added');
        } else {
            cart::insert($data);
            alert()->success('Harvest Hub', 'Product added to cart');
        }
        $cart_products = cart::where('email_id', session('email_id'))->join('products', 'products.id', '=', 'carts.product_id')->select('carts.*', 'carts.id as cart_id', 'products.*', 'products.id as prod_id')->get();
        session(['cart_products' => $cart_products]);
        return redirect()->back();
    }


    //remove cart item
    function remove_cart($id)
    {
        cart::where('email_id', session('email_id'))->where('product_id', $id)->delete();
        $cart_products = cart::where('email_id', session('email_id'))->join('products', 'products.id', '=', 'carts.product_id')->select('carts.*', 'carts.id as cart_id', 'products.*', 'products.id as prod_id')->get();
        session(['cart_products' => $cart_products]);
        return redirect()->back();
    }

    //update quantity
    function update_quantity($prod_id, $quantity)
    {
        $data = ['quantity' => $quantity];
        cart::where('email_id', session('email_id'))->where('product_id', $prod_id)->update($data);
        $cart_products = cart::where('email_id', session('email_id'))->join('products', 'products.id', '=', 'carts.product_id')->select('carts.*', 'carts.id as cart_id', 'products.*', 'products.id as prod_id')->get();
        session(['cart_products' => $cart_products]);
        return true;
    }

    //add to wishlist
    function add_to_wishlist($product_id)
    {
        $data = [
            "email_id" => session('email_id'),
            "product_id" => $product_id,
        ];
        $wish = wishlist::where('product_id', $product_id)->where('email_id', session('email_id'))->exists();
        if ($wish) {
            alert()->warning('HarvestHub', ('product already added'));
        } else {
            wishlist::insert($data);
        }
        return redirect()->back();
    }

    //remove from wishlist
    function remove_wishlist($id)
    {
        wishlist::where('email_id', session('email_id'))->where('product_id', $id)->delete();
        return redirect()->back();
    }
    function delete_product($id)
    {
        product::where('id', $id)->delete();
        return redirect()->back();
    }

    //orders check
    function order_check(Request $request)
    {

        $api = new Api('rzp_test_PgcjpQ48oMEMzP', 'vd5o03paodiPlri0PCgBlpHB');

        $orderData = [
            'amount'          => $request->amount * 100, // 39900 rupees in paise
            'currency'        => 'INR'
        ];
        $razorpayOrder = $api->order->create($orderData);

        $currentDateTime = Carbon::now();
        $data = [
            "order_id" => $razorpayOrder['id'],
            "email_id" => session('email_id'),
            "order_date" => $currentDateTime,
            "total_amount" => $request->amount,
            "shipping_address" => $request->radio,
        ];
        orders::create($data);

        $item = cart::with('products')->where("email_id", session('email_id'))->get();

        foreach ($item as $it) {
            $order_im = [

                "order_id" => $razorpayOrder['id'],
                "product_id" => $it->product_id,
                "quantity" => $it->quantity,
                "price" => $it->products->price,
            ];
            order_item::create($order_im);
        }
        $user_details = users::where('email_id', session('email_id'))->get();
        return view('shop.processing', ['order_details' => $razorpayOrder, 'user_details' => $user_details]);
    }
}
