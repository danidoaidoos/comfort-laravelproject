@extends("layout.app")

@section('content')
    <div>
         	<div class="h-small1  w-screen bg-[url('https://cdn.pixabay.com/photo/2018/01/11/21/27/desk-3076954_1280.jpg')] bg-cover">
				<div class='w-full flex flex-col justify-center items-center h-[calc(100%-10rem)] space-y-16 '>
					<p class='text-7xl font-display text-rose-500'>
						Thoughts, stories and
						<br />
						ideas by the arcade team
					</p>
					<div class='w-3/4  relative z-10'>
						<h3 class='text-4xl font-bold bg-opacity-10 text-purple-600 backdrop-blur-sm font-redressed  '>
							Arcade is a mininal theme for ghost. a beautiful way to share your
							storieswith your glowing audience
						</h3>
					</div>
					<div class='w-2/4   flex justify-start'>
						<button class='font-bold rounded-lg bg-rose-400 text-white px-3 py-3 '>
							Become a subsciber
						</button>
					</div>
				</div>
			</div>
        {{-- {/* featured posts */} --}}
			<div class='flex justify-center w-screen py-10 mt-32 bg-gray-100'>
				<div class='grid  grid-flow-col  space-x-8 '>
					<div class='w-72 h-96 bg-slate-600 rounded-6xl overflow-hidden relative transition-all duration-200 hover:-translate-y-2 '>
						<img
							src='https://cdn.pixabay.com/photo/2021/02/24/09/51/magical-6046020_1280.jpg'
							alt=''
							class='object-cover h-full w-full'
						/>
						<div class='z-10 text-white absolute left-0 right-0 bottom-0 top-0 flex flex-col  py-5 hover:bg-gray-800 hover:bg-opacity-10 transition-opacity duration-300'>
							<div class="bg-opacity-20 backdrop-blur-sm mt-60 ">
							<div class="w-full text-center font-extrabold text-2xl font-ArchitectDaughter uppercase">the smell of natural air</div>
							<div class="text-zinc-50 font-light ml-5">For many people, the smell of clean air is the scent of the air outdoors after a thunderstorm. And unfortunately, that smell is often ozone.</div>
							</div>
							
						</div>
					</div>
					<div class='w-72 h-96 bg-slate-600 rounded-6xl overflow-hidden relative transition-all duration-200 hover:-translate-y-2 '>
						<img
							src='https://cdn.pixabay.com/photo/2018/07/21/03/55/woman-3551832_1280.jpg'
							alt=''
							class='object-cover h-full w-full'
						/>
						<div class='z-10 text-white absolute left-0 right-0 bottom-0 top-0 flex flex-col   py-5 hover:bg-gray-800 hover:bg-opacity-10 transition-opacity duration-300'>
							<div class="bg-opacity-20 backdrop-blur-sm mt-60 ">
							<div class="w-full text-center font-extrabold text-2xl font-ArchitectDaughter uppercase">Horses and love</div>
							<div class="text-zinc-50 font-light ml-5">Although horses are such well-known animals, the following facts may surprise you about these magnificent creatures.</div>
							</div>
						</div>
					</div>
					<div class='w-72 h-96 bg-slate-600 rounded-6xl overflow-hidden relative transition-all duration-200 hover:-translate-y-2 '>
						<img
							src='https://cdn.pixabay.com/photo/2017/06/26/02/47/man-2442565_1280.jpg'
							alt=''
							class='object-cover h-full w-full'
						/>
						<div class='z-10 text-white absolute left-0 right-0 bottom-0 top-0 flex flex-col  py-5 hover:bg-gray-800 hover:bg-opacity-10 transition-opacity duration-300'>
							<div class="bg-opacity-20 backdrop-blur-sm  mt-60">
							<div class="w-full text-center font-extrabold text-2xl font-ArchitectDaughter uppercase">life's Great</div>
							<div class="text-zinc-50 font-light ml-5">Life is not what you get out of it . . . it’s what you put back in. Yet our current means for summarizing life’s work, from resumes to salaries, are devoid of what</div>
							</div>
						</div>
					</div>

					<div class='w-72 h-96 bg-slate-600 rounded-6xl overflow-hidden relative transition-all duration-200 hover:-translate-y-2 '>
						<img
							src='https://cdn.pixabay.com/photo/2017/12/28/16/18/bicycle-3045580_1280.jpg'
							alt=''
							class='object-cover h-full w-full'
						/>
						<div class='z-10 text-white absolute left-0 right-0 bottom-0 top-0 flex flex-col  justify-end py-5 hover:bg-gray-800 hover:bg-opacity-10 transition-opacity duration-300'>
							<div class="bg-opacity-20 backdrop-blur-sm">
							<div class="w-full text-center font-extrabold text-2xl font-ArchitectDaughter uppercase">life's Great</div>
							<div class="text-zinc-50 font-light ml-5">Unpleasant odors can be a warning sign of potential risks to human health. Sometimes people can smell certain chemicals in the air before they are at ...</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- author session --}}
			<div class='w-screen   flex justify-center mt-40 '>
				<div class='w-5/6 '>
					<div class='grid grid-flow-col '>
						<div>
							<p class='text-5xl font-extralight font-Yanone_Kaffeesatz w-2/4 text-rose-600'>
								see what we've writen lately
							</p>
						</div>
						<div class=' flex flex-col justify-center'>
							<div class='flex justify-center '>
								<div class='h-10 w-10 rounded-full overflow-hidden  z-50'>
									<img
										src='https://cdn.pixabay.com/photo/2017/06/26/02/47/man-2442565_1280.jpg'
										alt=''
										class='object-cover h-full w-full'
									/>
								</div>
								<div class='h-10 w-10 rounded-full overflow-hidden -translate-x-2 z-40'>
									<img
										src='https://cdn.pixabay.com/photo/2017/12/28/16/18/bicycle-3045580_1280.jpg'
										alt=''
										class='object-cover h-full w-full'
									/>
								</div>
								<div class='h-10 w-10 rounded-full overflow-hidden -translate-x-4 z-30'>
									<img
										src='https://cdn.pixabay.com/photo/2017/12/28/16/18/bicycle-3045580_1280.jpg'
										alt=''
										class='object-cover h-full w-full'
									/>
								</div>
								<div class='h-10 w-10 rounded-full overflow-hidden -translate-x-6 z-20'>
									<img
										src='https://cdn.pixabay.com/photo/2017/12/28/16/18/bicycle-3045580_1280.jpg'
										alt=''
										class='object-cover h-full w-full'
									/>
								</div>
							</div>
							<div class=' flex justify-center'>
								<p class='text-xs font-light text-rose-400'>
									meet our top authors
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
				
				@if (session()->has("message"))
				<div class=" text-emerald-400 font-body w-full text-center  text-xl">{{ session()->get("message") }}</div>
					
				@endif
				<div class='flex  items-center flex-col w-screen py-10 mt-24'>
				<div class='grid   grid-cols-3  gap-x-5 gap-y-3'>
					@foreach ($posts as $post)
						<div class='w-72 h-80 bg-slate-600 rounded-6xl overflow-hidden relative  '>
						<img
							src="{{ asset("images/".$post->image_path) }}"
							alt=''
							class='object-cover h-full w-full'
						/>
						<a href="/blog/{{ $post->slug }}">
						<div class='z-10 text-white absolute left-0 right-0 bottom-0 top-0 flex flex-col  justify-end py-5 hover:bg-gray-800 hover:bg-opacity-20 transition-all duration-300 '>
							<div class="bg-opacity-20 backdrop-blur-sm">
							<div class="w-full text-center font-extrabold text-2xl font-ArchitectDaughter uppercase ">{{ $post->title }}</div>
							{{-- <div>{{ $post->user->name }}</div>
							<div>Created on {{ date("jS M Y", strtotime($post->updated_at)) }}</div> --}}
								<div class="h-10 overflow-hidden ml-5 font-light">
							{{ $post->description }}
								</div>
							</div>
						</div>
						</a>
					</div>
					@endforeach
					
					
				
				</div>
				<div class='py-5'>
					<button class='py-2 px-4 bg-zinc-900 text-white rounded-3xl'>
						load more
					</button>
				</div>
			</div>
			

		</div>
@endsection
