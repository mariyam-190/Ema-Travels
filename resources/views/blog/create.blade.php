
	@extends('layouts.header')
	
		<!-- Blog SECTION -->
@section('content')

		<div>
			<div class="BlogHeader" data-aos="fade-up" data-aos-duration="1000">
				<h1>Create New Post </h1>
			</div>
</div>
@if ($errors->any())
<div class="btn">
	<ul>
		@foreach($errors->all() as $error)
		<li>
{{$error}}
		</li>
		@endforeach
	</ul>
</div>
@endif

<div class="col-md-12">
	<form action="/blog" method="POST" enctype="multipart/form-data">
@csrf
<input
 type="text"
name="title"
placeholder="Title..."></input>
<textarea 
name="description"
placeholder="Description"
></textarea>
<div class="">
	<label>
		<span>
			Select a file
		</span>
		<input 
		type="file"
		name="image"
		class="hidden">
	</label>
</div>
<button
type="submit">
Submit Post
</button>
</form>
</div>

@endsection
	

