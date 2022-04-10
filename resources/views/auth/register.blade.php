
@extends("layout.app")
@section('content')
<div class=' w-screen h-screen  bg-[url("https://cdn.pixabay.com/photo/2021/09/15/13/28/art-6626881_1280.png")] bg-cover flex justify-center items-center '>
			<div class=' w-96 bg-yellow-100 bg-opacity-50 rounded-xl py-10 px-4 border-t-2 border-r-4 border-b-2 border-opacity-30 border-gray-700'>
				<div class='font-Yanone_Kaffeesatz  text-4xl text-rose-500 uppercase text-center w-full'>
					Register your account
				</div>
				<form method="POST" action="{{ route('register') }}">
					    @csrf
					     <div class="flex flex-col text-black ">
                            <label for="name" class="font-ArchitectDaughter  text-2xl font-extrabold">{{ __('Name') }}</label>

                            <div class="flex flex-col">
                                <input id="name" type="text" class="form-control text-black @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
				<div class="flex flex-col text-black">
                            <label for="email" class="font-ArchitectDaughter font-bold  text-xl">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="w-full form-control text-black @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-col text-black">
                            <label for="password" class="font-ArchitectDaughter font-bold  text-xl">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="w-full form-control text-black @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						    <div class="flex flex-col text-black">
                            <label for="password-confirm" class="font-ArchitectDaughter font-bold  text-xl">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="w-full text-black form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
					<div class='flex justify-center py-2'>
						<button
							type='submit'
							class='bg-black text-white px-6 py-1 rounded-xl'
						>
							{{ __("Register") }}
						</button>
					</div>
				</form>
			</div>
		</div>
    
@endsection