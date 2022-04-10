@extends("layout.app")
@section('content')

    <div class='flex justify-center items-center w-screen pt-16 '>
			<div>
				<div class='w-big h-bigxx bg-slate-200 px-8 space-y-3 py-5'>
					<div class='w-full flex justify-center text-6xl font-Yanone_Kaffeesatz  mb-4 uppercase'>
						<h2>{{ $post->title }}</h2>
					</div>
					<div class='w-full'>
						<div class='w-full h-small2 bg-slate-600  overflow-hidden   '>
							<img
								src="{{ asset("images/".$post->image_path) }}"
								alt=''
								class='object-cover h-full w-full'
							/>
						</div>
					</div>
					<div class='space-y-4'>
						<div class="flex justify-between">
							<div class="flex">
							<div>Author:</div>
							<div>{{ $post->user->name }}</div>
							</div>
							<div>
								Created on {{ date("jS M Y", strtotime($post->updated_at)) }}
							</div>

						</div>
						{{-- {{ $posts }} --}}
						<div>
						@if (isset(Auth::user()->id)&&Auth::user()->id ==$post->user_id)
						<div class='w-full flex justify-end '>
							<div class='flex px-2 space-x-2'>
								<a class='bg-lime-700 px-3 py-1 rounded-md' href="/blog/{{ $post->slug }}/edit">
									update
								</a>
								<div>
									<form action="/blog/{{ $post->slug }}" method="post">
										@csrf
										@method("delete")
									<button class='bg-red-700 px-3 py-1 rounded-md' type="submit">
										delete
									</button>
									</form>
									</div>
								<div>
							</div>
							</div>
						@endif
						</div>
				
					<div class="font-body text-xl mt-5">
						<p>
							{{ $post->description }}
						</p>
					</div>
				
			</div>
		</div>
		</div>
			</div>
@endsection