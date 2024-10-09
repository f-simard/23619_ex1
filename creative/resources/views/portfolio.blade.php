@extends('master')
@section('title', 'Portfolio')
@section('content')
<!-- Portfolio-->
<div class="page-section" id="portfolio">
	<div class="container-fluid p-0">
		<h2 class="text-center mt-0">Past projects</h2>
		<hr class="divider" />
		<div class="row g-0">
			<div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="assets/img/portfolio/fullsize/wedding1-min.jpg" title="Sarah & Thomas">
					<img class="img-fluid" src="assets/img/portfolio/thumbnails/wedding1-min.jpg" alt="..." />
					<div class="portfolio-box-caption">
						<div class="project-category text-white-50">2024</div>
						<div class="project-name">Sarah & Thomas</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="assets/img/portfolio/fullsize/wedding2-min.jpg" title="Project Name">
					<img class="img-fluid" src="assets/img/portfolio/thumbnails/wedding2-min.jpg" alt="..." />
					<div class="portfolio-box-caption">
						<div class="project-category text-white-50">2024</div>
						<div class="project-name">Annie & Catherine</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="assets/img/portfolio/fullsize/wedding3-min.jpg" title="Project Name">
					<img class="img-fluid" src="assets/img/portfolio/thumbnails/wedding3-min.jpg" alt="..." />
					<div class="portfolio-box-caption">
						<div class="project-category text-white-50">2023</div>
						<div class="project-name">Gab & Gab</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="assets/img/portfolio/fullsize/wedding4-min.jpg" title="Project Name">
					<img class="img-fluid" src="assets/img/portfolio/thumbnails/wedding4-min.jpg" alt="..." />
					<div class="portfolio-box-caption">
						<div class="project-category text-white-50">2023</div>
						<div class="project-name">Byeol & Si-woo</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="assets/img/portfolio/fullsize/wedding5-min.jpg" title="Project Name">
					<img class="img-fluid" src="assets/img/portfolio/thumbnails/wedding5-min.jpg" alt="..." />
					<div class="portfolio-box-caption">
						<div class="project-category text-white-50">2022</div>
						<div class="project-name">Katherine & Dimitri</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4 col-sm-6">
				<a class="portfolio-box" href="assets/img/portfolio/fullsize/wedding6-min.jpg" title="Project Name">
					<img class="img-fluid" src="assets/img/portfolio/thumbnails/wedding6-min.jpg" alt="..." />
					<div class="portfolio-box-caption p-3">
						<div class="project-category text-white-50">2022</div>
						<div class="project-name">AD & Clay</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Call to action-->
<section class="page-section bg-dark text-white">
	<div class="container px-4 px-lg-5 text-center">
		<h2 class="mb-4">Let's collaborate !</h2>
		<a class="btn btn-light btn-xl" href="/contact">Contact</a>
	</div>
</section>
@endsection