@extends('layouts.header')
@section('content')
		<!-- MAIN AREA-->
		<div class="main">
			<div class="col-sm-12 col-md-8 mainText" data-aos="fade-up" data-aos-duration="1000">
				<h1>Hello I am Ema....<span class="main-span"><br>I am A Travller</span></h1>
				<h3 class="main-let">Let Explore the world To Gather.</h3>
			</div>
			<div class="mainImage col-md-4 col-sm-12" data-aos="fade-down" data-aos-duration="2000">
				<img src="img/travel.png" alt="">
			</div>
		</div>
		<!-- why-travel Section  -->
		<div class="why-travel">
			<div class="why-travelText col-md-6 col-sm-12" data-aos="fade-down"  data-aos-duration="2000">
				<h1>Why is it important TO Travel?</h1>
				<img class="plane-img" src="img/airplane.png" alt="">
			</div>
			<div class="why-travelList col-md-6 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
				<ol>
					<li>
						<span>01</span>
						<p>travel , which is now a fast growing global habbit. The number of confirmed poepel worldwide has exceeded 25,65,000 due to rapid spreading of the internet.</p>
					</li>
					<li>
						<span>02</span>
						<p>travel , which is now a fast growing global habbit. The number of confirmed poepel worldwide has exceeded 25,65,000 due to rapid spreading of the internet.</p>
					</li>
					<li>
						<span>03</span>
						<p>travel , which is now a fast growing global habbit. The number of confirmed poepel worldwide has exceeded 25,65,000 due to rapid spreading of the internet.</p>
					</li>
					<li>
						<span>04</span>
						<p>due to rapid spreading of the internet.</p>
					</li>

				</ol>
			</div>
		</div>
		<!-- Blog SECTION -->

		<div class="BlogSection" id="blog">
			<div class="BlogHeader" data-aos="fade-up" data-aos-duration="1000">
				<h1>Have a Look at my Articles About Traveling. </h1>
			</div>
			<div class="BlogCards">
				<div class="row">
				@foreach($bloogs as $bloog)
					<div class="col-md-4">
						<div class="card one" data-aos="fade-up" data-aos-duration="1000">
							  <img src="img/sunblock.png" class="cardoneImg" alt="" data-aos="fade-up" data-aos-duration="1100">
							 <div class="cardbgone"></div>
							<div class="cardContent">
					        	<h2>{{$bloog->title}}</h2>
					        	<p class="written"> <i class="fas fa-pen-nib"></i>  {{$bloog->user->name}} </p>
					        	<span class="blog-date"><i class="far fa-clock"></i> {{ date('jS M Y' , strtotime($bloog->updated_at))}}</span>
					        	<p class="description">
								@php $excerpt = \Str::words($bloog->description, 10) @endphp
								{!! $excerpt !!}	
								</p>
					        	<a href="/blog/{{$bloog->slug}}">
						         	<div class="cardBtn">
								        <img src="img/next.png" alt="" class="cardIcon">
							        </div>
						        </a>
						      </div>
		
</div>
</div>
    
					@endforeach
</div>
</div>

		<!-- BANNER AND FOOTER -->

		
		@endsection
