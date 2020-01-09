<?php

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('/register', function () {
    return view('frontend.register');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/products', function () {
    return view('frontend.products');
});

Route::get('/product-details', function () {
    return view('frontend.product-details');
});

Route::get('/cart-summery', function () {
    return view('frontend.cart-summery');
});

Route::get('/profile', function () {
    return view('frontend.profile');
});

Route::get('/basket', function () {
    return view('frontend.include.profile.basket');
});

Route::get('/my_order', function () {
    return view('frontend.include.profile.my_order');
});

Route::get('/change_pass', function () {
    return view('frontend.include.profile.change_pass');
});

Route::get('/edit_profile', function () {
    return view('frontend.include.profile.edit_profile');
});

Route::get('/logout', function () {
    return view('frontend.include.profile.logout');
});