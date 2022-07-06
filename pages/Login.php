<!DOCTYPE html>
<html>
<head>
  <title>Login Window</title>
  <link type="text/css" href="../layout/styles/Login.css" rel="stylesheet">

</head>
<body>
<div class="login-page">
  <div class="form">
    <center><h3>Work Force Guru</h3></center>
    <form class="register-form" id="Register_form" action="SubmitSignup.php" method="POST">
      <input type="text" placeholder="First Name" name="RFirstName"/>
      <input type="text" placeholder="Last Name" name="RLastName"/>
      <input type="number" placeholder="Phone" name="RPhone"/>
      <input type="text" placeholder="Email" name="REmail"/>
      <input type="password" placeholder="Password" name="RPassword" id="idRPassword"/>
      <input type="password" placeholder="Confirm Password" name="RCPassword"/>
      <button type="submit" value="Submitted">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>



    <form class="login-form" id="Login_form" action="CredentialsVerrify.php" method="POST">
      <input type="text" placeholder="Email" name="LName"/>
      <input type="password" placeholder="password" name="LPassword"/>
      <button type="submit" value="Submitted" name="login">Login</button>
      <p class="message">Not registered? <a href="#" onclick="">Create an account</a></p>
    </form>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../layout/scripts/Main.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script src="../layout/scripts/Script.js"></script>
<script >
  $(document).ready(function(){
    $('#Register_form').validate( {
        rules: {
            RFirstName: "required",
            RLastName:  "required",
            RPhone: "required",
            RPassword: {
                required: true ,
                minlength: 8
            },
            RCPassword: { 
                equalTo:"#idRPassword" 
            },
            REmail: {
                  required: true,
                  email: true
            } , 
            
          },
          messages: {
            
        }
    });
  }); 
$(document).ready(function(){
    $('#Login_form').validate( {
        rules: {
            LName: "required",
            LPassword: { 
              required: true ,
              minlength: 8
            }
          }
        
    });
  }); 

</script>
</body>
</html>