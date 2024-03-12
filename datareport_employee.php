<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Natural Museum of Fine Arts - Employee Search</title>
	<script src="datareportscriptemployee.sql"></script>
  </head>
  <body>
	<h2>Employee Search</h2>
	<form id="form_datareportemployees" method="post">
		<label>First Name: </label><input id="DataReportFirstName" type="text">
		<label>Last Name: </label><input id="DataReportLastName" type="text"><label><br></label>
		<label>ID: </label><input id="DataReportEmployeeID" type="text">
		<label>Position: </label><input id="DataReportPosition" type="text"><label><br></label>
		<label>UserName: </label><input id="DataReportUserName" type="text">
		<label>Supervisor: </label><input id="DataReportSupervisor" type="text"><label><br></label>
		<label>Work Days:<br></label>
		<input type="checkbox" id="WorksOnMonday"><label>Monday</label>
		<input type="checkbox" id="WorksOnTuesday"><label>Tuesday</label>
		<input type="checkbox" id="WorksOnWednesday"><label>Wednesday</label>
		<input type="checkbox" id="WorksOnThursday"><label>Thursday</label>
		<input type="checkbox" id="WorksOnFriday"><label>Friday</label>
		<input type="checkbox" id="WorksOnSaturday"><label>Saturday</label>
		<input type="checkbox" id="WorksOnSunday"><label>Sunday</label><br>
		<input type="submit" id="button" value="Search" name="datareport_employee_submitbutton"><br><br>
	</form>
	<?php
		$servername = "database-1.cfkociaic7f3.us-east-2.rds.amazonaws.com";
		$username = "admin";
		$password = "josephjoestar";
		$dbname = "MfahDB";

		if(isset($_POST['datareport_employee_submitbutton'])) {
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			$sqlDataReport = 'SELECT FirstName, LastName FROM employee WHERE EmployeeID LIKE "%%" AND Postion LIKE "%%" AND FirstName LIKE "%%" AND LastName LIKE "%%" AND UserName LIKE "%%" AND Supervisor LIKE "%%" ORDER BY lastName, firstName';
			$dataReportVtable = mysqli_query($conn, $sqlDataReport);

			while ($row = mysqli_fetch_assoc($dataReportVtable)) {
				//echo $row['FirstName'] . " " . $row['LastName'] . ;
				echo "Name: " . $row['FirstName'] . " " . $row['LastName'] . "<br>";
			}
		}
		echo "Hello Echo";
	?>
  </body>
 </html>
