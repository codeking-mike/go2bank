<?php
  include_once('auth.php');
  include_once('functions.php');
  include_once('header.php');
?>


<div class="p-4 md:m-24 mt-16 flex flex-col bg-gray-100">

    <!--account balance and transaction history-->
    <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
    <a href="account.php" class="flex flex-row justify-between w-full items-center">
        <h2 class="font-bold font-sans text-left text-2xl">Bank Account <?php echo '**'. substr($account_number, -4); ?></h2>
        <div class="flex items-center">
            <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
        </div>
    </a>
    </div>

    <div class="flex flex-col px-4 py-8 w-full bg-white">

        <div id="account" class="flex flex-row justify-between items-center mb-2">
            <div id="cardimage" class="flex justify-start w-1/4">
                <img src="./images/card.png" alt="Card" class="w-full">
            </div>
            <div id="totalBal" class="flex flex-col items-end w-3/4">
                <h1 class="font-extrabold text-xl text-blue-800"><?php echo '$' . number_format($available_balance, 2, '.', ','); ?></h1>
                <p class="text-gray-500 font-medium text-right -mt-1">Account Balance</p>
            </div>
        </div>
        
        <?php
             $sql = "SELECT amount, description, transaction_type, transaction_type2 
             FROM transactions 
             WHERE user_id='$user_id' 
             ORDER BY transaction_date DESC 
             LIMIT 5";
            
            $result = mysqli_query($cxn, $sql) or die("Couldn't Fetch Data");
     
            while($row = mysqli_fetch_assoc($result)){
                extract($row);
     
     
             	

        ?>
        <div class="flex flex-row justify-between items-center w-full mb-2">
        <div class="flex flex-row items-center">
            <div id="cardimage" class="mr-2">
            <?php 
                    if($transaction_type2 == 'purchase'){

            ?>
                <img src="./images/pur-trans.png" alt="Card" class="w-6 h-6">
            <?php 

                    }else{
                   

            ?>
             <img src="./images/card-trans.png" alt="Card" class="w-6 h-6">
             <?php 

                }


                ?>  
            </div>
            <p class="text-gray-500 font-light font-sans"><?php echo truncateString($description); ?></p>
        </div>
        <?php 
                    if($transaction_type == 'Deposit'){

            ?>
                 <p class="text-green-500 font-bold"><?php echo '+$' . number_format($amount, 2, '.', ','); ?></p>

                 <?php 

                    }else{


                ?>
                <p class="font-bold text-gray-500"><?php echo '-$' . number_format($amount, 2, '.', ','); ?></p>

                <?php } ?>
       </div>

       <?php
             }
       ?>

       
        <div class="flex flex-row space-x-3 py-3">
            <a href="#" class="font-sm font-sans font-light" style="font-size:12px !important">Recent transactions</a>
            <div class="flex items-center">
            <img src="./images/arrow-up-s-line.svg" alt="" class="w-4 h-4">
         </div>
        </div>

    </div>
    <div class="flex flex-col md:flex-row gap-5 mt-6">

        <div class="flex flex-col items-center px-4 py-4 bg-white justify-between mx-auto mb-4 md:w-1/2">
            <div id="cardimage" class="flex justify-center">
                <img src="./images/visa_card.png" alt="Card" class="max-w-full">
            </div>
            <h4 class="text-gray-800 font-extrabold text-xl text-center mt-4">Build or repair your credit with the Go2bank Visa Credit Card</h4>
            <p class="text-gray-700 font-semibold text-base text-center mt-2">No annual fee. No credit check to apply</p>
            <a class="px-3 py-3 border-blue-600 border-2 w-full text-center mt-4 text-blue-600" href="credit.php">Learn More</a>
            <p class="text-gray-700 font-semibold text-base text-center mt-2">Subject to eligibility criteria</p>
        </div>
        
        <div class="flex flex-col md:w-1/2 gap-4 p-3">

                <div class="flex flex-col px-4 py-4 w-full bg-white border-b-2">
                    <a href="atm.php" class="flex flex-row justify-between w-full items-center">
                        <h2 class="font-extrabold text-left text-lg">ATM & Deposit Locations</h2>
                        <div class="flex items-center">
                            <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <div id="cardimage" class="mr-2">
                            <img src="./images/atmdeposit2.png" alt="Card" class="">
                        </div>
                        <h4 class="text-gray-500 font-bold">Withdraw cash from an ATM or deposit cash at thousands of retail locations</h4>
                    </div>
                </div>
                <div class="flex flex-col px-4 py-4 w-full bg-white border-b-2">
                    <a href="credit.php" class="flex flex-row justify-between w-full items-center">
                        <h2 class="font-extrabold text-left text-lg">Expert on Credit Care Advantage</h2>
                        <div class="flex items-center">
                            <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <div id="cardimage" class="mr-2">
                            <img src="./images/creditcare.png" alt="Card" class="">
                        </div>
                        <h4 class="text-gray-500 font-bold">Raise your credit score instantly and get your ICO score for free</h4>
                    </div>
                </div>
                <div class="flex flex-col px-4 py-4 w-full bg-white border-b-2">
                    <a href="refer.php" class="flex flex-row justify-between w-full items-center">
                        <h2 class="font-extrabold text-left text-lg">Refer a friend, you both get $50</h2>
                        <div class="flex items-center">
                            <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                        </div>
                    </a>
                    <div class="flex flex-row items-center">
                        <div id="cardimage" class="mr-2">
                            <img src="./images/not_icon.png" alt="Card" class="">
                        </div>
                        <h4 class="text-gray-500 font-bold">You and your friend get $50 when the open a new Go2Bank account
                            and receive qualifying direct deposits
                        </h4>
                    </div>
                </div>
        </div> 


    </div>
    <div class="flex flex-col md:flex-row gap-5 mt-6">

        <div class="flex flex-col items-center px-4 py-4 bg-white justify-between mx-auto mb-4 md:w-1/3">
            <div id="cardimage" class="flex justify-center">
                <img src="./images/direct_pay.png" alt="Card" class="max-w-full">
            </div>
            <h4 class="text-gray-800 font-extrabold text-xl text-center mt-4">Get your pay up to 2 days early with direct deposit</h4>
            <p class="text-gray-700 font-semibold text-base text-center">Government benefits up to 4 days early</p>
            <a class="px-3 py-3 border-blue-600 border-2 w-full text-center mt-1 text-blue-600 trigger-modal ">Set up direct deposit</a>
        </div>
        
        <div class="flex flex-col items-center px-4 py-4 bg-white justify-between mx-auto mb-4 md:w-1/3">
            <div id="cardimage" class="flex justify-center">
                <img src="./images/overdraft.png" alt="Card" class="max-w-full">
            </div>
            <h4 class="text-gray-800 font-extrabold text-xl text-center mt-4">Get up to $200 in Overdraft protection with your Go2Bank debit card</h4>
            <p class="text-gray-700 font-semibold text-base text-center mt-2">Set up direct deposits and opt-in to get covered for every purchase</p>
            <p class="text-gray-700 font-semibold text-base text-center mt-2">Fees may apply</p>

            <a class="px-3 py-3 border-blue-600 border-2 w-full text-center mt-4 text-blue-600 trigger-modal">Learn More</a>
        
        </div>
        <div class="flex flex-col items-center px-4 py-4 bg-white justify-between mx-auto mb-4 md:w-1/3">
            <div id="cardimage" class="flex justify-center">
                <img src="./images/piggy.png" alt="Card" class="max-w-full">
            </div>
            <h4 class="text-gray-800 font-extrabold text-xl text-center mt-4">Earn well over the national savings rate average</h4>
            <p class="text-gray-700 font-semibold text-base text-center mt-2">High yield savings account. 4.50% Annual Percentage Yield(APY),  based 
                on 1/11% interest rule. Paid quarterly on savings up to $5,000
            </p>
            

            <a class="px-3 py-3 border-blue-600 border-2 w-full text-center mt-4 text-blue-600 trigger-modal">Start Savings</a>
        
        </div>


    </div>
    <div class="flex flex-col gap-5 mt-6 bg-white">

        <div class="flex flex-col px-4 py-4 w-full border-b-2">
            <a href="#" class="flex flex-row justify-between w-full items-center">
                <h2 class="font-extrabold text-left text-lg">Help</h2>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
            
        </div>
        <div class="flex items-center rounded-lg overflow-hidden w-full max-w-sm ">
            <button class="px-4 py-2 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.386a1 1 0 01-1.414 1.415l-4.387-4.387zM8 14A6 6 0 108 2a6 6 0 000 12z" clip-rule="evenodd" />
                </svg>
            </button>
            <input type="text" placeholder="Search help..." class="flex-grow px-4 py-2 focus:outline-none">
        </div>
        <div class="flex flex-col px-4 py-4 w-full bg-white border-b-2">
            <h3 class="font-sans uppercase text-gray-300">TOP QUESTIONS</h3>
            <a href="#" class="flex flex-row justify-between w-full items-center px-1 py-2 border-b-2">
                <p class="font-light text-left text-lg text-gray-500">How can I add money to my account?</p>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
            <a href="#" class="flex flex-row justify-between w-full items-center px-1 py-2 border-b-2">
                <p class="font-light text-left text-lg text-gray-500">How do I find my account/routing number?</p>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
            <a href="#" class="flex flex-row justify-between w-full items-center px-1 py-2 border-b-2">
                <p class="font-light text-left text-lg text-gray-500">How do I setup direct deposit?</p>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
            <a href="#" class="flex flex-row justify-between w-full items-center px-1 py-2 border-b-2">
                <p class="font-light text-left text-lg text-gray-500">Where can I go to deposit cash to my account?</p>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
            <a href="#" class="flex flex-row justify-between w-full items-center px-1 py-2 border-b-2">
                <p class="font-light text-left text-lg text-gray-500">How do I qualify for overdraft?</p>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
            <a href="#" class="text-blue-600 px-2 py-4">View all frequently asked questions</a>
        </div>
        
        
        

    </div>
  
  
