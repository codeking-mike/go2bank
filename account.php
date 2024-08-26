<?php
include_once('auth.php');
include_once('functions.php');
include_once('header.php');

?>


<div class="p-4 md:m-24 mt-16 flex flex-col bg-gray-100">
<!--account balance and transaction history-->
        <div class="flex flex-row px-4 py-2 w-full">
            <a href="account.php" class="flex flex-row justify-between w-full items-center">
                <h2 class="font-bold font-sans text-left text-2xl">Bank Account <?php echo '**'. substr($account_number, -4); ?></h2>
                <div class="flex items-center">
                    <p class="rounded-full bg-gray-200 p-2 text-blue-600 font-bold text-sm">...</p>
                </div>
            </a>
        </div>
        <div class="flex flex-col px-4 md:py-8 py-4 w-full">

                <div id="account" class="flex flex-row justify-between items-center mb-2">
                    <div id="cardimage" class="flex justify-start w-2/5 md:w-2/4">
                        <img src="./images/card.png" alt="Card" class="max-w-32">
                    </div>
                    <div id="totalBal" class="flex flex-col items-end w-3/5 md:w-2/4">
                        <h1 class="font-extrabold text-lg text-blue-800"><?php echo '$' . number_format($available_balance, 2, '.', ','); ?></h1>
                        <p class="text-gray-500 font-medium text-right -mt-2">Account Balance</p>
                    </div>
                </div>
                <div class="flex flex-row py-2 w-full">
                    <a href="account.php" class="flex flex-row justify-between w-full items-center">
                        <h2 class="font-bold font-sans text-left text-xl">Transactions</h2>
                        <div class="flex items-center font-sans font-light text-sm">
                        <img src="./images/search-line.svg" alt="" class="w-6">Search
                        </div>
                    </a>
                </div>
                
                <?php
                    $sql = "SELECT amount, description, transaction_type, transaction_type2, transaction_date 
                    FROM transactions 
                    WHERE user_id='$user_id' 
                    ORDER BY transaction_date DESC 
                    LIMIT 30";
                    
                    $result = mysqli_query($cxn, $sql) or die("Couldn't Fetch Data");
            
                    while($row = mysqli_fetch_assoc($result)){
                        extract($row);
            
            
                        

                ?>
                <div class="flex flex-row justify-between items-center w-full border-b-2 bg-white px-4 py-4">
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
                    <div class="flex flex-col">
                        <p class="text-gray-500 font-light font-sans"><?php echo truncateString($description); ?></p>
                        <span class="font-light font-sans" style="font-size:11px !important"><?php echo $transaction_type ?></span>
                        <span class="font-light font-sans" style="font-size:11px !important"><?php echo $transaction_date ?></span>
                    </div>
                    
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
                    <a href="#" class="font-sm font-sans font-light text-blue-600" style="font-size:12px !important">Request bank statement</a>
                    
                </div>

            </div>
        </div>


<?php

include_once('footer.php');

?>