@extends('layouts.header')


			<!-- MAIN AREA-->
<div class="about">
			<div class="main">
				<div class="mainText" data-aos="fade-up" data-aos-duration="1000">
					<h1>Hello I am Ema....<span class="main-span"><br>I am A Travller</span></h1>
					<h3 class="let">Let Me Tell You My Story...</h3>
				</div>
				<div class="mainImage-about" data-aos="fade-down" data-aos-duration="2000">
					<img src="img/boarding-pass.png" alt="">
				</div>
			</div>
			<!-- who-iam Section-->
			<div class="who-iam">
				<div class="who-iamText" data-aos="fade-up" data-aos-duration="1000">
					<h1>Who I Am?</h1>
					<img class="plane-img" src="img/case.png" alt="">
				</div>
				<div class="who-iamList" data-aos="fade-left" data-aos-duration="1000">
					<ol>
						<li>
							<span class="about-span">2017</span>
							<p>I started Traveling , which Was My Dream. The number of confirmed poepel worldwide has exceeded 25,65,000 due to rapid spreading of the internet.</p>
						</li>
						<li>
							<span class="about-span">2018</span>
							<p>I travel To 10 Countries , which is now a fast growing global habbit. The number of confirmed poepel worldwide has exceeded 25,65,000 due to rapid spreading of the internet.</p>
						</li>
						<li>
							<span class="about-span">2019</span>
							<p>I Visited 15 Countries , which is now a fast growing global habbit. The number of confirmed poepel worldwide has exceeded 25,65,000 due to rapid spreading of the internet.</p>
						</li>
						<li>
							<span class="about-span">2020</span>
							<p>I Visited 25 Countries , 40 Vlogs , Start Earning due to rapid spreading of the internet.</p>
						</li>

					</ol>
				</div>
			</div>



			<!-- BANNER AND FOOTER -->

			<div class="banner" id="contact">
				<div class="bannerText" data-aos="fade-right" data-aos-duration="1000">
					<section>
						<h1 class="section-header">Contact Me</h1>
						<div class="contact-wrapper">
							<!-- Left contact page -->
							@if(Session::has('message_sent'))
							   <div class="alert alert-success" role="alert">
								   {{Session::get('message_sent')}}
							   </div>
							@endif
							<form action="{{route('contact.send')}}" method="POST" id="contact-form" class="form-horizontal" role="form">
@csrf
								<div class="form-group">
									<div class="col-sm-12">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-12">
									<label for="email">Email</label>
										<input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
									</div>
								</div>
								<label for="msg">Message</label>
								<textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>

								<button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
									<div class="alt-send-button">
										<i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
									</div>

								</button>

							</form>

							<!-- Left contact page -->
							
							<div class="direct-contact-container">
								<ul class="social-media-list">
									<li><a href="#" target="_blank" class="contact-icon">
											<i class="fab fa-github" aria-hidden="true"></i></a>
									</li>
									<li><a href="#" target="_blank" class="contact-icon">
											<i class="fab fa-codepen" aria-hidden="true"></i></a>
									</li>
									<li><a href="#" target="_blank" class="contact-icon">
											<i class="fab fa-twitter" aria-hidden="true"></i></a>
									</li>
									<li><a href="#" target="_blank" class="contact-icon">
											<i class="fab fa-instagram" aria-hidden="true"></i></a>
									</li>
								</ul>


							</div>

						</div>

					</section>


				</div>
				<div class="bannerImg" data-aos="fade-up" data-aos-duration="1000">
					<img src="img/suitcase.png" alt="">
				</div>
			</div>