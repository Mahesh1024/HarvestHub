<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use alert;
use App\Models\cart;
    use Illuminate\Support\Facades\Session;


class loginController extends Controller
{
    function login()
    {
        return view('auth.login');
    }
    function register()
    {
        return view('auth.register');
    }

    //register create code
    function register_create(Request $request)
    {
        $users = users::where('email_id', $request->email)->get();
        if (count($users) > 0) {
            //alert()->warning('HarvestHub', 'User already registered');
            return redirect('/register')->with('warning', 'user already registered');
        } else {
            if ($request->farmer == "Farmer") {
                $usertype = "Farmer";
            } else {
                $usertype = "User";
            }
            $data = [
                "user_type" => $usertype,
                "full_name" => $request->name,
                "email_id" => $request->email,
                "mobile_number" => $request->mobile,
                "address" => $request->address,
                "password" => md5($request->password),
            ];
            users::create($data);
            $cart_products = cart::where('email_id', $request->email_id)->join('products', 'products.id', '=', 'carts.product_id')->select('carts.*', 'carts.id as cart_id', 'products.*', 'products.id as prod_id')->get();
            session([
                "full_name" => $request->name,
                "email_id" => $request->email,
                "mobile_number" => $request->mobile,
                'cart_products' => $cart_products,
                'user_type' => $request->user_type,
                "log_status" => true
            ]);
        }
        alert()->success('HarvestHub', 'Successfully Registered');
        return redirect('/');
    }



    //login check code
    function login_check(Request $request)
    {
        $users = users::where('email_id', $request->name)->where('password', md5($request->password))->first();
        if ($users) {
            $cart_products = cart::where('email_id', $users->email_id)->join('products', 'products.id', '=', 'carts.product_id')->select('carts.*', 'carts.id as cart_id', 'products.*', 'products.id as prod_id')->get();
            session([
                "full_name" => $users->full_name,
                "email_id" => $users->email_id,
                "mobile_number" => $users->mobile_number,
                'user_type' => $users->user_type,
                'cart_products' => $cart_products,
                "log_status" => true
            ]);
            return redirect('/');
        } else {
            return redirect('/login')->with('warning', 'Invalid credencials');
        }
    }

    //logout 
    public function logout()
    {
        session::flush();
        return redirect('/');
    }
}
