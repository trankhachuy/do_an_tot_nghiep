<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\BrandProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryPost;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;




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
//Frontend 
// Route::get('/','HomeController@index' );
// Route::get('/trang-chu','HomeController@index');
// Route::get('/404','HomeController@error_page');
// Route::post('/tim-kiem','HomeController@search');
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);
Route::get('/tim-kiem', [HomeController::class, 'search']);

//lien he
Route::get('/lien-he', [ContactController::class, 'lien_he']);



//Danh muc san pham trang chu
// Route::get('/danh-muc/{slug_category_product}','CategoryProduct@show_category_home');
//Route::get('/thuong-hieu/{brand_slug}','BrandProduct@show_brand_home');
// Route::get('/chi-tiet/{product_slug}','ProductController@details_product');
Route::get('/danh-muc/{slug_category_product}', [CategoryProduct::class, 'show_category_home']);
Route::get('/thuong-hieu/{brand_slug}', [BrandProduct::class, 'show_brand_home']);
Route::get('/chi-tiet/{product_slug}', [ProductController::class, 'details_product']);

//danh muc bai viet
Route::get('/danh-muc-bai-viet/{post_slug}', [PostController::class, 'danh_muc_bai_viet']);
Route::get('/bai-viet/{post_slug}', [PostController::class, 'bai_viet']);
Route::get('/danh-muc-bai-viet', [PostController::class, 'all_danh_muc_bai_viet']);



//Backend
// Route::get('/admin','AdminController@index');
// Route::get('/dashboard','AdminController@show_dashboard');
// Route::get('/logout','AdminController@logout');
// Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);



//Category Product
// Route::get('/add-category-product','CategoryProduct@add_category_product');
// Route::get('/edit-category-product/{category_product_id}','CategoryProduct@edit_category_product');
// Route::get('/delete-category-product/{category_product_id}','CategoryProduct@delete_category_product');
// Route::get('/all-category-product','CategoryProduct@all_category_product');

// Route::post('/export-csv','CategoryProduct@export_csv');
// Route::post('/import-csv','CategoryProduct@import_csv');


// Route::get('/unactive-category-product/{category_product_id}','CategoryProduct@unactive_category_product');
// Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);

Route::post('/export-csv', [CategoryProduct::class, 'export_csv']);
Route::post('/import-csv', [CategoryProduct::class, 'import_csv']);

Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);


//Send Mail 
// Route::get('/send-mail','HomeController@send_mail');
Route::get('/send-mail', [HomeController::class, 'send_mail']);


//Login facebook
// Route::get('/login-facebook','AdminController@login_facebook');
// Route::get('/admin/callback','AdminController@callback_facebook');
Route::get('/login-facebook', [AdminController::class, 'login_facebook']);
Route::get('/admin/callback', [AdminController::class, 'callback_facebook']);


//Login google
// Route::get('/login-google','AdminController@login_google');
// Route::get('/google/callback','AdminController@callback_google');

// Route::post('/save-category-product','CategoryProduct@save_category_product');
// Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');
// Đăng nhập Google
Route::get('/login-google', [AdminController::class, 'login_google']);
Route::get('/google/callback', [AdminController::class, 'callback_google']);

// Quản lý danh mục sản phẩm
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);
Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);


//Brand Product
// Route::get('/add-brand-product','BrandProduct@add_brand_product');
// Route::get('/edit-brand-product/{brand_product_id}','BrandProduct@edit_brand_product');
// Route::get('/delete-brand-product/{brand_product_id}','BrandProduct@delete_brand_product');
// Route::get('/all-brand-product','BrandProduct@all_brand_product');

// Route::get('/unactive-brand-product/{brand_product_id}','BrandProduct@unactive_brand_product');
// Route::get('/active-brand-product/{brand_product_id}','BrandProduct@active_brand_product');

