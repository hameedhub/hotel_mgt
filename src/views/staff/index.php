<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title>Manage Staff</title>

   <!-- Header -->
    <?php require 'views/component/header.php'?>
   <!-- Header ends here -->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require 'views/component/desktop_header.php' ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
              
                    <!-- manage staff -->
                    <div class="col-lg-12">
                                 <!-- USER DATA-->
                                 <div class="user-data m-b-40">
                                 <div class="overview-wrap" style="padding-left:20px; padding-right:20px">
                                 <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-account-calendar"></i>staff data</h3>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#mediumModal">
                                        <i class="zmdi zmdi-plus"></i>Access</button>
                                </div>

                                    <div class="table-responsive table-data">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>name</td>
                                                    <td>role</td>
                                                    <td>address</td>
                                                    <td>access</td>
                                                    <td>status</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody id="staffList" style="font-size:80%">
                                                
                                                <!-- <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <h6>lori lynch</h6>
                                                            <span>
                                                                <a href="#">johndoe@gmail.com</a>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="role user">user</span>
                                                    </td>
                                                    <td>
                                                        <div class="rs-select2--trans rs-select2--sm">
                                                            <select class="js-select2" name="property">
                                                                <option value="">Full Control</option>
                                                                <option value="" selected="selected">Post</option>
                                                                <option value="">Watch</option>
                                                            </select>
                                                            <div class="dropDownSelect2"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr> -->
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                    <!-- manage staff ends here -->

			           <!-- Footer start here -->
                        <?php require 'views/component/footer.php'?>