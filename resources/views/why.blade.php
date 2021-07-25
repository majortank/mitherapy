@extends('main')
@section('contents')
@section('pageTitle', 'Why Us?')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="bg-gray-300 lg:bg-gradient-to-r lg:from-gray-300 lg:to-white">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-col text-center w-full mb-20">
                <h1 class="text-4xl font-medium title-font mb-4 text-gray-900 tracking-widest">OUR TEAM</h1>
                <div class=" mt-10 w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800" style="max-width: 500px">
                  <div class="w-full pt-1 pb-5">
                      <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                          <img src="{{asset('img\Submark.svg')}}" alt="">
                      </div>
                  </div>
                  <div class="w-full mb-10">
                      <div class="text-3xl text-mitherapy_purple-500 text-left leading-tight h-3">“</div>
                      <p class="text-sm text-mitherapy_pink-800 text-center px-5">The team that is looking for ways to make life better for everyone.</p>
                      <div class="text-3xl text-mitherapy_purple-500 text-right leading-tight h-3 -mt-3">”</div>
                  </div>
                  <div class="w-full">
                      <p class="text-md text-mitherapy_pink-800 font-bold text-center">For everyone</p>
                      <a href="https://twitter.com/mitherapysa" rel="noopener noreferrer" class="text-mitherapy_purple-500  ml-1" target="_blank">@mitherapysa</a>
                  </div>
              </div>
              </div>
              <div class="flex flex-wrap -m-4">
                <div class="p-4 lg:w-1/2">
                  <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="{{asset('img\jm.jpg')}}">
                    <div class="flex-grow sm:pl-8">
                      <h2 class="title-font font-medium text-lg text-gray-900">Jeremiah Nyembe</h2>
                      <h3 class="text-gray-500 mb-3">CEO</h3>
                      <p class="mb-4">Chief Exeutive Officer @mitherapy</p>
                      <span class="inline-flex">
                        <a class="text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="p-4 lg:w-1/2">
                  <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="{{asset('img\ttt.jpg')}}">
                    <div class="flex-grow sm:pl-8">
                      <h2 class="title-font font-medium text-lg text-gray-900">Tankiso Thebe</h2>
                      <h3 class="text-gray-500 mb-3">CTO</h3>
                      <p class="mb-4">Chief Technology Officer @mitherapy</p>
                      <span class="inline-flex">
                        <a class="text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="p-4 lg:w-1/2">
                  <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="{{asset('img\mk.jpg')}}">
                    <div class="flex-grow sm:pl-8">
                      <h2 class="title-font font-medium text-lg text-gray-900">Mkateko Rambau</h2>
                      <h3 class="text-gray-500 mb-3">CFO</h3>
                      <p class="mb-4">Chief Finance Officer @mitherapy</p>
                      <span class="inline-flex">
                        <a class="text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="p-4 lg:w-1/2">
                  <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="{{asset('img\lg.jpg')}}">
                    <div class="flex-grow sm:pl-8">
                      <h2 class="title-font font-medium text-lg text-gray-900">Lutho Gxashe</h2>
                      <h3 class="text-gray-500 mb-3">CMO</h3>
                      <p class="mb-4">Chief Marketing Officer @mitherapy</p>
                      <span class="inline-flex">
                        <a class="text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                          </svg>
                        </a>
                        <a class="ml-2 text-gray-500">
                          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                          </svg>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="p-4 lg:w-1/2">
                    <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                      <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="{{asset('img\tt.jpg')}}">
                      <div class="flex-grow sm:pl-8">
                        <h2 class="title-font font-medium text-lg text-gray-900">Tumisho Thobejane</h2>
                        <h3 class="text-gray-500 mb-3">CBO</h3>
                        <p class="mb-4">Chief Business Officer @mitherapy</p>
                        <span class="inline-flex">
                          <a class="text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                          </a>
                          <a class="ml-2 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                            </svg>
                          </a>
                          <a class="ml-2 text-gray-500">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </section>
          <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
              <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Mitherapy - For everyone</h1>
                <p class="mb-8 leading-relaxed text-left">
                  Since 2020, Mitherapy (PTY) LTD. has been looking for ways enhance the lives of students (18+), and individuals (13+) who may not be students. 

  

We help them embark on a journey of improving their mental health by connecting them to professional mental health specialists who will help with mental health issues, and improve their sense of well‐being through <span class=" text-mitherapy_pink-700">instant chat</span>, not only but also <span class=" text-mitherapy_pink-700">call</span> and <span class=" text-mitherapy_pink-700">video</span>. We provide student therapy, individual therapy and group therapy, which are practiced by professionals we work with,
 also professional counselors looking to make income are welcome to join our planform. There are also important mental health resources that we offer on our  
 <a class="font-medium text-mitherapy_pink-700 dark:text-gray-200 hover:text-mitherapy_pink-600 hover:underline" title="Get up to date health resources" href="/Resources">resources</a> page.
<br>The proud moment was when Enactus ZA and MTN announced that  

they will invest on us in building the solution around mental health. 

So we formed a team  that comprises of different types of skills.
We want to be <i>"the"</i> leading technology company when it comes to the health sector. Obviousy our  

aim is to provide you with the best psychological platform that will enable you to  

offload the burden you have at the comfort of your space. We have the best  

psychologist on our platform that have been on the industry for years. 

                </p>
                <br>
                <strong class="text-center">Curious to know more about us, you can leave your deatils below we promise to say hi!</strong>
                <div class="mt-10 flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                  <div class="relative flex-grow w-full">
                    <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
                    <input type="text" id="full-name" name="full-name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-mitherapy_pink-400 focus:border-mitherapy_pink-500 focus:bg-transparent focus:ring-2 focus:ring-mitherapy_pink text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                  <div class="relative flex-grow w-full">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-mitherapy_pink-400 focus:border-mitherapy_pink-500 focus:bg-transparent focus:ring-2 focus:ring-mitherapy_pink text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                  <button class=" border-0 py-2 px-8 text-white transition-colors duration-200 transform bg-mitherapy_pink-700 hover:bg-mitherapy_pink-600 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-mitherapy_pink-700 focus:ring-opacity-50 active:bg-mitherapy_pink-700 text-lg rounded-sm">Hi!</button>
                </div>
              </div>
            </div>
          </section>
    </body>
    
</html>
@endsection