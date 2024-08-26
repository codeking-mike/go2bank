<?php

require_once('auth.php');
include_once('header.php');

?>

<div class="container px-4 py-8 min-h-10 bg-gray-100">

      <div class="content p-4 flex flex-col mt-10 py-10">
            <!--Profile -->
            <div class="flex flex-col justify-between items-center">
                    <h4 class="font-light text-2xl">Welcome to the</h4>
                    <h2 class="font-sans" style="font-size:1.4em !important">GO2bank Help Center</h2>
                    <h4 class="font-light text-xl">How can we help?</h4>
                    
            </div>
            <!--Search box -->
            <div class="flex items-center border border-blue-600 rounded-lg overflow-hidden w-full max-w-sm bg-white mt-6">
                    <button class="px-4 py-2 focus:outline-none">
                    <img src="./images/search-line.svg" alt="" class="w-6">
                
                    </button>
                    <input id="copyInput" type="text" placeholder="Search help" class="flex-grow px-4 py-2 focus:outline-none border-2 border-blue-600">
                    
            </div>
      </div>
      <div id="info" class="px-4 py-5 bg-white flex flex-col">

        <div id="avatar" class="px-2 py-2 flex flex-col">
           
            <div class="mb-4">
                <p class="font-light font-sans " style="font-size:0.88em">Help / Move Money / 
                    <span class="text-blue-800 font-bold" style="color:#0000aa !important">Deposit Cash</span></p>
            </div>
            <h4 class="font-light text-2xl">Deposit cash</h4>
            <h2 class="font-sans mt-3" style="font-size:1em !important">Deposit cash using your debit card</h2>
           
            <h4 class="font-light text-xl mt-3 text-blue-700"> <a href="#">How do I deposit cash to my GO2bank account?</a></h4>
            <h4 class="font-light text-xl mt-3 text-blue-700"> <a href="#">How do I deposit cash using my card at a retailer?</a></h4>
            <h4 class="font-light text-xl mt-3 text-blue-700"><a href="#"> How much does it cost to deposit cash to my account using my debit card
                at a retailer?</a>
            </h4>
            <h2 class="font-sans mt-3" style="font-size:1em !important">Deposit cash using the app</h2>
           
            <h4 class="font-light text-xl mt-3 text-blue-700"> <a href="#">How do I deposit cash to my GO2bank account?</a></h4>
            <h4 class="font-light text-xl mt-3 text-blue-700"><a href="#"> How do I deposit cash using the GO2bank app?</a></h4>
            <h4 class="font-light text-xl mt-3 text-blue-700"><a href="#"> How much does it cost to deposit cash using the app at a retailer?</a>
            </h4>
            
        
        </div>
        <div>
        
        </div>

      </div>

</div>



<?php

include_once('footer.php');

?>

