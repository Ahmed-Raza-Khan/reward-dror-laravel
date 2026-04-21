<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function profile() {
        return view('dashboard.profile');
    }

    public function editProfile() {
        return view('dashboard.my-user-profile-edit');
    }

    public function updatePassword() {
        return view('dashboard.profile-password-update');
    }

    public function rewardsMain() {
        return view('dashboard.reward-manangement-main');
    }

    public function rewardDetails() {
        return view('dashboard.reward-details');
    }

    public function editReward() {
        return view('dashboard.reward-details-edit');
    }

    public function feeConfiguration() {
        return view('dashboard.fee-configuration-main');
    }

    public function systemSettings() {
        return view('dashboard.system-settings-main');
    }

    public function businessApiMain() {
        return view('dashboard.business-api-main');
    }

    public function businessAccountDetail() {
        return view('dashboard.business-account-datail-api');
    }

    public function addBusinessApi() {
        return view('dashboard.add-new-business-api');
    }

    public function editBusinessApi() {
        return view('dashboard.edit-new-business-api');
    }

    public function transactionList() {
        return view('dashboard.transaction-list-main');
    }

    public function transactionDetail() {
        return view('dashboard.transaction-list-detail');
    }
}
