@extends('layouts.main-login')

@section('title', 'Reward Dror - Forgot Password')

@section('content')
<div class="flex items-center justify-center relative main-body min-h-screen overflow-x-hidden">

    <div class="absolute top-0 right-0 z-0"><img src="{{ asset('assets/images/right-top-image-background.png') }}" alt=""></div>
    <div class="absolute bottom-0 left-0 z-0"><img src="{{ asset('assets/images/left-bottom-image-background.png') }}" alt=""></div>

    <main class="relative z-10 w-full max-w-7xl h-[90vh] rounded-3xl p-6 md:p-14 shadow-2xl flex flex-col md:flex-row gap-8 items-center main-body-2 mx-4">
        
        <div class="flex-1 flex flex-col items-center">
            <a href="{{ url('/login') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Reward Dror Logo" width="180" height="180">
            </a>

            <h1 class="text-6xl left-logo-heading text-[#0077B6] mb-5">
                <span>Reward</span>
                <span class="text-[#FF7F32]">Dror</span>
            </h1>

            <p class="text-5xl left-description-logo text-[#0077B6] leading-tight tracking-tight mt-6">
                Manage Rewards<br>
                With Ease And<br>
                Precision
            </p>
        </div>

        <div class="w-full max-w-xl rounded-3xl p-10 md:p-16 flex-none self-stretch flex flex-col justify-center login-form-main">            
            <h2 class="text-[#333333] mb-3">Forgot Password</h2>
            <p class="text-[#666666] mb-10 mt-7">Enter your email address to receive <br>a verification code</p>

            <form action="#" class="space-y-5">
                <div class="form-all-headings relative">
                    <label for="email" class="absolute -top-3 left-6 px-2 z-10 text-[#222222]">
                        Email Address <span class="text-[#FF0000]">*</span>
                    </label>
                    <input type="email" id="email" name="email" required placeholder="Enter Email"
                    class="w-full px-6 py-4 rounded-full outline-none transition-all">
                </div>

                <button type="submit" 
                    class="w-full py-4 transition-transform active:scale-95 login-button-bottom cursor-pointer">
                    <a href="{{ url('/forgot-password-verification-code') }}">Continue</a>
                </button>

                <div class="flex flex-col items-center pt-4">
                    <a href="{{ url('/login') }}" class="flex items-center gap-3 group">
                        <img src="{{ asset('assets/images/left-arrow-blue.svg') }}" alt="Back" class="w-6 h-5 group-hover:-translate-x-1 transition-transform">
                        <span class="form-forgot-me text-[#666666] font-semibold">Back to Login</span>
                    </a>
                </div>
            </form>
        </div>
    </main>

@endsection