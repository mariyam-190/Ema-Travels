@extends('layouts.header')
@section('content')

<div class="container" id="blog">
			<div class="BlogHeader-index" data-aos="fade-up" data-aos-duration="1000">
				<h1>{{$blog->title}}</h1>
			</div>

               <div class="row">
                   <div class="col-12 show-single">
                       <div class=" " ><img src="../image/go.jpg"></div>
                              <p class="written"> <i class="fas fa-pen-nib"></i>  {{$blog->user->name}} </p>
					        	<span class="blog-date"><i class="far fa-clock"></i> {{ date('jS M Y' , strtotime($blog->updated_at))}}</span>
                               <p class="description">{{$blog->description}}</p>
                    </div>
               </div>
           
</div>
@endsection