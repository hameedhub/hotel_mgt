<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title>Add Room Type</title>

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
                                    <h2 class="title-2">Room Types</h2>
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
                                                <th>price</th>
                                                <th>Description</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="roomType">
                                           
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
							<h5 class="modal-title" id="mediumModalLabel">Room Type Details</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<!-- Schedule events -->
                <div class="card-body card-block">
                                        <form id="saveType" action="<?php echo URL ?>room/saveType" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-title" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-title" required name="room_type_name" placeholder="Enter Title..." class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-title" class=" form-control-label">Price </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-title" required name="price" placeholder="Enter Price..." class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-title" class=" form-control-label">Description </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-description" required name="description" placeholder="Description..." class="form-control">
                                                </div>
                                            </div>
                                            
                                        
                                    </div>
                                    <div id="alert"></div>
							</p>
						</div>
						<div class="modal-footer">
              <input id="submit" type="submit" class="btn btn-primary" value="Save" />
              <a href="<?php echo  URL?>room/type" class="btn btn-secondary" data-dismiss="modal">Close</a>
              </form>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->
                       <!-- Footer start here -->
                        <?php require 'views/component/footer.php'?>