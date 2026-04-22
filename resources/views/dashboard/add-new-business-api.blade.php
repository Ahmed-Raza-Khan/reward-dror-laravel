@extends('layouts.app')

@section('title', 'Reward Dror - Add New Business API')

@section('content')
    <main id="main-content" class="flex-1 p-8 transition-all duration-300 lg:ml-64 business-api-main-heading">
        <div class="max-w-full mx-auto bg-white p-12 rounded-lg shadow-sm border border-gray-100">
            <div class="flex items-center mb-10">
                <button class="mr-4 text-gray-500 hover:text-gray-700">
                    <a href="/business-api-main">
                        <img src="assets/images/left-arrow-back.svg" alt="arrow" class="h-7 w-7">
                    </a>
                </button>
                <h1 class="text-[35px] font-medium text-[#333333]">Add Business Account</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10 mb-12">
                <div class="relative">
                    <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">
                        Company Name <span class="text-[#FF0000]">*</span>
                    </label>
                    <input type="text" placeholder="Abc Comapny" class="input-box-business-acc">
                </div>

                <div class="relative">
                    <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">
                        Comapny Email <span class="text-[#FF0000]">*</span>
                    </label>
                    <input type="email" placeholder="Abc Comapany" class="input-box-business-acc">
                </div>

                {{-- <div class="relative w-full max-w-md">
                    <label class="absolute -top-2.5 left-6 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-10">
                        Contact phone
                    </label>
                    <div class="relative flex items-center">
                        <div class="absolute left-4 flex items-center gap-2 pointer-events-none">
                            <img src="assets/images/country-flag-aquare.png" alt="US Flag" class="w-7 h-5">
                            <span class="text-[15px] text-[#707C8B] font-medium">+101</span>
                            <div class="h-6 w-[1px] bg-[#D1D5DB] ml-1"></div>
                        </div>
                        <input type="number" placeholder="Enter your phone number" 
                        class="w-full h-14 pl-28 pr-4 border border-[#E5E7EB] rounded-full text-[15px] focus:outline-none focus:border-blue-400 placeholder-[#999999]">
                    </div>
                </div> --}}

                <div class="relative w-full max-w-md">
                    <label class="absolute -top-2.5 left-6 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">
                        Contact phone <span class="text-[#FF0000]">*</span>
                    </label>
                    
                    <div class="relative flex items-center">
                        <div class="absolute left-4 flex items-center">
                            <div class="relative flex items-center gap-1 cursor-pointer">
                                <img id="selectedFlag" src="assets/images/country-flag-aquare.png" alt="Flag" class="w-8 h-6 rounded-none">
                                <select id="countryCode" onchange="updateCountry()" class="bg-transparent text-[15px] text-[#707C8B] font-medium outline-none cursor-pointer appearance-none pr-2">
                                    <option value="+1" data-flag="assets/images/country-flag-aquare.png">+1</option>
                                    <option value="+44" data-flag="assets/images/algeria-flag-square.png">+44</option>
                                    <option value="+91" data-flag="assets/images/bulgaria-flag-square.png">+91</option>
                                    <option value="+971" data-flag="assets/images/bahrain-flag-square.png">+971</option>
                                </select>                                
                                <svg class="w-3 h-3 text-[#707C8B] -ml-1 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                            <div class="h-6 w-[1px] bg-[#D1D5DB] mx-2"></div>
                        </div>
                        <input type="number" placeholder="Enter your phone number" 
                        class="w-full h-14 pl-32 pr-4 border border-[#E5E7EB] rounded-full text-[15px] focus:outline-none focus:border-blue-400 placeholder-[#999999]">
                    </div>
                </div>

                <div class="relative">
                    <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">DrorPay business account ID</label>
                    <input type="text" placeholder="Enter Id (optional)" class="input-box-business-acc">
                </div>
            </div>

            <div class="border-t-custom-business-acc mb-10"></div>
            <div class="mb-12">
                <h2 class="text-[26px] font-medium text-[#0754A0] mb-8">API Key section:</h2>
                <div class="flex flex-wrap items-end gap-x-8 gap-y-10">
                    <div class="relative flex-1 min-w-[300px] max-w-xl">
                        <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">API key</label>
                        <div class="relative">
                            <input type="text" id="apiKeyInput" placeholder="a1b2c3d4e5f67890abcdef1234567890" class="input-box-business-acc text-[#8F8F90] text-[14px] font-regular pr-12">

                            <button onclick="copyApiKey()" class="absolute right-5 top-1/2 -translate-y-1.5 text-[#A0A3BD] hover:text-gray-600" title="Copy to Clipboard">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="relative flex-1 min-w-[200px] max-w-sm">
                        <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Key expiration</label>
                        <input type="text" placeholder="2 days" class="input-box-business-acc text-[#8F8F90] text-[14px] font-regular">
                    </div>
                    <button class="system-settings-background-button text-[#FFFFFF] text-[18px] font-semibold py-4 px-8 rounded-full hover:shadow-lg transition duration-200">
                        Generate New Api
                    </button>
                </div>
            </div>

            <div class="border-t-custom-business-acc mb-10"></div>
            <div class="mb-12">
                <h2 class="text-[26px] font-medium text-[#0754A0] mb-8">API Rate Limits :</h2>
                <div class="flex flex-wrap gap-8">
                    <div class="relative flex-1 min-w-[280px] max-w-md">
                        <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Max Per Minute</label>
                        <input type="number" placeholder="100" class="input-box-business-acc text-[#8F8F90] text-[14px] font-regular">
                    </div>

                    <div class="relative flex-1 min-w-[280px] max-w-md">
                        <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Max Per Hour</label>
                        <input type="number" placeholder="500" class="input-box-business-acc text-[#8F8F90] text-[14px] font-regular">
                    </div>
                </div>
            </div>

            <div class="border-t-custom-business-acc mb-10"></div>
            <div class="mb-16">
                <h2 class="text-[26px] font-medium text-[#0754A0] mb-8">Permissions:</h2>
                <div class="flex flex-wrap gap-x-20 gap-y-10">
                    <div>
                        <h3 class="text-[14px] font-bold text-[#707C8B] mb-5">Allowed Endpoints :</h3>
                        <div class="flex items-center gap-8">
                            <label class="flex items-center gap-3 text-[16px] font-medium text-[#000000] cursor-pointer">
                                <input type="radio" name="endpoints" value="yes" checked>
                                <span>Yes</span>
                            </label>
                            <label class="flex items-center gap-3 text-[16px] font-medium text-[#000000] cursor-pointer">
                                <input type="radio" name="endpoints" value="no">
                                <span>No</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-[14px] font-bold text-[#707C8B] mb-5">Allowed Reward Types :</h3>
                        <div class="flex items-center gap-8">
                            <label class="flex items-center gap-3 text-[16px] font-medium text-[#000000] cursor-pointer">
                                <input type="radio" name="rewards" value="yes" checked>
                                <span>Yes</span>
                            </label>
                            <label class="flex items-center gap-3 text-[16px] font-medium text-[#000000] cursor-pointer">
                                <input type="radio" name="rewards" value="no">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t-custom-business-acc mb-12"></div>
            <div class="mt-8 flex justify-start">
                <button class="system-settings-background-button text-[18px] font-semibold text-[#FFFFFF] py-4 px-10 rounded-full hover:shadow-lg transition duration-200">
                    Save Changes
                </button>
            </div>
        </div>
    </main>

    <script src="/assets/js/dashboard/business-api/business-api-detail-table.js"></script>
    <script src="/assets/js/dashboard/business-api/business-copy-api-update-country.js"></script>
@endsection