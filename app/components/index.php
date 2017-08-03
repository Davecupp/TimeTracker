	<!-- <b>Week 5 Day 4 - June 24<sub>th</sub> (1 of 2). </b>
 -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Time Tracker</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>


<!-- Pulls in content from the files listed -->
<?php
	include('client.php');
	include('activity.php');
	include('category.php');
?>

<!-- Use <div class="container"> for a responsive fixed width container.  -->
<div class="container">

<!-- Header and will be centered on the page. -->
<h1 class="text-center">Time Tracker</h1> 


<!-- This whole section, contained in the <form></form> element, creates the "Select Clients" dropdown box. -->
<form method="get" action="">
	<div class="form-inline">
		<label for="clientSelect" class="sr-only">Select a Client</label>
		<select class="form-control from control mb-2 mr-sm-2 mb-sm-0" id="client" name="clientId">

<?php
	foreach (getClients() as $client) {
		print '<option value="' . $client['id'] . '">' . $client['name'] . "</option>\n";
	}
?>			
		</select>
	</div>
</form>


<form method="get" action="">
	<div class="form-inline">
	<label for="categorySelect" class="sr-only">Select a Category</label>
	<SELECT class="form-control form-conrol mb-2 mr-sm-2 mb-sm-0" id="categorySelect" name="categoryId">

<?php
	foreach (getCategories(42) as $category) {
		print '<option value="' . $category['id'] . '">' . $category['name'] . "</option>\n";
	}
?>		
		</SELECT>
	</div>
</form>

<div class="form-group">
	<label for="starttime" class="col-form-label">Start Date and Time</label>
		<div class="col-10">
			<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="starttime">
		</div>
</div>

<div class="form-group">
	<label for="endtime" class="col-form-label">End Date and Time</label>
		<div class="col-10">
			<input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="endtime">
		</div>
</div>


<form>
	<textarea type="textarea"></textarea>
</form>


<footer>
	<ul class="d-inline-block navbar fixed-bottom">
		<a class="pl-5 pr-5">&copy; 2017 Time Tracker</a>
		<a  class="pl-5 pr-5">About</a>
		<a  class="pl-5 pr-5">Contact</a>
	</ul>
</footer>


</div>
	
</body>
</html>