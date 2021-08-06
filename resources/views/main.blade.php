<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('android-chrome-512x512.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <title>@yield('pageTitle') - Mitherapy</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0S9BB226YG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0S9BB226YG');
</script>
</head>

 <script>  var MessageBirdChatWidgetSettings = {     widgetId: '7cf155bf-fa04-4883-a07d-51f5e0167370',     initializeOnLoad: true,   };  !function(){"use strict";if(Boolean(document.getElementById("live-chat-widget-script")))console.error("MessageBirdChatWidget: Snippet loaded twice on page");else{var e,t;window.MessageBirdChatWidget={},window.MessageBirdChatWidget.queue=[];for(var i=["init","setConfig","toggleChat","identify","hide","on","shutdown"],n=function(){var e=i[d];window.MessageBirdChatWidget[e]=function(){for(var t=arguments.length,i=new Array(t),n=0;n<t;n++)i[n]=arguments[n];window.MessageBirdChatWidget.queue.push([[e,i]])}},d=0;d<i.length;d++)n();var a=(null===(e=window)||void 0===e||null===(t=e.MessageBirdChatWidgetSettings)||void 0===t?void 0:t.widgetId)||"",o=function(){var e,t=document.createElement("script");t.type="text/javascript",t.src="https://livechat.messagebird.com/bootstrap.js?widgetId=".concat(a),t.async=!0,t.id="live-chat-widget-script";var i=document.getElementsByTagName("script")[0];null==i||null===(e=i.parentNode)||void 0===e||e.insertBefore(t,i)};"complete"===document.readyState?o():window.attachEvent?window.attachEvent("onload",o):window.addEventListener("load",o,!1)}}();</script>
     <header class=" sticky top-0 z-50 bg-mitherapy_purple-500 dark:bg-gray-800">
     <nav class="dark:border-gray-700">
         <div x-data="{isOpen:false}" class="container px-6 py-1 mx-auto lg:flex lg:justify-between lg:items-center">
             <div class="flex items-center justify-between">
                 <div>
                     <a href="/">
                     <img class="w-44 h-14" src="{{asset('img\logo.svg')}}" />
                     </a>
                 </div>
                 
               
                 <div class="flex lg:hidden">
                     <button type="button" class="text-white dark:text-gray-200 hover:text-mitherapy_pink-600 dark:hover:text-gray-400 focus:outline-none focus:text-mitherapy_pink-700 dark:focus:text-gray-400" aria-label="toggle menu" @click="isOpen = !isOpen" >
                         <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                             <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                         </svg>
                     </button>
                 </div>
             </div>
             
            
             <div :class="isOpen ? 'show' : 'hidden'" class="items-center lg:flex my-6 indicator">
                 <div class="flex flex-col mt-4 space-y-8 lg:flex-row lg:items-center lg:mt-0 lg:space-y-0 lg:space-x-8 lg:font-bold">
                  <a class="block font-medium text-white dark:text-gray-200 hover:text-mitherapy_pink-600 hover:underline" title="Our Home Page." href="/">Home</a>
                     <a class="block font-medium text-white dark:text-gray-200 hover:text-mitherapy_pink-600 hover:underline" title="Check how mitherapy session booking works." href="/How-it-works">How it works!</a>
                     <a class="block font-medium text-white dark:text-gray-200 hover:text-mitherapy_pink-600 hover:underline" title="Why get counselled by us" href="/Why-us">Why us?</a>
                     <a class="block font-medium text-white dark:text-gray-200 hover:text-mitherapy_pink-600 hover:underline" title="Stay up to date with health resources" href="/Resources">Resources</a>
                     <div class="hidden lg:block indicator-item badge badge-sm bg-mitherapy_pink-600 border-mitherapy_pink-600">unwell?</div> 
                    <button onclick="window.location='{{ url("/#book") }}'" title="Not feeling well?" class="hidden lg:block mt-1 mb-1 btn btn-primary btn-sm bg-green-600 hover:bg-green-700 hover:border-teal-600 border-teal-600 rounded-full">Book your well mind</button>
                 </div>
             </div>
             
         </div>
     </nav>
 </header>
 @yield('contents')
    

     <footer class=" bg-gray-300 text-gray-800 body-font">     
        <div class="container px-5 py-5 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class="flex items-center justify-center lg:items-start lg:justify-start md:hidden mb-1 lg:flex">
          <label for="my-modal-2" class="btn btn-wide btn-lg modal-button" role="button" aria-pressed="true">Contact Us</label>  
        </div>
        <input type="checkbox" id="my-modal-2" class="modal-toggle"> 
        <div class="modal">
          <div class="modal-box bg-gray-300">
            <!-- -->
            <div class="card bordered">
              <figure>
                <img src="{{ asset('img/modalImage.jpg')}}" class=" h-56" alt="modal Image">
              </figure> 
              <div class="card-body bg-white">
                <h2 class="card-title">Contact Details
                  <!-- -->
                </h2> 
                You can contact us here.

