<?php

include('../configuration/config.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Riho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Riho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo $base_url . "modules/dashboard/assets/" ?>images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $base_url . "modules/dashboard/assets/" ?>images/favicon.png" type="image/x-icon">
    <title>Riho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url . "modules/dashboard/assets/" ?>css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url . "modules/dashboard/assets/" ?>css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url . "modules/dashboard/assets/" ?>css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url . "modules/dashboard/assets/" ?>css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url . "modules/dashboard/assets/" ?>css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url . "modules/dashboard/assets/" ?>css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url . "modules/dashboard/assets/" ?>css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo $base_url . "modules/dashboard/assets/" ?>css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url . "modules/dashboard/assets/" ?>css/responsive.css">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-xl-5"><img class="bg-img-cover bg-center" src="<?php echo $base_url . "modules/dashboard/assets/" ?>images/login/3.jpg" alt="looginpage"></div>
        <div class="col-xl-7 p-0"> 
          <div class="login-card login-dark">
            <div>
              <div> <a class="logo text-start" href="index.html"><img class="img-fluid for-dark" src="<?php echo $base_url . "modules/dashboard/assets/" ?>images/logo/logo.png" alt="looginpage"><img class="img-fluid for-light" src="<?php echo $base_url . "modules/dashboard/assets/" ?>images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main"> 


                <form class="theme-form" method="POST">
                  <h4>Create your account</h4>

                  <p>Enter your personal details to create account</p>
                  <div class="form-group">
                    <label class="col-form-label pt-0">Your Name</label>
                    <div class="row g-2">
                      <div class="col-12">
                        <input class="form-control" type="text" required="" placeholder="First name" name="adminName">
                      </div>
                     
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" required="" placeholder="Test@gmail.com" name="adminEmail">
                  </div>


                  <div class="form-group">
                    <label class="col-form-label">Password</label>

                    <div class="form-input position-relative">
                      <input class="form-control" type="password" required="" placeholder="*********" name="adminPassword">
                      <div class="show-hide"><span class="show"></span></div>
                    </div>
                  </div>


                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Agree with<a class="ms-2" href="#">Privacy Policy</a></label>
                    </div>
                    <button class="btn btn-primary btn-block w-100" type="submit" name="registerAdmin">Create Account</button>
                  </div>

                  <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="admin_login.php">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="<?php echo $base_url . "modules/dashboard/assets/" ?>js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo $base_url . "modules/dashboard/assets/" ?>js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="<?php echo $base_url . "modules/dashboard/assets/" ?>js/icons/feather-icon/feather.min.js"></script>
      <script src="<?php echo $base_url . "modules/dashboard/assets/" ?>js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
       <script src="<?php echo $base_url."modules/dashboard/assets/" ?>js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- calendar js-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo $base_url."modules/dashboard/assets/" ?>js/script.js"></script>
    </div>
  </body>
</html>



<?php 

$adminName = $_POST['adminName'];
$adminEmail = $_POST['adminEmail'];
$adminPassword = $_POST['adminPassword'];

if(isset($_POST['registerAdmin']))
{
	$matchCredentials = mysqli_query($config,"INSERT INTO admin_directory(admin_name,admin_email,admin_password) VALUES('$adminName','$adminEmail','$adminPassword')");

	if($matchCredentials)
	{
		echo "<script>alert('Admin Registered Successfully');window.location.href='admin_login.php'</script>";
	}
	else
	{
		echo "<script>alert('Registration Failed');window.location.href='admin_registration.php'</script>";
	}
}


?>