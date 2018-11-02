<?php
require_once('bdd.php');


$sql = "SELECT id, title, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

session_start(); 


if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Lucid Planner | Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">		

		<!-- Main CSS     -->
		<link href="css/calendar/bootstrap.min.css" rel="stylesheet" />
		<link href="css/calendar/light-bootstrap-dashboard.css" rel="stylesheet"/>

		
		<!-- Calendar CSS     -->
		<link href="css/calendar/bootstrap.css" rel="stylesheet" />
		<link href='css/calendar/fullcalendar.css' rel='stylesheet' />
		
		
	</head>
	
	<body>
	<div class="wrapper">
		<!-- SIDEBAR -->
		<div class="sidebar" data-color="black">
		
			<div class="sidebar-wrapper">
				<div class="logo" >
					<img src="images/Logo-whiteorange40smaller.png" width="220px">   
				</div>
							
				<div class="sidebar-wrapper">
					<ul class="nav">
						<li class="active">
							<a href="dashboard.html">
								<i class="pe-7s-graph"></i>
								<p>Calendar</p>
							</a>
						</li>
						<li>
							<a href="user.html">
								<i class="pe-7s-user"></i>
								<p>User Profile</p>
							</a>
						</li>
						<li>
							<a href="notifications.html">
								<i class="pe-7s-bell"></i>
								<p>Notifications</p>
							</a>
						</li>
						
						<li>
							<a href="notifications.html">
								<i class="pe-7s-bell"></i>
								<p>Tasks</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end of SIDEBAR -->
		
		
		<div class="main-panel">
			<!-- TOP DASHBOARD -->
			<nav class="navbar navbar-default navbar-fixed">
				<div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
					
					<div class="collapse navbar-collapse">
					    <ul class="nav navbar-nav navbar-left">
						
							<li><?php if (isset($_SESSION['success'])) : ?>	</li>
							
							<li>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-dashboard"></i>
								</a>
							</li>
						</ul>
					
					
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#"><?php  if (isset($_SESSION['username'])) : ?>
								<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></a>
							</li>
						
							<li><a href="index.php?logout='1'" ><p>logout</p></a>
								<?php endif ?>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- end of TOP DASHBOARD -->
				
			
			<!-- CONTENT -->		
			<div class="content">
				<div class="container-fluid">
					<div class="card">
				
					<!-- Calendar -->
					
					
						<div class="row">
							<div class="col-lg-12 text-center">
								<div id="calendar" class="col-centered">
								</div>
							</div>
								
						</div>
						<!-- /.row -->
							
							<!-- Modal -->
							<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								<form class="form-horizontal" method="POST" action="addEvent.php">
								
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Add Event</h4>
								  </div>
								  <div class="modal-body">
									
									  <div class="form-group">
										<label for="title" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
										  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
										</div>
									  </div>
									  <div class="form-group">
										<label for="color" class="col-sm-2 control-label">Color</label>
										<div class="col-sm-10">
										  <select name="color" class="form-control" id="color">
											  <option value="">Choose</option>
											  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
											  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
											  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
											  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
											  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
											  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
											  <option style="color:#000;" value="#000">&#9724; Black</option>
											  
											</select>
										</div>
									  </div>
									  <div class="form-group">
										<label for="start" class="col-sm-2 control-label">Start date</label>
										<div class="col-sm-10">
										  <input type="text" name="start" class="form-control" id="start" readonly>
										</div>
									  </div>
									  <div class="form-group">
										<label for="end" class="col-sm-2 control-label">End date</label>
										<div class="col-sm-10">
										  <input type="text" name="end" class="form-control" id="end" readonly>
										</div>
									  </div>
									
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								  </div>
								</form>
								</div>
							  </div>
							</div>
							
							
							
							<!-- Modal -->
							<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								<form class="form-horizontal" method="POST" action="editEventTitle.php">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Edit Event</h4>
								  </div>
								  <div class="modal-body">
									
									  <div class="form-group">
										<label for="title" class="col-sm-2 control-label">Title</label>
										<div class="col-sm-10">
										  <input type="text" name="title" class="form-control" id="title" placeholder="Title">
										</div>
									  </div>
									  <div class="form-group">
										<label for="color" class="col-sm-2 control-label">Color</label>
										<div class="col-sm-10">
										  <select name="color" class="form-control" id="color">
											  <option value="">Choose</option>
											  <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
											  <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
											  <option style="color:#008000;" value="#008000">&#9724; Green</option>						  
											  <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
											  <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
											  <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
											  <option style="color:#000;" value="#000">&#9724; Black</option>
											  
											</select>
										</div>
									  </div>
										<div class="form-group"> 
											<div class="col-sm-offset-2 col-sm-10">
											  <div class="checkbox">
												<label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label>
											  </div>
											</div>
										</div>
									  
									  <input type="hidden" name="id" class="form-control" id="id">
									
									
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								  </div>
								</form>
								</div>
							  </div>
							</div>
					</div>
					
			
					<!-- end of Calendar -->
					
					
			    </div>
			</div>
			<!-- end of CONTENT -->
			
			
			
			
			
			
			<!-- FOOTER -->
			<footer class="footer">
			
			</footer>
			<!-- end of FOOTER -->
		
		</div>
		
	</div>
	
	
    <!--   Core JS Files   -->
    <script src="js/calendar/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/calendar/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/calendar/light-bootstrap-dashboard.js"></script>

	<!--   Core Calendar Scripts   -->
	<script src="js/calendar/jquery.js"></script>
	<script src='js/calendar/fullcalendar.min.js'></script>
	<script src='js/calendar/moment.min.js'></script>
	
	<script>
		$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) { 

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) { 

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>
				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Saved');
					}else{
						alert('Could not be saved. try again.'); 
					}
				}
			});
		}
		
	});

	</script>
	
</body>
</html>