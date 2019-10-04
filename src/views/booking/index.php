<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title Page-->
    <title> Guest Booking</title>

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
                                    <h2 class="title-2">Bookings</h2>
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
                                                <th>Guest</th>
                                                <th>Room</th>
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Adults</th>
                                                <th>Children</th>
                                                <th>Rate</th>
                                                <th>Amount Paid</th>
                                                <th>Balance</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="bookings">
                                           
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
							<h5 class="modal-title" id="mediumModalLabel">Booking Information</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<!-- Schedule events -->
                <div class="card-body card-block">
                                        <form id="addBooking" action="<?php echo URL ?>booking/addBooking" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label for="guest" class=" form-control-label">Guest</label>
                                                <select name="guest_id" required id="guest" class="form-control">
                                                        <option value="0">Select Guest</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label for="room" class=" form-control-label">Room</label>
                                                <select name="room_id"  required id="rooms" class="form-control">
                                                        <option value="0">Select Room</option>
                                                    </select>

                                                </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">No. Adult</label>
                                                <input type="number"  name="adults" placeholder="Number of Adult" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">No. Children</label>
                                                <input type="number" name="children"  placeholder="Number of Children" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Check In</label>
                                                <input type="date" required  name="check_in" placeholder="Select Check In Date" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Check Out</label>
                                                <input type="date" name="check_out"  placeholder="Select Check Out Date" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                    
                                            <div class="row form-group">
                                                <div class="col col-md-4">
                                                <div class="form-group">
                                                <label class=" form-control-label">Amount Paid</label>
                                                <input type="number"  name="amount_paid" placeholder="Enter Amount Paid" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                <label class=" form-control-label">Balance</label>
                                                <input type="number" name="balance"  placeholder="Enter Balance" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                <label class=" form-control-label">Rate</label>
                                                <input type="text" name="rate"  placeholder="Enter Rate" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        
                                    </div>
                                    <div id="alert"></div>

							</p>
						</div>
						<div class="modal-footer">
							<a  href="booking" class="btn btn-secondary" data-dismiss="modal">Close</a>
              <input type="submit" class="btn btn-primary" value="Submit" />
              </form>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->
                       <!-- Footer start here -->
                        <?php require 'views/component/footer.php'?>