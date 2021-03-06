<!--?php include ('includes/header.php'); ?-->

<!doctype html>
<html>
<head>
	
<title>terminal</title>
	
<!--meta-->	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--style-->	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
<!--jq-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	
<style>
	
	.header {
		height: 80px;
		
		color: /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#a6f5fc+0,75ff95+100 */
		background: #a6f5fc; /* Old browsers */
		background: -moz-linear-gradient(-45deg, #a6f5fc 0%, #75ff95 100%); /* FF3.6-15 */
		background: -webkit-linear-gradient(-45deg, #a6f5fc 0%,#75ff95 100%); /* Chrome10-25,Safari5.1-6 */
		background: linear-gradient(135deg, #a6f5fc 0%,#75ff95 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6f5fc', endColorstr='#75ff95',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
		
		box-shadow: 5px 5px 5px #888888;
	}
	
	.header-wrapper{
		height: 80px;
	}
	
	.main-logo img {
		width: 100%;
		max-width: 230px;
	}
	
	.main-nav {
		float: right;
    	margin-top: -193px;
	}
	
	.title-card h1{
		padding-bottom: 50px;
		text-align: center;
		font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
		
	}
	
	.main-content {
		width: 100%;
		padding: 70px 0px 0px 0px;
    	text-align: center;
	}
	
	
	.img-class img{
		    width: 100%;
	}
	
	.footer-class {
		height: 50px;
		background-color: gray;
		color: white;
		text-align: center;
	}
	
	.footer-class p {
		padding-top: 13px;
	}
	
	.secondary-title-card{
	text-align: center;
	font-family: sans-serif;
    padding-bottom: 50px;
	padding-top: 50px;
	}	
	
.secondary-content{
	display: inline-flex;
	width: 100%;
	background: gainsboro;
	}
	
.category-one{
	text-align: center;
	font-family: times;
	}
	
.category-one img{
	width: 100%;
	max-width: 300px;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 100px;
	}
	
.category a:link{
	text-decoration: none;	
	}
	
	.blurb-class{
		padding: 0px 150px 50px 150px;
	}
</style>	
</head>
	
	

<body>
<div class="container-fluid header">
	<div class="container wrapper header-wrapper">
		<div class="col-md-4 col-sm-6 col-xs-12 main-logo">
			<a href="#">	
				<img src="assets/img/Stand-01.png">
			</a><!--home-link-->
		</div><!--main-logo-->
		

		<div class="col-md-8 col-sm-8 col-xs-12 main-nav">
			<ul class="nav nav-tabs justify-content-end">
				<li role="nav-item">
					<a class="nav-link active" href="index.php">Home</a>	
				</li>

				<li role="nav-item">
					<a class="nav-link" href="portfolio.php">Portfolio</a>	
				</li>

				<li role="nav-item">
					<a class="nav-link" href="about.php">About</a>	
				</li>

				<li role="nav-item">
					<a class="nav-link" href="contact.php">Contact</a>	
				</li>
				
			</ul>
		</div><!--main-logo-->
	</div><!--container wrapper-->
</div><!--container-fluid-->

	
<section class="jumbotron-fluid main-content">
		<div class="title-card">
			<h1>TERMINAL</h1>
		</div><!--title-card-->
		
			<div class="img-class">
				<img src="assets/img/bembo.png">
			</div><!--img-class-->
		
</section><!--main-content-->	

	
	

	<div class="overlay">
		
			<div class="secondary-title-card">
				<h2>Bembo</h2>
			</div>
		
			<div class="blurb-class">
				<p>Bembo is a poster designed in the style of Dutch type designer Wim Crouwel. It incorporates bold background colors with contrasting leters in the foreground. To add additional focus to the subject, the word is broken up into three lines, and uses scale to contrast the rest of the type.</p>
				<p>
				Below the main design is the alphabet variations and the purchasing information.</p>
			</div><!--blurb-class-->
		
		</div>
	


</body>



<footer class="teminal-foot container-fluid footer-class">

	<div class="container wrapper">
		<div class="footer">	
			<p>All rights reserved. Content &copy; <?php echo date('Y'); ?> Riley Hein </p>

		</div><!--footer-->
	</div>

</footer>

</html>


<!--?php include('includes/footer.php'); ?-->