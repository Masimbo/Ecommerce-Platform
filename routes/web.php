<?php

use App\Product;

Route::get('/', 'FrontEnd\HomeController@home');
//auth & user
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');

//Admin Section
//Categories

Route::get('admin/categories', 'Admin\Category\CategoryController@category')->name('categories');
Route::post('admin/store/category', 'Admin\Category\CategoryController@storecategory')->name('store.categories');
Route::get('admin/delete/category/{id}', 'Admin\Category\CategoryController@deletecategory')->name('category.delete');
Route::get('admin/edit/category/{id}', 'Admin\Category\CategoryController@editcategory')->name('category.edit');
Route::post('admin/edit/category/{id}', 'Admin\Category\CategoryController@updatecategory')->name('category.update');

//Brands

Route::get('admin/brands', 'Admin\Category\BrandController@brands')->name('brands');
Route::post('admin/store/brand', 'Admin\Category\BrandController@storebrand')->name('store.brands');
Route::get('admin/edit/brand/{id}', 'Admin\Category\BrandController@editbrand')->name('brand.edit');
Route::post('admin/edit/brand/{id}', 'Admin\Category\BrandController@updatebrand')->name('brand.update');
Route::get('admin/delete/brand/{id}', 'Admin\Category\BrandController@deletebrand')->name('brand.delete');

//sub category

Route::get('admin/subcategory', 'Admin\Category\SubCategoryController@subcategories')->name('subcategories');
Route::post('admin/store/subcategory', 'Admin\Category\SubCategoryController@storesubcategory')->name('store.subcategories');
Route::get('admin/edit/subcategory/{id}', 'Admin\Category\SubCategoryController@editsubcategory')->name('subcategory.edit');
Route::post('admin/edit/subcategory/{id}', 'Admin\Category\SubCategoryController@updatesubcategory')->name('subcategory.update');
Route::get('admin/delete/subcategory/{id}', 'Admin\Category\SubCategoryController@deletesubcategory')->name('subcategory.delete');

// coupons

Route::get('admin/coupons/', 'Admin\Category\CoupounsController@index')->name('coupons-list');
Route::post('admin/coupons/', 'Admin\Category\CoupounsController@store');
Route::get('admin/edit/coupons/{id}', 'Admin\Category\CoupounsController@editcoupon')->name('coupon.edit');
Route::post('admin/edit/coupons/{id}', 'Admin\Category\CoupounsController@updatecoupon')->name('coupon.update');
Route::get('admin/delete/coupons/{id}', 'Admin\Category\CoupounsController@deletecoupon')->name('coupon.delete');

//news letter

Route::get('admin/newsletter/', 'Admin\Category\CoupounsController@newsletter')->name('admin.newsletter');
Route::post('admin/newsletter/', 'Admin\Category\CoupounsController@storenewsletter')->name('store.newsletter');
Route::get('admin/delete/newsletter/{id}', 'Admin\Category\CoupounsController@deletenewsletter')->name('newsletter.delete');

// Products
Route::get('admin/products/', 'Admin\ProductController@index')->name('product-list');
Route::get('admin/products/add', 'Admin\ProductController@create')->name('create-product');
Route::post('admin/products/add', 'Admin\ProductController@store')->name('store-product');
Route::post('admin/products/{id}', 'Admin\ProductController@delete')->name('delete-product');
Route::get('admin/products/edit/{id}', 'Admin\ProductController@edit')->name('edit-product');
Route::post('admin/products/editwithoutphoto/{id}', 'Admin\ProductController@updatewithoutphoto')->name('update-product-without-photo');
Route::post('admin/products/editphoto/{id}', 'Admin\ProductController@updatephoto')->name('update-product-photo');


//Orders




//showing subcategories with ajax
Route::get('get/subcategory/{category_id}', 'Admin\ProductController@getSubCategories')->name('get-subcategories');



///// Front end 

// WhishList
Route::get('/whishlist/{id}', 'WhishListController@addtowhishlist')->name('addtowhishlist');

//Cart

Route::post('/addtocart/{id}', 'CartController@addtocart')->name('addtocart');
Route::get('/cart', 'CartController@showcart')->name('showcart');

//checkout
Route::get('/checkout', 'CartController@checkout')->name('checkout');

//product
Route::get('/product/details/{id}/{product_name}', 'FrontEnd\ProductController@show')->name('show-product');

//coupon 
Route::get('/applycoupon', 'CartController@applycoupon')->name('applycoupon');

//payment
Route::post('/payment', 'PaymentController@payment')->name('payment.step');

//Orders
Route::post('/create-order', 'OrdersController@create_order')->name('create-order');

