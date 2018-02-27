<!DOCTYPE html>
<html>
<head>
	<title>Months</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	

	  <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
	  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<?php 
	$year = date('y');
	$febdays;
	if ($year % 4 == 0){
		$febdays = 29;
	} else{
		$febdays = 28;
	}
		$months = [
			"January" => 31,
			"February" => 28,
			"March" => 31,
			"April" => 30,
			"May" => 31,
			"June" => 30,
			"July" => 31,
			"August" => 31,
			"September" => 30,
			"October" => 31,
			"November" => 30,
			"December" => 31
		];
	function months($monthsarray){
		foreach ($monthsarray as $months => $days) {
			$monthUpper = strtoupper($months);
			echo "<option value = '$months'>$monthUpper</option>";
		}
	}

	 ?>
	 <div class="container">
	 	<div class="jumbotron text-center">
	 	<table>
	 		<thead>
	 			<th>Kindly input your month</th>
	 		</thead>
	 		<tbody>
	 		<tr>
	 			<td>
	 				<form action="months.php" method="post" role="form">
	 					<div class="form-group">
	 						<div class="input-group">
	 							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	 							<select class=""form-control name="month-dropdown"></select>
	 						</div>
	 					</div>
	 					<input type="submit" name="submit" value="Submit" class="btn btn-info">
	 				</form>
	 			</td>
	 		</tr>
	 		</tbody>
	 	</table>
	 	</div>
	 </div>
	 <?php 
	 	if (isset($_POST['submit'])) {
	 		$monthselected = $_POST['month-dropdown'];
	 		$days = $months[$monthselected];

	 		if ($monthselected!=="February") {
	 			echo "<div class='container'><h3>$monthselected has $days days</h3></div>";
	 		}else{
	 			if ($days == 29) {
	 				echo "<div class='container'><h3>$monthselected has $days days since it is a leap year</h3></div>";
	 			}else{
	 				echo "<div class='container'><h3>$monthselected has $days days as it is not a leap year</h3></div>";
	 			}
	 			
	 		}
	 	}
	  ?>
</body>
</html>