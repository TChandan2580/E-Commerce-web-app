<?php 
include 'header.php';
session_start();
?>

<body>
    <div class="loginbody">
        <div id="login">
            <h3 class="text-center text-white pt-5">Login form</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="logincheck.php" method="post">
                                <h3 class="text-center text-info">Login</h3>
                                <?php
                                if (isset($_SESSION['err'])) {
                                    echo $_SESSION['err'];
                                    unset($_SESSION['err']);
                                }
                                ?>
                                <div class="form-group">
                                    <label for="username" class="text-info">Email:</label><br>
                                    <input type="text" name="email" id="username" class="form-control" placeholder=" Enter your email">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-info">Password:</label><br>
                                    <input type="text" name="password" id="password" class="form-control" placeholder=" Enter your passwordadmin 0 character">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-block" name="submit" type="submit"><i class="fas fa-sign-in-alt"></i> Login Now </button><br>
                                    <a href="forgetpassword.php" id="forgot_pswd">Forgot password?</a>
                                </div>
                                <div id="register-link" class="text-right">
                                    <a href="registration.php" class="text-info">Register here</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
    'footer.php'; ?>