@extends("layout.app")
@section('content')
<div class=' w-screen h-screen  bg-[url("https://cdn.pixabay.com/photo/2021/06/24/11/18/background-6360861_1280.png")] bg-cover flex justify-center items-center '>
			<div class='h-small2 w-96 bg-white bg-opacity-50 rounded-xl py-10 px-4 border-t-2 border-r-4 border-b-2 border-opacity-30 border-gray-700'>
				<div class='font-Yanone_Kaffeesatz  text-4xl text-rose-500 uppercase text-center w-full'>
					Login into your account
				</div>
				<form method="POST" action="{{ route('login') }}" class=" w-full  space-y-2">
                    @csrf
					<div class='flex flex-col'>
						 <label for="email" class="font-ArchitectDaughter font-bold  text-xl">{{ __('Email Address') }}</label>

                            <div class="w-full">
                                <input id="email" type="email" class="bg-opacity-20 bg-yellow-200 text-black w-full form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
					</div>
					<div class='flex flex-col'>
						   <label for="password" class="font-ArchitectDaughter font-bold  text-xl">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="bg-opacity-20 bg-yellow-200 w-full form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
					</div>
					<div class="flex flex-col">
						     <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

					</div>
					<div class='flex flex-col'>
                        <div class="w-full flex justify-center text-white ">
						  <button type="submit" class="bg-black py-1 px-3 rounded-lg">
                                    {{ __('Login') }}
                            </button>
                            </div>

                                @if (Route::has('password.request'))
                                    <a class=" mt-3" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
					</div>
				</form>
			</div>
		</div>
    
@endsection