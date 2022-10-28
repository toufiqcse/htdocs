<?php
$title = ('Home');
include('header.php');

?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="card">
                <div class="card-body">
                <?php
                    $_SESSION['loggedin_status'] = true;

                    echo 'Successfully logged in';
                    ?>
                </div>
            </div>

        </div>
    </div>
</div>



<?php
include('footer.php'); 
?>