<?php

use Illuminate\Support\Facades\Route;

//login routes
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/forgot-password-verification-code', function () {
    return view('auth.forgot-password-verification-code');
});

Route::get('/new-password', function () {
    return view('auth.new-password');
});

// Route::get('/', function () {
//     return view('welcome');
// });

//dashboard routes
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/user-profile', function () {
    return view('dashboard.profile');
});

Route::get('/user-profile-edit', function () {
    return view('dashboard.my-user-profile-edit');
});

Route::get('/user-profile-password-update', function () {
    return view('dashboard.profile-password-update');
});

Route::get('/rewards-management-main', function () {
    return view('dashboard.reward-manangement-main');
});

Route::get('/rewards-management-detail', function () {
    return view('dashboard.reward-details');
});

Route::get('/rewards-management-detail-edit', function () {
    return view('dashboard.reward-details-edit');
});

Route::get('/fee-configration-main', function () {
    return view('dashboard.fee-configuration-main');
});

Route::get('/system-settings-main', function () {
    return view('dashboard.system-settings-main');
});

Route::get('/business-api-main', function () {
    return view('dashboard.business-api-main');
});

Route::get('/business-account-detail-api', function () {
    return view('dashboard.business-account-datail-api');
});

Route::get('/add-new-business-api', function () {
    return view('dashboard.add-new-business-api');
});

Route::get('/edit-new-business-api', function () {
    return view('dashboard.edit-new-business-api');
});

Route::get('/transaction-list-main', function () {
    return view('dashboard.transaction-list-main');
});

Route::get('/transaction-list-detail', function () {
    return view('dashboard.transaction-list-detail');
});