@extends('layouts.header')
		<!-- Blog SECTION -->

			<div class="BlogSection container" id="blog">
			<div class="BlogHeader-index" data-aos="fade-up" data-aos-duration="1000">
				<h1>Have a Look at my Articles About Traveling. </h1>
			</div>
			@if (session()->has('message'))
                   <div class="btn">
	                  {{session()->get('message')}}
                    </div>
            @endif 			
           @if(Auth::check())
                   <div class="btn sucsess creat">
                       <a href="/blog/create" class="ema-btn"><i class="fas fa-plus-square"></i> Create Post</a>
                   </div>
				   @endif
			<div class="BlogCards">
				<div class="row">
				@foreach($blogs as $blog)
					<div class="col-md-4">
						<div class="card one" data-aos="fade-up" data-aos-duration="1000">
							<img src="img/sunblock.png" class="cardoneImg" alt="" data-aos="fade-up" data-aos-duration="1100">
							<div class="cardbgone"></div>
							<div class="cardContent">
						<h2>{{$blog->title}}</h2>
						<p class="written"> <i class="fas fa-pen-nib"></i>  {{$blog->user->name}} </p>
						<span class="blog-date"><i class="far fa-clock"></i> {{ date('jS M Y' , strtotime($blog->updated_at))}}</span>
						<p class="description">
							@php $excerpt = \Str::words($blog->description, 10) @endphp
								{!! $excerpt !!}

						
							</p>
						<a href="/blog/{{$blog->slug}}">
							<div class="cardBtn">
								<img src="img/next.png" alt="" class="cardIcon">
							</div>
						</a>
					
						@if (isset(Auth::user()->id) && Auth::user()->id == $blog->user_id)
                     <span class="float-right">
                        <a 
                        href="/blog/{{ $blog->slug }}/edit"
                        class="text-gray-700 italic ema-btn-e"> <i class="far fa-edit"></i> 
                        Edit
                        </a>
                      </span>

                     <span class="float-right">
                     <form 
                        action="/blog/{{ $blog->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
					     	class="text-red-500 pr-3 ema-btn-d"
					      	type="submit"><i class="far fa-trash-alt"></i>
						    Delete
					    </button>

                    </form>
                   </span>
                    @endif
        </div>
</div>
		
</div>
    
					@endforeach
</div>
</div>
</div>
