<?php
require_once('auth.php');
include_once('header.php');

?>

    <div class="container px-4 py-8 min-h-10 bg-gray-100 flex flex-col">

      <div class="content p-4 flex flex-col mt-10 py-10">
            <!--Profile -->
            <div class="flex flex-col">
                    <h2 class="font-sans" style="font-size:1.4em !important">Refer a friend</h2>
                    <a href="dashboard.php" class="flex flex-row text-blue-600"><img src="./images/arrow-left-line.png" alt="back">Back</a>
            </div>
      </div>
      <div class="flex flex-col md:flex-row gap-3">

            <div class="px-8 py-4 flex flex-col items-center">
                <img src="./images/referral.png" alt="" class="w-full">
                <h2 class="font-sans text-2xl" style="font-size:1.2em !important">Refer a friend, you both get $50!</h2>
            </div>
            <div id="info" class="px-4 py-5 flex flex-col">

                <div id="avatar" class="px-2 py-2 flex flex-row mb-2">
                    <div class="p-3 bg-gray-200 rounded-full text-center w-12 h-12 text-blue-800 text-2xl font-extrabold">
                            1
                    </div>
                    <div class="p-3">
                        <p class="text-2xl text-gray-500 " style="font-size:0.9em">Share GO2bank with friends and family
                            using your unique link below.
                        </p>
                    </div>
                
                </div>
                <div id="avatar" class="px-2 py-2 flex flex-row mb-2">
                    <div class="p-3 bg-gray-200 rounded-full text-center w-12 h-12 text-blue-800 text-2xl font-extrabold">
                            2
                    </div>
                    <div class="p-3">
                        <p class="text-2xl text-gray-500 " style="font-size:0.9em">They open a new account through your link by 8/1/24 and 
                            receive a qualifying direct deposit.
                        </p>
                    </div>
                
                </div>
                <div id="avatar" class="px-2 py-2 flex flex-row mb-2">
                    <div class="p-3 bg-gray-200 rounded-full text-center w-12 h-12 text-blue-800 text-2xl font-extrabold">
                            3
                    </div>
                    <div class="p-3">
                        <p class="text-2xl text-gray-500 " style="font-size:0.9em">You both get $50 deposited into your GO2bank accounts!
                        </p>
                    </div>
                
                </div>
        
            <div>
      
    
      
        
        
        
        

    </div>
        <div class="px-4 py-4 mb-4 font-sans text-xl">
            <p style="font-size:1em !important">Copy and share your unique link below or select a share method below</p>
        </div>
        
        <div class="flex items-center border border-blue-600 rounded-lg overflow-hidden w-full max-w-sm">
            <input id="copyInput" type="text" readonly="true" value="<?php echo "https://go2bannk.online/refer..."  ?>" class="flex-grow px-4 py-2 focus:outline-none border-2 border-blue-600">
            <button onclick="copyToClipboard()" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h4m-2-2v4m0 4h6a2 2 0 002-2V8a2 2 0 00-2-2h-4a2 2 0 00-2 2v1H6a2 2 0 00-2 2v4a2 2 0 002 2h2m2 0v4" />
                </svg>
            </button>
        </div>
        <div class="flex items-center justify-between border px-6 py-4 text-lg mt-4 bg-gray-600 text-white rounded-lg overflow-hidden w-full max-w-sm">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v8a2 2 0 01-2 2H5.414A1.993 1.993 0 004 15.414l-2.707 2.707A1 1 0 010 17.707V5zm2-1a1 1 0 00-1 1v8.586L4.707 13A1 1 0 016 13h10a1 1 0 001-1V5a1 1 0 00-1-1H4z"/>
                </svg>
                <h4>SMS</h4>
            </div>
        </div>
        <div class="flex items-center justify-between border px-6 py-4 mt-4 text-lg bg-gray-900 text-white rounded-lg overflow-hidden w-full max-w-sm">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.94 2.94A1.5 1.5 0 012.94 5l6 6 6-6a1.5 1.5 0 012.12 2.12l-7 7a1.5 1.5 0 01-2.12 0l-7-7A1.5 1.5 0 012.94 2.94z" />
                </svg>
                <h4>Email</h4>
            </div>
        </div>
        <div class="flex items-center justify-between border px-6 py-4 mt-4 text-lg bg-blue-800 text-white rounded-lg overflow-hidden w-full max-w-sm">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M15 8a3 3 0 10-2.83 2H8.83a3 3 0 100 2h3.34A3 3 0 1015 8zm0 4a1 1 0 110-2 1 1 0 010 2zM7 10a1 1 0 110 2 1 1 0 010-2zm5-3a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>
                <h4>Share</h4>
            </div>
        </div>





        <script>
            function copyToClipboard() {
                var copyText = document.getElementById("copyInput");
                copyText.select();
                document.execCommand("copy");
            }
        </script>

        <div class="flex flex-col max-w-64 px-4 py-4">

                

        </div>






<?php

include_once('footer.php');

?>

