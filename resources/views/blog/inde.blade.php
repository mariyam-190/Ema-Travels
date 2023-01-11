	@extends('layouts.header')
		<!-- Blog SECTION -->
		
            <div class="container" id="blog">
			<div class="BlogHeader-index" data-aos="fade-up" data-aos-duration="1000">
				<h1>Have a Look at my Articles About Traveling. </h1>
			</div>

           @if (session()->has('message'))
                   <div class="btn">
	                  {{session()->get('message')}}
                    </div>
            @endif 			
           @if(Auth::check())
                   <div class="btn sucsess">
                       <a href="/blog/create"> Create Post</a>
                   </div>
				   @endif
			
                   <div class="BlogCards">
                   @foreach($blogs as $blog)
                   
                   <div class="row">
				<div class="card one" data-aos="fade-up" data-aos-duration="1000">
					<img src="img/sunblock.png" class="cardoneImg" alt="" data-aos="fade-up" data-aos-duration="1100">
					<div class="cardbgone"></div>
					<div class="cardContent">
						<h2>{{$blog->title}}</h2>
						<p> By :  {{$blog->user->name}} </p>
						<span class="blog-date">Create on {{ date('jS M Y' , strtotime($blog->updated_at))}}</span>
						<p>{{$blog->description}}</p>
						<a href="/blog/{{$blog->slug}}">
							<div class="cardBtn">
								<img src="img/next.png" alt="" class="cardIcon">
							</div>
						</a>
						@if (isset(Auth::user()->id) && Auth::user()->id == $blog->user_id)
                     <span class="float-right">
                        <a 
                        href="/blog/{{ $blog->slug }}/edit"
                        class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
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
						class="text-red-500 pr-3"
						type="submit">
						Delete
					</button>

                    </form>
                   </span>
                    @endif
        </div>
		
    </div> 
	</div>
    </div>
@endforeach  
</div> 
</div>

	









