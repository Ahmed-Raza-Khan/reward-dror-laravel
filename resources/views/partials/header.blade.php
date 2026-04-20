<nav class="bg-[#E2F7FF] h-[100px] flex items-center p-4 px-6 fixed top-0 left-0 w-full z-10">
    <div class="flex items-center gap-3">
        <img src="{{ asset('assets/images/navbar-logo-img-main.png') }}" alt="RewardDror Logo" class="rounded-lg shadow-inner" width="62" height="62">
        <a href="{{ url('/dashboard') }}">
            <h1 class="text-2xl left-logo-heading">
                <span class="text-[#0077B6]">Reward</span><span class="text-[#FF7F32]">Dror</span>
            </h1>
        </a>
    </div>

    <div class="flex-grow flex justify-center ml-10">
        <div class="relative w-full max-w-[600px]">
            <input type="text" placeholder="Search rewards, businesses, transactions…" class="w-full bg-[#FFFFFF] text-[#404A60] placeholder:text-[#404A60] border border-[#00000000] rounded-full h-13 pl-6 pr-14 focus:outline-none focus:ring-1 focus:ring-[#333333]">
            
            <button class="absolute right-[15px] top-[5px] h-[40px] w-[40px] text-white rounded-full flex items-center justify-center search-icon-back-nav">
                <a href="{{ url('/dashboard') }}">
                    <img src="{{ asset('assets/images/search-icon-nav.svg') }}" alt="search" width="18" height="18">
                </a>
            </button>
        </div>
    </div>

    <div class="flex items-center gap-6 ml-auto">            
        <div class="relative group bg-[#FFFFFF] p-3 rounded-2xl button-language-all">
            <button class="flex items-center gap-2.5 focus:outline-none">
                <img src="{{ asset('assets/images/flag-country.png') }}" alt="US Flag" class="w-7 h-7 rounded">
                    English
                <img src="{{ asset('assets/images/down arrow-lang-user.svg') }}" alt="arrow down" class="w-3 h-3">
            </button>
            
            <div class="absolute right-0 top-full mt-0 w-32 bg-white border border-gray-100 rounded-md shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-2 pointer-events-none group-hover:pointer-events-auto transition-all duration-300">
                <a href="#" class="block px-4 py-2.5 text-sm hover:bg-gray-50 flex items-center gap-2">
                    <img src="https://flagicons.lipis.dev/flags/4x3/gb.svg" alt="UK Flag" class="w-5 h-4 rounded-sm">
                    English (UK)
                </a>
                <a href="#" class="block px-4 py-2.5 text-sm hover:bg-gray-50 flex items-center gap-2">
                    <img src="https://flagicons.lipis.dev/flags/4x3/es.svg" alt="Spain Flag" class="w-5 h-4 rounded-sm">
                    Español
                </a>
                <a href="#" class="block px-4 py-2.5 text-sm hover:bg-gray-50 flex items-center gap-2">
                    <img src="https://flagicons.lipis.dev/flags/4x3/pk.svg" alt="Spain Flag" class="w-5 h-4 rounded-sm">
                    Pakistan
                </a>
                <a href="#" class="block px-4 py-2.5 text-sm hover:bg-gray-50 flex items-center gap-2">
                    <img src="https://flagicons.lipis.dev/flags/4x3/sa.svg" alt="Spain Flag" class="w-5 h-4 rounded-sm">
                    Saudia Arabia
                </a>
                <a href="#" class="block px-4 py-2.5 text-sm hover:bg-gray-50 flex items-center gap-2">
                    <img src="https://flagicons.lipis.dev/flags/4x3/tr.svg" alt="Spain Flag" class="w-5 h-4 rounded-sm">
                    Turkey
                </a>
                <a href="#" class="block px-4 py-2.5 text-sm hover:bg-gray-50 flex items-center gap-2">
                    <img src="https://flagicons.lipis.dev/flags/4x3/ir.svg" alt="Spain Flag" class="w-5 h-4 rounded-sm">
                    Iran
                </a>
            </div>
        </div>

        <div class="relative group">
            <button class="flex items-center gap-3 focus:outline-none profile-user-all">
                <img src="{{ asset('assets/images/profile-image-men.png') }}" alt="Profile of Bella Edward" class="w-13 h-13 rounded-full border-2 border-[#DC6C09] shadow-md">
                
                <span class="flex items-center gap-1.5">
                    Bella Edward
                    <img src="{{ asset('assets/images/down arrow-lang-user.svg') }}" alt="arrow down" class="w-3 h-3">
                </span>
            </button>
            
            <div class="absolute right-0 top-full mt-0 w-40 bg-white border border-gray-100 rounded-md shadow-lg opacity-0 group-hover:opacity-100 group-hover:translate-y-0 translate-y-2 pointer-events-none group-hover:pointer-events-auto transition-all duration-300">
                <a href="{{ url('/user-profile') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50">Your Profile</a>
                <a href="{{ url('/system-settings-main') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-gray-50">Settings</a>
                <div class="border-t border-gray-100"></div>
                <a href="{{ url('/login') }}" class="block px-4 py-2.5 text-sm text-red-600 hover:bg-gray-50">Sign out</a>
            </div>
        </div>
    </div>
</nav>