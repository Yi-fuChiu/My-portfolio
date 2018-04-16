
@extends('layout')

@section('content')


<head>
<title> potfolio </title>	
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
</head>




<div class="wrapper">
	<section class="portfolio">
    <h1>Yi-fu's Portafolio</h1>



		<div class="portfolio-container">
		
		<div>
		  <div class="container">
		      <div class="row">

				    <div class="col-sm">
				      <section class="portfolio-item">
						<img src="img/htmlcss.jpg" alt="" class="portfolio-img">
						<section class="portfolio-text">
							<a href="#"><h2>Yi-fu's website</h2></a>
							<p>My personal responsive website</p>
						</section>
				    </div>

				       <div class="col-sm">
				      <section class="portfolio-item">
						<img src="img/javascript.jpg" alt="" class="portfolio-img">
						<section class="portfolio-text">
							<a href="#"><h2>Calculator</h2></a>
							<p>Functional calculator by using computer logic</p>
						</section>
				    </div>

				    <div class="col-sm">
				      <section class="portfolio-item">
						<img src="img/wordpress.jpg" alt="" class="portfolio-img">
						<section class="portfolio-text">
							<a href="http://35.225.192.96/"><h2>Sechelt</h2></a>
							<p>A mock-up Sechelt website by using Wordpress</p>
						</section>
				   </div>
	    </div>

	<br/><br/>

        <div>
		  <div class="container">
		      <div class="row">
					<div class="col-sm">
					  <section class="portfolio-item">
						<img src="img/php.jpg" alt="" class="portfolio-img">
						<section class="portfolio-text">
							<a href="#"><h2>Urban Spoon</h2></a>
							<p>A functional mock-up website hooks up with database</p>
						</section>
					</div>

				    <div class="col-sm">
				      	<section class="portfolio-item">
						<img src="img/soon2.jpg" alt="" class="portfolio-img">
						<section class="portfolio-text">
							<h2>Coming soon</h2>
							<p>More projects soon</p>
						</section>
				    </div>

				    <div class="col-sm">
				      <section class="portfolio-item">
						<img src="img/soon0.jpg" alt="" class="portfolio-img">
						<section class="portfolio-text">
							<h2>Coming soon</h2>
							<p>More projects soon</p>
						</section>
				   </div>
			</div>
		  </div>
        </div>

		       </div>
		    </div>
		  </div>	
  </section>

</div>
@endsection