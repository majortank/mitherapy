@extends('main')
@section('contents')
@section('pageTitle', 'Resources')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="bg-gray-300 lg:bg-gradient-to-r lg:from-gray-300 lg:to-gray-200">
        <div >
            @if (\Session::has('success'))
             <div >
              <p>{{ \Session::get('success') }}</p>
             </div><br />
             @endif
             @if (\Session::has('failure'))
             <div >
              <p>{{ \Session::get('failure') }}</p>
             </div><br />
             @endif
             <h2>Laravel Newsletter Tutorial With Example</h2><br/>
             <form method="GET" action="{{url('newsletter')}}">
              @csrf
              </div>
              <div >
               <div ></div>
                <div >
                 <label for="Email">Email:</label>
                 <input type=text name=email>
                </div>
               </div>
              <div >
               <div ></div>
               <div >
                <button type=submit >Subscribe</button>
               </div>
              </div>
             </form>
            </div>
    </body>
    
</html>
@endsection