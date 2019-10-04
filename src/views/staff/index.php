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
                                                    <td>status</td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody id="staffList" style="font-size:80%">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                    <!-- manage staff ends here -->

			<!-- end modal medium -->

			           <!-- Footer start here -->
                        <?php require 'views/component/footer.php'?>


                                            <!-- modal medium -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Staff Role</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<!-- Schedule events -->
                <div class="card-body card-block">
                                        <form id="role" action="<?php echo URL ?>staff/role" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label for="guest" class=" form-control-label">Staff</label>
                                                <select name="staff_id" required id="selectUsers" class="form-control">
                                                        <option value="">Select Staff</option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                <label for="room" class=" form-control-label">Role</label>
                                                <select name="access"  required id="selectAccess" class="form-control">
                                                        <option value="">Select Acess</option>
                                                    </select>

                                                </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div id="alert"></div>

							</p>
						</div>
						<div class="modal-footer">
							
              <input type="submit" class="btn btn-primary" value="Submit" />
              <a  href="<?php echo URL?>staff" class="btn btn-secondary" data-dismiss="modal">Close</a>
              </form>
						</div>
					</div>
				</div>
			</div>