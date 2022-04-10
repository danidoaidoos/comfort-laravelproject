@extends("layout.app")
@section('content')
<div class=' w-screen h-screen  bg-[url("https://cdn.pixabay.com/photo/2021/04/26/01/39/trees-6207925_1280.jpg")] bg-cover flex justify-center items-center '>
			<div class='h-small2 w-96 bg-white bg-opacity-50 rounded-xl py-10 px-4 border-t-2 border-r-4 border-b-2 border-opacity-30 border-gray-700' id="app">
				<div class='font-Yanone_Kaffeesatz  text-4xl text-rose-500 uppercase text-center w-full'>
					Login into your account
				</div>
				<form method="POST" action="{{ route('register') }}">
					    @csrf
					     <div class="flex flex-col w-full">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="flex flex-col">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
				<div class="flex flex-col w-full">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
						    <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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