<?php
$title = ('Registration');
include('header.php');

?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="card">
                <div class="card-body">
                <?php 
                    unset($_SESSION['loggedin_status']);
                    //redirect to sign up page
                    header('Location: registration.php');

                    ?>
                </div>
            </div>

        </div>
    </div>
</div>



<?php
include('footer.php'); 
?>