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