<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title>Rooms</title>

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
                                    <h2 class="title-2">Rooms</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#mediumModal">
                                        <i class="zmdi zmdi-plus"></i>add</button>
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
                                                <th>Type</th>
                                                <th>location</th>
                                                <th>price</th>
                                                <th>status</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="rooms">
                                           
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
                        <!-- modal medium -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Room Details</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<!-- Schedule events -->
                <div class="card-body card-block">
                                        <form id="addRoom" action="<?php echo URL ?>room/addRoom" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-title" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-title" required name="room_name" placeholder="Enter Title..." class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-title" class=" form-control-label">Type</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                <select name="room_type" required id="selectType" class="form-control">
                                                        <option value="0">Select Room Type</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-title" class=" form-control-label">Location </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-description" required name="location" placeholder="Location..." class="form-control">
                                                </div>
                                            </div>
                                            
                                        
                                    </div>
                                    <div id="alert"></div>
							</p>
						</div>
						<div class="modal-footer">
              <input id="submit-room" type="submit" class="btn btn-primary" value="Save" />
              <a href="<?php echo URL?>room" class="btn btn-secondary" data-dismiss="modal">Close</a>
              </form>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->
                       <!-- Footer start here -->
                        <?php require 'views/component/footer.php'?>