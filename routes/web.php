<?php

use Illuminate\Support\Facades\Route;

Route::get('send-message','RedisController@index');
Route::post('send-message','RedisController@postSendMessage');


Route::get('/data', 'CreateDatabase@index');
Route::post('/message/send', ['uses' => 'FrontController@addFeedback', 'as' => 'front.fb']);
Route::group(['namespace'=>'Auth','prefix'=>'account'],function(){
    Route::get('register','RegisterController@getFormRegister')->name('get.register');
    Route::post('register','RegisterController@postRegister');

    Route::get('login','LoginController@getFormLogin')->name('get.login');
    Route::post('login','LoginController@postLogin');
    Route::get('logout','LoginController@getLogout')->name('get.logout');

    Route::get('forgot-password','ResetPasswordController@getEmailReset')->name('get.forgot-password');
    Route::post('forgot-password','ResetPasswordController@checkMailResetPassword');

    Route::get('new-password','ResetPasswordController@NewPassword')->name('get.new_password');
    Route::post('new-password','ResetPasswordController@SavePassword') ;
});  
Route::group(['namespace'=>'Frontend'], function () {
    Route::get('','HomeController@index')->name('get.home');
    Route::get('sp/{slug}','ProductDetailController@getProductDetail')->name('get.product.detail');
    Route::get('san-pham/{slug}','CategoryDetailController@getCategoryDetail')->name('get.category.detail');
    Route::get('san-pham','ProductController@index')->name('get.product.index');

    //bài viết
    Route::get('bai-viet','BlogController@index')->name('get.blog.home');
    Route::get('bai-viet/{slug}','ArticleDetailController@index')->name('get.blog.detail');
    //giỏ hàng
    //https://github.com/bumbummen99/LaravelShoppingcart
    Route::get('don-hang','ShoppingCartController@index')->name('get.shopping.index')->middleware('auth');
   
   
});  
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

Route::post('api/Search.php','Api/ProductController@index')->name('get.search.index');
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
// Route::get('','HomeController@index')->name('get.home');
include('route-admin.php'); 
include('route-user.php');
include('cart.php');
Auth::routes();
