@extends('main')
@section('contents')
@section('pageTitle', 'Home')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="bg-gradient-to-r from-gray-100 via-mitherapy_pink-400  to-mitherapy_purple-100 lg:bg-gradient-to-r lg:from-gray-300 lg:via-mitherapy_pink-600 lg:to-mitherapy_purple-400">

        <!-- -->
        <div class="carousel relative shadow-2xl bg-white">
          <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:100%;">
              <div class="block h-full w-full bg-gradient-to-r from-gray-100 via-mitherapy_pink-400  to-mitherapy_purple-100 lg:bg-gradient-to-r lg:from-gray-300 lg:via-mitherapy_pink-600 lg:to-mitherapy_purple-400">
                <!-- s1 -->
                <section>
                  <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-128 lg:py-16 lg:flex-row lg:items-center lg:space-x-6">
                          <div class="w-full lg:w-1/2">
                              <div class="lg:max-w-lg">
                                  <h1 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">You can get therapy from home right now.<span class="text-mitherapy_pink-700 ">Take advantage of it.</span></h1>
                                  <p class="mt-2 text-gray-800 lg:text-gray-800 dark:text-gray-300">Mitherapy helps you find therapy from the comfort of your home
                                      so you can be comfortable during your therapy sessions even when 
                                      you're in lock down. We work with professional counselors in SA to find you the therapy you need.</p>
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
                                  <div class="mt-10">
                                    <button onclick="window.location='{{ url("/book-a-session") }}'" type="button" class="items-center px-4 py-2 text-lg self-center leading-6 font-medium rounded-sm text-white transition-colors duration-200 transform bg-mitherapy_pink-700 hover:bg-mitherapy_pink-600 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-mitherapy_pink-700 focus:ring-opacity-50 active:bg-mitherapy_pink-700">
                                      Book Your Well Mind
                                    </button>
                                  </div>
                              </div>
                          </div>
                  
                          <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                              <img class="object-cover w-full h-full max-w-2xl rounded-md" src="https://mitherapyassets.s3.amazonaws.com/leilani-angel-vrsdWLs6nZw-unsplash.jpg" alt="glasses photo">
                          </div>
                          
                      </div>
                  </section>
                <!-- end s1 -->
              </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            
            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div class="block h-full w-full bg-orange-500 text-white text-5xl text-center">Slide 2</div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
            
            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
              <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">Slide 3</div>
            </div>
            <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        
            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
              <li class="inline-block mr-3">
                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
              </li>
              <li class="inline-block mr-3">
                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
              </li>
              <li class="inline-block mr-3">
                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
              </li>
            </ol>
            
          </div>
        </div>
      <!-- -->
      <!-- more -->
      <div x-data="{ show: false }" >
        <button @click="show = !show" class="rounded-md sm:ml-1 md:ml-1 sm:mt-2 md:mt-2 lg:ml-10 lg:m-4 relative z-10 block p-2  transition-colors duration-200 transform bg-mitherapy_pink-700 hover:bg-mitherapy_pink-600 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-mitherapy_pink-700 focus:ring-opacity-50 active:bg-mitherapy_pink-700">
            <div class="flex justify-center">
                <svg class="animate-bounce-slow w-6 h-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M19 14l-7 7m0 0l-7-7m7 7V3" fill="#D64C7C"></path>
                  </svg>
              </div>
            </button>
            

            
        <section class="bg-white dark:bg-gray-800">
        <div x-show="show" class="container px-6 py-8 mx-auto">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
              <div class="hover:animate-wiggle bg-mitherapy_purple-500 rounded-lg md:mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mt-2 ml-2 text-mitherapy_pink-600" fill="none" viewBox="0 0 30 30" stroke="currentColor">
                  <path d="M12 14l9-5-9-5-9 5 9 5z" />
                  <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>    

                <h1 class="m-4 text-xl font-semibold text-mitherapy_pink-600 dark:text-white">Student therapy</h1>
                
                <p class="m-4 text-gray-100 dark:text-gray-400 tracking-tighter">
                  Student Therapy session aims to help students become self-aware and reach their highest potential while dealing with anxiety and stress. 
                  The therapy session provides a happy and comfortable environment for students to discuss their problems regarding their academic and social life.
                </p>
            </div>
    
                <div class=" hover:animate-wiggle bg-mitherapy_purple-500 rounded-lg md:mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mt-2 ml-2 text-mitherapy_pink-600" fill="none" viewBox="0 0 30 30" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
    
                    <h1 class="m-4 text-xl font-semibold text-mitherapy_pink-600 dark:text-white ml-2">Individual therapy</h1>
                    
                    <p class="m-4 text-gray-100 dark:text-gray-400 ml-2">
                        Individual therapy session is a joint process between a therapist and a person in therapy. The goals of therapy is to inspire change or improve quality of life. 
                        People may seek therapy for help with issues that are hard to face alone.
                    </p>
                </div>
                
                <div class="hover:animate-wiggle bg-mitherapy_purple-500 rounded-lg md:mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mt-2 ml-2 text-mitherapy_pink-600" fill="none" viewBox="0 0 30 30" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                
                    <h1 class="m-4 text-xl font-semibold text-mitherapy_pink-600 dark:text-white ml-2">Group therapy</h1>
                
                    <p class="m-4 text-gray-100  dark:text-gray-400 ml-2">
                        Group therapy session is a form of psychotherapy in which 2 or more patients meets to discuss a common problem. 
                        Group counseling sessions take place under the guidance and supervision of a licensed mental health counselor.
                    </p>
                </div>
            </div>
        </div>
    </section>
        
    </div>
      <!-- more -->
    
    <hr>
    <section class="bg-gray-100 dark:bg-gray-900 lg:py-12 lg:flex lg:justify-center">
        <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/2">
                <div class=" h-96 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('https://mitherapyassets.s3.amazonaws.com/dollar-gill-jQDeaASE-kQ-unsplash.jpg')"></div>
            </div>

            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">Counsel Your New <span class="text-mitherapy_pink-700 dark:text-mitherapy_pink-700 ">Client</span></h2>
                <p class="mt-4 text-gray-600 dark:text-gray-400">You are a professional or graduate counselor, we connect you to clients that you can counsel remotely through chat, video, and call. </p>
                
                <div class="mt-8">
                    <a href="#" class="rounded-sm text-lg px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-mitherapy_pink-700 hover:bg-mitherapy_pink-600 focus:outline-none focus:ring focus:ring-offset-2 focus:ring-mitherapy_pink-700 focus:ring-opacity-50 active:bg-mitherapy_pink-700">Start Now</a>
                </div>
            </div>
        </div>
        
        </div>
    </section>

    
    <!-- -->
    
    
    </body>
    
</html>
@endsection
