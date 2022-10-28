<?php
$title = ('Sign Up');
include('header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="card">
                <div class="card-body">
                <h3 class="text-center"> Sign In</h3>
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
        <div class="col-sm-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center"> Sign Up</h3>

                    <?php show_message(); ?>

                    <form action="login_process.php" method="post">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="user_name">
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="user_email">
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label">Mobile No:</label>
                            <input type="number" class="form-control" id="number" placeholder="Enter number" name="number">
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
                        <input type="submit" class="btn btn-primary" name="signup_submit" value="Sign Up">
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include('footer.php'); 
?>