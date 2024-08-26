<?php

require_once('auth.php');
include_once('header.php');

?>

<div class="container px-4 py-8 min-h-10 bg-gray-100">

      <div class="content p-4 flex flex-col mt-10 py-10">
            <!--Profile -->
            <div class="flex flex-col">
                    <h2 class="font-sans" style="font-size:1.4em !important">Personal Info</h2>
                    <a href="dashboard.php" class="flex flex-row text-blue-600"><img src="./images/arrow-left-line.png" alt="back">Back</a>
            </div>
      </div>
      <div id="info" class="px-4 py-5 bg-white flex flex-col">

        <div id="avatar" class="px-2 py-2 flex flex-row border-b-2">
            <div class="p-3 bg-gray-200 rounded-full w-12 h-12 text-blue-500">
                    <img src="./images/user-line.svg" alt="back">
            </div>
            <div class="p-3">
                <p class="text-2xl text-gray-500 " style="font-size:1.2em"><?php echo $firstname. ' '. $lastname ?></p>
            </div>
        
        </div>
        <div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="email.php" class="flex flex-row justify-between w-full items-center">
                <div class="flex flex-col">
                    <h2 class="font-bold text-left text-lg text-gray-500">Email Address</h2>
                    <p><?php echo $user_email ?> - <span class="text-green-600 font-thin">Verified</span></p>
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white border-b-2">
            <a href="phone.php" class="flex flex-row justify-between w-full items-center">
                <div class="flex flex-col">
                    <h2 class="font-bold text-left text-lg text-gray-500">Phone Number</h2>
                    <p><?php echo $phone_no ?> - <span class="text-green-600 font-thin">Verified</span></p>
                </div>
                <div class="flex items-center">
                    <img src="./images/arrow-right-s-line.svg" alt="" class="w-6">
                </div>
            </a>
        </div>
        <div class="flex flex-row px-4 py-4 w-full bg-white">
            <a href="address.php" class="flex flex-row justify-between w-full items-center">
                <div class="flex flex-col">
                    <h2 class="font-bold text-left text-lg text-gray-500">Mailing Address</h2>
                    <p><?php echo $home_address. ' '. $city. ','. $state ?></p>
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

