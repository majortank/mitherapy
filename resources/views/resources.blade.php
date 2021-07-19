@extends('main')
@section('contents')
@section('pageTitle', 'Resources')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="bg-gray-300 lg:bg-gradient-to-r lg:from-gray-300 lg:to-gray-200">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
              <div class="text-center mb-20">
                <h1 class="uppercase sm:text-3xl text-2xl font-medium text-center title-font text-gray-800 mb-4">Emergency numbers you have to save in your phone</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">In case of emergency do not use our services, these are top emergency numbers in South Africa that will be useful if you need help immediately.</p>
              </div>
              <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                <div class="p-2 sm:w-1/2 w-full">
                  <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class=" text-mitherapy_pink-600 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                      <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                      <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="uppercase title-font font-medium"><a href="tell:0861-322-322">0861 322 322 – Lifeline</a></span>
                  </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                  <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class=" text-mitherapy_pink-600 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                      <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                      <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="uppercase title-font font-medium"><a href="tell:0800 567 567">0800 567 567 – Suicide Crisis Line</a></span>
                  </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                  <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class=" text-mitherapy_pink-600 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                      <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                      <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="uppercase title-font font-medium"><a href="tell:011 234 4837">011 234 4837 – SADAG Mental Health line</a></span>
                  </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                  <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class=" text-mitherapy_pink-600 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                      <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                      <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="uppercase title-font font-medium"><a href="tell:082 911">082 911 - NETCARE 911 EMERGENCY CONTACT</a></span>
                  </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                  <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class=" text-mitherapy_pink-600 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                      <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                      <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="uppercase title-font font-medium"><a href="tell:0800 05 55 55">0800 05 55 55 – Childline</a></span>
                  </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                  <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class=" text-mitherapy_pink-600 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                      <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                      <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="uppercase title-font font-medium"><a href="tell:084 124">084 124 - ER24 EMERGENCY CONTACT</a></span>
                  </div>
                </div>
              </div>
          </section>
    </body>
    
</html>
@endsection