@extends('layouts.app')

@section('title', 'Reward Dror - Change User Profile Password')


@section('content')
    <main id="main-content" class="flex-1 p-8 transition-all duration-300 lg:ml-64 business-api-main-heading">
        <div class="w-full max-w-full bg-white rounded-lg shadow-md border border-gray-100 p-8 min-h-[600px]">
            <div class="flex items-center gap-3 mb-10 mt-4">
                <a href="{{ url('/user-profile') }}" class="text-gray-800 hover:text-gray-600">
                    <img src="{{ asset('assets/images/left-arrow-back.svg') }}" alt="arrow" width="30">
                </a>
                <h2 class="text-[35px] font-medium text-[#333333]">Change Password</h2>
            </div>

            <form class="max-w-lg space-y-6">
                <div>
                    <div class="grid grid-row-1 md:grid-row-1 gap-x-12 gap-y-10 mb-12">
                        <div class="relative">
                            <label class="absolute -top-2.5 left-4 bg-white px-1 text-[15px] font-bold text-[#707C8B] z-1">
                                Current Password <span class="text-[#FF0000]">*</span>
                            </label>
                            <input type="text" placeholder="Current Password" class="input-box-business-acc">
                            <button type="button" class="absolute right-5 top-9 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <img src="{{ asset('assets/images/eye-hidden.svg') }}" alt="eye-close" class="w-5 h-5">
                            </button>
                        </div>
                        <div class="relative">
                            <label class="absolute -top-2.5 left-4 bg-white px-1 text-[15px] font-bold text-[#707C8B] z-1">
                                New Password <span class="text-[#FF0000]">*</span>
                            </label>
                            <input type="text" placeholder="Enter New Password" class="input-box-business-acc">
                            <button type="button" class="absolute right-5 top-9 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <img src="{{ asset('assets/images/eye-hidden.svg') }}" alt="eye-close" class="w-5 h-5">
                            </button>
                        </div>
                        <div class="relative">
                            <label class="absolute -top-2.5 left-4 bg-white px-1 text-[15px] font-bold text-[#707C8B] z-1">
                                Confirm Password <span class="text-[#FF0000]">*</span>
                            </label>
                            <input type="text" placeholder="Confirm Password" class="input-box-business-acc">
                            <button type="button" class="absolute right-5 top-9 -translate-y-1/2 text-gray-400 hover:text-gray-600">
                                <img src="{{ asset('assets/images/eye-hidden.svg') }}" alt="eye-close" class="w-5 h-5">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <button type="submit" class="text-[18px] text-white font-semibold w-50 py-3 rounded-full shadow-lg hover:opacity-90 transition-all system-settings-background-button">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection