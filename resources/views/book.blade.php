<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body class="bg-gray-300 lg:bg-gradient-to-r lg:from-gray-300 lg:via-mitherapy_pink-600 lg:to-mitherapy_purple-400">
        <div class="bg-gray-100 grid lg:grid-cols-2 2xl:grid-cols-5">
                <div class="px-8 py-12 max-w-md mx-auto sm:max-w-xl lg:px-12 lg:py-24 lg:max-w-full xl:mr-0 2xl:col-span-2">
                    <div class="xl:max-w-xl">
                    <img class="h-20" src="{{ asset('img\logo.svg') }}" alt="Mitherapy" />
                    <img class="mt-6 rounded-lg shadow-xl sm:mt-8 sm:h-64 sm:w-full sm:object-cover object-center lg:hidden" src="{{ asset('img\leilani-angel-vrsdWLs6nZw-unsplash.jpg')}}" alt="Ethnic man lying near psychologist" />
                    <h1 class="mt-6 text-2xl font-bold text-gray-900 sm:mt-8 sm:text-4xl lg:text-3xl xl:text-4xl">You can get therapy from home right now.<br class="sm:inline md:inline lg:hidden"> <span class="text-mitherapy_pink-700">Take advantage of it.</span></h1>
                    <p class="mt-4 text-gray-700 text-xl">
                        Mitherapy helps you find therapy from the comfort of your home
                        so you can be comfortable during your therapy sessions even when 
                        you're in lock down.
                    </p>

                    <div class="mt-4 sm:mt-6">
                        <a class="inline-block px-5 py-3 rounded-lg shadow-lg bg-mitherapy_pink-700 hover:bg-mitherapy_pink-600 hover:-translate-y-0.5 transform transition focus:outline-none focus:ring focus:ring-offset-2 focus:ring-mitherapy_pink-700 focus:ring-opacity-50 active:bg-mitherapy_pink-700 text-white uppercase tracking-wider font-semibold text-base" href="#" >Book your well-mind</a>
                    </div> 
                    </div>
                    
                </div>
                <div class="hidden relative lg:block 2xl:col-span-3" >
                    <img class="absolute inset-0 w-full h-full object-cover object-center" src="{{ asset('img\leilani-angel-vrsdWLs6nZw-unsplash.jpg')}}" alt="Ethnic man lying near psychologist" />
                </div>
            </div>
    </body>
</html>