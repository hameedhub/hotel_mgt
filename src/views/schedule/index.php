<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title> Events Schedule</title>

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
                <!-- Form to add room type -->
                <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap" style="padding:10px">
                                    <h2 class="title-2">Events</h2>
                                </div>
                            </div>
                        </div>

<div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                               
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="events">
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

<!-- Ends list of room types -->
                <!-- Form to add room type ends her-->
                
                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                       <!-- Footer start here -->
                        <?php require 'views/component/footer.php'?>