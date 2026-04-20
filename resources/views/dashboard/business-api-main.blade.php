@extends('layouts.app')

@section('title', 'Reward Dror - Business API')

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
                <a href="{{ url('/business-api-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-[#0077B6] text-white transition-colors">
                    <img src="{{ asset('assets/images/bussiness-api-light.svg') }}" alt="bussiness" width="23" height="23">
                    <span class="active">Business API</span>
                </a>
                <a href="{{ url('/transaction-list-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                    <img src="{{ asset('assets/images/transaction-icon.svg') }}" alt="transaction" width="23" height="23">
                    <span>Transactions</span>
                </a>
            </nav>
        </aside>

        <main class="ml-64 flex-1 p-8 business-api-main-heading">
            <div class="max-w-full mx-auto bg-white p-8 rounded-xl shadow-sm border border-gray-50">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-[35px] font-medium text-[#333333]">Business API Management</h2>
                    <button class="main-button-background-fee-config text-white px-11 py-3 rounded-full text-[18px] font-semibold shadow-md hover:opacity-90 transition">
                        <a href="/add-new-business-api">Add New Business</a>
                    </button>
                </div>

                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center gap-3">
                        <span class="text-[#000000] text-[16px] font-regular">Show</span>
                        <div class="relative">
                            <select class="appearance-none border border-[#FF7F32] rounded-md px-4 py-1 pr-5 text-[14px] font-regular text-[#000000] focus:outline-none">
                                <option>5</option>
                                <option>10</option>
                            </select>
                            <div class="absolute right-2 top-6 -translate-y-1/2 pointer-events-none">
                                <svg class="w-4 h-4 text-[#000000]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <input type="text" id="businessSearch" placeholder="Search" class="pl-4 pr-10 py-2 border border-gray-200 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-[#FF7F32] w-54">
                            <span class="absolute right-3 top-2.5 text-[#000000]">
                                <img src="/assets/images/search-icon-nav-dark.svg" alt="search">
                            </span>
                        </div>
                        <button class="main-button-background-fee-config p-3 rounded-md text-white">
                            <img src="/assets/images/search-filter-dashed-management.png" alt="filtre" class="w-7 h-5">
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full border-separate border-spacing-y-4">
                        <thead>
                            <tr class="text-left text-[14px] font-regular text-[#000000] capitalized">
                                <th class="px-6">S.NO</th>
                                <th class="px-6">Company Name</th>
                                <th class="px-6">Contact Email</th>
                                <th class="px-6">Status</th>
                                <th class="px-6">API Key Status</th>
                                <th class="px-6">Created Date</th>
                                <th class="px-6">Last Activity</th>
                                <th class="px-6">Action</th>
                            </tr>
                        </thead>
                        <tbody id="businessTableBody"></tbody>
                    </table>
                </div>

                <div class="bg-white p-1 flex items-center justify-between">
                    <p class="text-[#000000] text-[16px] font-regular">Showing 1 to 10 from 60 entries</p>
                    <div class="flex items-center border border-gray-100">
                        <button class="px-5 py-3 rounded text-[16px] text-medium pagination-hover-background hover:text-[#FFFFFF]">Previous</button>
                            <a href="/business-api-main"><button class="px-5 py-3 rounded text-[17px] font-regular text-white pagination-hover-background-null">1</button></a>
                                <span class="px-2 text-[#000000]">|</span>
                            <a href="/business-api-main"><button class="px-5 py-3 rounded text-[17px] font-regular text-[#000000] hover:text-[#FFFFFF] pagination-hover-background">2</button></a>
                                <span class="px-2 text-[#000000]">|</span>
                            <a href="/business-api-main"><button class="px-5 py-3 rounded text-[17px] font-regular text-[#000000] hover:text-[#FFFFFF] pagination-hover-background">3</button></a>
                                <span class="px-2 text-[#000000]">|</span>
                        <button class="px-5 py-3 rounded text-[16px] text-medium pagination-hover-background hover:text-[#FFFFFF]">Next</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="/assets/js/dashboard/business-api/business-api-table.js"></script>
@endsection