</div>


<div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">

    
    
<div class="xf-content-height">
    
   
        

<footer id="g2b-footer" class="g2b-footer py-10">
    <div class="grid-container g2b-footer__container">
        
        <div class="go2bank-redesign"><div class="grid-row g2b-footer__disclaimer content-card" style="margin-bottom: 0.0px;text-align: center;">
            <p><span class="body-xs">Cards issued by GO2bank, Member FDIC, pursuant to a license from Visa U.S.A., Inc. Visa is a registered trademark of Visa International Service Association.</span></p>
             <p><span class="body-xs">Neither GO2bank, Green Dot Corporation, Visa U.S.A. nor any of their respective affiliates are responsible for the products or services provided by Ingo Money, Q2 Software, Plaid, Atomic or any eGift Card merchants. Partner terms and conditions apply.</span></p>
            <p><span class="body-xs">Apple, the Apple logo, and iPhone are trademarks of Apple Inc., registered in the U.S. and other countries. App Store is a service mark of Apple Inc.</span></p>
            <p><span class="body-xs">Google, Android and Google Play are trademarks of Google Inc., registered in the U.S. and other countries.</span></p>
            <p><span class="body-xs">©2024 GO2bank. GO2bank is a trademark of Green Dot Corporation. All rights reserved. Green Dot Corporation NMLS #914924; Green Dot Bank NMLS #908739.</span></p>
            
    </div>
        
       
    </div>
