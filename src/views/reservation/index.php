<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title> Guest Reservation</title>

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
                                    <h2 class="title-2">Reservations</h2>
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
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Date of Birth</th>
                                                <th>From</th>
                                                <th>Destination</th>
                                                <th>Arrival</th>
                                                <th>Departure</th>
                                                <th>Nationality</th>
                                                <th>Passport No.</th>
                                                <th>Date Issued</th>
                                                <th>Tel No.</th>
                                                <th>Company</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="reservations">
                                           
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
							<h5 class="modal-title" id="mediumModalLabel">Guest Information</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<!-- Schedule events -->
                <div class="card-body card-block">
                                        <form id="addReservation" action="<?php echo URL ?>reservation/addReservation" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label for="first_name" class=" form-control-label">First Name</label>
                                                <input type="text" id="first_name" required name="first_name" placeholder="Enter First Name" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label for="last_name" class=" form-control-label">Last Name</label>
                                                <input type="text" id="last_name" name="last_name" required placeholder="Enter Last Name" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Email Address</label>
                                                <input type="email"  name="email" placeholder="Enter Email Address" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Tel No.</label>
                                                <input type="tel" name="tel_no"  placeholder="Enter Tel No." class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">From</label>
                                                <input type="text"  name="origin" placeholder="Enter Coming From" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Destination</label>
                                                <input type="text" name="destination"  placeholder="Enter Destination" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Arrival Date</label>
                                                <input type="date" required  name="arrival" placeholder="Select Arrival Date" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Departure Date</label>
                                                <input type="date" name="departure"  placeholder="Select Departure Date" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Addres</label>
                                                <input type="text"  name="address" placeholder="Enter Address" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Nationality</label>
                                                <input type="text" name="nationality"  placeholder="Enter Nationality" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Passport No.</label>
                                                <input type="text"  name="passport_no" placeholder="Enter Passport No." class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Date Issued</label>
                                                <input type="date" name="date_issued"  placeholder="Select Date Issued" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Company</label>
                                                <input type="text"  name="company" placeholder="Enter Company" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Date of Birth</label>
                                                <input type="date" name="date_of_birth"  placeholder="Enter Date of Birth" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Room Type</label>
                                                <select name="room_type" required id="selectType" class="form-control">
                                                        <option value="0">Select Room Type</option>
                                                        <option value="1">Option1</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Price</label>
                                                <input type="text" name="price"  placeholder="0" disabled class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            
                                        
                                    </div>

							</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Save" />
              </form>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->
                       <!-- Footer start here -->
                        <?php require 'views/component/footer.php'?>