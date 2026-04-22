@extends('layouts.app')

@section('title', 'Reward Dror - Edit User Profile')


@section('content')
    <main id="main-content" class="flex-1 p-8 transition-all duration-300 lg:ml-64 business-api-main-heading">
        <div class="bg-white w-full max-w-full p-8 rounded-lg shadow-sm min-h-[600px]">
            <div class="flex items-center gap-4 mb-8">
                <button>
                    <a href="{{ url('/user-profile') }}"><img src="{{ asset('assets/images/left-arrow-back.svg') }}" alt="arrow"></a>
                </button>
                <h1 class="text-[35px] font-medium text-[#333333]">Edit Profile</h1>
            </div>

            <div class="relative w-35 h-35 mb-10">
                <div class="w-full h-full rounded-full overflow-hidden border-2 border-[#DC6C09]">
                    <img src="{{ asset('assets/images/profile-image-men.png') }}" alt="Profile" class="w-full h-full object-cover">
                </div>
                <button class="absolute bottom-0 right-0 left-19">
                    <img src="{{ asset('assets/images/camera-profile-user.jpeg') }}" alt="camera-user" class="w-13 h-13">
                </button>
            </div>

            <form class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-10 mt-12">
                <div class="relative space-y-1">
                    <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1 hover:text-[#222222]">First Name <span class="text-[#FF0000]">*</span></label>
                    <input type="text" placeholder="Bella" class="w-full py-3 px-5 border border-[#D7D7D7] rounded-full text-[#333333] hover:text-[#0F0F0F] hover:font-medium hover:text-[16px]">
                </div>

                <div class="relative space-y-1">
                    <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Last Name <span class="text-[#FF0000]">*</span></label>
                    <input type="text" placeholder="Edward" class="w-full py-3 px-5 border border-[#D7D7D7] rounded-full text-[#333333] hover:text-[#0F0F0F] hover:font-medium hover:text-[16px]">
                </div>

                {{-- <div class="relative w-full">
                    <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Phone No <span class="text-[#FF0000]">*</span></label>
                    <div class="relative flex items-center">
                        <div class="absolute left-4 flex items-center gap-2 pointer-events-none">
                            <img src="{{ asset('assets/images/country-flag-aquare.png') }}" alt="US Flag" class="w-7 h-5">
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

                <div class="relative space-y-1">
                    <label class="absolute -top-2.5 left-4 bg-white px-1 text-[14px] font-bold text-[#707C8B] z-1">Email Address <span class="text-[#FF0000]">*</span></label>
                    <input type="email" placeholder="elbert@gmail.com" class="w-full py-3 px-5 border border-[#D7D7D7] rounded-full text-[#333333] hover:text-[#0F0F0F] hover:font-medium hover:text-[16px]">
                </div>

                <div class="md:col-span-2 pt-3 mt-1">
                    <button type="submit" class="text-white px-12 py-3 rounded-full font-medium shadow-md shadow-orange-200 hover:from-orange-500 hover:to-orange-600 transition-all system-settings-background-button">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </main>

    <script src="/assets/js/dashboard/business-api/business-copy-api-update-country.js"></script>
@endsection