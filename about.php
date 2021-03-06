<?php include ('includes/header.php'); ?>
	
<style>
	
	.about-wrapper-one{
		padding-bottom: 150px;
	}
	.about-name{
		padding: 30px 0px;
	}
	
	.about-stuff{
		display: inline-flex;

	}
	
	.about-stuff ul li{
		list-style: none;
	}
	.about-img img{
		width: 100%;
		max-width: 600px;
	}
	
	.about-summary-title{
		padding: 50px 0px;
	}
	
	.about-summary{
		padding: 90px;
    	margin-bottom: 90px;
    	border-bottom: 3px solid gray;
	}

	.about-reviews{
		display: inline-flex;
		padding: 50px;
		margin: 50px;
	}
	
	.testimony-one-text{
		padding: 25px;
	}
	
	.contact-button{
		text-align: center;
	}

</style>

<section class="container-fluid hueThree-bg">
	<div class="container about-wrapper-one">
		
		<div class="title-card align-center">
			<h1 class="headerTwo colorFour">About</h1>
		</div><!--title-card-->



		<div class="about-content align-center">
			<div class="about-stuff">
				<ul>
					<li>
						<div class="about-name">
							<h2 class="headerThree">Riley Hein</h2>
						</div><!--about-name-->
					</li>
				</ul>

				<ul>
					<li>
						<div class=" about-name">
							<h2 class="headerThree colorTwo"><a href="#">Resume</a></h2>
						</div><!--about-name-->	
					</li>
				</ul>
			</div><!--about-stuff-->
			<div class="about-img">
				<img src="assets/img/glyph2.png">
			</div><!--about-img-->	
		</div><!--content-->
		
	</div>	<!--wrapper-->
</section><!--main-content-->

<section class="container-fluid">
	<div class="container about-wrapper-two">
		<div class="about-content">
		
		<div class="title-card align-center">
			<h2 class="headerTwo colorFour">Professional Summary</h2>
		</div>
		<div class="about-summary textTwo">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum eu sem at tristique. Praesent ut felis tortor. Suspendisse at ipsum at massa iaculis faucibus nec eu dolor. Morbi nulla nulla, pretium a tristique quis, scelerisque in nulla. Donec luctus maximus ligula sed iaculis. Maecenas ornare viverra ex, ac auctor dui rutrum a. Donec nec urna est. Morbi mauris tellus, pretium sit amet viverra vel, tempor nec risus. Integer sed lacinia nisi. Sed bibendum id ipsum quis ullamcorper. Sed eu hendrerit diam, sed rutrum neque. Proin ac purus mattis, congue neque condimentum, condimentum ligula. Phasellus vitae justo non tortor commodo fermentum. Morbi quam libero, bibendum a mi luctus, faucibus dignissim erat. Etiam ut consequat neque, sit amet ultricies magna.
			</p>

		
		</div><!--about-summary-->
			
		<div class="title-card align-center">
			<h2 class="headerTwo colorFour align-center">Testimonials</h2>
		</div>	
		
		<div class="about-reviews-wrapper">
			<div class="about-reviews">
				<div class="col-md-4 about-img">
					<img src="assets/img/crests.png">
				</div>

				<div class="col-md-8 testimony-one-text">
					<h2>	
						&quot;
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum eu sem at tristique. Praesent ut felis tortor. Suspendisse at ipsum at massa iaculis faucibus nec eu dolor. Morbi nulla nulla
						&quot;
					</h2>
				</div><!--about-reviews-one-->
			</div>
			
		<div class="about-reviews">
			<div class="col-md-8 testimony-one-text textThree">
				<h2>	
					&quot;
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum eu sem at tristique. Praesent ut felis tortor. Suspendisse at ipsum at massa iaculis faucibus nec eu dolor. Morbi nulla nulla
					&quot;
				</h2>
			</div>
			
			<div class="col-md-4 about-img">
				<img src="assets/img/crests.png">
			</div>
		</div><!--about-reviews-two-->
	</div><!--about-reviews-->
		
	<div class="contact-button btn-line-red">Contact Me</div><!--modal with contact details and link to contact page.-->
		
		
	</div>	<!--wrapper-->
</section><!--main-content-->


<?php include('includes/footer.php'); ?>