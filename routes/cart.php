<?php

use Illuminate\Support\Facades\Route;
Route::group(['namespace'=>'Frontend'], function () {
    Route::prefix('shopping') ->group(function(){
        Route::get('add/{id}','ShoppingCartController@add')->name('get.shopping.add');
        Route::get('delete/{id}','ShoppingCartController@delete')->name('get.shopping.delete');
        Route::get('update/{id}','ShoppingCartController@update')->name('ajax_get.shopping.update');
        Route::post('pay','ShoppingCartController@postPay')->name('post.shopping.pay');
        Route::get('/status', 'ShoppingCartController@getPaymentStatus')->name('status');
});
});