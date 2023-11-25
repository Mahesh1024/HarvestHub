<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order_item;
use App\Models\orders;
use App\Models\product;
use App\Models\user_address;
use App\Models\users;
use App\Models\wishlist;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Razorpay\Api\Order;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    function account()
    {
        $order = users::where('email_id', session('email_id'))->get();
        $wish = wishlist::where('email_id', session('email_id'))->get();
        $data = user_address::where('email_id', session('email_id'))->where('default', true)->get();
        return view('user.account', ['data' => $data, 'wish' => $wish, 'order' => $order]);
    }
    function profile()
    {
        $user_details = users::where('email_id', session('email_id'))->get();
        return view('user.profile', ['user_details' => $user_details]);
    }
    function manage_addr()
    {
        $data = user_address::where('email_id', session('email_id'))->get();
        return view('user.manage_addr', ['data' => $data]);
    }
    function my_orders()
    {
        $orders = order_item::with('product')->get();
        return view('user.my_orders', ['orders' => $orders]);
    }
    function my_wishlist()
    {
        $wish_id = cart::where('email_id', session('email_id'))->pluck('product_id')->toArray();
        $wishlist_product = wishlist::where('email_id', session('email_id'))->join('products', 'products.id', '=', 'wishlists.product_id')->select('wishlists.*', 'wishlists.id as wishlist_id', 'products.*', 'products.id as product_id')->get();
        return view('user.my_wishlist', ['wishlist_product' => $wishlist_product, 'wish_id' => $wish_id]);
    }
    function my_product()
    {
        $my_products = product::where('added_by', session('email_id'))->get();
        return view('user.my_product', ['my_products' => $my_products]);
    }


    //profile update
    function update_profile(Request $request)
    {
        $data = [
            "full_name" => $request->name,
            "address" => $request->address,
            "mobile_number" => $request->mobile,
        ];
        users::where('email_id', $request->email)->update($data);
        alert()->success("HarvestHub", "Successfully Updated");
        return redirect("/profile");
    }


    //new address add
    function address_update(Request $request)
    {
        $data = [
            "full_name" => $request->name,
            "mobile_number" => $request->mobile,
            "email_id" => session('email_id'),
            "pin_code" => $request->pincode,
            "address" => $request->address,
            "city/town" => $request->city,
            "state" => $request->state,
            "landmark" => $request->landmark,
            "alternative_phone" => $request->alternative,

        ];
        if ($request->default) {
            $data["default"] = $request->default;
            user_address::where('email_id', session('email_id'))->update(['default' => 0]);
        }
        user_address::create($data);
        alert()->success("Harvest Hub", "address updated successfully");
        return redirect('/manage_addr');
    }

    //remove address
    function remove_address($id)
    {
        user_address::where('email_id', session('email_id'))->where('id', $id)->delete();
        return redirect()->back();
    }

    function address_update_edit(Request $request)
    {
        $data = [
            "full_name" => $request->name1,
            "mobile_number" => $request->mobile1,
            "email_id" => session('email_id'),
            "pin_code" => $request->pincode1,
            "address" => $request->address1,
            "city/town" => $request->city1,
            "state" => $request->state1,
            "landmark" => $request->landmark1,
            "alternative_phone" => $request->alternative1,
        ];
        user_address::where('id', $request->id1)->update($data);
        return redirect()->back();
    }

    function address_update_get($id)
    {
        $add = user_address::where('id', $id)->get();
        return $add;
    }

    //set as default
    function setas_default($id)
    {
        user_address::where('email_id', session('email_id'))->update(['default' => 0]);
        user_address::where('id', $id)->update([
            "default" => 1
        ]);
        return redirect()->back();
    }
}
