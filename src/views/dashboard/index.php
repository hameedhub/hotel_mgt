<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Dashboard</title>

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

    <!-- FullCalendar -->
    <link href='<?php echo URL ?>public/vendor/fullcalendar-3.10.0/fullcalendar.css' rel='stylesheet' media="all" />

    <!-- Main CSS-->
    <link href="<?php echo URL ?>public/css/theme.css" rel="stylesheet" media="all">

    <style type="text/css">
    /* force class color to override the bootstrap base rule
       NOTE: adding 'url: #' to calendar makes this unneeded
     */
    .fc-event, .fc-event:hover {
          color: #fff !important;
          text-decoration: none;
    }
    </style>



</head>

<!-- animsition overrides all click events on clickable things like a,
      since calendar doesn't add href's be default,
      it leads to odd behaviors like loading 'undefined'
      moving the class to menus lead to only the menu having the effect -->
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <!-- Logo starts here-->
              <?php require 'views/component/logo.php' ?>
            <!-- Logo ends here -->
            <!-- Navigation starts here -->
            <?php require 'views/component/nav.php' ?>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php require 'views/component/main_slider.php' ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php require 'views/component/desktop_header.php' ?>
                        <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap" style="padding:10px">
                                    <h2 class="title-1">Schedule Calender</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#mediumModal">
                                        <i class="zmdi zmdi-plus"></i>add</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col">
                              <div class="au-card">
                                <div id="calendar"></div>
                              </div>
                            </div><!-- .col -->
                        </div>
                        <!-- Footer Starts -->
                            <?php require 'views/component/footer.php' ?>
                        <!-- Footer ends -->
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
							<h5 class="modal-title" id="mediumModalLabel">Schedule Event</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>
								<!-- Schedule events -->
                <div class="card-body card-block">
                                        <form id="insertEvent" action="<?php echo URL ?>dashboard/insertEvent" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-title" class=" form-control-label">Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-title" required name="title" placeholder="Enter Title..." class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-date" class=" form-control-label">Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" required name="date" placeholder="Enter Date..." class="form-control">
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

    <!-- full calendar requires moment along jquery which is included above -->
    <script src="<?php echo URL ?>public/vendor/fullcalendar-3.10.0/lib/moment.min.js"></script>
    <script src="<?php echo URL ?>public/vendor/fullcalendar-3.10.0/fullcalendar.js"></script>

   

    <script type="text/javascript">
$(function() {
  
  // build trival night events for example data
  $.get('dashboard/eventList', function(e){
       
    // for now, there is something adding a click handler to 'a'
  var tues = moment().day(2).hour(19);
        arr = [];
        e.forEach(element => {
            var data = {
                title: element['title'],
                start: moment().format(element['date']),
                url: 'dashboard'
              }
              arr.push(data);
              
        });
      var events =(arr);
     //console.log(events);

  //       var events = [
  //   
  //   {
  //     title: "Doctor Appt",
  //     start: moment().hour(9).add(2, 'days').toISOString(),
  //     url: '#'
  //   }

  // ];
  console.log(events);

  var trivia_nights = []

  for(var i = 1; i <= 4; i++) {
    var n = tues.clone().add(i, 'weeks');
    console.log("isoString: " + n.toISOString());
    trivia_nights.push({
      title: 'Trival Night @ Pub XYZ',
      start: n.toISOString(),
      allDay: false,
      url: '#'
    });
  }

  // setup a few events
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    events: events
  });
       
    }, 'json' );

   



});
    </script>


</body>

</html>
<!-- end document-->