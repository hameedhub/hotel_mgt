<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title><?php echo $this->user['first_name'] .' '. $this->user['last_name'] ?></title>

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
                                    <h2 class="title-2">
                                      <?php echo $this->user['first_name'] .' '. $this->user['last_name'] ?>
                                    </h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#mediumModal">
                                        <i class="zmdi zmdi-plus"></i>add</button>
                                </div>
                            </div>
                        </div>

<div class="row">
                            <div class="col-lg-12">
                              <div class="table-responsive table-responsive-data2">
                                  <table class="table table-data2">
                                      <thead>
                                          <tr>
                                              <th>Service</th>
                                              <th>Desc</th>
                                              <th>Qty</th>
                                              <th>Price/Unit(₦)</th>
                                              <th>Amount Paid(₦)</th>
                                              <th>Balance(₦)</th>
                                              <th>status</th>
                                              <th></th>
                                          </tr>

                                      </thead>
                                      <tbody style="font-size:80%" id="tab">
                                          <tr >
                                              <td>
                                                <span class="block-email"><?php echo $this->user['room_name'] ?></span>
                                              <td>
                                                  <span class="desc"><?php echo $this->user['room_type_name'] ?></span>
                                              </td>
                                              <td><?php 
                                             $check_in = strtotime($this->user['check_in']);
                                              $check_out = strtotime($this->user['check_out']);
                                             $diff = $check_out - $check_in;
                                            $days = round($diff/(60 * 60 * 24));
                                             echo  $days;
                                              
                                              ?></td>
                                              <td><?php echo $this->user['price'] ?></td>
                                              <td><?php echo $room_total = $this->user['amount_paid'] ?></td>
                                              <td>
                                                  <span class="danger"><?php echo  $room_bal= $this->user['price'] * $days - $this->user['amount_paid'] ?></span>
                                              </td>
                                              <td class="status--process"><?php echo $this->user['status']?></td>
                                              <td>
                                                  <div class="table-data-feature">

                                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                          <i class="zmdi zmdi-delete"></i>
                                                      </button>

                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="spacer"></tr>
                                            <?php 
                                            $arr_total = array();
                                            $arr_bal = array();
                                           foreach($this->tab as $value){?>
                                           <form action="../updateTab/<?php echo $value['id']?>" method="POST">
                                           <tr >
                                              <td>
                                                <span class="block-email"><?php echo $value['name'] ?></span>
                                              <td>
                                                  <span class="desc"><?php echo $value['product'] ?></span>
                                              </td>
                                              <td><input style="width:50px" type="number" value="<?php echo $value['qty'] ?>" name="qty" ></td>
                                              <td><?php if($value['status'] == "Declined"){
                                                  echo $total = 0;
                                              }else{
                                                echo  $total =  $value['price'];
                                              }
                                               ?></td>
                                              <td> <input style="width:70px" type="number" value="<?php echo $value['amount_paid'] ?>" name="amount_paid"> </td>
                                              <td>
                                                  <span class="status--process"><?php
                                                  if($value['status'] == "Declined"){
                                                     echo $balance = 0;
                                                  }else{
                                                    echo $balance = $value['price'] * $value['qty'] - $value['amount_paid'];
                                                  };
                                                  ?></span>
                                              </td>
                                              <td class="status--process">
                                              <select name="status">
                                                <option selected value="<?php echo $value['status']?>"><?php echo $value['status']?></option>
                                                <option value="Successful">Successful</option>
                                                <option value="Declined">Declined</option>
                                              </select>
                              
                                              </td>
                                              <td>
                                                  <div class="table-data-feature">

                                                      <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Save">
                                                          <i class="zmdi zmdi-save"></i>
                                                      </button>

                                                  </div>
                                              </td>
                                          </tr>
                                          <tr class="spacer"></tr>
                                          <input type="hidden" name="booking_id" value="<?php echo $this->user['id']?>" >
                                           </form>
                                           
                                           <?php

                                           
                                         array_push($arr_total, $total);  
                                         array_push($arr_bal, $balance);
                                        };
                                            
                                            print_r($arr_bal);
                                            ?>
                                            <tr class="spacer"></tr>
                                            <tr class="spacer"></tr>



                                      </tbody>
                                  </table>
                              </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Invoice Information</div>
                                    <div class="card-body">
                                        <!-- <div class="card-title">
                                            <h3 class="text-center title-2">Pay Invoice</h3>
                                        </div> -->
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Customer Name</label>
                                                <input id="cc-pament" name="fullname" type="text" class="form-control"  disabled value="<?php echo $this->user['first_name']. ' '. $this->user['last_name'] ?>">
                                            </div>
                                           
                                           
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="control-label mb-1">Total</label>
                                                        <input id="cc-exp" name="total" type="text" disabled class="form-control cc-exp" value="₦<?php echo $room_total + array_sum($arr_total)?>">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label  class="control-label mb-1">Balance</label>
                                                    <div class="input-group">
                                                        <input id="" name="balance" disabled type="text" class="form-control cc-cvc" value="₦<?php echo $room_bal + array_sum($arr_bal)?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                        <!-- Button -->
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Checkout
                                        </button>
                                        
                                        <button type="reset" class="btn btn-success btn-sm">
                                            <i class="fa fa-send"></i> Mail
                                        </button>

                                        <button onclick="do()" type="print" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Print
                                        </button>
                                            <script>
                                                function do(){
                                                    alert(1);
                                                    window.print();
                                                }
                                                </script>
                                            </div>
                                        </form>
                                    </div>
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

                                                <!-- modal medium -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Service Information</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<!-- Schedule events -->
                <div class="card-body card-block">
                                        <form id="addTab" action="<?php echo URL ?>booking/addTab" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label for="guest" class=" form-control-label">Service</label>
                                                <select name="service_id" required id="service" class="form-control">
                                                        <option value="">Select Service </option>
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Amount Paid</label>
                                                <input type="number" required  name="amount_paid" placeholder="Enter Amount Paid" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label class=" form-control-label">Quantity</label>
                                                <input type="number" required  name="qty" placeholder="Quantity of product" class="form-control">
                                                </div>
                                                </div>
                                                <div class="col col-md-6">
                                                <div class="form-group">
                                                <label for="guest" class=" form-control-label">Status</label>
                                                <select name="status" required id="status" class="form-control">
                                                        <option value="">Select Status </option>
                                                        <option value="Successful">Successful</option>
                                                        <option value="Declined">Declined</option>
                                                    </select>
                                                </div>
                                                </div>




                                            </div>
                                                                                </div>
                                    <div id="alert"></div>

							</p>
						</div>
						<div class="modal-footer">
                        <input type="hidden" name="booking_id" value="<?php echo $this->user['id'] ?>"  />

                        <input id="submit" type="submit" class="btn btn-primary" value="Save" />
              <a href="<?php echo URL ?>booking/tab/<?php echo $this->user['id'] ?>" class="btn btn-secondary" data-dismiss="modal">Close</a>
              </form>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->
