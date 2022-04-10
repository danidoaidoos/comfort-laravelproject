@extends('layout.app')
@section('content')
<div class='w-screen h-screen flex justify-center items-center bg-[url("https://cdn.pixabay.com/photo/2020/03/25/13/03/house-4967221_1280.jpg")]'>
			<div class='w-small1 bg-zinc-700  px-6 py-4'>
                {{-- @if (errors->any())
            <div class="flex flex-col">
            @foreach ($errors->all() as $error)
            <div>
                {{ $error }}
            </div>
                
            @endforeach
            </div>
            @endif --}}
           
                    {{-- {{ $posts }} --}}
               
				<form class=' space-y-6' action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data" >
                   @csrf 
				    {{csrf_field()}} 
				
					<div class='flex flex-col'>
						<label
							for='title'
							class='font-ArchitectDaughter  font-bold  text-xl text-lime-500'
						>
							Title:
						</label>

						<input
							type='text'
							id='title'
							placeholder='TITLE'
							name="title"
							class='bg-opacity-20 bg-yellow-200'
						/>
					</div>
					<div class='flex flex-col w-40 '>
						<label
							for='title'
							class='font-ArchitectDaughter  font-bold  text-xl text-amber-500'
						>
							file
						</label>

						<input type='file' id='title' class='' name="image" />
					</div>
					<div class=' '>
						<div class='font-ArchitectDaughter  font-bold  text-xl text-rose-300'>
							description
						</div>
						<div class='overflow-scroll '>
							
                            <textarea class="w-full h-96" name="description"></textarea>
						</div>
					</div>
					<div>
						<button class='bg-green-800 text-white rounded-lg px-3 font-ArchitectDaughter py-2 font-extrabold ' type="submit"  value="submit">
							publish
						</button>
					</div>
				</form>
			</div>
		</div>
        @endsection