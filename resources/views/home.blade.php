@extends('main')
@section('contents')
@section('pageTitle', 'Home')
<html data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="bg-white">
      
      <!-- s1 -->
      <section data-theme="dark" class="bg-gradient-to-r from-gray-100 via-mitherapy_pink-400  to-mitherapy_purple-100 lg:bg-gradient-to-r lg:from-gray-300 lg:via-mitherapy_pink-600 lg:to-mitherapy_purple-400">
                  <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-128 lg:py-16 lg:flex-row lg:items-center lg:space-x-6">
                          <div class="w-full lg:w-1/2">
                              <div class="lg:max-w-lg">
                                  <h1 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">You can get therapy from home right now.<span class="text-mitherapy_pink-700 ">Take advantage of it.</span></h1>
                                  <p class="mt-2 text-gray-800 lg:text-gray-800 dark:text-gray-300">Mitherapy helps you find therapy from the comfort of your home
                                      so you can be comfortable during your therapy sessions even when 
                                      you're in lock down. We work with professional counselors in SA to give you the therapy you need.</p>
                                  <div class="grid gap-6 mt-8 sm:grid-cols-2">
                                      <div class="flex items-center space-x-6 text-gray-800 dark:text-gray-200">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class=" text-mitherapy_pink-700 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                          <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                          <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
              
                                          <span>Students therapy</span>
                                      </div>
              
                                      <div class="flex items-center space-x-6 text-gray-800 dark:text-gray-200">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class=" text-mitherapy_pink-700 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                          <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                          <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
              
                                          <span>Individuals therapy</span>
                                      </div>
              
                                      <div class="flex items-center space-x-6 text-gray-800 dark:text-gray-200">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class=" text-mitherapy_pink-700 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                          <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                          <path d="M22 4L12 14.01l-3-3"></path>
                                        </svg>
              
                                          <span>Group therapy</span>
                                      </div>
                                  </div>
                                  {{-- <div class="mt-10">
                                    <button onclick="window.location='{{ url("/book-a-session") }}'" type="button" class="items-center px-4 py-2 text-lg self-center leading-6 font-medium rounded-sm text-white transition-colors duration-200 transform bg-mitherapy_pink-700 hover:bg-mitherapy_pink-600 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-mitherapy_pink-700 focus:ring-opacity-50 active:bg-mitherapy_pink-700">
                                      Book Your Well Mind
                                    </button>
                                  </div> --}}
                              </div>
                          </div>
                  
                          <div id="book" class="flex items-center justify-center w-full h-96 lg:w-1/2">
                              <img class="object-cover w-full h-full max-w-2xl rounded-md" src="https://mitherapyassets.s3.amazonaws.com/leilani-angel-vrsdWLs6nZw-unsplash.jpg" alt="glasses photo">
                          </div>
                          
                      </div>

                      
                  </section>
                  <!-- more -->
      <div x-data="{ show: false }" >
        
        
            <div class="bg-mitherapy_purple-500 text-center py-4 lg:px-4">
              <button @click="show = !show" class=" invisible w-full outline-none border-none">
              <div class="btn p-2 visible bg-mitherapy_pink-800 hover:bg-mitherapy_pink-600 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                <span class="flex rounded-full bg-mitherapy_purple-400 uppercase px-2 py-1 text-xs font-bold mr-3 animate-pulse">Start Now</span>
                <span class="font-semibold mr-2 text-left flex-auto">Book a therapy session of your choice through WhatsApp</span>
                <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
              </div>
            </button>
            </div>
         
            

            
        <section class="bg-white">
        <div x-show="show" class="container px-6 py-8 mx-auto">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 ">
              <div class=" bg-mitherapy_purple-500 rounded-lg md:mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mt-2 ml-2 text-mitherapy_pink-600" fill="none" viewBox="0 0 30 30" stroke="currentColor">
                  <path d="M12 14l9-5-9-5-9 5 9 5z" />
                  <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>    

                <h1 class="text-xl font-semibold text-mitherapy_pink-600 dark:text-white ml-2">Student therapy</h1>
                
                <p class="ml-2 mr-2 mt-2 mb-0  text-gray-100 dark:text-gray-400 tracking-tighter">
                  Student Therapy session helps students become self-aware and reach their highest potential while dealing with anxiety and stress. 
                  The therapy provides a happy and comfortable environment for students to discuss their problems regarding their academic and social life.
                </p>
                
                <button onclick="window.location='{{ url("https://api.whatsapp.com/send/?phone=27638744947&text=Hi+-+I+would+like+to+book+student+therapy%3F&app_absent=0") }}'" class="m-4 mt-6 btn btn-outline border-mitherapy_pink-800 hover:bg-mitherapy_pink-600 hover:text-white">Book for a student</button>

            </div>

            <div class=" bg-mitherapy_purple-500 rounded-lg md:mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mt-2 ml-2 text-mitherapy_pink-600" fill="none" viewBox="0 0 30 30" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>   

              <h1 class="text-xl font-semibold text-mitherapy_pink-600 dark:text-white ml-2">Individual therapy</h1>
              
              <p class="ml-2 mr-2 mt-2 mb-0  text-gray-100 dark:text-gray-400 tracking-tighter">
                  Individual therapy session is a joint process between a therapist and a person in therapy. The goals of therapy is to inspire change or improve quality of life. 
                  People may seek therapy for help with issues that are hard to face alone.
              </p>
              
              <button onclick="window.location='{{ url("https://api.whatsapp.com/send/?phone=27638744947&text=Hi+-+I+would+like+to+book+individual+therapy%3F&app_absent=0") }}'" class="m-4 mt-6 btn btn-outline border-mitherapy_pink-800 hover:bg-mitherapy_pink-600 hover:text-white">Book for one person</button>

          </div>
                
                <div class=" bg-mitherapy_purple-500 rounded-lg md:mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mt-2 ml-2 text-mitherapy_pink-600" fill="none" viewBox="0 0 30 30" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                
                    <h1 class="text-xl font-semibold text-mitherapy_pink-600 dark:text-white ml-2">Group therapy</h1>
                
                    <p class="ml-2 mr-2 mt-2 mb-0 text-gray-100  dark:text-gray-400 tracking-tighter">
                        Group therapy session is a form of psychotherapy in which 2 or more patients meets to discuss a common problem. 
                        Group counseling sessions take place under the guidance and supervision of a licensed mental health counselor.
                    </p>
                    <button onclick="window.location='{{ url("https://api.whatsapp.com/send/?phone=27638744947&text=Hi+-+I+would+like+to+book+group+therapy%3F&app_absent=0") }}'"  class="m-4 mt-6 btn btn-outline border-mitherapy_pink-800 hover:bg-mitherapy_pink-600 hover:text-white">Book for a group</button>

                </div>
            </div>
        </div>
    </section>
        
    </div>
      <!-- more -->
                <!-- end s1 -->
    <section class="bg-gray-100 lg:py-12 lg:flex lg:justify-center">
        <div class="bg-white lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/2">
                <div class=" h-96 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('https://mitherapyassets.s3.amazonaws.com/dollar-gill-jQDeaASE-kQ-unsplash.jpg')"></div>
            </div>

            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">Counsel Your New <span class="text-mitherapy_pink-700 dark:text-mitherapy_pink-700 ">Client</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">You are a professional or graduate counselor, we connect you to clients that you can counsel remotely through chat, video, and call. </p>
                
                <div class="mt-4">
                    <a href="https://forms.gle/vRy3Ns5EMpshFdRAA" class="rounded-sm text-lg px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-mitherapy_pink-700 hover:bg-mitherapy_pink-600 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-mitherapy_pink-700 focus:ring-opacity-50 active:bg-mitherapy_pink-700">Apply Here</a>
                    <a href="https://www.facebook.com/job_opening/526904738342820"  class="ml-2 inline-flex mt-10"> <span class=" text-gray-600">or on facebook</span><span class="ml-2 inline-flex"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white w-5 h-5"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/>
                    </svg></span>
                    </a>
                </div>
                
            </div>
        </div>
        
        </div>
    </section>

    
    <!-- -->
    
    
    </body>
    
</html>
@endsection
