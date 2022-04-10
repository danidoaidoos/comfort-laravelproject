<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARCADEBLOGS</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('sass/app.scss') }}" rel="stylesheet"> --}}
</head>
<body>
   <div class="h-10 w-screen bg-zinc-900  flex justify-around items-center text-white font-ArchitectDaughter"  >
   <div class="flex space-x-2 capitalize">
    <div class="cursor-pointer"><a href={{ url("/") }}>Arcadeblog</a></div>
    <div class="cursor-pointer"><a href={{ url("/profile") }}>membership</a></div>
    <div class="text-lime-300 font-shizuru font-extrabold cursor-pointer">
        @if (Auth::check())
        <a href="/blog/create">write</a>
         @endif</div>
   </div>
   <div class="flex space-x-2 capitalize">
    {{-- <div><a href={{ url("/blog") }}>blog</a></div> --}}
   @guest
                            @if (Route::has('login'))
                               <div>
                                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                               </div>
                            @endif

                            @if (Route::has('register'))
                                <div>
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else
                            <li class=" flex flex-row space-x-2">
                                <div>
                                <a  class="" href="#" role="button" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                </div>
                                <div class="" aria-labelledby="navbarDropdown">
                                    <a class="text-white" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
   </div>
   </div>
  
  
   <div>@yield('content')</div>
   <div>@include('layout.footer')</div>
    
</body>
</html>