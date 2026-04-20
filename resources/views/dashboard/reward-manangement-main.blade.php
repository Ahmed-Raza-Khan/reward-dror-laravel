@extends('layouts.app')

@section('title', 'Reward Dror - Reward Management')


@section('content')
    <div class="pt-25 flex min-h-screen bg-[#F8F9FA]">
        <aside class="w-64 bg-white border-r border-gray-100 flex flex-col fixed h-full left-0">
            <nav class="flex-1 px-0 py-6 space-y-3 side-navbar-buttons-all">
                <a href="{{ url('/dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:bg-gray-50 transition-colors">
                    <img src="{{ asset('assets/images/dashboard-dark-icon.svg') }}" alt="dashboard" width="20" height="20">
                    <span>Dashboard</span>
                </a>
                <a href="{{ url('/rewards-management-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-[#0077B6] text-white transition-colors">
                    <img src="{{ asset('assets/images/reward-management-light-icon.svg') }}" alt="reawards" width="23" height="23">
                    <span class="active">Rewards Management</span>
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

        <main class="ml-64 flex-1 p-8">
            <div class="max-w-full mx-auto">
                <div class="bg-white p-5 rounded-t-xl">
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4">
                        <h1 class="text-[35px] font-semibold text-[#333333]">Rewards Management</h1>
                        <div class="flex items-center gap-3">
                            <button id="syncBtn" onclick="syncCatalog()" class="sync-catalog-top-bg text-[#FFFFFF] px-6 py-3 rounded-full text-[16px] font-semibold transition flex items-center gap-2">
                                Sync Catalog
                            </button>
                            <button class="bg-[#E6F4FB] border border-[#1471B0] text-[#1471B0] px-6 py-3 rounded-full text-[16px] font-bold transition">
                                Featured Rewards Management
                            </button>
                        </div>
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
                                <span class="absolute right-3 top-3 text-[#000000]">
                                    <img src="{{ asset('assets/images/search-icon-nav-dark.svg') }}" alt="search">
                                </span>
                            </div>
                            <button class="main-button-background-fee-config p-3 rounded-md text-white">
                                <img src="{{ asset('assets/images/search-filter-dashed-management.png') }}" alt="filtre" class="w-7 h-5">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="text-[#000000] text-[13px] font-medium capitalized tracking-wider">
                                <th class="px-6 py-4">S.No</th>
                                <th class="px-6 py-4">Reward Image</th>
                                <th class="px-6 py-4">Reward Name</th>
                                <th class="px-6 py-4">Reward Type</th>
                                <th class="px-6 py-4">Last Sync</th>
                                <th class="px-6 py-3">Status</th>
                                <th class="px-6 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody id="reward-table-body" class="text-sm divide-y divide-gray-100 text-gray-700">
                        </tbody>
                    </table>
                </div>

                <div class="bg-white p-1 flex items-center justify-between">
                    <p class="text-[#000000] text-[16px] font-regular">Showing 1 to 10 from 60 entries</p>
                    <div class="flex items-center border border-gray-100">
                        <button class="px-5 py-3 rounded text-[16px] text-medium pagination-hover-background hover:text-[#FFFFFF]">Previous</button>
                            <a href="{{ url('/rewards-management-main') }}"><button class="px-5 py-3 rounded text-[17px] font-regular text-white pagination-hover-background-null">1</button></a>
                                <span class="px-2 text-[#000000]">|</span>
                            <a href="{{ url('/rewards-management-main') }}"><button class="px-5 py-3 rounded text-[17px] font-regular text-[#000000] hover:text-[#FFFFFF] pagination-hover-background">2</button></a>
                                <span class="px-2 text-[#000000]">|</span>
                            <a href="{{ url('/rewards-management-main') }}"><button class="px-5 py-3 rounded text-[17px] font-regular text-[#000000] hover:text-[#FFFFFF] pagination-hover-background">3</button></a>
                                <span class="px-2 text-[#000000]">|</span>
                        <button class="px-5 py-3 rounded text-[16px] text-medium pagination-hover-background hover:text-[#FFFFFF]">Next</button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @push('scripts')
        <script src="{{ asset('assets/js/dashboard/reward-management.js') }}"></script>
    @endpush
@endsection