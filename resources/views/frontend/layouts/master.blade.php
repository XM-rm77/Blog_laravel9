<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog &mdash; about coding</title>

	@include('frontend.inc.styles')

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Blog about coding" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />



	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		@include('frontend.inc.sidebar')

		@yield('content')

		<div id="fh5co-mission">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box">
						<h2>Mission</h2>
						<blockquote>
							<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci rem dolorem nesciunt perferendis quae amet deserunt eum labore quidem minima.</p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-command"></i>
							</span>
							<div class="desc">
								<h3><a href="#">Brand Identity</a></h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-drop2"></i>
							</span>
							<div class="desc">
								<h3><a href="#">Web Design &amp; UI</a></h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="icon-anchor"></i>
							</span>
							<div class="desc">
								<h3><a href="#">Web Development</a></h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-about">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Our Co-League</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="row">
					<div class="member">
						<div class="col-md-6 nopadding animate-box">
							<div class="author" style="background-image: url(../../frontend_assets/images/user-1.jpg);"></div>
						</div>
						<div class="col-md-6 nopadding animate-box">
							<div class="desc">
								<h3>John Doe</h3>
								<span>CEO, Founder</span>
								<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
								<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
								</ul>
								</p>
							</div>
						</div>
					</div>
					<div class="member">
						<div class="col-md-6 nopadding col-md-push-6 animate-box">
							<div class="author" style="background-image: url(../../frontend_assets/images/user-2.jpg);"></div>
						</div>
						<div class="col-md-6 nopadding col-md-pull-6 animate-box">
							<div class="desc">
								<h3>John Doe</h3>
								<span>CEO, Founder</span>
								<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
								<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
								</ul>
								</p>
							</div>
						</div>
					</div>
					<div class="member">
						<div class="col-md-6 nopadding animate-box">
							<div class="author" style="background-image: url(../../frontend_assets/images/user-3.jpg);"></div>
						</div>
						<div class="col-md-6 nopadding animate-box">
							<div class="desc">
								<h3>John Doe</h3>
								<span>CEO, Founder</span>
								<p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
								<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-facebook-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-linkedin-with-circle"></i></a></li>
									<li><a href="#"><i class="icon-dribbble-with-circle"></i></a></li>
								</ul>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="fh5co-blog">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Recent Post</h2>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="frontend_assets/images/blog-1.jpg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">Nov. 15th</span>
								<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
								<h3><a href="#">We've grown from a regional</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="fh5co-blog animate-box">
							<a href="#"><img class="img-responsive" src="frontend_assets/images/blog-2.jpg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">Nov. 15th</span>
								<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
								<h3><a href="#">We've grown from a regional</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<a href="#" class="btn btn-primary">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-started" style="background-image:url(../../frontend_assets/images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Want To Write About Us!</h2>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p><a href="#" class="btn btn-default btn-lg">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>

		@include('frontend.inc.footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	@include('frontend.inc.scripts')



</body>

</html>