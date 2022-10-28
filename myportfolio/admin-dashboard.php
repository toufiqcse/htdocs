<?php
$title = ('Admin Dashboar');
include('header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12">
        <?php 
            if(isset($_SESSION['loggedin_status']) && $_SESSION['loggedin_status'] == true){
                //view success_msg
                if(isset($_SESSION['success_msg']) && !empty( $_SESSION['success_msg'])){
                    echo $_SESSION['success_msg'];
                    unset($_SESSION['success_msg']); 
                };

               

                echo 'Welcome to Admin Dashboard';
                echo '<a href="logout.php">Logout</a>'; 
            }else{
            //redirect to login page
            header('Location:login.php');

 };

?>
        </div>
    </div>
</div>

<?php
include('footer.php'); 
?>