@extends('layouts.app')

@section('title', 'Reward Dror - User Profile')


@section('content')
<div class="pt-25 flex min-h-screen bg-[#F8F9FA]">
    <aside class="w-64 bg-white border-r border-gray-100 flex flex-col fixed h-full left-0">
        <nav class="flex-1 px-0 py-6 space-y-3 side-navbar-buttons-all">
            <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                <img src="{{ asset('assets/images/dashboard-dark-icon.svg') }}" alt="dashboard" width="20" height="20">
                <span>Dashboard</span>
            </a>
            <a href="{{ url('/rewards-management-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                <img src="{{ asset('assets/images/rewards-menagement-icon.svg') }}" alt="reawards" width="23" height="23">
                <span>Rewards Management</span>
            </a>
            <a href="{{ url('/fee-configration-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                <img src="{{ asset('assets/images/fee-configuration-icon.svg') }}" alt="fee" width="23" height="23">
                <span>Fee Configuration</span>
            </a>
            <a href="{{ url('/system-settings-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                <img src="{{ asset('assets/images/system-settings-icon.svg') }}" alt="system" width="23" height="23">
                <span>System Settings</span>
            </a>
            <a href="{{ url('/business-api-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                <img src="{{ asset('assets/images/bussiness-api.svg') }}" alt="bussiness" width="23" height="23">
                <span>Business API</span>
            </a>
            <a href="{{ url('/transaction-list-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                <img src="{{ asset('assets/images/transaction-icon.svg') }}" alt="transaction" width="23" height="23">
                <span>Transactions</span>
            </a>
        </nav>
    </aside>

    <main class="ml-64 flex-1 p-8 business-api-main-heading">
        <div class="w-full max-w-full h-140 mx-auto bg-white rounded-md shadow-lg border border-gray-100 overflow-hidden">
            <div class="px-6 py-4">
                <h2 class="text-[35px] font-medium text-[#333333]">My Profile</h2>
            </div>
            <div class="mx-6 mb-8 relative border border-gray-200 rounded-xl overflow-hidden pb-12 shadow-lg">
                <div class="h-30 bg-[#0077b6]"></div>
                <div class="px-8 flex flex-col md:flex-row items-start gap-8">
                    <div class="relative -mt-12">
                        <img src="{{ asset('assets/images/profile-image-men.png') }}" alt="Profile Avatar" class="w-32 h-32 rounded-md object-cover shadow-md">
                    </div>

                    <div class="flex-1 pt-4 grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div>
                            <p class="text-[15px] text-[#666666] font-regular capitalized tracking-wider mb-1">First Name:</p>
                            <p class="text-[16px] font-medium text-[#21366C]">Bella</p>
                        </div>
                        <div>
                            <p class="text-[15px] text-[#666666] font-regular capitalized tracking-wider mb-1">Last Name:</p>
                            <p class="text-[16px] font-medium text-[#21366C]">Edward</p>
                        </div>
                        <div>
                            <p class="text-[15px] text-[#666666] font-regular capitalized tracking-wider mb-1">Email:</p>
                            <p class="text-[16px] font-medium text-[#21366C]">elbert@gmail.com</p>
                        </div>
                    <div>
                        <p class="text-[15px] text-[#666666] font-regular capitalized tracking-wider mb-1">Phone No:</p>
                        <p class="text-[16px] font-medium text-[#21366C]">000-00000-00</p>
                    </div>
                    </div>
                </div>

                <div class="px-8 mt-14 flex gap-4">
                    <button class="px-10 py-3 text-[17px] text-[#FFFFFF] font-semibold rounded-full shadow-md hover:opacity-90 transition-all system-settings-background-button">
                        <a href="{{ url('/user-profile-edit') }}">Edit Profile</a>
                    </button>
                    <button class="px-10 py-3 bg-white border border-dashed border-[#21366CCC] text-[#0077B6] font-semibold rounded-full text-[17px] hover:bg-blue-50 transition-all">
                        <a href="{{ url('/user-profile-password-update') }}">Change Password</a>
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection