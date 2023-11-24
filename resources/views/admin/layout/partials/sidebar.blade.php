{{-- <style>
  .popup-container {
    display: none;
    position: fixed;
    top: 30%;
    left: 40%;
    /* Position from the right edge of the screen */
    transform: translate(-100%, -50%);
    /* Adjust for the width of the popup */
    background-color: white;
    padding: 40px;
    width: 80%;
    max-width: 600px;
    height: 80%;
    max-height: 450px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    z-index: 1000;
  }
</style> --}}


{{-- --}}
<style>
  .popup-container {
    display: none;
    position: fixed;
    top: 40%;
    left: 56%;
    transform: translate(-100%, -50%);
    background-color: #fff;
    padding: 40px;
    width: 80%;
    max-width: 600px;
    height: 80%;
    max-height: 450px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    border-radius: 10px;
  }

  .comic-bubble {
    left: 15.7%;
    display: none;
    position: fixed;
    background-color: #fff;
    padding: 25px;
    border-radius: 10px;
    margin: 20px;
    width: auto;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .bubble-open {
    opacity: 1;
    display: block;
  }

  .arrow {
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 10px 10px 10px 0;
    border-color: transparent #fff transparent transparent;
    top: 50%;
    left: -10px;
    /* Adjust the left position based on the arrow width */
    transform: translateY(-50%);
  }


  .popup-container.active {
    /* animation: fadeIn 1s ease-out !important; */
    transition: visibility 0s, opacity 0.5s linear !important;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translate(-100%, -55%);
    }

    to {
      opacity: 1;
      transform: translate(-100%, -50%);
    }
  }

  /* Close button style */
  .popup-container .close-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    cursor: pointer;
    font-size: 20px;
    color: #ff6b6b;
  }

  /* Header style */
  .popup-container h2 {
    font-size: 28px;
    margin-bottom: 15px;
    color: #4a90e2;
  }

  /* Text style */
  .popup-container p {
    font-size: 16px;
    margin-bottom: 20px;
    color: #555555;
  }

  /* Overlay style */
  .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
  }
</style>





{{-- btn --}}
<style>
  /* Existing styles... */

  /* Enhanced styles for li tags */
  .menu-item {
    list-style-type: none;
    margin-bottom: 10px;
    position: relative;
  }

  .menu-item:before {
    content: "\2192";
    /* Right arrow */
    color: #4a90e2;
    /* Arrow color */
    font-size: 20px;
    margin-right: 10px;
    position: absolute;
    left: -10px;
    top: 50%;
    transform: translateY(-50%);
  }

  .menu-link {
    display: block;
    padding: 15px;
    text-decoration: none;
    color: #333333;
    transition: background-color 0.3s ease;
    border-radius: 8px;
    position: relative;
  }

  .menu-link:hover {
    background-color: #f0f0f0;
  }

  .menu-toggle {
    display: flex;
    align-items: center;
  }

  .menu-icon {
    margin-right: 15px;
    font-size: 18px;
    color: #4a90e2;
  }

  /* Existing styles... */
</style>






<style>
  /* Existing styles... */

  /* Enhanced styles for h2 tags */
  h2 {
    font-size: 24px;
    color: #0c0909;
    margin-bottom: 15px;
  }

  /* Existing styles... */
</style>
{{-- --}}






