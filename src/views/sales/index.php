<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title>Log Sales</title>

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
        <div class="page-content--">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo URL ?>public/images/icon/logo.png" alt="dev">
                            </a>
                        </div>
                        <div class="alert alert-primary" role="alert"> Hi <b><?php echo Session::get('data')['first_name']?>  <?php echo Session::get('data')['last_name']?></b>, Hope you had a great sales today ?,<br> Please, only log sales when you done for the day. Thanks! </div>
                        
                        <div class="login-form">
                            <form id="addSale" action="<?php echo URL ?>sales/addSale" method="post">
                            
                                <div class="form-group">
                                    <label> Outlet</label>
                                    <select name="service_id" required id="selectService" class="form-control">
                                                        <option value="">Select Sales Outlet</option>
                                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Total Sales</label>
                                    <input class="au-input au-input--full" required type="number" name="amount" placeholder="Enter your sales amount">
                                </div>
                                <div class="form-group">
                                    <label>Balance</label>
                                    <input class="au-input au-input--full" required type="number" name="balance" placeholder="Enter your sales balance amount">
                                </div>
                                <div class="form-group">
                                    <label>Log Details</label>
                                    <textarea name="log" id="textarea-input" rows="9" placeholder="Log your sales in this format Product = Quantity = Amount (e.g Coke = 10 = 10000, rice = 24 = 25000 )" class="form-control"></textarea>
                                </div>

                               
                                <button id="submit"  class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Submit</button>
                            </form>
                            <div class="register-link">
                            <div id="alert"> </div>
                                <p>
                                    <a href="<?php echo URL ?>dashboard/logout">Logout</a>
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

    <?php
      if(isset($this->js)){
          foreach ($this->js as $js) {
            echo '<script src="'.URL.'views/'.$js.'"></script>';
          }
      }
    ?>
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