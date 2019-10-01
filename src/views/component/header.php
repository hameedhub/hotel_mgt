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
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <!-- Logo starts here -->
                <?php require 'views/component/logo.php' ?>
            <!-- Logo ends here -->
            <!-- Navigation start here -->
            <?php require 'views/component/nav.php' ?>
            <!-- Navigation end here -->
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php require 'views/component/main_slider.php' ?>
        <!-- END MENU SIDEBAR-->