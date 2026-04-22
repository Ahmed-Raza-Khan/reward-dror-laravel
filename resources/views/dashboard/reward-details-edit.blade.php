@extends('layouts.app')

@section('title', 'Reward Dror - Reward Management Detail Edit')


@section('content')
    <main id="main-content" class="flex-1 p-8 transition-all duration-300 lg:ml-64">
        <div class="max-w-full mx-auto">
            <div class="bg-white rounded-xl p-7 shadow">
                <div class="flex items-center gap-3 mb-6">
                    <button onclick="history.back()">
                        <img src="assets/images/left-arrow-back.svg" class="w-8 h-7">
                    </button>
                    <h1 class="text-4xl ms-2 font-semibold text-[#000000]">Update Reward</h1>
                </div>
        
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-[14px] font-bold text-[#707C8B] mb-1 ms-7 translate-y-1.5 bg-white w-25">Reward Name :</label>
                        <input id="rewardNameLeft" type="text" placeholder="starbucks eGift Card"
                            class="w-full border border-[#D7D7D7] rounded-full px-4 py-5 text-[13px] text-[#909090] font-regular bg-white focus:bg-white transition">
                    </div>
                    <div>
                        <label class="block text-[14px] font-bold text-[#707C8B] mb-1 ms-7 translate-y-1.5 bg-white w-25">Reward Name :</label>
                        <input id="rewardNameRight" type="text" placeholder="starbucks eGift Card"
                            class="w-full border border-[#D7D7D7] rounded-full px-4 py-5 text-[13px] text-[#909090] font-regular bg-white focus:bg-white transition">
                    </div>
                </div>
        
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                    <div>
                        <label class="block text-[14px] font-bold text-[#707C8B] mb-1 ms-7 translate-y-1.5 bg-white w-21">Description :</label>
                        <textarea id="rewardDesc" rows="5" placeholder="When you give a Starbucks Code, you're giving more than just a gift or a token of appreciation. You're connecting with customers and employees."
                            class="w-full border border-[#D7D7D7] rounded-3xl px-4 py-5 text-[13px] text-[#909090] font-regular bg-white focus:bg-white resize-none transition leading-relaxed"></textarea>
                    </div>
        
                    <div>
                        <label class="block text-[14px] font-bold text-[#707C8B] mb-1 ms-7">Upload Image :</label>
                        <div id="dropZone" class="drop-zone rounded-3xl flex flex-col items-center justify-center h-[155px] cursor-pointer bg-white relative border border-[#D7D7D7]">
                            <input type="file" id="imageUpload" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full">
                            <div id="dropContent" class="flex flex-col items-center gap-1 pointer-events-none">
                                <img src="assets/images/drop-and-upload-image-profilce.svg" alt="drop-and-upload">
                                <span class="text-[10px] text-[#909090] font-regular mt-1">Drag & Drop Image</span>
                            </div>
                            <img id="previewImg" class="hidden absolute inset-0 w-full h-full object-cover rounded-3xl" alt="Preview">
                        </div>
                    </div>
                </div>
        
                <div class="grid grid-cols-1 md:grid-cols-3 gap-20 mb-8 items-start">
                    <div>
                        <label class="block text-[14px] font-bold text-[#707C8B] mb-1 ms-7 translate-y-1.5 bg-white w-33">Min/max amounts :</label>
                        <input id="rewardAmount" type="text" placeholder="£5 to £150" class="w-full border border-[#D7D7D7] rounded-full px-4 py-5 text-[13px] text-[#909090] font-regular bg-white focus:bg-white transition">
                    </div>
        
                    <div class="translate-y-3 ms-47">
                        <p class="text-[14px] font-bold text-[#707C8B] mb-2">Status:</p>
                        <div class="flex items-center gap-2">
                            <span class="text-[13px] text-[#909090] font-regular">Enable :</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" id="statusToggle" class="sr-only toggle-checkbox" checked>
                                <div class="toggle-label w-11 h-6 bg-red-400 rounded-full transition-colors duration-200 relative">
                                    <div class="toggle-dot absolute top-0.5 left-0.5 w-5 h-5 bg-white rounded-full shadow transition-transform duration-200"></div>
                                </div>
                            </label>
                        </div>
                    </div>
        
                    <div class="-translate-x-10 mt-6">
                        <p class="text-[14px] font-bold text-[#707C8B] mb-2">Featured Reward :</p>
                        <div class="flex items-center gap-2">
                            <span class="text-[13px] text-[#909090] font-regular">Featured Reward :</span>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" id="featuredToggle" class="sr-only toggle-checkbox" checked>
                                <div class="toggle-label w-11 h-6 bg-red-400 rounded-full transition-colors duration-200 relative">
                                    <div class="toggle-dot absolute top-0.5 left-0.5 w-5 h-5 bg-white rounded-full shadow transition-transform duration-200"></div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <div id="successModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
                    <div class="relative bg-white rounded-md p-8 w-[450px] text-center shadow-2xl">
                        <button id="closeModal" class="absolute top-3 right-3 text-gray-400 hover:text-black text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <div class="flex justify-center mb-2">
                            <div class="mb-3">
                                <img src="assets/images/password-update-tick.png" alt="Success" class="w-28 h-28">
                            </div>
                        </div>
                        <h2 class="text-[#000000] text-[26px] font-bold mb-3">Successful</h2>
                        <p class="text-center text-[#000000] text-[16px] font-regular mb-6 capitalize main-button-rewards-update-popup-ok-update-text">
                            Reward has been updated <br> successfully
                        </p>
                        <button onclick="document.getElementById('successModal').classList.add('hidden')"
                            class="main-button-rewards-update-popup-ok text-[#FFFFFF] text-[16px] font-semibold px-2 py-3 rounded-full w-40">
                            Ok
                        </button>
                    </div>
                </div>

                <div id="disableModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
                    <div class="relative bg-white rounded-md p-8 w-[400px] text-center shadow-2xl">
                        <button id="closeDisableModal" class="absolute top-3 right-3 text-gray-400 hover:text-black text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <div class="flex justify-center mb-4">
                            <div class="mb-3">
                                <img src="assets/images/update-warning.png" alt="Success" class="w-28 h-28">
                            </div>
                        </div>
                        <h2 class="text-[#000000] text-[26px] font-bold mb-2">Disable Reward</h2>
                        <p class="text-center text-[#000000] text-[16px] font-regular capitalize mb-6 main-button-rewards-update-popup-ok-warning-text">
                            Are you sure you want to Disable <br>this reward?
                        </p>

                        <div class="flex justify-center gap-3">
                            <button id="confirmDisable"
                                class="main-button-rewards-update-popup-ok text-[#FFFFFF] text-[16px] font-semibold px-2 py-3 w-40 rounded-full">
                                Yes
                            </button>

                            <button id="cancelDisable"
                                class="border border-[#F15046] text-[#F15046] text-[16px] font-semibold px-2 py-3 rounded-full w-40">
                                No
                            </button>
                        </div>
                    </div>
                </div>

                <div id="successModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
                    <div class="relative bg-white rounded-md p-8 w-[450px] text-center shadow-2xl">
                        <button id="closeModal" class="absolute top-3 right-3 text-gray-400 hover:text-black text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <div class="flex justify-center mb-2">
                            <div class="mb-3">
                                <img src="assets/images/password-update-tick.png" alt="Success" class="w-28 h-28">
                            </div>
                        </div>
                        <h2 class="text-[#000000] text-[26px] font-bold mb-3">Successful</h2>
                        <p id="successMessage" class="text-center text-[#000000] text-[16px] font-regular mb-6 capitalize main-button-rewards-update-popup-ok-update-text">
                            Rewards has been disable successfully 
                        </p>
                        <button onclick="document.getElementById('successModal').classList.add('hidden')"
                            class="main-button-rewards-update-popup-ok text-[#FFFFFF] text-[16px] font-semibold px-2 py-3 rounded-full w-40">
                            Ok
                        </button>
                    </div>
                </div>

                <div id="enableModal" class="fixed inset-0 z-50 hidden flex items-center justify-center">
                    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
                    <div class="relative bg-white rounded-md p-8 w-[400px] text-center shadow-2xl">
                        <button id="closeEnableModal" class="absolute top-3 right-3 text-gray-400 hover:text-black text-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                        <div class="flex justify-center mb-4">
                            <div class="mb-3">
                                <img src="assets/images/update-warning.png" alt="Success" class="w-28 h-28">
                            </div>
                        </div>
                        <h2 class="text-[#000000] text-[26px] font-bold mb-2">Enable Reward</h2>
                        <p class="text-center text-[#000000] text-[16px] font-regular mb-6 capitalize main-button-rewards-update-popup-ok-warning-text">
                            Are you sure you want to enable <br>this reward?
                        </p>

                        <div class="flex justify-center gap-3">
                            <button id="confirmEnable"
                                class="main-button-rewards-update-popup-ok text-[#FFFFFF] text-[16px] font-semibold px-2 py-3 w-40 rounded-full shadow-lg transition-transform active:scale-95">
                                Yes
                            </button>
                            <button id="cancelEnable"
                                class="border border-[#F15046] text-[#F15046] text-[16px] font-semibold px-2 py-3 rounded-full w-40 transition-transform active:scale-95">
                                No
                            </button>
                        </div>
                    </div>
                </div>
        
                <div class="flex gap-4 main-button-rewards-update">
                    <button onclick="saveChanges()"
                        class="main-button-rewards-update-save active:scale-95 text-[#FFFFFF] text-[16px] font-semibold px-7 py-3 rounded-full transition-all duration-150 shadow-sm">
                        Save Changes
                    </button>
                    
                    <button onclick="deleteReward()"
                        class="main-button-rewards-update-delete bg-[#FF2828] active:scale-95 text-[#FFFFFF] text-[16px] font-semibold px-7 py-3 rounded-full transition-all duration-150 shadow-sm">
                        Delete This Reward
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/js/dashboard/reward-management-details-update.js"></script>
    <script src="assets/js/dashboard/reaward-update-popups/reaward-update-popup-.js"></script>
@endsection