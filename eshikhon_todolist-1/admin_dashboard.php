<?php session_start();


if(isset($_SESSION['loggedin_status']) && $_SESSION['loggedin_status'] == true){

        
    if(isset($_SESSION['success_msg']) && !empty($_SESSION['success_msg'])){
        echo $_SESSION['success_msg'];
        unset($_SESSION['success_msg']);
    }
        


        echo 'Welcome to our Dashboard System!';

        echo '<a href="logout.php">Logout</a>';

}else{

    header("Location:login.php");

}


?>