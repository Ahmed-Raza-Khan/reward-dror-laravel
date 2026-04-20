@extends('layouts.main-login')

@section('title', 'Reward Dror - Login')

@section('content')
    <div class="flex items-center justify-center relative main-body min-h-screen overflow-x-hidden">

        <div class="absolute top-0 right-0 z-0"><img src="assets/images/right-top-image-background.png" alt=""></div>
        <div class="absolute bottom-0 left-0 z-0"><img src="assets/images/left-bottom-image-background.png" alt=""></div>    

        <main class="relative z-10 w-full h-[90vh] max-w-7xl rounded-3xl p-6 md:p-14 shadow-2xl flex flex-col md:flex-row gap-8 items-center main-body-2 mx-4">
            <div class="flex-1 flex flex-col items-center md:pr-0">
                <a href="{{ url('/login') }}"><img src="assets/images/logo.png" alt="Reward Dror Logo" class="mb-0" width="180" height="180"></a>
                <h1 class="text-6xl mb-10 text-[#0077B6] left-logo-heading">
                    <span>Reward</span>
                    <span class="text-[#FF7F32]">Dror</span>
                </h1>

                <p class="text-5xl text-[#0077B6] leading-tight tracking-tight left-description-logo">
                    Manage Rewards<br>
                    With Ease And<br>
                    Precision
                </p>
            </div>

            <div class="w-full max-w-xl rounded-2xl p-10 md:p-16 flex-none self-stretch flex flex-col justify-center login-form-main">            
                <h2 class="text-3xl font-bold text-[#333333] mb-3">Admin Login</h2>
                <p class="text-[#666666] mb-10">Please login to your account</p>

                <form action="#" class="space-y-6">
                    <div class="form-all-headings relative">
                        <label for="email" class="absolute -top-3 left-3 px-2 z-10 text-[#222222]">
                            Email Address <span class="text-[#FF0000]">*</span>
                        </label>
                        <div class="relative">
                            <input type="email" id="email" name="email" placeholder="Enter Email" required class="w-full px-6 py-4 rounded-full outline-none transition-all">
                        </div>
                    </div>

                    <div class="form-all-headings relative">
                        <label for="password" class="absolute -top-3 left-3 px-2 z-10 text-[#222222]">
                            Password <span class="text-[#FF0000]">*</span>
                        </label>
                        <div class="relative">
                            <input type="password" id="password" name="password" placeholder="Enter Password" required
                                class="w-full px-6 py-4 rounded-full outline-none transition-all">
                            <div class="absolute inset-y-0 right-0 pr-5 flex items-center cursor-pointer password-eye">
                                <img src="assets/images/eye-hidden.svg" alt="hidded" class="h-5 w-5">
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <label for="toggle" class="form-remember-me text-[#0077B6]">Remember Me</label>
                        </div>
                        <div>
                            <a href="{{ url('/forgot-password') }}" class="form-forgot-me text-[#0077B6] hover:underline">Forgot Password?</a>
                        </div>
                    </div>

                    <button type="submit" 
                            class="w-full flex justify-center items-center px-6 py-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF6B3D] login-button-bottom">
                        <a href="{{ url('/dashboard') }}">Login</a>
                    </button>
                </form>
            </div>
        </main>
    </div>
@endsection