<div class="overflow-x-auto">
  <table class="table w-full bg-white">
    <tbody>
      <tr class="bg-white">
        <th>Call:</th> 
        <td>063 874 4947</td> 
      </tr>
      <tr class="bg-white">
        <th>Email:</th> 
        <td>info@mitherapy.site</td> 
      </tr>
    </tbody>
  </table>
</div> 
              </div>
            </div> 
            <!-- -->
            <div class="modal-action"> 
              <label for="my-modal-2" class="mr-16 lg:mr-1 btn bg-mitherapy_pink-600">Close</label>
            </div>
          </div>
        </div>
        <div class="lg:w-1/2 md:w-1/2 w-full px-4 lg:px-14 mt-2">
            {{-- <h1 class="text-lg font-bold text-center lg:text-2xl">
                      Be the first to Join and never miss <br> out on new therapy tips, resources, and more.
                  </h1>
      
                  <div class="flex justify-center mt-6">
                      <div class="bg-white border rounded-md focus-within:ring focus-within:border-mitherapy_pink-600 focus-within:ring-mitherapy_pink">
                          <div class="flex flex-wrap justify-between md:flex-row">
                              <input type="email" class="p-2 m-1 text-sm text-gray-700 appearance-none focus:outline-none focus:placeholder-transparent" placeholder="Enter your email" aria-label="Enter your email">
                              <button class="w-full p-2 m-1 text-sm font-semibold text-white uppercase transition-colors duration-200 transform bg-mitherapy_pink-700 rounded-md lg:w-auto hover:bg-mitherapy_pink-600 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-mitherapy_pink-700 focus:ring-opacity-50">subscribe</button>
                          </div>
                      </div>
                      
                  </div>
                  <h3 class="text-sm text-gray-700 text-center mt-2">We won't send you spam. Unsubscribe at any time.</h3> --}}
                  <script async data-uid="fa6b426461" src="https://awesome-artist-1556.ck.page/fa6b426461/index.js"></script>
            </div>
          <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
          
            
            <div class=" hidden md:flex lg:hidden items-center justify-center lg:items-start lg:justify-start mb-1">
              <label for="my-modal-2" class="btn btn-wide btn-sm modal-button" role="button" aria-pressed="true">Contact Us</label>  
            </div>
            
              <div class=" lg:ml-20 lg:w-full card shadow-lg compact side bg-gray-300"><div class="flex-row items-center space-x-4 card-body">
                <div>
                  <div class="avatar">
                    <div class="overflow-hidden bg-mitherapy_purple-500 rounded-full w-14 h-14 shadow">
                      <img src="{{asset('img\Submark_W.svg')}}" alt="">
                    </div>
                  </div>
                </div> 
                <div>
                  <h2 class="card-title text-xl text-mitherapy_purple-500">Mitherapy</h2> 
                  
                  <p class="text-gray-800">Connecting every individual to the best mental health care professionals.</p>
                </div>
              </div>
            </div>
             
            
            
          </div>
            
          </div>
        </div>
        <div class="bg-gray-100">
          <div class="container mx-auto mb-0 py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class=" text-mitherapy_purple text-sm text-center sm:text-left">&copy;2020 MITHERAPY (PTY) LTD &#8212;
              <a href="https://twitter.com/mitherapysa" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@mitherapysa</a>
            </p>
            <span class="inline-flex lg:mr-16 sm:mr-20 sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
              <a href="https://www.facebook.com/mitherapysa" class="text-mitherapy_purple">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a href="https://twitter.com/mitherapysa" class="ml-3 text-mitherapy_purple">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a href="https://www.instagram.com/mitherapysa/" class="ml-3 text-mitherapy_purple">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
              </a>
              <a href="https://www.linkedin.com/company/mitherapy" class="ml-3 text-mitherapy_purple">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                  <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                  <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
              </a>
            </span>
          </div>
          <hr>
          <div>
            <p class=" bg-mitherapy_purple text-center text-white dark:text-white sm:py-0">
              <span>/</span>
              <a target="_blank"  href="/Privacy-Policy" class="text-xs">Privacy Policy</a>
              <span>/</span>
              <a target="_blank"  href="/Terms-And-Conditions" class="text-xs ">Terms and Conditions</a>
              <span>/</span>
            </p>
          </div>
        </div>
      </footer>
      <div class="fixed z-30 bottom-0 right-0 mr-6 mb-6">
            <a id="back2Top" href="#" class="text-mitherapy_pink-800 bg-mitherapy_purple-500 bg-opacity-50 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 30 30" class=" h-16 w-20">
                    <path fill="currentColor" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z" />
                </svg>
            </a>
      </div>