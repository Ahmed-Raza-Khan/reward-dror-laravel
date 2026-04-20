@extends('layouts.app')

@section('title', 'Reward Dror - System Settings')

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
                <a href="{{ url('/system-settings-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-[#0077B6] text-white transition-colors">
                    <img src="{{ asset('assets/images/system-setting-light.svg') }}" alt="system" width="23" height="23">
                    <span class="active">System Settings</span>
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

        <main class="ml-64 flex-1 p-8">
            <div class="max-w-full mx-auto bg-white p-12 rounded-lg shadow-sm border border-gray-100 system-settings-main-heading">
                <h1 class="text-[35px] font-medium text-[#333333] mb-8">System Settings</h1>
                <div class="border-t-custom mb-10"></div>

                <div class="mb-12">
                    <h2 class="text-[26px] font-medium text-[#1471B0] mb-8">Language Settings :</h2>
                    <div class="relative w-full max-w-sm">
                        <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Choose languages:</label>
                        <select class="w-full px-5 py-4 border border-[#D7D7D7] hover:border-[#0077B6] rounded-full bg-white outline-none text-[14px] text-[#909090] font-regular">
                            <option value="en-es-fr" selected>English , Spanish , French</option>
                            <option value="en">English</option>
                            <option value="es">Spanish</option>
                            <option value="fr">French</option>
                            <option value="de">German</option>
                        </select>
                        <span class="dropdown-arrow">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="border-t-custom mb-10"></div>
                <div class="mb-12">
                    <h2 class="text-[26px] font-medium text-[#1471B0] mb-8">Catalog Sync Frequency :</h2>

                    <div class="relative w-full max-w-sm">
                        <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Sync Frequency :</label>
                        <select class="w-full px-5 py-4 border border-[#D7D7D7] hover:border-[#0077B6] rounded-full bg-white outline-none text-[14px] text-[#909090] font-regular">
                            <option value="2-hours" selected>Every 2 Hours</option>
                            <option value="1-hour">Every 1 Hour</option>
                            <option value="4-hours">Every 4 Hours</option>
                            <option value="6-hours">Every 6 Hours</option>
                            <option value="12-hours">Every 12 Hours</option>
                            <option value="24-hours">Daily</option>
                        </select>
                        <span class="dropdown-arrow">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </span>
                    </div>
                </div>

                <div class="border-t-custom mb-10"></div>
                <div class="mb-16">
                    <h2 class="text-[26px] font-medium text-[#1471B0] mb-10">API Rate Limits :</h2>
                    <div class="flex flex-wrap gap-8">
                        <div class="relative flex-1 min-w-[300px] max-w-md">
                            <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Max Per Minute</label>
                            <input type="number" placeholder="100" class="input-box text-[14px] text-[#909090] font-regular">
                        </div>
                        <div class="relative flex-1 min-w-[300px] max-w-md">
                            <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Max Per Hour</label>
                            <input type="number" placeholder="500" class="input-box text-[14px] text-[#909090] font-regular">
                        </div>
                    </div>
                </div>

                <div class="border-t-custom mb-12"></div>
                <div class="mt-8 flex justify-start">
                    <button type="submit" class="system-settings-background-button text-white text-[18px] font-semibold py-3 px-10 rounded-full hover:shadow-lg transition duration-200">
                        <a href="/system-settings-main">Save Changes</a>
                    </button>
                </div>
            </div>
        </main>
    </div>
@endsection