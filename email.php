<?php

include_once('header.php');

?>

<div class="container px-4 py-8 min-h-10 bg-gray-100">

      <div class="content p-4 flex flex-col mt-10 py-10">
            <!--Profile -->
            <div class="flex flex-col">
                    <h2 class="font-sans" style="font-size:1.4em !important">Change email address</h2>
                    <a href="profile.php" class="flex flex-row text-blue-600"><img src="./images/arrow-left-line.png" alt="back">Back</a>
            </div>
      </div>
      <form action="processupdate.php" method="post">
      <div id="info" class="px-4 py-5 flex flex-col">
                <div class="mb-2 username text">
                    <div data-fieldset="username">
                        <div class="input js-input pad-right-zero">
                            <div class="input__inner">
                                <label class="input__label">
                                    <div class="input__label-content js-input-label-content">Email Address</div>
                                </label>
                                <input type="email" class="input__field js-input-field" id="email" type="email" placeholder="Email Address" required="true" autocorrect="off" maxlength="25"/>

                            </div>
                            <div class="input__error-text"></div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between button btn--width-full">
                    <button name="changeEmail" type="submit"  class="text-lg bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 px-4 rounded focus:outline-none focus:shadow-outline cmp-form-button w-full">
                    Change email address
                    </button>
               </div>
        <div>
     </form>

</div>



<?php

include_once('footer.php');

?>

