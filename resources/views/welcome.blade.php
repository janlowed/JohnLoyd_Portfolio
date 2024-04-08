<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
        id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">John Loyd<span>.</span></a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                    <li class="nav-item"><a href="#experiences-section" class="nav-link"><span>Experience</span></a>
                    </li>
                    <li class="nav-item"><a href="#educationals-section" class="nav-link"><span>Educational</span></a>
                    </li>
                    <li class="nav-item"><a href="#webinars-section" class="nav-link"><span>Webinar</span></a></li>
                    <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid px-md-0">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img" style="background-image:url(images/me.jpg);">
                            <div class="overlay"></div>
                            <div class="overlay-1"></div>
                        </div>
                        <div class="one-forth d-flex  align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello! This is John</span>
                                <h1 class="mb-4 mt-3">Web <span></span> Developer </h1>
                                <p><a href="{{ route('login') }}" class="btn btn-primary">Log In</a>
                                    <a href="{{ route('register') }}"
                                        class="btn btn-primary btn-outline-primary">Register</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container-fluid px-md-0">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third order-md-last img" style="background-image:url(images/me1.jpg);">
                            <div class="overlay"></div>
                            <div class="overlay-1"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">We Design &amp; Build Brands</span>
                                <h1 class="mb-4 mt-3">Hi, I am <span>John, </span> to know more about me kindly explore to
                                    my portfolio.</h1>
                                <p><a href="{{ route('login') }}" class="btn btn-primary">Log In</a> <a
                                        href="{{ route('register') }}"
                                        class="btn btn-primary btn-outline-primary">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img bg-light" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-suitcase"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="10">0</strong>
                            <span>Project Complete</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-loyalty"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="10">0</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-coffee"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="478">0</strong>
                            <span>Cups of coffee</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 d-flex">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-calendar"></span>
                        </div>
                        <div class="text">
                            <strong class="number" data-number="10">0</strong>
                            <span>Years experienced</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url(images/me2.jpg);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3">
                            @foreach ($about as $abouts)
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">My Intro</span>
                                    <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About Me
                                    </h2>
                                    <p>I came from a small baranggay named Liberty at Hilongos Leyte.</p>
                                    <ul class="about-info mt-4 px-md-0 px-2">
                                        <li class="d-flex"><span>Name:</span> <span>{{ $abouts->name }}</span></li>
                                        <li class="d-flex"><span>Birthday:</span> <span>{{ $abouts->birthday }}</span>
                                        </li>
                                        <li class="d-flex"><span>Address:</span> <span>{{ $abouts->address }}</span>
                                        </li>
                                        <li class="d-flex"><span>Zip code:</span> <span>{{ $abouts->zipcode }}</span>
                                        </li>
                                        <li class="d-flex"><span>Email:</span> <span>{{ $abouts->email }}</span></li>
                                        <li class="d-flex"><span>Phone: </span> <span>{{ $abouts->phone }}</span></li>
                                    </ul>
                                </div>
                            @endforeach
                            <div class="col-md-12">
                                <div class="my-interest d-lg-flex w-100">
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-listening"></span>
                                        </div>
                                        <div class="text">Music</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-suitcases"></span>
                                        </div>
                                        <div class="text">Travel</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-video-player"></span>
                                        </div>
                                        <div class="text">Movie</div>
                                    </div>
                                    <div class="interest-wrap d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="flaticon-football"></span>
                                        </div>
                                        <div class="text">Sports</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="skills-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Skills</span>
                    <h2 class="mb-4">My Skills</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    @foreach ($skill as $skills)
                        <div class="col-md-4 mb-4">
                            <div class="bg-white rounded-lg shadow p-4">
                                <h2 class="h5 font-weight-bold text-center mb-4">{{ $skills->skillname }}</h2>
                                <div class="progress mx-auto" data-value='{{ $skills->percentage }}'>
                                    <span class="progress-left">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar border-primary"></span>
                                    </span>
                                    <div
                                        class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                        <div class="h2 font-weight-bold text-dark" style="font-size: 1em;">
                                            {{ $skills->percentage }}<sup class="small">%</sup></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="experiences-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Experience</span>
                    <h2 class="mb-4">My Experiences</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    @foreach ($experience as $experiences)
                        <div class="col-lg-4 col-md-6 ftco-animate">
                            <div class="blog-entry">
                                <div class="img-container" style="height: 300px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $experiences->image) }}" class="img-fluid"
                                        style="width: 100%; height: auto;" alt="Blog Image">
                                </div>
                                <div class="text mt-3">
                                    <div class="d-flex align-items-center mb-3 meta">
                                        <h3 class="mr-2">{{ $experiences->detail }}</h3>
                                        <p>{{ $experiences->title }}</p>
                                    </div>
                                    <h3 class="heading"><a href="single.html">{{ $experiences->year }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- 
	<div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
		<div class="py-md-5">
			<div class="row justify-content-start pb-3">
				@foreach ($educational as $educationals)
				<div class="col-md-12 heading-section ftco-animate">
					<span class="subheading">Educational</span>
					<h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">My Educational</h2>
					<p>I came from a small baranggay named Liberty at Hilongos Leyte.</p>
					<ul class="about-info mt-4 px-md-0 px-2">
						<li class="d-flex"><span>Schoolame:</span> <span>{{$educationals->schoolname}}</span></li>
						<li class="d-flex"><span>Year:</span> <span>{{$educationals->year}}</span></li>
						<li class="d-flex"><span>Address:</span> <span>{{$educationals->address}}</span></li>
						<li class="d-flex"><span>Description:</span> <span>{{$educationals->description}}</span></li>
					</ul>
				</div>
				@endforeach
			</div>
		</div>
	</div> --}}

    <section class="ftco-about ftco-section ftco-no-pt ftco-no-pb" id="educationals-section">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 col-lg-7 pl-md-4 pl-lg-5 py-5">
                    <div class="py-md-5">
                        <div class="row justify-content-start pb-3 row-cols-lg-2">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Educational</span>
                                    <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About My
                                        Education</h2>
                                    <p>I came from a small baranggay named Liberty at Hilongos Leyte.</p>
									@foreach ($educational as $educationals)
                                    <ul class="about-info mt-4 px-md-0 px-2">
                                        <li class="d-flex"><span>Schoolname</span>
                                            <span>{{ $educationals->schoolname }}</span>
                                        </li>
                                        <li class="d-flex"><span>Year:</span> <span>{{ $educationals->year }}</span>
                                        </li>
                                        <li class="d-flex"><span>Address:</span>
                                            <span>{{ $educationals->address }}</span>
                                        </li>
                                        <li class="d-flex"><span>Description:</span>
                                            <span>{{ $educationals->description }}</span>
                                        </li>
                                    </ul>
									@endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="webinars-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Webinar</span>
                    <h2 class="mb-4">My Webinars</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    @foreach ($webinar as $webinars)
                        <div class="col-lg-4 col-md-6 ftco-animate">
                            <div class="webinar-entry">
                                <div class="text mt-3">
                                    <div class="mb-3">
                                        <span class="label">Hostname:</span>
                                        <span>{{ $webinars->hostname }}</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="label">Agenda:</span>
                                        <span>{{ $webinars->agenda }}</span>
                                    </div>
                                    <div class="mb-3">
                                        <span class="label">Date:</span>
                                        <span>{{ $webinars->date }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2 class="mb-4">My Blog</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    @foreach ($blog as $blogs)
                        <div class="col-lg-4 col-md-6 ftco-animate">
                            <div class="blog-entry">
                                <div class="img-container" style="height: 300px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $blogs->image) }}" class="img-fluid"
                                        style="width: 100%; height: auto;" alt="Blog Image">
                                </div>
                                <div class="text mt-3">
                                    <div class="d-flex align-items-center mb-3 meta">
                                        <h3 class="mr-2">{{ $blogs->title }}</h3>
                                        <p>{{ $blogs->date }}</p>
                                    </div>
                                    <h3 class="heading"><a href="single.html">{{ $blogs->content }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Contact</span>
                    <h2 class="mb-4">Contact us!</h2>
                    {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> --}}
                </div>
            </div>
			<div class="container">
				<div class="row">
					@foreach ($contact as $contacts)
					<div class="col-md-4">
						<div class="dbox">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-map-marker"></span>
							</div>
							<div class="text">	
								<p><span>Address:</span> Baranggay Liberty Hilongos Leyte</p>
							</div>
						</div>
						<div class="dbox">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-phone"></span>
							</div>
							<div class="text">
								<p><span>Phone:</span> <a href="tel://1234567920">{{ $contacts->edit }}</a></p>
							</div>
						</div>
						<div class="dbox">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-paper-plane"></span>
							</div>
							<div class="text">
								<p><span>Email:</span> <a href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&emr=1&ltmpl=default&ltmplcache=2&osid=1&passive=true&rm=false&scc=1&service=mail&ss=1&ifkv=ARZ0qKLStHpwGJGqxwi4TqlW2m0GslVZu5QNkq9TkjEvmoQWvLnPuH97UwTqxKYUxANRG4QQvpwp&theme=mn&ddm=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin">{{ $contacts->gmail }}</a></p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			
        </div>
    </section>


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Lets talk about</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="#" class="btn btn-primary">Learn more</a></p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#home-section"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                            <li><a href="#about-section"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="#skills-section"><span class="fa fa-chevron-right mr-2"></span>Skills</a>
                            </li>
                            <li><a href="#experiences-section"><span
                                        class="fa fa-chevron-right mr-2"></span>Experience</a></li>
                            <li><a href="#educationals-section"><span
                                        class="fa fa-chevron-right mr-2"></span>Educational</a></li>
                            <li><a href="#webinars-section"><span class="fa fa-chevron-right mr-2"></span>Webinar</a>
                            </li>
                            <li><a href="#blog-section"><span class="fa fa-chevron-right mr-2"></span>Blogs</a></li>
                            <li><a href="#contacts-section"><span class="fa fa-chevron-right mr-2"></span>Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Design</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Web Development</a>
                            </li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Business Strategy</a>
                            </li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Data Analysis</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Graphic Design</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">Baranggay Liberty
                                        Hilongos Leyte</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+63
                                            963 962 3877</span></a></li>
                                <li><a
                                        href="https://accounts.google.com/InteractiveLogin/signinchooser?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&emr=1&ltmpl=default&ltmplcache=2&osid=1&passive=true&rm=false&scc=1&service=mail&ss=1&ifkv=ARZ0qKLStHpwGJGqxwi4TqlW2m0GslVZu5QNkq9TkjEvmoQWvLnPuH97UwTqxKYUxANRG4QQvpwp&theme=mn&ddm=0&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><span
                                            class="icon fa fa-paper-plane pr-4"></span><span
                                            class="text">jl.zamora@mlgcl.edu.ph</span></a></li>
                            </ul>
                        </div>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li class="ftco-animate"><a href="https://web.telegram.org/k/"><span
                                        class="fa fa-telegram"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/janlowedwed"><span
                                        class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/janlowedwed/"><span
                                        class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
