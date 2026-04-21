@extends('layouts.app')

@section('title', 'Reward Dror - Reward Management Details')


@section('content')
    <main class="ml-64 flex-1 p-8">
        <div class="max-w-full mx-auto">
            <div class="bg-white rounded-xl p-7 shadow">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-3">
                        <button onclick="history.back()">
                            <img src="{{ asset('assets/images/left-arrow-back.svg') }}" class="w-8 h-7">
                        </button>
                        <h1 class="text-4xl ms-2 font-semibold text-[#000000]">Reward Details</h1>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="text-[20px] text-[#000000] font-medium">Status :</span>

                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="statusToggle" class="sr-only peer">
                            <div class="w-13 h-8 bg-[#F15046] peer-checked:bg-[#4CAF50] rounded-full peer transition"></div>
                            <div class="absolute left-1 top-1 w-6 h-6 bg-white rounded-full transition peer-checked:translate-x-2.5"></div>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div class="flex gap-10">
                            <div>
                                <p class="text-[#666666] text-[18px] font-semibold main-headings-rewards">Reward Id :</p>
                                <p id="rewardId" class="font-regular text-[20px] text-[#000000] main-headings-detail-rewards"></p>
                            </div>

                            <div>
                                <p class="text-[#666666] text-[18px] font-semibold main-headings-rewards">Reward Name :</p>
                                <p id="rewardName" class="font-regular text-[20px] text-[#000000] main-headings-detail-rewards main-headings-detail-rewards"></p>
                            </div>
                        </div>

                        <div>
                            <p class="text-[#666666] text-[18px] font-semibold main-headings-rewards mb-1">Description :</p>
                            <p id="rewardDesc" class="text-[#000000] text-[20px] font-regular leading-relaxed main-headings-detail-rewards"></p>
                        </div>

                        <div class="flex gap-10">
                            <div>
                                <p class="text-[#666666] text-[18px] font-semibold main-headings-rewards">Reward Type :</p>
                                <p id="rewardType" class="font-regular text-[20px] text-[#000000] main-headings-detail-rewards"></p>
                            </div>

                            <div>
                                <p class="text-[#666666] text-[18px] font-semibold main-headings-rewards">Denominations :</p>
                                <p id="rewardPoints" class="font-regular text-[20px] text-[#000000] main-headings-detail-rewards"></p>
                            </div>
                        </div>

                        <div class="flex gap-10">
                            <div>
                                <p class="text-[#666666] text-[18px] font-semibold main-headings-rewards">Min/Max Amounts :</p>
                                <p id="rewardAmount" class="font-regular text-[20px] text-[#000000] main-headings-detail-rewards"></p>
                            </div>

                            <div>
                                <p class="text-[#666666] text-[18px] font-semibold main-headings-rewards">Redemption :</p>
                                <p id="rewardRedemption" class="font-regular text-[20px] text-[#000000] main-headings-detail-rewards"></p>
                            </div>
                        </div>

                        <div class="flex gap-6 mt-9 main-button-rewards">
                            <button class="bg-orange-500 text-[16px] text-white px-7 py-3 rounded-full font-semibold main-button-rewards-edit">
                                <a href="/rewards-management-detail-edit">
                                    Edit Rewards
                                </a>
                            </button>

                            <button class="bg-[#FF2828] text-[16px] text-white px-7 py-3 rounded-full font-semibold main-button-rewards-delete">
                                Delete This Reward
                            </button>
                        </div>

                    </div>

                    <div class="flex justify-end items-top">
                        <div class="rounded-md overflow-hidden">
                            <img id="rewardImage" class="w-[320px] h-[190px] object-cover border border-[#FF4C4C]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('assets/js/dashboard/reward-management-details.js') }}"></script>
@endsection