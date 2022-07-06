<!DOCTYPE html>
<html lang="en">
<head>
<title>Health Care Guru</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
	.error{
		color: red;
	}
</style>
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('../images/background.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html" style="color: green;">Health Care Guru</a></h1>
      </div>
      <?php 
      include('../nav.html');
      ?>
      <!-- ################################################################################################ -->
    </header>		
    </div>
</div>
    	<div class="portlet-body form col-md-9" style="margin: 20px 0px 10px 40px;">
    		<hr>
										<!-- BEGIN FORM-->
										<form action="SubmitContactUs.php" class="form-horizontal" method="POST"  id="formId" onsubmit="return Validate()">
											<div class="form-body">
												<h3 class="form-section">Contact Manager</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3 font-weight-bold">First Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Chee" name="First">
																
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group has-error">
															<label class="control-label col-md-3 font-weight-bold">Last Name</label>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Kin" name="Last" id="LastId">
																
																
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3 font-weight-bold">Phone</label>
															<div class="col-md-9">
																<input type="number" class="form-control" placeholder="0**********" name="Phone"
																id="PhoneId">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3 font-weight-bold">Email</label>
															<div class="col-md-9">
																<input type="email" class="form-control" placeholder="CheeKin@gmail.com" name="Email" id="EmailId">
																<span class="help-block">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
											</div>
											<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-6 font-weight-bold">Comment or Message or Query </label>
															<div class="col-md-9">
																<textarea class="form-control" name="Message"  rows="5"  
																id="MessageId" required>
																</textarea>
															</div>
														</div>
													</div>
											</div>
												<!--row-->
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green">Submit</button>
																<button type="button" class="btn default">Cancel</button>
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>

		<hr>							

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/04.png');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">WorkForce</h6>
      <p>Et posuere sit amet vulputate tempor tellus maecenas vehicula magna quis pede curabitur iaculis dui eu purus quisque est enim lobortis.</p>
      <p class="btmspace-50">Sed sollicitudin a mi vestibulum nisi ut lectus duis quam leo consectetuer.</p>
      <nav>
        <ul class="nospace">
          <li><a href="../index.html"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="#">Who We Are</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
          <li><a href="#">Online Shop</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
      </nav>
    </div>
    <div class="one_third">
      <h6 class="heading">Metus nam eu urna tempus</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Non lacus vivamus quis</h6>
      <article><a href="#"><img class="btmspace-15" src="../images/demo/320x140.png" alt=""></a>
        <h6 class="nospace font-x1"><a href="#">Sed congue vel gravida</a></h6>
        <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
        <p class="nospace">Viverra interdum quam in hac habitasse platea dictumst sed pede volutpat [&hellip;]</p>
      </article>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script src="../layout/scripts/Script.js"></script>
<script >
	$(document).ready(function(){
		$('#formId').validate( {
				rules: {
		    		First: "required",
		    		Last:  "required",
		    		Phone: "required",
		    		Email: {
		      				required: true,
		      				email: true
		    		} , 
		    		Message: {
		    				required: true ,
		    				maxlength: 500
		    		}
		  		},
			    messages: {
		    		First: "<span class=\"error\">Please specify your First Name</span>",
		    		Last: "<span class=\"error\">Please specify your Last Name</span>",
		    		Phone: "<span class=\"error\">Please specify your Phone Number</span>",
		    		
		    		Email: {
		      		required: "<span class=\"error\">We need your email address to contact you</span>",
		      		email: "<span class=\"error\">Your email address must be in the format of name@domain.com</span>"
		 		   } , 
		 		   Message: {
		 		   	required:"<span class=\"error\">Please Enter a Message</span>" ,
		 		   	maxlength:"<span class=\"error\">Message should be no longer then 500 </span>"
		 		   }
				}
		});
	});	

</script>
</body>
</html>