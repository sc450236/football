<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/ico/favicon.png">

    <title>Football Online</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">

    <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/modernizr.custom.js"></script>
	
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>/assets/js/html5shiv.js"></script>
      <script src="<?php echo base_url();?>/assets/js/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
		$(document).ready(function(){
			$("#btnRegister").click(function(){
				$.ajax({
		         type: "POST",
		         url: "<?php echo site_url("/Register/doRegister")?>", 
		         data: {name: $("#txtName").val(), surname: $("#txtSurName").val(), tel: $("#txtTel").val(), email: $("#txtEmail").val()},
		         dataType: "text",  
		         cache:false,
		         success: 
		              function(data){
		                alert(data);  //as a debugging message.
		              }
		          });
			});
		});
    </script>
    
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#theMenu">
		
	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo">Menu</h1>
			<i class="icon-remove menu-close"></i>
			<a href="#vegus" class="smoothScroll">Vegus</a>
			<a href="#register" class="smoothScroll">Register</a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="icon-reorder"></i></div>
	</nav>
	
	<!-- ========== VEGUS SECTION ========== -->
	<section id="vegus" name=""vegus""></section>
	<div id="f">
		<div class="container">
			<iframe src="http://www.vegus168.com/" width="100%" height="500px" frameborder="0"></iframe>
		</div>
	</div>
	
	
	<!-- ========== REGISTER SECTION ========== -->
	<section id="register" name=""register""></section>
	<div id="f">
		<div class="container">
			<br>
			<div class="row">
				<h3>REGISTER</h3>
				<p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>
				
				<!-- INTRO INFORMATIO-->
				<div class="col-lg-6 col-lg-offset-3">
					<form class="form-horizontal">
					  <div class="form-group">
					    <div class="col-sm-3 control-label"></div>
					    <div class="col-lg-6">
					      <input type="text" class="form-control input-lg" id="txtName" placeholder="Name">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-3 control-label"></div>
					    <div class="col-lg-6">
					      <input type="text" class="form-control input-lg" id="txtSurName" placeholder="Surname">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-3 control-label"></div>
					    <div class="col-lg-6">
					      <input type="text" class="form-control input-lg" id="txtTel" placeholder="Tel">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-3 control-label"></div>
					    <div class="col-lg-6">
					      <input type="text" class="form-control input-lg" id="txtEmail" placeholder="Email">
					    </div>
					  </div>
					  <p><button type="button" id="btnRegister" class="btn btn-warning input-lg">REGISTER</button></p>
					</form>
				</div>								
			</div>
		</div><!-- /container -->
	</div><!-- /f -->
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="<?php echo base_url();?>/assets/js/classie.js"></script>
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/smoothscroll.js"></script>
	<script src="<?php echo base_url();?>/assets/js/main.js"></script>
</body>
</html>
