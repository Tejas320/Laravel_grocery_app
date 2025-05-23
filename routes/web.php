<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index', ["name" => "Tejas"]);
});

Route::get('/grocery', function () {
    $grocery = [
        ["name" => "Jeera Rice", "price" => "200", "id" => "1"],
        ["name" => "Mango", "price" => "250", "id" => "2"],
        ["name" => "Biscuits", "price" => "100", "id" => "3"],
        ["name" => "Cookies", "price" => "300", "id" => "4"],
    ];
    return view('grocery.index', ['grocery' => $grocery]);
});

Route::get('/grocery/{id}', function ($id) {
    $grocery = [
        ["name" => "Jeera Rice", "price" => "200", "id" => "1"],
        ["name" => "Mango", "price" => "250", "id" => "2"],
        ["name" => "Biscuits", "price" => "100", "id" => "3"],
        ["name" => "Cookies", "price" => "300", "id" => "4"],
    ];
    return view('grocery.detail', ['item' => $grocery[$id - 1]]);
});