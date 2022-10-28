<?php session_start();

    
    $required_check     =   required_input_check();

    if($required_check['status'] == 'error'){

        $_SESSION['error'] = $required_check['message'];

        header('Location: login.php');
        exit;


    }else{

        echo 'data base checking';

    }
    
    


    



    function required_input_check(){

        $has_error = false;

        $error_data  = [];
        
        if(empty($_POST['user_email'])){
            $has_error = true;

            $error_data['user_email'] = "Email is required!";
        }
        
        if(empty($_POST['password'])){
            $has_error = true;

            $error_data['password'] = "Password is required!";
        }

        if($has_error){
            $status     = 'error';
            $message    = 'All required fields are needed!';
        }else{
            $status     = 'success';
            $message    = 'All required fields have data';
        }


        $response = [
            'status'    => $status,
            'message'    => $message,
            'data'      => $error_data,
        ];

        return $response;
    }


?>