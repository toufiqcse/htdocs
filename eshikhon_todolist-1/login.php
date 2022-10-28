<?php

$title = '&nbsp;&nbsp;Login';

include('header.php'); ?>
<!-- start content area -->

<div class="container">

    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">

                    <?php show_message(); ?>

                    <form action="login_process.php" method="post">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember" value="1"> Remember me
                            </label>
                        </div>
                        <input type="submit" class="btn btn-primary" name="login_submit" value="Login">
                    </form>

                </div>
            </div>
        </div>

    </div>

</div>

<!-- end of content area -->
<?php include('footer.php'); ?>