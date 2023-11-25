<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\contact;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class mainController extends Controller
{
    function index()
    {
        $ctcount = product::selectRaw('product_type, COUNT(*) as count')
            ->groupBy('product_type')
            ->pluck('count', 'product_type')
            ->toArray();
        $my_product = product::where('in_stock', 'In Stock')->get();
        $randomRecords = product::inRandomOrder()->take(6)->get();
        return view('index', ['my_product' => $my_product, 'ctcount' => $ctcount, 'randomRecords' => $randomRecords]);
    }
    function about()
    {
        return view('menu.about');
    }
    function blog()
    {
        return view('menu.blog');
    }
    function contact()
    {
        return view('menu.contact');
    }
    function search_prod($product)
    {
        $my_product = Product::whereRaw('Lower(product_name) like ?', '%' . strtolower($product) . '%')->orWhereRaw('Lower(product_type) like ?', '%' . strtolower($product) . '%')->get();
        $cart_ids = cart::where('email_id', session('email_id'))->pluck('product_id')->toArray();
        return view('shop.shopcatalog', ['my_product' => $my_product, 'cart_ids' => $cart_ids]);
    }

    function contact_reg(Request $request)
    {
        $data = [
            "Name" => $request->name,
            "Email_id" => $request->email,
            "Phone_number" => $request->phone,
            "Message" => $request->message,
        ];
        contact::create($data);
        alert()->success('HarvestHub', 'Your Request submitted successfully');
        return redirect('/contact');
    }
}
