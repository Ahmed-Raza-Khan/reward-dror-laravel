@extends('layouts.app')

@section('title', 'Reward Dror - Business API Details')

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
            <div class="max-w-full mx-auto bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center gap-4">
                        <button class="text-gray-600">
                            <a href="/business-api-main">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                            </a>
                        </button>
                        <h1 class="text-[35px] font-medium text-[#333333]">Business Account Details</h1>
                    </div>
                    <div class="flex gap-3">
                        <button class="px-6 py-3 border border-[#0D4E9C80] rounded-full text-[16px] font-semibold text-[#0D4E9C] bg-[#F6F7F8] hover:bg-blue-50">Generate Api key</button>
                        <button class="px-6 py-3 border border-[#DE525880] rounded-full text-[16px] font-semibold text-[#DE5258] bg-[##F6F7F8] hover:bg-red-50">Suspend Account</button>
                        <button class="px-6 py-3 rounded-full text-[16px] font-semibold text-[#FFFFFF] bg-[#D64950] hover:bg-red-600">Delete Account</button>
                    </div>
                </div>

                <hr class="mb-8 bg-[#D3D4DC]">
                <section class="mb-10">
                    <h2 class="text-[26px] font-medium text-[#0754A0] mb-6">Company Information</h2>
                    <hr class="mb-8 bg-[#D3D4DC]">
                    <div class="grid grid-cols-2 gap-y-5 text-[20px]">
                        <p><span class="text-[#666666] font-semibold mr-3">Comapny Name:</span> <span class=" font-regular text-[#000000]">Tech Solution Inc.</span></p>
                        <p><span class="text-[#666666] font-semibold mr-3">Comapny Email:</span> <span class=" font-regular text-[#000000]">info@techsolutions.com</span></p>
                        <p><span class="text-[#666666] font-semibold mr-3">Account Status:</span> <span class=" text-[#21BB60] font-semibold">Active</span></p>
                    </div>
                </section>

                <hr class="mb-8 bg-[#D3D4DC]">
                <section class="mb-10">
                    <h2 class="text-[26px] font-medium text-[#0754A0] mb-6">Api Key Details</h2>
                    <hr class="mb-8 bg-[#D3D4DC]">
                    <div class="relative max-w-sm">
                        <label class="absolute -top-2 left-4 bg-white px-1 text-[14px] text-[#707C8B] uppercase font-bold">API key</label>
                        <div class="flex items-center border border-[#D7D7D7] rounded-full px-4 py-5 bg-[#FBFBFE]">
                            <input type="text" value="335D23M5P7E7B7898GHF1234567890" class="bg-[#FBFBFE] text-[#8F8F90] text-[14px] font-regular w-full outline-none" readonly>
                            <button class="text-gray-400 hover:text-gray-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                            </button>
                        </div>
                    </div>
                </section>

                <hr class="mb-8 bg-[#D3D4DC]">
                <section class="mb-10">
                    <h2 class="text-[26px] font-medium text-[#0754A0] mb-6">Usage Statistics</h2>
                    <hr class="mb-8 bg-[#D3D4DC]">
                    <div id="stats-container" class="grid grid-cols-4 gap-6">
                        </div>
                </section>

                <hr class="mb-8 bg-[#D3D4DC]">
                <section class="mb-10">
                    <h2 class="text-[26px] font-medium text-[#0754A0] mb-6">Usage Statistics</h2>
                    <hr class="mb-8 bg-[#D3D4DC]">
                    <div class="overflow-hidden">
                        <table class="w-full text-left">
                            <thead class="bg-white border-b border-gray-100 text-[14px] font-medium text-[#000000]">
                                <tr>
                                    <th class="px-6 py-4">S.NO</th>
                                    <th class="px-6 py-4">Date</th>
                                    <th class="px-6 py-4">Unlock Id</th>
                                    <th class="px-6 py-4">Details</th>
                                </tr>
                            </thead>
                            <tbody id="usage-table-body" class="text-[#000000] text-[14px] font-regular">
                                </tbody>
                        </table>
                    </div>
                </section>

                <hr class="mb-8 bg-[#D3D4DC]">
                <section class="mb-10">
                    <h2 class="text-[26px] font-medium text-[#0754A0] mb-6">Activity Log</h2>
                    <hr class="mb-8 bg-[#D3D4DC]">
                    <div class="overflow-hidden">
                        <table class="w-full text-left">
                            <thead class="bg-white border-b border-gray-100 text-[14px] font-medium text-[#000000]">
                                <tr>
                                    <th class="px-6 py-4">S.NO</th>
                                    <th class="px-6 py-4">Time Stamp</th>
                                    <th class="px-6 py-4">Activity</th>
                                </tr>
                            </thead>
                            <tbody id="log-table-body" class="text-[#000000] text-[15px] font-regular">
                                </tbody>
                        </table>
                    </div>
                </section>
                <button class="system-settings-background-button text-white px-11 py-3 rounded-full font-semibold text-[17px] shadow-lg hover:opacity-90 transition">
                    <a href="/edit-new-business-api">Edit Details</a>
                </button>
            </div>

            <div id="successModal" class="fixed inset-0 bg-black bg-opacity-40 hidden flex items-center justify-center">
                <div class="bg-white p-8 rounded-2xl max-w-xs w-full text-center relative shadow-2xl">
                    <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400">&times;</button>
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Successful</h3>
                    <p class="text-gray-400 text-sm mb-6">Fee Configuration Has Been Updated Successfully</p>
                    <button onclick="closeModal()" class="btn-gradient w-full py-3 rounded-full text-white font-bold">Ok</button>
                </div>
            </div>
        </main>
    </div>

    <script src="/assets/js/dashboard/business-api/business-api-detail-table.js"></script>
@endsection