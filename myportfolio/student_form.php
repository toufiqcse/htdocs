<?php 
$title = "Student Registration";
include ('header.php');

//database connection
$connc = mysqli_connect("localhost", "root", "", "student_information");
if(!$connc){
    echo mysqli_connect_error();
}

 if(isset($_POST['submit'])){
    $user               = $_POST['username'];
    // $fathers_name       = $_POST['fathers_name'];
    // $mothers_name       = $_POST['mothers_name'];
    // $phone_number       = $_POST['phone_number'];
    // $email              = $_POST['user_email'];
    // $present_adddress   = $_POST['temp_address'];
    // $permanent_adddress = $_POST['p_address'];
    // $fathers_occup      = $_POST['fathers_work'];
    // $family_member      = $_POST['family_member'];
    $query = "INSERT INTO student_biodata(username) VALUES('{$user}')";
   

   if(mysqli_query($connc, $query) == TRUE){
    echo "Done";
   }else{
    echo "NOt";
   }

    
 }
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="username">
                </div>
                <!-- <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Fathers Name :</label>
                    <input type="text" class="form-control" id="fathers_name" placeholder="Enter your father name" name="fathers_name">
                </div> -->
                <!-- <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Mothers Name :</label>
                    <input type="text" class="form-control" id="mothers_name" placeholder="Enter your mothers name" name="mothers_name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Mobile NO :</label>
                    <input type="number" class="form-control" id="phone_number" placeholder="Enter your  phone number" name="phone_number">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your  email" name="user_email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Present Address :</label>
                    <input type="text" class="form-control" id="temp_address" placeholder="Enter your  Present Address" name="temp_address">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Parmanent Address:</label>
                    <input type="text" class="form-control" id="p_address" placeholder="Enter Parmanent Address" name="p_address">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Fathers Occupation:</label>
                    <input type="text" class="form-control" id="fathers_work" placeholder="Fathers occupation" name="fathers_work">
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Family Member:</label>
                    <input type="number" class="form-control" id="family_member" placeholder="Enter Number" name="family_member">
                   
                </div> -->
                <input type="submit" value="Insert" name="submit" class="btn btn-info">

                        
            </form>
        
        <div class="col-md-6 col-sm-6">

        </div>
        </div>       
    </div>
</div>