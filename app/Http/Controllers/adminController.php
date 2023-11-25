<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\orders;
use App\Models\product;
use App\Models\users;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function adminindex()
    {
        return view('admin.index');
    }
    function adminlogin()
    {
        return view('admin.auth.adminlogin');
    }


    function product()
    {
        $products = product::all();
        return view('admin.manage_products.products', ['products' => $products]);
    }
    function view_user()
    {
        $user_details = users::all();
        return view('admin.manage_user.user_details', ['user_details' => $user_details]);
    }
    function view_orders()
    {
        $orders = orders::all();
        return view('admin.manage_products.order', ['orders' => $orders]);
    }
    function delete_user($id)
    {
        product::where('id', $id)->delete();
        return redirect()->back();
    }
    function product_edit()
    {
        return view('admin.manage_products.productedit');
    }

    //admin login
    function adminlogin_check(Request $request)
    {
        $admin = admin::where('email_id', $request->email)->where('password', $request->password)->get();
        if (count($admin) > 0) {
            return redirect('/adminindex');
        } else {
            alert()->warning('Harvest Hub', 'Invalid Credentials');
            return view('admin.auth.adminlogin');
        }
    }

    function product_add_admin(Request $request)
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
            return redirect('/product');
        }
    }

    //update product
    function product_update_admin(Request $request)
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
        return redirect('/product');
    }

    function product_admin($id)
    {
        $product = product::where('id', $id)->get();
        return view('admin.manage_products.productedit', ['product' => $product]);
    }
}