// Route::post('/save-brand-product','BrandProduct@save_brand_product');
// Route::post('/update-brand-product/{brand_product_id}','BrandProduct@update_brand_product');
Route::get('/add-brand-product', [BrandProduct::class, 'add_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}', [BrandProduct::class, 'edit_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}', [BrandProduct::class, 'delete_brand_product']);
Route::get('/all-brand-product', [BrandProduct::class, 'all_brand_product']);

Route::get('/unactive-brand-product/{brand_product_id}', [BrandProduct::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [BrandProduct::class, 'active_brand_product']);

Route::post('/save-brand-product', [BrandProduct::class, 'save_brand_product']);
Route::post('/update-brand-product/{brand_product_id}', [BrandProduct::class, 'update_brand_product']);
//danh mục Tin tuc
Route::get('/add-category-post', [CategoryPost::class, 'add_category_post']);
Route::get('/all-category-post', [CategoryPost::class, 'all_category_post']);
Route::get('/edit-category-post/{category_post_id}', [CategoryPost::class, 'edit_category_post']);
Route::get('/danh-muc-bai-viet/{cate_post_slug}', [CategoryPost::class, 'danh_muc_bai_viet']);


Route::post('/save-category-post', [CategoryPost::class, 'save_category_post']);
Route::post('/update-category-post/{cate_id}', [CategoryPost::class, 'update_category_post']);
Route::get('/delete-category-post/{cate_id}', [CategoryPost::class, 'delete_category_post']);

//Tin tuc
Route::get('/add-post', [PostController::class, 'add_post']);
Route::get('/all-post', [PostController::class, 'all_post']);
Route::get('/edit-post/{post_id}', [PostController::class, 'edit_post']);
Route::get('/delete-post/{post_id}', [PostController::class, 'delete_post']);
Route::post('/save-post', [PostController::class, 'save_post']);
Route::post('/update-post/{post_id}', [PostController::class, 'update_post']);


//Product
// Route::group(['middleware' => 'roles', 'roles'=>['admin','author']], function () {
//     Route::get('/add-product','ProductController@add_product');
//     Route::get('/edit-product/{product_id}','ProductController@edit_product');
// // });
// Route::get('users',
//         [
//             'uses'=>'UserController@index',
//             'as'=> 'Users',
//             'middleware'=> 'roles'
//             // 'roles' => ['admin','author']
//         ]);
// Route::get('add-users','UserController@add_users');
// Route::post('store-users','UserController@store_users');
// Route::post('assign-roles','UserController@assign_roles');



// Route::get('/delete-product/{product_id}','ProductController@delete_product');
// Route::get('/all-product','ProductController@all_product');
// Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
// Route::get('/active-product/{product_id}','ProductController@active_product');
// Route::post('/save-product','ProductController@save_product');
// Route::post('/update-product/{product_id}','ProductController@update_product');
// Quản lý sản phẩm
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::post('/save-product', [ProductController::class, 'save_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);

// Quản lý người dùng
Route::get('users', [UserController::class, 'index'])->name('Users')->middleware('roles');
Route::get('add-users', [UserController::class, 'add_users']);
Route::post('store-users', [UserController::class, 'store_users']);
Route::post('assign-roles', [UserController::class, 'assign_roles']);


//Coupon
// Route::post('/check-coupon','CartController@check_coupon');

// Route::get('/unset-coupon','CouponController@unset_coupon');
// Route::get('/insert-coupon','CouponController@insert_coupon');
// Route::get('/delete-coupon/{coupon_id}','CouponController@delete_coupon');
// Route::get('/list-coupon','CouponController@list_coupon');
// Route::post('/insert-coupon-code','CouponController@insert_coupon_code');
Route::post('/check-coupon', [CartController::class, 'check_coupon']);
Route::get('/unset-coupon', [CouponController::class, 'unset_coupon']);
Route::get('/insert-coupon', [CouponController::class, 'insert_coupon']);
Route::get('/delete-coupon/{coupon_id}', [CouponController::class, 'delete_coupon']);
Route::get('/list-coupon', [CouponController::class, 'list_coupon']);
Route::post('/insert-coupon-code', [CouponController::class, 'insert_coupon_code']);


//Cart
// Route::post('/update-cart-quantity','CartController@update_cart_quantity');
// Route::post('/update-cart','CartController@update_cart');
// Route::post('/save-cart','CartController@save_cart');
// Route::post('/add-cart-ajax','CartController@add_cart_ajax');
// Route::get('/show-cart','CartController@show_cart');
// Route::get('/gio-hang','CartController@gio_hang');
// Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
// Route::get('/del-product/{session_id}','CartController@delete_product');
// Route::get('/del-all-product','CartController@delete_all_product');
Route::post('/update-cart-quantity', [CartController::class, 'update_cart_quantity']);
Route::post('/update-cart', [CartController::class, 'update_cart']);
Route::post('/save-cart', [CartController::class, 'save_cart']);
Route::post('/add-cart-ajax', [CartController::class, 'add_cart_ajax']);

Route::get('/show-cart', [CartController::class, 'show_cart']);
Route::get('/gio-hang', [CartController::class, 'gio_hang']);
Route::get('/delete-to-cart/{rowId}', [CartController::class, 'delete_to_cart']);
Route::get('/del-product/{session_id}', [CartController::class, 'delete_product']);
Route::get('/del-all-product', [CartController::class, 'delete_all_product']);



//Checkout
// Route::get('/dang-nhap','CheckoutController@login_checkout');
// Route::get('/del-fee','CheckoutController@del_fee');

// Route::get('/logout-checkout','CheckoutController@logout_checkout');
// Route::post('/add-customer','CheckoutController@add_customer');
// Route::post('/order-place','CheckoutController@order_place');
// Route::post('/login-customer','CheckoutController@login_customer');
// Route::get('/checkout','CheckoutController@checkout');
// Route::get('/payment','CheckoutController@payment');
// Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
// Route::post('/calculate-fee','CheckoutController@calculate_fee');
// Route::post('/select-delivery-home','CheckoutController@select_delivery_home');
// Route::post('/confirm-order','CheckoutController@confirm_order');

Route::get('/logout-checkout', [CheckoutController::class, 'logout_checkout'])->name('logout-checkout');
Route::get('/dang-nhap', [CheckoutController::class, 'login_checkout'])->name('dang-nhap');


//Route::get('/dang-nhap', [CheckoutController::class, 'login_checkout']);
Route::get('/del-fee', [CheckoutController::class, 'del_fee']);

//Route::get('/logout-checkout', [CheckoutController::class, 'logout_checkout']);
Route::post('/add-customer', [CheckoutController::class, 'add_customer']);
Route::post('/order-place', [CheckoutController::class, 'order_place']);
Route::post('/login-customer', [CheckoutController::class, 'login_customer']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/payment', [CheckoutController::class, 'payment']);
Route::post('/save-checkout-customer', [CheckoutController::class, 'save_checkout_customer']);
Route::post('/calculate-fee', [CheckoutController::class, 'calculate_fee']);
Route::post('/select-delivery-home', [CheckoutController::class, 'select_delivery_home']);
Route::post('/confirm-order', [CheckoutController::class, 'confirm_order']);


//Order
// Route::get('/delete-order/{order_code}','OrderController@order_code');
// Route::get('/print-order/{checkout_code}','OrderController@print_order');
// Route::get('/manage-order','OrderController@manage_order');
// Route::get('/view-order/{order_code}','OrderController@view_order');
// Route::post('/update-order-qty','OrderController@update_order_qty');
// Route::post('/update-qty','OrderController@update_qty');
Route::get('/delete-order/{order_code}', [OrderController::class, 'order_code']);
Route::get('/print-order/{checkout_code}', [OrderController::class, 'print_order']);
Route::get('/manage-order', [OrderController::class, 'manage_order']);
Route::get('/view-order/{order_code}', [OrderController::class, 'view_order']);
Route::post('/update-order-qty', [OrderController::class, 'update_order_qty']);
Route::post('/update-qty', [OrderController::class, 'update_qty']);



//Delivery
// Route::get('/delivery','DeliveryController@delivery');
// Route::post('/select-delivery','DeliveryController@select_delivery');
// Route::post('/insert-delivery','DeliveryController@insert_delivery');
// Route::post('/select-feeship','DeliveryController@select_feeship');
// Route::post('/update-delivery','DeliveryController@update_delivery');
Route::get('/delivery', [DeliveryController::class, 'delivery']);
Route::post('/select-delivery', [DeliveryController::class, 'select_delivery']);
Route::post('/insert-delivery', [DeliveryController::class, 'insert_delivery']);
Route::post('/select-feeship', [DeliveryController::class, 'select_feeship']);
Route::post('/update-delivery', [DeliveryController::class, 'update_delivery']);


//Banner
// Route::get('/manage-slider','SliderController@manage_slider');
// Route::get('/add-slider','SliderController@add_slider');
// Route::get('/delete-slide/{slide_id}','SliderController@delete_slide');
// Route::post('/insert-slider','SliderController@insert_slider');
// Route::get('/unactive-slide/{slide_id}','SliderController@unactive_slide');
// Route::get('/active-slide/{slide_id}','SliderController@active_slide');
Route::get('/manage-slider', [SliderController::class, 'manage_slider']);
Route::get('/add-slider', [SliderController::class, 'add_slider']);
Route::get('/delete-slide/{slide_id}', [SliderController::class, 'delete_slide']);
Route::post('/insert-slider', [SliderController::class, 'insert_slider']);
Route::get('/unactive-slide/{slide_id}', [SliderController::class, 'unactive_slide']);
Route::get('/active-slide/{slide_id}', [SliderController::class, 'active_slide']);




