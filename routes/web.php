<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


// Auth Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/forgot-password', 'forgotPassword')->name('password.request');
    Route::get('/forgot-password-verification-code', 'verificationCode');
    Route::get('/new-password', 'newPassword');
});

// Dashboard Routes
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/user-profile', 'profile');
    Route::get('/user-profile-edit', 'editProfile');
    Route::get('/user-profile-password-update', 'updatePassword');
    
    // Rewards
    Route::get('/rewards-management-main', 'rewardsMain');
    Route::get('/rewards-management-detail', 'rewardDetails');
    Route::get('/rewards-management-detail-edit', 'editReward');

    // Settings & Config
    Route::get('/fee-configration-main', 'feeConfiguration');
    Route::get('/system-settings-main', 'systemSettings');

    // Business API
    Route::get('/business-api-main', 'businessApiMain');
    Route::get('/business-account-detail-api', 'businessAccountDetail');
    Route::get('/add-new-business-api', 'addBusinessApi');
    Route::get('/edit-new-business-api', 'editBusinessApi');

    // Transactions
    Route::get('/transaction-list-main', 'transactionList');
    Route::get('/transaction-list-detail', 'transactionDetail');
});


// Route::get('/', function () {
//     return view('welcome');
// });

//login routes
// Route::get('/login', function () {
//     return view('auth.login');
// });
// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// });
// Route::get('/forgot-password-verification-code', function () {
//     return view('auth.forgot-password-verification-code');
// });
// Route::get('/new-password', function () {
//     return view('auth.new-password');
// });

//dashboard routes
// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });
// Route::get('/user-profile', function () {
//     return view('dashboard.profile');
// });
// Route::get('/user-profile-edit', function () {
//     return view('dashboard.my-user-profile-edit');
// });
// Route::get('/user-profile-password-update', function () {
//     return view('dashboard.profile-password-update');
// });
// Route::get('/rewards-management-main', function () {
//     return view('dashboard.reward-manangement-main');
// });
// Route::get('/rewards-management-detail', function () {
//     return view('dashboard.reward-details');
// });
// Route::get('/rewards-management-detail-edit', function () {
//     return view('dashboard.reward-details-edit');
// });
// Route::get('/fee-configration-main', function () {
//     return view('dashboard.fee-configuration-main');
// });
// Route::get('/system-settings-main', function () {
//     return view('dashboard.system-settings-main');
// });
// Route::get('/business-api-main', function () {
//     return view('dashboard.business-api-main');
// });
// Route::get('/business-account-detail-api', function () {
//     return view('dashboard.business-account-datail-api');
// });
// Route::get('/add-new-business-api', function () {
//     return view('dashboard.add-new-business-api');
// });
// Route::get('/edit-new-business-api', function () {
//     return view('dashboard.edit-new-business-api');
// });
// Route::get('/transaction-list-main', function () {
//     return view('dashboard.transaction-list-main');
// });
// Route::get('/transaction-list-detail', function () {
//     return view('dashboard.transaction-list-detail');
// });