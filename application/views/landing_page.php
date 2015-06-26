<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to CodeIgniter</title>
	<script src="/assets/js/JQueryLib.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
		.centerText{
			text-align: center;
		}
		@media(max-width: 600px){
			#frontImage{
				width: 100%;
			}
		}

		@media(min-width: 601px){
			#frontImage{
				width: 80%;
				margin-left: 10%;
			}
		}

	</style>
</head>
<body>

<!-- START CONTAINER -->
	<div id='container'>

<!-- START NAVBAR -->
		<nav class="navbar navbar-default navbar-responsive centerText" id='navbar'>
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/home">Cavalon Img</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        
		        <li><a href="/show/available_space">Available Space</a></li>
		        <li><a href="#">Floor Plans</a></li>
		        <li><a href="#">Maps</a></li>
		        <li><a href="#">Budget Info</a></li>
		        <li><a href="#">Photos</a></li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Property<br>Management<span class="caret"></span></a>
		        	<ul class='dropdown-menu'>
		        		<li><a href="#">Building Rules</a></li>
		        		<li role="separator" class="divider"></li>
		        		<li><a href="#">Parking</a></li>
		        	</ul>
		        </li>

		        <li class='dropdown'>
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vendors<span class="caret"></span></a>
		        	<ul class="dropdown-menu">
		        		<li><a href="#">Approved Vendors</a></li>
		        		<li role="separator" class="divider"></li>
		        		<li><a href="#">New Vendor <br> Application</a></li>
		        	</ul>
		        </li>

		      </ul>

		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Current Tenant<br>Sign In</a></li>
		        
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
<!-- END NAVBAR -->

<!-- START MAIN BODY -->
	<div class='row centerText'>
		<h1>Cavalon Place</h1>
		<h4>2021 NW Myhre Rd</h4>
		<h4>Silverdale, WA</h4>
	</div>
	<div class='row' id='imageDiv'>
		<img src="/assets/images/cavalon_front.jpg" id='frontImage'>
	</div>
	<div class='row centerText'>
	</div>	

<!-- END MAIN BODY -->


	</div> 
<!-- END CONTAINER -->


</body>
</html>