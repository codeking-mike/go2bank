<?php

require_once('auth.php');
include_once('header.php');

?>

<div class="container px-4 py-8 min-h-10 bg-gray-100">

      <div class="content p-4 flex flex-col mt-10 py-10">
            <!--Profile -->
            <div class="flex flex-col">
                    <h2 class="font-sans" style="font-size:1.4em !important">Settings</h2>
                    
            </div>
      </div>
      
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="profile.php" class="flex flex-row justify-between w-full items-center">
                <div class="flex flex-row space-x-3">
                    <img src="./images/user-line.svg" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Personal Info</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="routing.php" class="flex flex-row justify-between w-full items-center">
                <div class="flex flex-row space-x-3">
                    <img src="./images/bank-line.png" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Routing and account numbers</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="#" class="flex flex-row justify-between w-full items-center">
                <div class="flex flex-row space-x-3">
                    <img src="./images/shield-line.svg" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Security</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="routing.php" class="flex flex-row justify-between w-full items-center trigger-modal">
                <div class="flex flex-row space-x-3">
                    <img src="./images/shield-flash-line.svg" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Overdraft protection</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="routing.php" class="flex flex-row justify-between w-full items-center trigger-modal">
                <div class="flex flex-row space-x-3">
                    <img src="./images/exchange-dollar-fill.svg" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Direct Deposit</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="#" class="flex flex-row justify-between w-full items-center trigger-modal">
                <div class="flex flex-row space-x-3">
                    <img src="./images/money-dollar-box-line.svg" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Make GO2bank your Way2Pay</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="#" class="flex flex-row justify-between w-full items-center trigger-modal">
                <div class="flex flex-row space-x-3">
                    <img src="./images/bank-card-line.png" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Manage Cards</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="#" class="flex flex-row justify-between w-full items-center trigger-modal">
                <div class="flex flex-row space-x-3">
                    <img src="./images/links-line.svg" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Linked Cards</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="#" class="flex flex-row justify-between w-full items-center">
                <div class="flex flex-row space-x-3">
                    <img src="./images/shield-line.svg" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Privacy</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="#" class="flex flex-row justify-between w-full items-center">
                <div class="flex flex-row space-x-3">
                    <img src="./images/file-line.svg" alt="back" class="w-6 h-6">
                    <h2 class="font-light font-sans text-left text-lg text-gray-500">Document Center</h2>
                    
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>

        </div>

      </div>

</div>



<?php

include_once('footer.php');

?>

