<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/product', function () {
    return view('admin.product.index');
})->name('admin.product');
Route::get('/admin/product/mapping', function () {
    return view('admin.product.mapping.index');
})->name('admin.product.mapping');
Route::get('/admin/integration', function () {
    return view('admin.integration.index');
})->name('admin.integration');
Route::get('/admin/invoices', function () {
    return view('admin.invoices.index');
})->name('admin.invoices');
Route::get('/admin/reports', function () {
    return view('admin.reports.index');
})->name('admin.reports');
