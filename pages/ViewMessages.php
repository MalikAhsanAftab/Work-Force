<!DOCTYPE html>
<html lang="en">
<?php include '../include/DbConnect.php'; ?>
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
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
<hr>
    	<div style="margin: 40px 40px 40px 40px; border: 1px solid black; padding:13px; border-radius:5px;">
    
        <table id="table" class="stripe hover">
          <thead>
            <tr>
              <th>
                Email  
              </th>
              <th>
                First Name
              </th>
              <th>
                Last Name
              </th>
              <th>
                Phone
              </th>
              <th>
               Message
              </th>
              <th>
                Time of Submission
              </th>
            </tr>  
          </thead>
          <tbody>
              <?php $result = mysqli_query($conn , "Select * from mail"); 
                while($row = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['First']; ?></td>
                    <td><?php echo $row['Last']; ?></td>
                    <td><?php echo $row['Phone']; ?></td>
                    <td><?php echo $row['Message']; ?></td>
                    <td><?php echo $row['Time']; ?></td>
                  
                  </tr>                  
                <?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>
                Email  
              </th>
              <th>
                First Name
              </th>
              <th>
                Last Name
              </th>
              <th>
                Phone
              </th>
              <th>
               Message
              </th>
              <th>
                Time Of Submission
              </th>
            </tr>  
          </tfoot>
        </table>





























</div>

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
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable();
} );
</script>
</body>
</html>