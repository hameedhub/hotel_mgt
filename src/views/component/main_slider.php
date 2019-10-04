<aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo URL ?>public/images/icon/logo.png" height="50%" width="50%" alt="Dev Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                    <li>
                            <a href="<?php echo URL ?>dashboard">
                                <i class="fas fa-chart-bar"></i>Dashboard</a>
                        </li>
    <?php
    if(Session::get('data')['access'] == manager || Session::get('data')['access'] == director ){ ?>

                    <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-bed"></i>Room</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                    <a href="<?php echo URL ?>room/type">Room Type</a>
                                </li>
                                <li>
                                    <a href="<?php echo URL ?>room">Rooms</a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="<?php echo URL?>staff">
                                <i class="fas fa-users"></i>Staff</a>
                        </li>

    <?php }; ?>
                        <li>
                            <a href="<?php echo URL ?>booking">
                                <i class="fas fa-chart-bar"></i>Booking</a>
                        </li>
                        <li>
                            <a href="<?php echo URL ?>reservation">
                                <i class="fas fa-table"></i>Reservation</a>
                        </li>
    <?php if(Session::get('data')['access'] == manager || Session::get('data')['access'] == director ){?>
                        <li>
                            <a href="<?php echo URL?>services">
                                <i class="far fa-check-square"></i>Services</a>
                        </li>
                        <?php }?>  
                        <li>
                            <a href="<?php echo URL?>report">
                                <i class="far fa-address-card"></i>Report</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>