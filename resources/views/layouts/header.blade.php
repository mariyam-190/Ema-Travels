<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ema Journey</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
	<div class="wrapper">
	<div class="nav">
			<div class="logo">
				<h4>Ema-Journey.</h4>
			</div>
			<div class="links">
				<a href="/" class="mainlink">Home</a>
				<a href="about">About</a>
				<a href="blog">Blog</a>
				<a href="#contact">Contact</a>
			</div>
		</div>
        <div >
        @yield('content')
        </div>
        @include('layouts.footer')