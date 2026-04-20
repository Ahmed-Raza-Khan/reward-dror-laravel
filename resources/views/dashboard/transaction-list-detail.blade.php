@extends('layouts.app')

@section('title', 'Reward Dror - Transactions List Details')

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
                <a href="{{ url('/transaction-list-main') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg bg-[#0077B6] text-white transition-colors">
                    <img src="{{ asset('assets/images/transaction-icon-LIGHT.svg') }}" alt="transaction" width="23" height="23">
                    <span class="active">Transactions</span>
                </a>
            </nav>
        </aside>

        <main class="ml-64 flex-1 p-8 business-api-main-heading">
            <div class="bg-gray-50 p-1 min-h-screen flex justify-center items-start">
                <div class="w-full max-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <div class="flex items-center text-gray-700 mb-6 cursor-pointer hover:text-gray-900 transition-colors">
                            <a href="/transaction-list-main">
                                <img src="assets/images/left-arrow-back.svg" alt="arrow" class="h-8 w-8">
                            </a>
                            <span class="text-[35px] font-medium text-[#333333] ms-4">Transaction Details</span>
                        </div>
                        <div class="border-t-custom mb-10"></div>

                        <div class="flex justify-between items-center">
                            <p class="text-[#0754A0] font-medium text-[20px]">
                                Transaction Reference : <span class="text-[#000000] text-[20px] font-regular">TRX-12847391</span>
                            </p>
                            <p class="text-[#0754A0] font-medium text-[20px]">
                                Date & Time: <span class="text-[#000000] text-[20px] font-regular">April 15, 2023 | 11:24 AM</span>
                            </p>
                        </div>
                    </div>

                    <div class="m-6 p-6 border border-[#0077B6] rounded-xl bg-[#F7FDFF]">
                        <div class="mb-5">
                            <h3 class="text-[#0754A0] font-medium text-[24px] mb-4">User Information</h3>
                                <div class="border-t-custom mb-5"></div>
                            <div class="grid grid-cols-3 gap-4 text-[17px] font-semibold">
                                <div><span class="text-[#666666]">Name:</span> <span class="text-[#000000] text-[17px] font-[400]">John Smith</span></div>
                                <div><span class="text-[#666666]">Email:</span> <span class="text-[#000000] text-[17px] font-[400]">info@techsolutions.com</span></div>
                                <div><span class="text-[#666666]">User ID:</span> <span class="text-[#000000] text-[17px] font-[400]">56789</span></div>
                            </div>
                            <div class="border-t-custom mt-5"></div>
                        </div>

                        <div class="grid grid-cols-2 gap-x-12 mb-10">
                            <div>
                                <h3 class="text-[#0754A0] font-medium text-[24px] mb-4">Reward Information</h3>
                                <div class="border-t-custom mt-5 mb-3"></div>
                                <p class="text-[17px] font-semibold text-[#666666]">Reward Points Earned: <span class="text-[#666666] font-[400] text-[17px]">250 Points</span></p>
                            </div>
                            <div>
                                <h3 class="text-[#0754A0] font-medium text-[24px] mb-4">Reward Information</h3>
                                <div class="border-t-custom mt-5 mb-3"></div>
                                <div class="space-y-4 text-sm">
                                    <div class="flex justify-between">
                                        <span class="text-[17px] font-semibold text-[#666666]">Base Amount: <span class="text-[#666666] font-[400] text-[17px]">$50.00</span></span>
                                        <span class="text-[17px] font-semibold text-[#666666]">Base Amount: <span class="text-[#666666] font-[400] text-[17px]">$50.00</span></span>
                                    </div>
                                    <p class="text-[17px] font-semibold text-[#666666] mt-2">Total: <span class="text-[#666666] font-[400] text-[17px]">$52.00</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="border-t-custom mb-5"></div>

                        <div class="grid grid-cols-2 gap-x-12 mb-10">
                            <div>
                                <h3 class="text-[#0754A0] font-medium text-[24px] mb-4">Transaction Identifiers</h3>
                                <div class="border-t-custom mb-5"></div>
                                <div class="space-y-3 text-[17px] font-semibold">
                                    <p class="text-[17px] font-semibold text-[#666666]">DrorPay Transaction ID: <span class="text-[#666666] font-[400] text-[17px] uppercase">dp-987654321</span></p>
                                    <p class="text-[17px] font-semibold text-[#666666]">EGifter Order ID: <span class="text-[#666666] font-[400] text-[17px] uppercase">eg-456123789</span></p>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-[#0754A0] font-medium text-[24px] mb-4">Delivery Information</h3>
                                <div class="border-t-custom mb-5"></div>
                                <div class="space-y-3 text-[17px] font-semibold">
                                    <p class="text-[17px] font-semibold text-[#666666]">Sent To: <span class="text-[#666666] font-[400] text-[17px]">John.Smith@Gmail.Com</span></p>
                                    <p class="text-[17px] font-semibold text-[#666666]">Delivery Method: <span class="text-[#666666] font-[400] text-[17px]">Email Delivery</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="border-t-custom mb-5"></div>

                        <div class="grid grid-cols-2 gap-x-12">
                            <div>
                                <h3 class="text-[#0754A0] font-medium text-[24px] mb-4">Status History</h3>
                                <div class="border-t-custom mb-5"></div>
                                <div class="space-y-3 text-sm">
                                    <p class="text-[17px] font-semibold text-[#666666]">Transaction Completed: <span class="text-[#666666] font-[400] text-[17px]">11:24 AM</span></p>
                                    <p class="text-[17px] font-semibold text-[#666666]">Gift Card Sent: <span class="text-[#666666] font-[400] text-[17px]">11:25 AM</span></p>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-[#0754A0] font-medium text-[24px] mb-4">Error Details</h3>
                                <div class="border-t-custom mb-5"></div>
                                <p class="text-[17px] font-semibold text-[#666666]">No Errors Reported.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection