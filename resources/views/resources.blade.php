@extends('main')
@section('contents')
@section('pageTitle', 'Resources')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="bg-gray-300 lg:bg-gradient-to-r lg:from-gray-300 lg:to-gray-200">
      <div class="backdrop-filter backdrop-blur-lg fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal-id">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          
          <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
      
          
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      
         
          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mt-8 mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                  
                  <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                  </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                  <h3 class=" mt-4 text-lg leading-6 font-medium text-gray-900" id="modal-title">
                    No Responsibility Disclaimer.
                  </h3>
                  <div class="mt-4">
                    <p class="text-sm text-gray-500">
                      <p class=" break-words text-justify text-base">While every effort is made by Mitherapy to ensure that accurate information is disseminated through this resources page, Mitherapy makes no representation about this information for any purpose.</p>
                      <br />
                      <p class=" break-words text-justify text-base">It is provided “as is” without express or implied warranty.</p>
                      <br />
                      <p class=" break-words text-justify text-base">Mitherapy disclaims all warranties with regard to this information, including all implied warranties or merchantability and fitness. In no event shall Mitherapy be liable for any special indirect or consequential damages or any damages whatsoever resulting from loss of income or profits, whether in an action of contract, negligible or other tortious action, arising in connection with the use or performance of this information.</p>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse modal-action">
              <button onclick="toggleModal('modal-id')" class="btn btn-outline btn-secondary " data-dismiss="modal">I accept</button> 
              <button onclick="window.location='{{ url("/") }}'" class="btn btn-outline btn-error">I do not accept</button>
            </div>
          </div>
        </div>
      </div>
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