@extends('main')
@section('contents')
@section('pageTitle', 'Why Us?')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="bg-white">
      <section class="text-gray-600 mt-4 body-font">
        <div class="container mx-auto flex px-5 items-center justify-center flex-col">
          <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Mitherapy - For everyone.</h1>
            <p class="mb-8 leading-relaxed text-left">
              Since 2020, Mitherapy (PTY) LTD. has been looking for ways enhance the lives of students (18+), and individuals (13+) who may not be students. 



We help them embark on a journey of improving their mental health by connecting them to professional mental health specialists who will help with mental health issues, and improve their sense of well&#8211;being through <span class=" text-mitherapy_pink-700">instant chat</span>, not only but also <span class=" text-mitherapy_pink-700">call</span> and <span class=" text-mitherapy_pink-700">video</span>. We provide student therapy, individual therapy and group therapy, which are practiced by professionals we work with,
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
            
          </div>
        </div>
      </section>
        <section class="text-gray-600 body-font lg:m-32 lg:mt-1">
            <div class="container px-5 py-24 mx-auto">
              <div class="flex flex-col text-center w-full">
                <h1 class="text-4xl font-medium title-font mb-4 text-gray-900 tracking-widest">OUR TEAM</h1>
                <div class=" mt-5 w-full mx-auto rounded-lg bg-gray-200 shadow-lg px-5 pt-5 pb-10 text-gray-800" style="max-width: 500px">
                  <div class="w-full pt-1 pb-5">
                      <div class="overflow-hidden bg-mitherapy_purple-500 rounded-full w-20 h-20 mt-1 mx-auto shadow-lg">
                          <img src="{{asset('img\Submark_W.svg')}}" alt="">
                      </div>
                  </div>
                  <div class="w-full mb-10">
                      <div class="text-3xl text-mitherapy_purple-500 text-left leading-tight h-3">&#34;</div>
                      <p class="text-sm text-mitherapy_pink-800 text-center px-5">The team that is looking for ways to make life better for everyone.</p>
                      <div class="text-3xl text-mitherapy_purple-500 text-right leading-tight h-3 -mt-3">&#34;</div>
                  </div>
                  <div class="w-full">
                      <p class="text-md text-mitherapy_pink-800 font-bold text-center">For everyone</p>
                      <a href="https://twitter.com/mitherapysa" rel="noopener noreferrer" class="text-mitherapy_purple-500  ml-1" target="_blank">@mitherapysa</a>
                  </div>
              </div>
              </div>
              <div class="flex flex-wrap m-4">
                <div class="p-4 lg:w-1/2">
                  <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                
                    <img alt="team" class="scale-75 rounded-lg w-48 h-48  object-center sm:mb-0 mb-4" src="{{asset('img\jm.jpg')}}">
                  
                    <div class="flex-grow sm:pl-8">
                      <h2 class="title-font font-medium text-lg text-gray-900">Jeremiah Nyembe</h2>
                      <h3 class="text-gray-500 mb-3">CEO</h3>
                      <p class="mb-4">Chief Exeutive Officer @mitherapy</p>
                     <span class="inline-flex text-gray-500">
                <a href="https://www.instagram.com/mitherapysa/" class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
              </span>
                    </div>
                  </div>
                </div>
                <div class="p-4 lg:w-1/2">
                  <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="scale-75 rounded-lg w-48 h-48  object-center sm:mb-0 mb-4" src="{{asset('img\ttt.jpg')}}">
                    <div class="flex-grow sm:pl-8">
                      <h2 class="title-font font-medium text-lg text-gray-900">Tankiso Thebe</h2>
                      <h3 class="text-gray-500 mb-3">CTO</h3>
                      <p class="mb-4">Chief Technology Officer @mitherapy</p>
                     <span class="inline-flex text-gray-500">
                <a href="https://www.instagram.com/mitherapysa/" class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
              </span>
                    </div>
                  </div>
                </div>
                <div class="p-4 lg:w-1/2">
                  <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                    <img alt="team" class="scale-75 rounded-lg w-48 h-48  object-center sm:mb-0 mb-4" src="{{asset('img\mk.jpg')}}">
                    <div class="flex-grow sm:pl-8">
                      <h2 class="title-font font-medium text-lg text-gray-900">Mkateko Rambau</h2>
                      <h3 class="text-gray-500 mb-3">CFO</h3>
                      <p class="mb-4">Chief Finance Officer @mitherapy</p>
                     <span class="inline-flex text-gray-500">
                <a href="https://www.instagram.com/mitherapysa/" class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
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
                     <span class="inline-flex text-gray-500">
                <a href="https://www.instagram.com/mitherapysa/" class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
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
                        <span class="inline-flex text-gray-500">
                          <a href="https://www.instagram.com/mitherapysa/" class="ml-3 text-gray-500">
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                              </svg>
                            </a>
                        </span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </section>
    </body>
    
</html>
@endsection