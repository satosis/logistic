<?php
//admin-auth
Route::group(['prefix' =>'admin-auth','namespace' => 'Admin\Auth'], function() {
    Route::get('login','AdminController@getLoginAdmin')->name('get.login.admin');
    Route::post('login','AdminController@postLoginAdmin');

    Route::get('logout','AdminController@getLogoutAdmin')->name('get.logout.admin');
});

Route::get('/', 'Admin\AdminLogisticController@home');

Route::group(['prefix'=>'api-admin','namespace'=>'Admin','middleware'=>'check_admin_login'],function(){
    Route::get('','AdminLogisticController@index')->name('admin.logistic.index');
    //category

//logistic
    Route::group(['prefix'=>'logistic'],function(){
        Route::get('user','AdminLogisticController@user')->name('admin.logistic.user');
        Route::post('review-store', 'AdminLogisticController@reviewstore')->name('admin.review.store');
        Route::get('create','AdminLogisticController@create')->name('admin.logistic.create');
        Route::post('create','AdminLogisticController@store');
        Route::get('detail/{id}','AdminLogisticController@detail')->name('admin.logistic.detail');
        Route::get('update/{id}','AdminLogisticController@edit')->name('admin.logistic.update');
        Route::post('update/{id}','AdminLogisticController@update');
        Route::get('delete/{id}','AdminLogisticController@delete')->name('admin.logistic.delete');
        Route::get('guest/{id}','AdminLogisticController@guest')->name('admin.logistic.guest');
        Route::get('order-delete/{id}','AdminLogisticController@deleteOrderItem')->name('ajax.admin.logistic.order_delete');
        Route::get('view-logistic/{id}','AdminLogisticController@getLogisticDetail')->name('ajax.admin.logistic.detail');
        Route::get('action/{action}/{id}','AdminLogisticController@getAction')->name('admin.action.logistic');
    });
    Route::post('ajax_rating','UserRatingController@RatingProduct')->name('ajax_post.user.rating.add');

});
