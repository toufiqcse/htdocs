<?php

function show_message(){

    // for success message
    if(isset($_SESSION['success']) && !empty($_SESSION['success'])){ ?>

        <div class="alert alert-success">
        <strong>
            <?php
            
                echo $_SESSION['success'];
                unset($_SESSION['success'])

            ?>
        </strong>
        </div>

    <?php 
    
    }// closing of if condition

    // for error message
    if(isset($_SESSION['error']) && !empty($_SESSION['error'])){ ?>

        <div class="alert alert-danger">
        <strong>
            <?php
            
                echo $_SESSION['error'];
                unset($_SESSION['error'])

            ?>
        </strong>
        </div>

    <?php 
    
    }// closing of if condition

}// closing of function block




?>