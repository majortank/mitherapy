@extends('main')
@section('contents')
@section('pageTitle', 'How it works!')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
         <body class="bg-gray-200">
      <h1 class="text-center mt-8 font-medium text-4xl text-gray-800">How to book your session.</h1>
        <section class="hidden lg:block m-32 text-gray-800 body-font">
          <ul class="w-full steps">
            <li data-content="?" class="step step-neutral"> <span class=" text-mitherapy_pink-800">Click on </span>
              <button onclick="window.location='{{ url("/#book") }}'" class=" btn-disabled mt-1 mb-1 btn btn-primary btn-sm bg-green-600 hover:bg-green-700 hover:border-teal-600 border-teal-600 rounded-full">Book your well mind</button>
              on the top right of your screen or <br/>
              Go to our <a href="{{url('/')}}"><span class="text-mitherapy_pink-700">Home page.</span></a>
            </li> 
            <li data-content="!" class="step step-neutral">
              Now when you are at the Home page<span class="text-mitherapy_pink-800">Click on</span>
              <div class=" btn btn-disabled visible bg-mitherapy_pink-800 hover:bg-mitherapy_pink-600 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                <button  class=" mt-1 mb-1 btn btn-primary btn-sm bg-mitherapy_purple-400 btn-disabled uppercase border-none rounded-full">Start Now</button>
                <span class="font-semibold mr-2 text-left flex-auto">Book...</span>
                <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
              </div>
            </li> 
            <li data-content="✓" class="step step-neutral">
              You will be presented with three options, <span class=" text-mitherapy_pink-800">pick one.</span><br />
              <ul>
                <li class=" list-decimal">Student Therapy</li>
                <li class=" list-decimal">Individual Therapy</li>
                <li class=" list-decimal">Group Therapy</li>
              </ul>
            </li> 
            <li data-content="✕" class="step step-neutral">The website will ask to open WhatsApp, <span class="text-mitherapy_pink-800">continue to chat.</span></li> 
            <li data-content="★" class="step step-neutral">Nice, our sales assistant will now help you book your well mind.</li> 
          </ul>            
        </section>

        <section class="lg:hidden  mt-4 text-gray-600 body-font">
          <div class="container px-5 mx-auto flex flex-wrap">
            <div class="flex relative pt-10 pb-20 sm:items-center sm:w-full md:w-2/3 mx-auto">
              
              <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">1</div>
              <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                
                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                  <p class="leading-relaxed w-full">
                    Click on </span>
              <button  class=" btn-disabled mt-1 mb-1 btn btn-primary btn-sm bg-green-600 hover:bg-green-700 hover:border-teal-600 border-teal-600 rounded-full">Book your well mind</button>
              on the top right of your screen or <br/>
              Go to our <a href="{{url('/')}}"><span class="text-mitherapy_pink-700">Home page.</span></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="flex relative pb-20 sm:items-center sm:w-full md:w-2/3 mx-auto">
              
              <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">2</div>
              <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
               
                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                  <p class="leading-relaxed">
                    Now when you are there <span class="text-mitherapy_pink-800">Click on</span> 
                    <div class="btn visible bg-mitherapy_pink-800 hover:bg-mitherapy_pink-600 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                      <button  class="mt-1 mb-1 btn btn-primary btn-sm bg-mitherapy_purple-400 btn-disabled uppercase border-none rounded-full">Start Now</button>
                      <span class="font-semibold mr-2 text-left flex-auto">Book...</span>
                      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                    </div> 
                    to show available therapy types.
                  </p>
                </div>
              </div>
            </div>
            <div class="flex relative pb-20 sm:items-center sm:w-full md:w-2/3 mx-auto">
              
              <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">3</div>
              <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                
                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                  <p class=" leading-relaxed">
                    You will be presented with three options, <span class=" text-mitherapy_pink-800">pick one.</span><br />
              <ul>
                <li class=" list-decimal">Student Therapy</li>
                <li class=" list-decimal">Individual Therapy</li>
                <li class=" list-decimal">Group Therapy</li>
              </ul>
                  </p>
                </div>
              </div>
            </div>
            <div class="flex relative pb-10 sm:items-center sm:w-full md:w-2/3 mx-auto">
              
              <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">4</div>
              <div class="flex-grow pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                
                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                  
                  <p class="leading-relaxed">The website will ask to open WhatsApp, <span class="text-mitherapy_pink-800">continue to chat.</p>
                </div>
              </div>
            </div>

            <div class="flex relative pb-10 sm:items-center sm:w-full md:w-2/3 mx-auto">
              <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-indigo-500 text-white relative z-10 title-font font-medium text-sm">5</div>
              <div class="flex-grow pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                
                <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                  
                  <p class="leading-relaxed">Nice, our sales assistant will now help you book your well mind.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
    </body>
    
</html>
@endsection