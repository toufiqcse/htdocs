<?php 
session_start();
include 'function/person_management.php';
include 'helper/utilities.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toufiqul Islam <?php echo $title ?> </title>
    <link rel="stylesheet" href="../myportfolio/assests/css/my-style.css">
    <link rel="stylesheet" href="../myportfolio/assests/css/style.css">
    
</head>
<body>
   
    <div class="container main-body">
        <div class="row mt-4">
            <div class="col-md-3 col-xl-3 col-md-sm-3">
                <a class="nav-link" href="index.php"><p class="text-center logo">Toufiqul Islam</p></a>
            </div>
            <div class="col-md-8 col-xl-8 col-md-sm-8">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav text-dark">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.php">Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="file_upload.php">Upload</a></li>
                        <li class="nav-item"><a class="nav-link" href="insert.php">Registration</a></li>
                        <li class="nav-item"><a class="nav-link" href="applicant-form.php">Applicant</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-1 col-xl-1 col-md-sm-1">
                <a href="registration.php"><input type="button" value="login" class="btn btn-success"></a>
            </div>
        </div>
    </div>


<link rel="stylesheet" href="../myportfolio/assests/js/main.js">
<script>
    var clicks = 0;
    function onClick() {
  clicks += 1;
  document.getElementById("clicks").innerHTML = clicks;
}
</script>
<link rel="stylesheet" href="../myportfolio/assests/js/my-script.js">
</body>
</html>