<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <title>@yield('pageTitle') - Mitherapy</title>
</head>

 <!-- Messenger Chat Plugin Code -->
 <div id="fb-root"></div>

 <!-- Your Chat Plugin code -->
 <div id="fb-customer-chat" class="fb-customerchat">
 </div>

 <script>
   var chatbox = document.getElementById('fb-customer-chat');
   chatbox.setAttribute("page_id", "105194548087419");
   chatbox.setAttribute("attribution", "biz_inbox");

   window.fbAsyncInit = function() {
     FB.init({
       xfbml            : true,
       version          : 'v11.0'
     });
   };

   (function(d, s, id) {
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) return;
     js = d.createElement(s); js.id = id;
     js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
 </script>
     <!-- -->
         <!-- Require css -->
 <style>
 .scroll-hidden::-webkit-scrollbar {
     height: 0px;
     background: transparent; /* make scrollbar transparent */
 }
 </style>

     <!-- nav -->
     <header class=" bg-mitherapy_purple-500 dark:bg-gray-800">
     <nav class="dark:border-gray-700">
         <div x-data="{isOpen:false}" class="container px-6 py-4 mx-auto lg:flex lg:justify-between lg:items-center">
             <div class="flex items-center justify-between">
                 <div>
                     <a href="/home">
                     <img class="w-44 h-14" src="{{asset('img\logo.svg')}}" />
                     </a>
                 </div>
                 
                 <!-- Mobile menu button -->
                 <div class="flex lg:hidden">
                     <button type="button" class="text-mitherapy_pink-500 dark:text-gray-200 hover:text-mitherapy_pink-400 dark:hover:text-gray-400 focus:outline-none focus:text-mitherapy_pink-600 dark:focus:text-gray-400" aria-label="toggle menu" @click="isOpen = !isOpen" >
                         <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                             <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                         </svg>
                     </button>
                 </div>
             </div>
             
             <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
             <div :class="isOpen ? 'show' : 'hidden'" class="items-center lg:flex">
                 <div class="flex flex-col mt-4 space-y-8 lg:flex-row lg:items-center lg:mt-0 lg:space-y-0 lg:space-x-8 lg:font-bold">
                  <a class="block font-medium text-white dark:text-gray-200 hover:text-mitherapy_pink-600 hover:underline" title="Check how mitherapy session booking works." href="/home">Home</a>
                     <a class="block font-medium text-white dark:text-gray-200 hover:text-mitherapy_pink-600 hover:underline" title="Check how mitherapy session booking works." href="/How-it-works">How it works!</a>
                     <a class="block font-medium text-white dark:text-gray-200 hover:text-mitherapy_pink-600 hover:underline" title="Why get counselled by us" href="/Why-us">Why us?</a>
                     <a class="block font-medium text-white dark:text-gray-200 hover:text-mitherapy_pink-600 hover:underline" title="Get up to date health resources" href="/Resources">Resources</a>
                     <span  class="relative inline-flex rounded-md shadow-sm">
                         <button onclick="window.location='{{ url("/book-a-session") }}'" type="button" class="items-center w-full px-4 py-2 text-base self-center uppercase leading-6 font-medium rounded-md text-white transition-colors duration-200 transform bg-mitherapy_pink-700 hover:bg-mitherapy_pink-600 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-mitherapy_pink-700 focus:ring-opacity-50 active:bg-mitherapy_pink-700">
                           Book your well mind
                         </button>
                   
                         <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1">
                           <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                           <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500 "></span>
                         </span>
                       </span>
                 </div>
             </div>
             
         </div>
     </nav>
 </header>
 @yield('contents')
     <!-- end nav -->

     <footer class=" bg-gray-300 text-gray-800 body-font">
        <div class="container px-5 py-5 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
        <div class=" lg:w-3/4 md:w-1/2 w-full px-4">
            <h1 class="text-lg font-bold text-center lg:text-2xl">
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
            </div>
          <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
              <!-- -->
              <svg class="w-20 h-20 text-white p-2 bg-transparent rounded-full" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              width="1063.867px" height="1059.867px" viewBox="0 0 1063.867 1059.867" style="enable-background:new 0 0 1063.867 1059.867;"
           xml:space="preserve">
      <g>
          <path style="display:none;fill-rule:evenodd;clip-rule:evenodd;fill:#3C1D3F;" d="M1.318,1061.233
              c0-351.707,0.009-703.413-0.11-1055.12C1.207,2.06,2.015,1.255,6.067,1.256c353.039,0.119,706.078,0.11,1059.117,0.11
              c0.93,1.729,0.472,3.6,0.472,5.398c0.023,349.612,0.023,699.224,0.015,1048.837c0,6.86,0.71,6.118-6.146,6.118
              c-350.945,0.009-701.891,0.009-1052.836-0.015C4.9,1061.705,3.038,1062.158,1.318,1061.233z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#FEFEFE;" d="M1,1060.867c352.445,0,704.89,0,1057.334,0
              c6.531,0,6.532-0.001,6.532-6.532c0-351.111,0-702.224,0-1053.335c0.308,0.218,1.043-0.506,1.011,0.5
              c-0.043,1.332-0.011,2.666-0.011,3.999c0,350.54-0.009,701.08,0.11,1051.621c0.001,4.055-0.808,4.859-4.859,4.858
              c-351.873-0.119-703.746-0.108-1055.619-0.172C4.035,1061.806,2.108,1062.959,1,1060.867z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#E89EB8;" d="M575.787,151.792c-2.682-3.227-6.688-2.32-9.986-2.637
              c-23.238-2.243-46.549-2.916-69.848-1.116c-43,3.323-84.661,12.612-124.43,29.49c-97.37,41.326-168.338,110.128-212.826,206.025
              c-16.445,35.447-26.807,72.771-31.938,111.564c-3.637,27.495-4.856,55.062-2.692,82.679
              c6.489,82.799,35.157,157.032,87.073,222.016c40.07,50.158,89.436,88.544,147.862,115.166
              c33.407,15.222,68.292,25.555,104.619,31.072c29.906,4.542,59.942,5.99,90.084,3.757c44.89-3.324,88.138-13.65,129.552-31.442
              c47.491-20.402,89.552-48.903,126.011-85.454c40.723-40.825,71.418-88.261,91.751-142.31
              c11.744-31.214,19.474-63.358,23.172-96.526c1.294-11.598,1.54-23.236,2.574-34.833c0.289-0.433,0.764-0.865,1.2-0.682
              c5.799,2.435,12.447,3.548,15.745,9.944c-0.608,4.35-1.529,8.683-1.772,13.053c-1.085,19.516-4.14,38.748-8.294,57.801
              c-4.967,22.788-11.888,44.99-20.681,66.617c-9.814,24.138-21.582,47.248-35.784,69.096c-11.53,17.737-24.18,34.594-38.226,50.486
              c-14.032,15.878-29.182,30.463-45.291,44.186c-28.604,24.366-60.147,44.121-94.184,59.765
              c-26.383,12.125-53.796,21.448-82.306,27.551c-16.345,3.499-32.771,5.923-49.337,7.992c-23.028,2.876-46.155,2.708-69.095,1.49
              c-34.974-1.856-69.284-8.426-102.746-19.437c-24.292-7.994-47.682-17.865-70.168-29.891
              c-22.528-12.047-43.572-26.372-63.528-42.361c-12.257-9.82-24.048-20.186-34.981-31.363
              c-17.358-17.745-33.279-36.777-47.334-57.332c-13.509-19.754-25.39-40.427-35.354-62.147
              c-12.738-27.766-22.347-56.594-28.77-86.521c-3.507-16.344-6.005-32.828-7.709-49.387c-2.248-21.85-2.185-43.914-0.88-65.759
              c2.06-34.478,8.33-68.348,19.101-101.338c11.776-36.07,27.686-70.062,48.692-101.684c10.896-16.402,22.659-32.071,35.737-46.837
              c20.392-23.023,42.851-43.627,67.676-61.803c22.929-16.788,47.288-31.041,73.075-42.827c27.039-12.358,55.146-21.665,84.248-27.87
              c15.047-3.208,30.251-5.266,45.524-7.156c22.856-2.83,45.743-1.742,68.61-1.68c10.969,0.03,21.933,1.835,32.897,2.837
              c0.898,0.695,1.171,1.739,0.823,2.661C581.629,142,579.943,147.544,575.787,151.792z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M575.787,151.792c0.855-6.525,5.498-11.553,7.042-17.806
              c10.828-23.159,21.655-46.32,33.001-70.587c5.899,28.209,11.57,55.321,17.438,83.378c19.158-21.076,37.887-41.679,57.59-63.355
              c-0.828,8.824-1.494,16.281-2.233,23.73c-2.269,22.859-4.625,45.708-6.786,68.578c-0.324,3.435-1.116,5-4.72,3.297
              c-1.035-0.489-2.217-0.858-3.35-0.916c-3.786-0.194-3.903-2.331-3.523-5.422c1.992-16.188,3.8-32.398,5.652-48.604
              c0.112-0.989,0.072-1.996,0.104-2.994c0.198-1.509,1.835-3.394-1.07-4.091c-15.759,17.311-31.518,34.62-47.936,52.653
              c-5.1-24.256-10.028-47.708-15.214-72.38c-5.939,13.268-11.388,25.434-16.828,37.604c-2.301,5.145-4.854,10.199-6.779,15.48
              c-1.338,3.667-3.178,4.508-6.637,3.053C579.717,152.644,577.71,152.318,575.787,151.792z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M799.669,194.697c11.338-0.281,18.972,4.369,24.12,13.042
              c3.811,6.415,4.015,13.212-0.626,19.219c-7.834,10.142-16.121,19.934-24.2,29.887c-0.963,1.187-1.676,1.529-3.244,0.531
              c-7.338-4.671-7.49-5.317-2.021-11.884c5.861-7.038,11.732-14.07,17.479-21.202c5.018-6.227,5.156-11.496,0.696-16.601
              c-5.146-5.889-12.559-7.238-18.839-3.354c-2.566,1.587-4.694,3.692-6.615,6.025c-5.608,6.815-11.363,13.514-16.82,20.449
              c-1.949,2.477-3.403,2.674-5.461,0.419c-0.778-0.853-1.702-1.634-2.696-2.215c-3.024-1.767-2.394-3.366-0.411-5.742
              c15.896-19.052,31.655-38.219,47.463-57.347c3.607-4.365,7.352-8.622,10.807-13.102c1.619-2.099,2.695-2.093,4.724-0.482
              c6.198,4.923,6.286,4.839,1.299,10.894c-7.519,9.127-15.062,18.232-22.578,27.361C801.829,191.705,801.015,192.895,799.669,194.697
              z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M943.709,568.506c-5.649-3.089-11.3-6.177-16.947-9.264
              c-10.936-5.972-21.878-11.938-32.81-17.924c-2.473-1.355-4.571-10.767-2.779-12.806c1.327-1.511,2.443,0.146,3.419,0.689
              c9.586,5.337,19.2,10.634,28.609,16.271c2.999,1.798,5.221,1.593,8.125-0.022c13.946-7.753,28.002-15.309,42.022-22.926
              c1.439-0.782,2.909-1.51,5.155-2.672c0,3.972-0.041,7.361,0.014,10.749c0.04,2.45-2.011,2.842-3.536,3.654
              c-11.985,6.396-23.998,12.736-36.702,19.465c10.656,5.613,20.757,10.938,30.861,16.254c2.057,1.083,4.156,2.09,6.189,3.216
              c1.123,0.622,2.453,1.097,2.421,2.822c-0.06,3.291,1.071,7.48-1.002,9.538c-1.584,1.571-4.832-1.679-7.22-2.946
              C960.867,578.011,952.308,573.221,943.709,568.506z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M753.833,169.443c0.193-1.346-0.731-1.673-1.393-2.036
              c-2.342-1.281-4.26-2.37-1.771-5.462c1.934-2.403,2.903-6.043,6.888-2.461c1.766,1.588,2.578-0.06,3.374-1.345
              c2.45-3.959,5.004-7.859,7.303-11.904c1.269-2.231,2.315-2.554,4.632-1.142c6.822,4.162,6.898,4.037,2.718,10.79
              c-0.613,0.99-1.229,1.979-1.837,2.971c-1.475,2.411-4.136,4.843-4.098,7.23c0.042,2.629,3.951,3.422,6.265,4.762
              c3.068,1.776,1.212,3.387,0.029,4.645c-1.351,1.438-0.941,5.643-4.98,3.454c-2.377-1.288-4.68-4.571-7.137-3.365
              c-2.178,1.069-3.252,4.436-4.748,6.828c-5.908,9.448-11.896,18.848-17.616,28.409c-1.702,2.843-2.915,3.69-6.002,1.598
              c-5.875-3.981-6.015-3.783-2.316-9.716c6.332-10.164,12.671-20.323,19.005-30.485C752.76,171.232,753.351,170.237,753.833,169.443z
              "/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M907.222,315.611c8.802,1.958,13.585,6.736,15.523,14.38
              c0.604,2.39,0.636,4.066-2.818,3.928c-3.919-0.156-7.101,0.512-8.404-5.167c-1.388-6.047-7.504-8.096-13.731-6.106
              c-7.063,2.258-12.821,6.937-19.176,10.505c-3.184,1.789-6.242,3.803-9.352,5.724c-5.481,3.39-5.253,3.236-9.015-2.205
              c-2.313-3.347-1.516-4.748,1.721-6.661c13.587-8.028,27.061-16.25,40.447-24.606c2.958-1.847,4.69-1.781,5.948,1.557
              C909.428,309.779,914.647,312.623,907.222,315.611z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M736.021,148.284c-0.581,1.233-0.981,2.146-1.435,3.031
              c-7.333,14.342-14.738,28.648-21.959,43.046c-1.447,2.885-2.793,3.183-5.587,1.696c-6.364-3.389-6.435-3.229-3.255-9.421
              c7.056-13.736,14.082-27.489,21.179-41.204c0.597-1.153,1.03-3.439,3.069-2.11C730.662,145.037,734.279,145.338,736.021,148.284z"
              />
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M748.773,126.991c-0.034,3.698-3.223,6.628-7.214,6.633
              c-4.499,0.005-8.479-3.894-8.278-8.112c0.173-3.667,3.511-6.541,7.438-6.402C744.945,119.257,748.811,123.04,748.773,126.991z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#716573;" d="M676.001,121.092"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#E89EB8;" d="M693.778,412.803c-15.904-12.936-34.656-18.763-54.866-20.347
              c-34.482-2.702-65.1,5.711-89.592,31.439c-8.037,8.445-15.962,17.002-23.791,25.642c-1.896,2.092-2.887,2.408-4.879,0.032
              c-4.492-5.356-9.287-10.465-14.056-15.584c-11.624-12.478-23.714-24.466-39.381-31.879c-22.143-10.477-45.533-11.945-69.378-8.506
              c-21.414,3.087-40.401,11.596-54.956,27.958c-22.931,25.776-27.442,56.248-20.298,88.848c6.672,30.449,23.772,55.067,45.857,76.368
              c50.249,48.464,100.704,96.712,150.952,145.177c3.068,2.959,4.583,2.656,7.452-0.117c37.501-36.239,75.229-72.246,112.681-108.536
              c17.698-17.149,36.626-33.116,52.432-52.123c20.639-24.818,34.319-52.574,34.125-88.876
              C726.276,456.285,716.732,431.471,693.778,412.803z M665.568,525.893c-4.923,22.433-16.958,40.683-33.188,56.36
              c-35.945,34.721-72.078,69.249-108.021,103.973c-2.579,2.491-3.868,2.169-6.236-0.117c-35.729-34.466-71.591-68.795-107.33-103.251
              c-15.599-15.038-27.899-32.287-32.929-53.736c-11.598-49.458,17.833-86.445,71.247-86.395c19.458-0.59,38.319,7.072,53.733,23.092
              c5.081,5.281,10.277,10.483,14.938,16.119c2.855,3.454,4.439,2.936,7.063-0.109c6.847-7.948,14.072-15.531,21.916-22.556
              c24.977-22.37,70.183-20.177,92.412-5.272C661.376,468.887,671.881,497.12,665.568,525.893z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M972.75,471.51c-0.744-9.086-4.703-16.578-13.044-23.066
              c8.331,0.499,6.929-3.592,6.18-7.922c-0.57-3.293-1.79-4.024-4.907-3.428c-26.258,5.016-52.536,9.917-78.804,14.875
              c-0.947,0.179-2.678,0.656-2.657,0.853c0.318,3.1,0.501,6.297,1.471,9.221c0.791,2.388,3.197,0.882,4.716,0.613
              c10.601-1.869,21.167-3.936,32.534-6.09c-10.252,18.238-1.954,35.531,7.273,42.064c11.601,8.214,28.774,6.765,38.951-3.458
              C970.985,488.622,973.495,480.607,972.75,471.51z M942.359,492.644c-11.354,0.255-20.21-8.854-20.23-20.809
              c-0.02-11.384,8.992-19.983,20.979-20.017c11.105-0.031,20.271,8.974,20.507,20.148
              C963.85,483.121,954.339,492.375,942.359,492.644z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M954.236,400.609c-2.554-7.398-2.484-7.422-10.362-5.69
              c6.317-12.599-0.173-30.698-13.296-38.135c-12.768-7.234-31.551-2.346-39.659,10.344c-5.113,8.002-5.373,16.599-2.778,25.408
              c2.593,8.802,8.285,15.072,16.972,18.916c-6.309,3.06-6.307,3.059-3.647,9.342c0.26,0.611,0.481,1.239,0.691,1.869
              c0.549,1.641,1.589,1.807,3.071,1.19c15.926-6.634,31.85-13.27,47.811-19.816C955.018,403.223,954.824,402.31,954.236,400.609z
               M916.064,405.946c-10.894-0.189-20.065-10.097-19.929-21.527c0.125-10.582,10.64-19.899,22.338-19.796
              c10.659,0.094,19.494,9.771,19.409,21.26C937.8,397.033,927.882,406.153,916.064,405.946z"/>
          <path style="fill-rule:evenodd;clip-rule:evenodd;fill:#18181B;" d="M878.881,265.595c-5.608-13.358-19.234-21.928-31.906-20.068
              c-13.179,1.934-24.448,12.476-26.69,24.965c-2.079,11.576,5.742,26.446,17.358,33.001c5.669,3.199,11.748,4.571,18.225,3.897
              c1.006-0.104,2.983,0.245,2.847-1.207c-0.262-2.783-0.909-5.619-1.952-8.21c-0.831-2.067-2.977-0.169-4.257-0.643
              c-9.337,0.285-15.902-3.93-19.918-11.897c-3.42-6.786-2.865-13.453,1.722-19.738c1.875-2.57,3.013-2.649,5.123-0.062
              c8.632,10.579,17.482,20.979,26.295,31.41c1.125,1.332,1.78,3.529,4.486,1.335C880.358,290.162,883.857,277.448,878.881,265.595z
               M867.207,285.455c-7.308-8.67-14.24-16.955-21.25-25.177c-2.456-2.882-0.099-3.173,1.848-3.757
              c6.803-2.041,14.715,0.869,19.39,7.12C872.197,270.333,872.32,277.608,867.207,285.455z"/>
      </g>
      </svg>
      <span class="ml-3 text-xl text-mitherapy_purple-500">Mitherapy</span>
              <!-- -->
              
            </a>
            <p class="mt-2 text-sm text-gray-600 lg:text-gray-800">Connecting every individual to the best mental health care professionals.</p>
          </div>
            
          </div>
        </div>
        <div class="bg-gray-100">
          <div class="container mx-auto mb-0 py-4 px-5 flex flex-wrap flex-col sm:flex-row">
            <p class=" text-mitherapy_purple text-sm text-center sm:text-left">© 2020 MITHERAPY (PTY) LTD —
              <a href="https://twitter.com/mitherapysa" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@mitherapysa</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
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
              <a target="_blank"  href="/privacy-policy" class="text-xs">Privacy Policy</a>
              <span>/</span>
              <a target="_blank"  href="/terms-and-conditions" class="text-xs ">Terms and Conditions</a>
              <span>/</span>
            </p>
          </div>
        </div>
      </footer>