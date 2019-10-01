<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo URL ?>public/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo URL ?>public/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL ?>public/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL ?>public/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo URL ?>public/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo URL ?>public/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL ?>public/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo URL ?>public/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL ?>public/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo URL ?>public/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo URL ?>public/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo URL ?>public/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo URL ?>public/images/icon/logo.png" alt="dev">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?php echo URL ?>login/run" method="post">
                            <?php 
                                echo $this->msg;
                            ?>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" required type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" required type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?php echo URL ?>public/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo URL ?>public/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo URL ?>public/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo URL ?>public/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo URL ?>public/vendor/wow/wow.min.js"></script>
    <script src="<?php echo URL ?>public/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo URL ?>public/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo URL ?>public/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo URL ?>public/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo URL ?>public/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo URL ?>public/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo URL ?>public/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo URL ?>public/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo URL ?>public/js/main.js"></script>

</body>

</html>
<!-- end document-->