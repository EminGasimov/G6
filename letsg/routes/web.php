<?php

//Route::get('/', 'ShowHomePage@show');
Route::get('/', function () {
    header('Location: '. '/user/product');
    die();
    //return view('home');
    });
