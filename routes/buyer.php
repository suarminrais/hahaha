<?php

Route::group(['namespace' => 'Buyer'], function() {
    Route::get('/', 'HomeController@index')->name('buyer.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('buyer.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('buyer.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('buyer.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('buyer.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('buyer.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('buyer.password.reset');

});