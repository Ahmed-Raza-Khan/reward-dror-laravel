<aside class="w-64 bg-white border-r border-gray-100 flex flex-col fixed h-full left-0">
    <nav class="flex-1 px-0 py-6 space-y-3 side-navbar-buttons-all">       
        @php $dashboardActive = request()->is('dashboard*'); @endphp
        <a href="{{ url('/dashboard') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ $dashboardActive ? 'bg-[#0077B6] text-white' : 'text-[#1A1C1E] hover:bg-gray-50' }}">
            <img src="{{ asset('assets/images/' . ($dashboardActive ? 'dashboard-icon.svg' : 'dashboard-dark-icon.svg')) }}" alt="dashboard" width="20" height="20">
            <span class="{{ $dashboardActive ? 'active' : '' }}">Dashboard</span>
        </a>

        @php $rewardsActive = request()->is('rewards-management-*'); @endphp
        <a href="{{ url('/rewards-management-main') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ $rewardsActive ? 'bg-[#0077B6] text-white' : 'text-[#1A1C1E] hover:bg-gray-50' }}">
            <img src="{{ asset('assets/images/' . ($rewardsActive ? 'reward-management-light-icon.svg' : 'rewards-menagement-icon.svg')) }}" alt="rewards" width="23" height="23">
            <span class="{{ $rewardsActive ? 'active' : '' }}">Rewards Management</span>
        </a>

        @php $feeActive = request()->is('fee-configration-*'); @endphp
        <a href="{{ url('/fee-configration-main') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ $feeActive ? 'bg-[#0077B6] text-white' : 'text-[#1A1C1E] hover:bg-gray-50' }}">
            <img src="{{ asset('assets/images/' . ($feeActive ? 'fee-configration-light.svg' : 'fee-configuration-icon.svg')) }}" alt="fee" width="23" height="23">
            <span class="{{ $feeActive ? 'active' : '' }}">Fee Configuration</span>
        </a>

        @php $systemActive = request()->is('system-settings-*'); @endphp
        <a href="{{ url('/system-settings-main') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ $systemActive ? 'bg-[#0077B6] text-white' : 'text-[#1A1C1E] hover:bg-gray-50' }}">
            <img src="{{ asset('assets/images/' . ($systemActive ? 'system-setting-light.svg' : 'system-settings-icon.svg')) }}" alt="system" width="23" height="23">
            <span class="{{ $systemActive ? 'active' : '' }}">System Settings</span>
        </a>

        @php $businessActive = request()->is('business-*') || request()->is('*-business-api'); @endphp
        <a href="{{ url('/business-api-main') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ $businessActive ? 'bg-[#0077B6] text-white' : 'text-[#1A1C1E] hover:bg-gray-50' }}">
            <img src="{{ asset('assets/images/' . ($businessActive ? 'bussiness-api-light.svg' : 'bussiness-api.svg')) }}" alt="business" width="23" height="23">
            <span class="{{ $businessActive ? 'active' : '' }}">Business API</span>
        </a>

        @php $transActive = request()->is('transaction-list-*'); @endphp
        <a href="{{ url('/transaction-list-main') }}" 
           class="flex items-center gap-3 px-4 py-3 rounded-lg transition-colors {{ $transActive ? 'bg-[#0077B6] text-white' : 'text-[#1A1C1E] hover:bg-gray-50' }}">
            <img src="{{ asset('assets/images/' . ($transActive ? 'transaction-icon-LIGHT.svg' : 'transaction-icon.svg')) }}" alt="transaction" width="23" height="23">
            <span class="{{ $transActive ? 'active' : '' }}">Transactions</span>
        </a>
    </nav>
</aside>