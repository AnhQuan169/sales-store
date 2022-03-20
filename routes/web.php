<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CouponController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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

//=======================Client===========================
Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);
// Tìm kiếm sản phẩm với từ khoá
Route::post('/search-product', [HomeController::class, 'search_product']);
// Danh mục sản phẩm trang chủ
Route::get('/category-product/{category_id}', [CategoryProduct::class, 'show_Category_Home']);
// Thương hiệu sản phẩm trang chủ
Route::get('/brand-product/{brand_id}', [BrandController::class, 'show_Brand_Home']);
// Chi tiết sản phẩm
Route::get('/detail-product/{product_id}', [ProductController::class, 'detail_product']);
//-----------------Giỏ hàng---------------
Route::post('/save-cart', [CartController::class, 'save_cart']);
Route::post('/add-cart-ajax', [CartController::class, 'add_cart_ajax']);
Route::get('/show-cart', [CartController::class, 'show_cart']);
Route::post('/update-cart', [CartController::class, 'update_cart']);
Route::get('/delete-product-ajax/{session_id}', [CartController::class, 'delete_product_ajax']);
Route::get('/delete-all-product', [CartController::class, 'delete_all_product']);
//------------------Thanh toán-----------------------
// Mở giao diện đăng nhập, đăng kí tài khoản
Route::get('/login-checkout', [CheckoutController::class, 'login_checkout']);
//---Đăng kí tài khoản mới
Route::post('/add-customer', [CheckoutController::class, 'add_customer']);
// Trang thanh toán
Route::get('/checkout', [CheckoutController::class, 'checkout']);
// Lưu thông tin người nhận đơn hàng
Route::post('/save-checkout-customer', [CheckoutController::class, 'save_checkout_customer']);
// Đăng xuất khỏi tài khoản
Route::get('/logout-checkout', [CheckoutController::class, 'logout_checkout']);
// Đăng nhập vào tài khoản khách hàng
Route::post('/login-customer', [CheckoutController::class, 'login_customer']);
// Giao diện chọn hình thức thanh toán đơn hàng
Route::get('/payment', [CheckoutController::class, 'payment']);
// Chọn hình thức thanh toán đơn hàng
Route::post('/order-place', [CheckoutController::class, 'order_place']);
// ------Chọn mã giảm giá-----------------------
Route::post('/check-coupon', [CartController::class, 'check_coupon']);
// Xoá mã khuyến mãi
Route::get('/unset-coupon', [CartController::class, 'unset_coupon']);


// --------------------Send Mail------------------------
Route::get('/send-mail', [HomeController::class, 'send_mail']);
// ------------------Login google-------------------
Route::get('/login-google', [AdminController::class, 'login_google']);
Route::get('/google/callback', [AdminController::class, 'callback_google']);



// =======================Admin=========================
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);

//  ------------ Quản lí danh mục sẳn phẩm
// Mở cửa sổ thêm danh mục sản phẩm mới
Route::get('/add-category-product', [CategoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [CategoryProduct::class, 'all_category_product']);
//  Lưu danh mục sản phẩm được thêm vào
Route::post('/save-category-product', [CategoryProduct::class, 'save_category_product']);
// Hiển thị/Ẩn danh mục sản phẩm
Route::get('/active-category-product/{category_product_id}', [CategoryProduct::class, 'active_category_product']);
Route::get('/unactive-category-product/{category_product_id}', [CategoryProduct::class, 'unactive_category_product']);
// Mở cửa sổ cập nhật danh mục sản phẩm
Route::get('/edit-category-product/{category_product_id}', [CategoryProduct::class, 'edit_category_product']);
// Lưu danh mục sản phẩm được chỉnh sửa
Route::post('/update-category-product/{category_product_id}', [CategoryProduct::class, 'update_category_product']);
// Xoá danh mục sản phẩm được chọn
Route::get('/delete-category-product/{category_product_id}', [CategoryProduct::class, 'delete_category_product']);


//  -------------Quản lí thương hiệu sản phẩm
// Mở cửa sổ thêm thương hiệu sản phẩm mới
Route::get('/add-brand', [BrandController::class, 'add_brand']);
Route::get('/all-brand', [BrandController::class, 'all_brand']);
//  Lưu thương hiệu sản phẩm được thêm vào
Route::post('/save-brand', [BrandController::class, 'save_brand']);
// Hiển thị/Ẩn thương hiệu sản phẩm
Route::get('/active-brand/{brand_id}', [BrandController::class, 'active_brand']);
Route::get('/unactive-brand/{brand_id}', [BrandController::class, 'unactive_brand']);
// Mở cửa sổ cập nhật thương hiệu sản phẩm
Route::get('/edit-brand/{brand_id}', [BrandController::class, 'edit_brand']);
// Lưu thương hiệu sản phẩm được chỉnh sửa
Route::post('/update-brand/{brand_id}', [BrandController::class, 'update_brand']);
// Xoá thương hiệu sản phẩm được chọn
Route::get('/delete-brand/{brand_id}', [BrandController::class, 'delete_brand']);

//  ------------Quản lí sản phẩm
// Mở cửa sổ thêm sản phẩm mới
Route::get('/add-product', [ProductController::class, 'add_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
//  Lưu thương hiệu sản phẩm được thêm vào
Route::post('/save-product', [ProductController::class, 'save_product']);
// Hiển thị/Ẩn thương hiệu sản phẩm
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
// Mở cửa sổ cập nhật thương hiệu sản phẩm
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
// Lưu thương hiệu sản phẩm được chỉnh sửa
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);
// Xoá thương hiệu sản phẩm được chọn
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);

// -------------Quản lí đơn hàng-------------------
// Danh sách đơn hàng
Route::get('/manage-order', [OrderController::class, 'manage_order']);
//Chi tiết đơn hàng được chọn
Route::get('/view-order/{order_id}', [OrderController::class, 'view_order']);


// -----------------Quản lí mã khuyến mãi(Coupon)---------------------
Route::get('/add-coupon', [CouponController::class, 'add_coupon']);
Route::post('/save-coupon', [CouponController::class, 'save_coupon']);
Route::get('/all-coupon', [CouponController::class, 'all_coupon']);
Route::get('/delete-coupon/{coupon_id}', [CouponController::class, 'delete_coupon']);
Route::post('/delete-coupon/{coupon_id}', [CouponController::class, 'delete_coupon']);
