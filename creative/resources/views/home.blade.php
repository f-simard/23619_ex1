@extends('master')
@section('title', 'Home')
@section('content')
<!-- Masthead-->
<header class="masthead">
	<div class="container px-4 px-lg-5 h-100">
		<div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
			<div class="col-lg-8 align-self-end">
				<h1 class="text-white font-weight-bold">Capture the magic!</h1>
				<hr class="divider" />
			</div>
			<div class="col-lg-8 align-self-baseline">
				<p class="text-white-75 mb-5">Immortilize our special day with quality pictures</p>
				<a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
			</div>
		</div>
	</div>
</header>
<!-- About-->
<section class="page-section bg-primary" id="about">
	<div class="container px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-lg-8 text-center">
				<h2 class="text-white mt-0">We've got what you need!</h2>
				<hr class="divider divider-light" />
				<p class="text-white-75 mb-4">Our team is dedicated, attentive and flexible. We will make sure your love and the support of your loved ones is captured </p>
				<a class="btn btn-light btn-xl" href="#services">Get Started!</a>
			</div>
		</div>
	</div>
</section>
@endsection