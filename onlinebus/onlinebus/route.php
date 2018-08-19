<DOCTYPE html>
<html>
	<head>
		<title>Online bus booking management</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<link rel = "stylesheet" type = "text/css" href = "style1.css">
		<style>
			#p{
				background-image: url("reao.jpg");
				background-repeat: no-repeat;
				background-position: center center;
				background-size: cover;
				border-radius: 5px;
				
			}
			table{
				border:5px LightSteelBlue ;
				margin:auto;
				width:85%;
				padding: 50px;
			}
			th,td{
				background-color: rgba(0,0,0,.1);
				color: Linen;
				text-align: center;
			}
			#t2{
				border:5px LightSteelBlue ;
				margin:auto;
				width:100%;
				padding: 50px;
			}
			h1 {
				
				width: 500px;
				margin: auto;
				color:white;
				margin-left:45%;
				}

		</style>
			
UPDATE `schedule` SET `Schedule`= '07:00:00' WHERE id = 112
	</head>	
	<body>
		
		<div id = "menu">
			<div id = "Name">
					<h2 id = "h2">----BusM.org----</h2>
			<ul>
				<img src = "bus.png" width = "50px" height = "50px">
				<li><a href = "route.php">BUSES & SCHEDUALE</a></li>
				<li><a href = "location.php">LOCATION</a></li>
				<li><a href = "contact.php">CONTACT</a></li>
			</ul>
		</div>
		</div>
		<div id = "p">
		<table border = "2">
			
		<div id = "p">
		<table border = "3">
		<?php
			
			$from = "";
			$to = "";
			$ondate = "";
			$retdate = "";

			$username = "root";
			$password = "";
			$server = "localhost";
			$database = "busschedule";
			$db_handle = mysql_connect($server,$username,$password);
			$db_found = mysql_select_db($database,$db_handle);
				
			if(isset($_POST['btn'])){
				if(!empty($_POST['from']) && !empty($_POST['to']) && !empty($_POST['ondate'])){
					$from  = $_POST['from'];
					$to = $_POST['to'];
					$ondate = $_POST['ondate'];
					$retdate = $_POST['retdate'];
				
					$result = mysql_query("select * from schedule where Fromlo = '$from' and Tolo = '$to'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Fromlo'] == $from && $db_field['Tolo'] == $to){
											
											print "<br></br><h1>". " Welcome "."<h1><br></br>";
											
											print "<tr><th>"."BUSES"."</th>";
											print "<th>"."Schedule"."</th>";
											print "<th>"."From"."</th>";
											print "<th>"."To"."</th></tr>";
											print "<tr><td>".$db_field['Buses']."</td>";
											print "<td>".$db_field['Schedule']."</td>";
											print "<td>".$db_field['Fromlo']."</td>";
											print "<td>".$db_field['Tolo']."</td></tr>";
											print $db_field['Seats']."";	 
											
											while($db_field = mysql_fetch_assoc($result)){ 
												
												 print "<tr><td>".$db_field['Buses']."</td>";
												 print "<td>".$db_field['Schedule']."</td>";
												 print "<td>".$db_field['Fromlo']."</td>";
												 print "<td>".$db_field['Tolo']."</td></tr>";
												 print $db_field['Seats']."";	 
												}
												print "<table id = t2><tr><td><a href = http://localhost/online%20bus/confirm.php><button>SEATS</button></a></td></tr><table>";	
												mysql_close($db_handle);
									}
				
									else{
										print "</br><h1>"."TRY AGAIN !!!"."</h1><br>";
									}
									
																													
									
				}
							
				else{
					
							print "</br><h1>"."TRY AGAIN FOR THE SCHEDUALE!!!"."</h1><br>";
							print "<tr><td><a href = http://localhost/online%20bus/confirm.php><button disabled = disabled>SEATS</button></a></td></tr>";	
				}
				
			}
				?>
						
				</table>
				
				<!--<div id = 'form2'>
				<a href = "http://localhost/online%20bus/confirm.php"><button>SEATS</button></a>
				<form action="confirm.php" method = "POST">
				<p>
				<label>BUS:</label>
				<input type = "text" id = "bus" placeholder = "Enter bus name" name = "bus" value = "" />
								
				<label>TIME:</label>
				<input type = "text" id = "time" placeholder = "Enter time" name = "time"  value = ""/>
				<br></br><input type = "submit" name = "btn1" id = "btn1" value = "SEATS" />
				</p>
				
				</form>
				</div>	
				</div>
				-->
		
		</body>
</html>