<aside id="layout-menu" class="layout-menu menu-vertical menu" style="background-color:#000">
  <div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">
        <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
            fill="#7367F0" />
          <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
            d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
          <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
            d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
            fill="#7367F0" />
        </svg>
      </span>
      <span class="app-brand-text demo menu-text fw-bold">Vuexy</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item">
      <a href="{{ route('dashboard')}}" class="menu-link menu">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboards">Dashboards</div>
        <!-- <div class="badge bg-primary rounded-pill ms-auto">5</div> -->
      </a>

    </li>


    {{--
    <script>
      function openAffiliatePopup(val) {
        // Hide all popups first
        document.querySelectorAll('.popup-container').forEach(function (popup) {
          popup.style.display = 'none';
        });

        // Show the selected popup
        var popup = document.getElementById('affiliatePopup' + val);
        if (popup.style.display === 'none' || popup.style.display === '') {
          popup.style.display = 'block';
        } else {
          popup.style.display = 'none';
        }
      }
    </script> --}}



    <style>
      .popup-container {
        display: none;

      }

      .popup-container.active {
        display: block;
      }
    </style>

    <script>
      var activePopup = null;

      function openAffiliatePopup(val) {
        var popup = document.getElementById('affiliatePopup' + val);

        if (activePopup && activePopup !== popup) {
          activePopup.classList.remove('active');
        }

        if (activePopup !== popup) {
          popup.classList.add('active');
          activePopup = popup;
        } else {
          popup.classList.remove('active');
          activePopup = null;
        }
      }
    </script>


    <script>
      function openAffiliatePopup(val) {
        if (val === '1') {
          var popup = document.getElementById('affiliatePopup1');
          if (popup.style.display === 'none' || popup.style.display === '') {
            var popup2 = document.getElementById('affiliatePopup2');
            var popup3 = document.getElementById('affiliatePopup3');
            var popup4 = document.getElementById('affiliatePopup4');
            var popup5 = document.getElementById('affiliatePopup5');
            var popup6 = document.getElementById('affiliatePopup6');
            popup.style.display = 'block';
            popup2.style.display = 'none';
            popup3.style.display = 'none';
            popup4.style.display = 'none';
            popup5.style.display = 'none';
            popup6.style.display = 'none';
          } else {
            popup.style.display = 'none';
          }
        }
        else if (val === '2') {
          var popup = document.getElementById('affiliatePopup2');
          if (popup.style.display === 'none' || popup.style.display === '') {
            var popup1 = document.getElementById('affiliatePopup1');
            var popup3 = document.getElementById('affiliatePopup3');
            var popup4 = document.getElementById('affiliatePopup4');
            var popup5 = document.getElementById('affiliatePopup5');
            var popup6 = document.getElementById('affiliatePopup6');
            popup.style.display = 'block';
            popup1.style.display = 'none';
            popup3.style.display = 'none';
            popup4.style.display = 'none';
            popup5.style.display = 'none';
            popup6.style.display = 'none';
          } else {
            popup.style.display = 'none';
          }
        }
        else if (val === '3') {
          var popup = document.getElementById('affiliatePopup3');
          if (popup.style.display === 'none' || popup.style.display === '') {
            var popup1 = document.getElementById('affiliatePopup1');
            var popup2 = document.getElementById('affiliatePopup2');
            var popup4 = document.getElementById('affiliatePopup4');
            var popup5 = document.getElementById('affiliatePopup5');
            var popup6 = document.getElementById('affiliatePopup6');
            popup.style.display = 'block';
            popup1.style.display = 'none';
            popup2.style.display = 'none';
            popup4.style.display = 'none';
            popup5.style.display = 'none';
            popup6.style.display = 'none';
          } else {
            popup.style.display = 'none';
          }
        } else if (val === '4') {
          var popup = document.getElementById('affiliatePopup4');
          if (popup.style.display === 'none' || popup.style.display === '') {
            var popup1 = document.getElementById('affiliatePopup1');
            var popup2 = document.getElementById('affiliatePopup2');
            var popup3 = document.getElementById('affiliatePopup3');
            var popup5 = document.getElementById('affiliatePopup5');
            var popup6 = document.getElementById('affiliatePopup6');
            popup.style.display = 'block';
            popup1.style.display = 'none';
            popup2.style.display = 'none';
            popup3.style.display = 'none';
            popup5.style.display = 'none';
            popup6.style.display = 'none';
          } else {
            popup.style.display = 'none';
          }
        } else if (val === '5') {
          var popup = document.getElementById('affiliatePopup5');
          if (popup.style.display === 'none' || popup.style.display === '') {
            var popup1 = document.getElementById('affiliatePopup1');
            var popup2 = document.getElementById('affiliatePopup2');
            var popup3 = document.getElementById('affiliatePopup3');
            var popup4 = document.getElementById('affiliatePopup4');
            var popup6 = document.getElementById('affiliatePopup6');
            popup.style.display = 'block';
            popup1.style.display = 'none';
            popup2.style.display = 'none';
            popup3.style.display = 'none';
            popup4.style.display = 'none';
            popup6.style.display = 'none';
          } else {
            popup.style.display = 'none';
          }
        } else if (val === '6') {
          var popup = document.getElementById('affiliatePopup6');
          if (popup.style.display === 'none' || popup.style.display === '') {
            var popup1 = document.getElementById('affiliatePopup1');
            var popup2 = document.getElementById('affiliatePopup2');
            var popup3 = document.getElementById('affiliatePopup3');
            var popup4 = document.getElementById('affiliatePopup4');
            var popup5 = document.getElementById('affiliatePopup5');
            popup.style.display = 'block';
            popup1.style.display = 'none';
            popup2.style.display = 'none';
            popup3.style.display = 'none';
            popup4.style.display = 'none';
            popup5.style.display = 'none';
          } else {
            popup.style.display = 'none';
          }
        }
      }
    </script>

    {{-- 1 --}}
    <li class="menu-item">
      <button onclick="openAffiliatePopup('1')" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Join Our Affiliate Program">Join Our Affiliate Program</div>
      </button>
    </li>
    <!-- Popup container -->
    <!-- <div id="affiliatePopup1" class="popup-container" style="margin-left:10px;">
        <h2 style="color:#0c0909">Affiliate Program</h2>
        <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
        {{-- <p>>-----------------------<< /p> --}}<br><br>
            <li class="menu-item">
              <a href="app-access-roles.html" class="menu-link">
                <div data-i18n="Affiliate">Affiliate</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="app-access-permission.html" class="menu-link">
                <div data-i18n="API channels">API channels</div>
              </a>
            </li>
      </div> -->

    <div class="comic-bubble" id="affiliatePopup1">
      <div class="arrow"></div>
      <h2 style="color:#0c0909">Affiliate Program</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Affiliate">Affiliate</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-permission.html" class="menu-link">
              <div data-i18n="API channels">API channels</div>
            </a>
          </li>
    </div>

    {{-- 2 --}}
    <li class="menu-item">
      <button onclick="openAffiliatePopup('2')" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Integrations">Integrations</div>
      </button>
    </li>
    <!-- <div id="affiliatePopup2" class="popup-container" style="margin-left:10px;">
      <h2 style="color:#0c0909">Integrations</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Import Account">Import Account</div>
            </a>
          </li>
    </div> -->

    <div class="comic-bubble" id="affiliatePopup2">
      <div class="arrow"></div>
      <h2 style="color:#0c0909">Integrations</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Import Account">Import Account</div>
            </a>
          </li>
    </div>

    {{-- 3 --}}
    <li class="menu-item">
      <button onclick="openAffiliatePopup('3')" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Messenger tools">Messenger tools</div>
      </button>
    </li>
    <!-- <div id="affiliatePopup3" class="popup-container" style="margin-left:10px;">
      <h2 style="color:#0c0909">Messenger tools</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Subscriber Manager">Subscriber Manager</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Live Chat">Live Chat</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="WhatsApp bot">WhatsApp bot</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Bot manager">Bot manager</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Instagram Bot">Instagram Bot</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Broadcasting">Broadcasting</div>
            </a>
          </li>
    </div> -->

    <div class="comic-bubble" id="affiliatePopup3">
      <div class="arrow"></div>
      <h2 style="color:#0c0909">Messenger tools</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Subscriber Manager">Subscriber Manager</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Live Chat">Live Chat</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="WhatsApp bot">WhatsApp bot</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Bot manager">Bot manager</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Instagram Bot">Instagram Bot</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Broadcasting">Broadcasting</div>
            </a>
          </li>
    </div>

    {{-- 4 --}}
    <li class="menu-item">
      <button onclick="openAffiliatePopup('4')" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Ecommerce">Ecommerce</div>
      </button>
    </li>
    <!-- <div id="affiliatePopup4" class="popup-container" style="margin-left:10px;">
      <h2 style="color:#0c0909">Ecommerce</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Ecommerce store">Ecommerce store</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="AI Content Generator">AI Content Generator</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Meta ADS">Meta ADS</div>
            </a>
          </li>
    </div> -->

    <div class="comic-bubble" id="affiliatePopup4">
      <div class="arrow"></div>
      <h2 style="color:#0c0909">Ecommerce</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Ecommerce store">Ecommerce store</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="AI Content Generator">AI Content Generator</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Meta ADS">Meta ADS</div>
            </a>
          </li>
    </div>


    {{-- 5 --}}
    <li class="menu-item">
      <button onclick="openAffiliatePopup('5')" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Posting Feature">Posting Feature</div>
      </button>
    </li>
    <!-- <div id="affiliatePopup5" class="popup-container" style="margin-left:10px;">

      <h2 style="color:#0c0909">Posting Feature</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Social Posting">Social Posting</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Workspace">Workspace</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Interest Explorer">Interest Explorer</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="WhatsApp Link">WhatsApp Link</div>
            </a>
          </li>
    </div> -->


    <div class="comic-bubble" id="affiliatePopup5">
      <div class="arrow"></div>
      <h2 style="color:#0c0909">Posting Feature</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Social Posting">Social Posting</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Workspace">Workspace</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Interest Explorer">Interest Explorer</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="WhatsApp Link">WhatsApp Link</div>
            </a>
          </li>
    </div>


    {{-- 6 --}}
    <li class="menu-item">
      <button onclick="openAffiliatePopup('6')" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Payment">Payment</div>
      </button>
    </li>
    <!-- <div id="affiliatePopup6" class="popup-container" style="margin-left:10px;">

      <h2 style="color:#0c0909">Payment</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>

          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Renew package">Renew package</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Transaction Log">Transaction Log</div>
            </a>
          </li>
          <li class="menu-item">
            {{-- <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Usage log">Usage log</div> --}}
              <a href="task/usage.html" class="menu-link">
                <div data-i18n="Usage log">Usage log</div>
              </a>
          </li>
    </div> -->

    <div class="comic-bubble" id="affiliatePopup6">
      <div class="arrow"></div>
      <h2 style="color:#0c0909">Payment</h2>
      <img src="WhatsApp Image 2023-11-23 at 10.32.43 PM.jpeg" height="5" width="100%" alt="">
      {{-- <p>>-----------------------<< /p> --}}<br><br>

          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Renew package">Renew package</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Transaction Log">Transaction Log</div>
            </a>
          </li>
          <li class="menu-item">
            {{-- <a href="app-access-roles.html" class="menu-link">
              <div data-i18n="Usage log">Usage log</div> --}}
              <a href="task/usage.html" class="menu-link">
                <div data-i18n="Usage log">Usage log</div>
              </a>
          </li>
    </div>

  </ul>
</aside>
<!-- / Menu -->