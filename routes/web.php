<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//main controller
Route::get('/', [mainController::class, 'index']);
Route::get('/about', [mainController::class, 'about']);
Route::get('/blog', [mainController::class, 'blog']);
Route::get('/contact', [mainController::class, 'contact']);
Route::post('/contactreg', [mainController::class, 'contact_reg']);



//user controller
Route::get('/account', [userController::class, 'account']);
Route::get('/profile', [userController::class, 'profile']);
Route::get('/manage_addr', [userController::class, 'manage_addr']);
Route::post('/manage/address', [userController::class, 'address_update']);
Route::get('/my_orders', [userController::class, 'my_orders']);
Route::get('/my_wishlist', [userController::class, 'my_wishlist']);
Route::post('/profile/update', [userController::class, 'update_profile']);
Route::get('/my_product', [userController::class, 'my_product']);
Route::get('/removeaddress/{id}', [userController::class, 'remove_address']);
Route::get('/manage/address/get/{id}', [userController::class, 'address_update_get']);
Route::post('/manage/address/get', [userController::class, 'address_update_edit']);
Route::get('setasdefault/{id}', [userController::class, 'setas_default']);



//login controller
Route::get('/login', [loginController::class, 'login']);
Route::get('/register', [loginController::class, 'register']);
Route::get('/logout', [loginController::class, 'logout']);
Route::post('/login', [loginController::class, 'login_check']);
Route::post('/register', [loginController::class, 'register_create']);


//shop controller
Route::post('/add/product', [shopController::class, 'product_add']);
Route::post('/update/product', [shopController::class, 'product_update']);
Route::get('/cart', [shopController::class, 'cart']);
Route::get('/checkout', [shopController::class, 'checkout']);
Route::get('/prodetails', [shopController::class, 'details']);
Route::get('/shopcatalog/{catagory?}', [shopController::class, 'shop']);
Route::get('/addtocart/{product_id}/{quantity?}', [shopController::class, 'add_to_cart']);
Route::get('/removecart/{id}', [shopController::class, 'remove_cart']);
route::get('/update_quantity/{prod_id}/{quantity}', [shopController::class, 'update_quantity']);
Route::get('/addtowishlist/{product_id}', [shopController::class, 'add_to_wishlist']);
Route::get('/removewishlist/{id}', [shopController::class, 'remove_wishlist']);
Route::get('/productview/{productid}', [shopController::class, 'product_view']);
Route::post('/order', [shopController::class, 'order_check']);
Route::get('/payment', [shopController::class, 'payment']);
Route::get('/ordersuccess', [shopController::class, 'order_success']);
route::get('/search/{product}', [mainController::class, 'search_prod']);

//admin side
route::get('/adminindex', [adminController::class, 'adminindex']);
route::get('/adminlogin', [adminController::class, 'adminlogin']);
route::post('/adminlogin', [adminController::class, 'adminlogin_check']);


Route::get('/productedit', [adminController::class, 'product_edit']);
Route::get('/product', [adminController::class, 'product']);
Route::post('/addproduct', [adminController::class, 'add_product']);
Route::get('/viewuser', [adminController::class, 'view_user']);
Route::get('/deleteuser/{full_name}', [adminController::class, 'delete_user']);
Route::get('/vieworders', [adminController::class, 'view_orders']);

Route::get('/deleteproduct/{id}', [shopController::class, 'delete_product']);

Route::post('/productadd', [adminController::class, 'product_add_admin']);
Route::get('/productedit/{id}', [adminController::class, 'product_admin']);
Route::post('/productupdate', [adminController::class, 'product_update_admin']);
