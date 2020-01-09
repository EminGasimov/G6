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

Route::get('/computer', function () {
    return view('frontend.include.category.computer');
});

Route::get('/gadgets', function () {
    return view('frontend.include.category.gadgets');
});

Route::get('/women_products', function () {
    return view('frontend.include.category.women_products');
});

Route::get('/men_products', function () {
    return view('frontend.include.category.men_products');
});

Route::get('/kids_products', function () {
    return view('frontend.include.category.kids_products');
});

Route::get('/food_beverage', function () {
    return view('frontend.include.category.food_beverage');
});

Route::get('/health_beauty', function () {
    return view('frontend.include.category.health_beauty');
});

Route::get('/sports_leisure', function () {
    return view('frontend.include.category.sports_leisure');
});

Route::get('/book_entertainment', function () {
    return view('frontend.include.category.book_entertainment');
});