</footer>

    
</div>

</div>


<!-- Modal -->
<div id="accountLockModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
        <div class="bg-white w-11/12 md:w-1/3 rounded-lg shadow-lg">
            <div class="flex items-center justify-center pt-4">
                <img src="./images/warning.png" alt="">
            </div>
            <div class="p-6 text-center">
                <h2 class="text-2xl font-bold mb-4 font-sans">Account Locked</h2>
                <p class="text-gray-700 font-sans">Unfortunately, your account has been locked permanently due to unusual activity.</p>
            </div>
            <div class="px-6 pb-6">
                <button id="closeModal" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                    Okay
                </button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to handle modal display
        document.querySelectorAll('.trigger-modal').forEach(function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('accountLockModal').classList.remove('hidden');
            });
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            window.location.href = 'dashboard.php';
        });
    </script>

            
    
    
  
    
<script src="./etc.clientlibs/flexweb/clientlibs/flexweb-base.min.22f4dda9080d0f2af2b152473f9fcc01.js"></script>
<script src="./etc.clientlibs/go2bank/clientlibs/go2bank-site.min.18fd909294c599f0501b63be17f0b39b.js"></script>   
<link rel="stylesheet" href="./etc.clientlibs/flexweb/clientlibs/flexweb-fonts.min.38d414ed3cd39844cb82a3d4ddaf4838.css" type="text/css">

  
    

    

    



    
    
    

            

        
    </body>
    </main>


</html>
