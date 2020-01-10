<?php

use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/** Admin side*/

Route::group(['middleware' => ['status','auth']], function () {
    $groupData = [
        'namespase' => 'Blog\Admin',
        'prefix'    => 'admin',
    ];

    Route::group($groupData, function () {
        Route::resource('index', 'Blog\Admin\MainController')
            ->names('blog.admin.index');

        Route::resource('orders', 'Blog\Admin\OrderController')
            ->names('blog.admin.orders');

        Route::get('/orders/change/{id}', 'Blog\Admin\OrderController@change')
            ->name('blog.admin.orders.change');
        Route::post('/orders/save/{id}', 'Blog\Admin\OrderController@save')
            ->name('blog.admin.orders.save');
        Route::post('/orders/forcedestroy/{id}', 'Blog\Admin\OrderController@forcedestroy')
            ->name('blog.admin.orders.forcedestroy');

    });
});


Route::get('user/index', 'Blog\User\MainController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
