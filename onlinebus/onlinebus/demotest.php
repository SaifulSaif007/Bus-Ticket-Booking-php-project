<DOCTYPE html>
<html>
	<head>
		<title>Online bus booking management</title>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<style>
		
			table{
				border:5px Indigo;
				margin:auto;
				padding: 40px;
				width:55%;
			}
			th,td{
				background-color: rgba(0,0,0,.1);
				color: Linen;
				text-align: center;
			}
			#btn3{
				color: IndianRed;
				background-color: rgba(0,0,0,.5);
				padding: 15px;
				border-radius: 15px;
				
			}
			h1{
				width: 700px;
				margin: auto;
				color:white;
				margin-left:30%;
			}
			
			#h{
				width: 700px;
				margin: auto;
				color:white;
				margin-left:43%;
			}
			#left{
				margin-left:33%;
				width: 240px;
				background-color:rgba(0,0,0,.7);
				float:left;
			}
			#right{
				width: 240px;
				background-color:rgba(0,0,0,.7);
				float:left;
			}
			#btn2{
				color: Linen;
				background-color: rgba(0,0,0,.5);
				padding: 15px;
				border-radius: 15px;
				margin-left:47%;
			}
			#form3{
				border: solid gray 1px;
				width: 65%;
				border-radius: 5px;
				margin:5px auto;
				background-color: rgba(0,0,0,.3);
				padding: 5px;
				text-align:center;
				color: Linen;
			}
			#form4{
				background-color: rgba(0,0,0,.3);
				border: solid gray 1px;
				width: 100%;
				text-align:center;
				border-radius: 5px;
				padding-top: 450px;	
				color: Linen;
			}
			#user{
				border-radius: 5px;
			}
			#email{
				border-radius: 5px;
			}
			#c1{
				border-radius: 5px;
			}
			#s1{
				border-radius: 5px;
			}
			#s2{
				border-radius: 5px;
			}
			#s3{
				border-radius: 5px;
			}
			#s4{
				border-radius: 5px;
			}
			
		</style>
	</head>
	
	<body>
		
		<div id = "menu">
			<div id = "Name">
					<h2 id = "h2">---BusM.org---</h2>
					
			<ul>
				<img src = "bus.png" width = "50px" height = "50px">
				<li><a href = "index.php">HOME</a></li>
				<li><a href = "confirm.php">CONFIRMATION</a></li>
				<li><a href = "location.php">LOCATION</a></li>
				<li><a href = "contact.php">CONTACT</a></li>
			</ul>
		</div>

	</div>
		
		
		<div id = 'b'>
		<?php
				
			$bus = "";
			$time = "";
			

			$username = "root";
			$password = "";
			$server = "localhost";
			$database = "busschedule";
			$db_handle = mysql_connect($server,$username,$password);
			$db_found = mysql_select_db($database,$db_handle);
				
			if(isset($_POST['btn1'])){
				if(!empty($_POST['bus']) && !empty($_POST['time'])){
					$bus  = $_POST['bus'];
					$time = $_POST['time'];
		
					$result = mysql_query("select * from schedule where Buses = '$bus' and Schedule = '$time'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>Overview of seats</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										<th>A1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										<th>B</th>
										<th>B1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										<th>C</th>
										<th>C1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										<th>D</th>
										<th>D1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										<th>E</th>
										<th>E1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										<th>F</th>
										<th>F1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										<th>G</th>
										<th>G1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										<th>H</th>
										<th>H1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										<th>I</th>
										<th>I1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										<th>J</th>
										<th>J1</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										<th>A3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										
										<th>B3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										
										<th>C3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										
										<th>D3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										
										<th>E3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										
										<th>F3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										
										<th>G3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										
										<th>H3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										
										<th>I3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										<tr>
										
										<th>J3</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'confirm.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn2' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}
									
				}
				else{
					
							print "</br><h1>"."TRY AGAIN FOR THE SCHEDUALE!!!"."</h1><br>";
				}
				
			}

		?>
			<?php
			
	
			$btn2 = "";
			
			$username = "root";
			$password = "";
			$server = "localhost";
			$database = "busschedule";
			$db_handle = mysql_connect($server,$username,$password);
			$db_found = mysql_select_db($database,$db_handle);
				
			if(isset($_POST['btn2'])){
					
	
					$result = mysql_query("SELECT * FROM `seats2` WHERE id is NOT NULL ")
							or die("Failed to query database ".mysql_error());
							print "<div id = 'left'>";
							print"<table border = '3'>";
							
								while($db_field = mysql_fetch_assoc($result)){
										  
										 print "<tr><th>".$db_field['seats']."<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th>".$db_field['s1']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th>".$db_field['s2']."</th> ";
										
									}
									print "</table>";
									print "</div>";
									
									$result = mysql_query("SELECT * FROM `seats2` WHERE id is NOT NULL ")
									or die("Failed to query database ".mysql_error());
									print "<div id = 'right'>";
									print"<table border = '3'>";
									while($db_field = mysql_fetch_assoc($result)){
										
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th>".$db_field['s3']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th>".$db_field['s4']."</th></tr>";

									}
									print "</table>";
									print "</div>";
							
									print "
									
												
												<form  id = 'form4' action= 'confirm.php' method = 'POST'>
												
												<br></br><label id = lvl1>Username:</label>
												<input type = 'text' id = 'user' placeholder = 'username' name = 'user' value = ''>
																	
												<label  id = lvl1>Email:</label>
												<input type = 'text' id = 'email' placeholder = 'Email' name = 'email'  value = ''>
												<label id = 'c2'>Choose row:</label>
												<select id = 'c1' name = 'c1'>
												<option> </option>
												<option>A</option>
												<option>B</option>
												<option>C</option>
												<option>D</option>
												<option>E</option>
												<option>F</option>
												<option>G</option>
												<option>H</option>
												<option>I</option>
												<option>J</option>
												</select>
												<label id = 's1'>Seat:</label>
												<select id = 's1' name = 's1'>
												<option> </option>
												<option>A1</option>
												<option>B1</option>
												<option>C1</option>
												<option>D1</option>
												<option>E1</option>
												<option>F1</option>
												<option>G1</option>
												<option>H1</option>
												<option>I1</option>
												<option>J1</option>
												</select>
												<select id = 's2' name = 's2'>
												<option> </option>
												<option>A2</option>
												<option>B2</option>
												<option>C2</option>
												<option>D2</option>
												<option>E2</option>
												<option>F2</option>
												<option>G2</option>
												<option>H2</option>
												<option>I2</option>
												<option>J2</option>
												</select>
												<select id = 's3' name = 's3'>
												<option> </option>
												<option>A3</option>
												<option>B3</option>
												<option>C3</option>
												<option>D3</option>
												<option>E3</option>
												<option>F3</option>
												<option>G3</option>
												<option>H3</option>
												<option>I3</option>
												<option>J3</option>
												</select>
												<select id = 's4' name = 's4'>
												<option> </option>
												<option>A4</option>
												<option>B4</option>
												<option>C4</option>
												<option>D4</option>
												<option>E4</option>
												<option>F4</option>
												<option>G4</option>
												<option>H4</option>
												<option>I4</option>
												<option>J4</option>
												</select>
												<br></br><input type = 'submit' name = 'btn3' id = 'btn3' value = 'Book Seats' >
												
													
												</form>"
												
												;
										
							mysql_close($db_handle);
			
									
			
			}
			

			?>
			
			<?php
			
	
			$btn3 = "";
			$User = "";
			$Email = "";
			$s1 = "";
			$s2 = "";
			$s3 = "";
			$s4 = "";
			$c1 = "";
			
			$username = "root";
			$password = "";
			$server = "localhost";
			$database = "busschedule";
			$db_handle = mysql_connect($server,$username,$password);
			$db_found = mysql_select_db($database,$db_handle);
				
			if(isset($_POST['btn3'])){
					if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['c1']) && (!empty($_POST['s1']) || !empty($_POST['s2']) || !empty($_POST['s3']) || !empty($_POST['s4']))){
					$user  = $_POST['user'];
					$email = $_POST['email'];
					$s1 = $_POST['s1'];
					$s2 = $_POST['s2'];
					$s3 = $_POST['s3'];
					$s4 = $_POST['s4'];
					$c1 = $_POST['c1'];
					if($c1 == 'A' && ($s1 == 'A1' || $s2 == 'A2' || $s3 == 'A3' || $s4 == 'A4') || $c1 == 'B' && ($s1 == 'B1' || $s2 == 'B2' || $s3 == 'B3' || $s4 == 'B4') || $c1 == 'C' && ($s1 == 'C1' || $s2 == 'C2' || $s3 == 'C3' || $s4 == 'C4') || $c1 == 'D' && ($s1 == 'D1' || $s2 == 'D2' || $s3 == 'D3' || $s4 == 'D4') || $c1 == 'E' && ($s1 == 'E1' || $s2 == 'E2' || $s3 == 'E3' || $s4 == 'E4') || $c1 == 'F' && ($s1 == 'F1' || $s2 == 'F2' || $s3 == 'F3' || $s4 == 'F4') || $c1 == 'G' && ($s1 == 'G1' || $s2 == 'G2' || $s3 == 'G3' || $s4 == 'G4') || $c1 == 'H' && ($s1 == 'H1' || $s2 == 'H2' || $s3 == 'H3' || $s4 == 'H4') || $c1 == 'I' && ($s1 == 'I1' || $s2 == 'I2' || $s3 == 'I3' || $s4 == 'I4') || $c1 == 'J' && ($s1 == 'J1' || $s2 == 'J2' || $s3 == 'J3' || $s4 == 'J4')){ 
					$result = mysql_query("SELECT * FROM `seats2` where s1 = ' ' || s2 = ' ' || s3 = ' ' || s4 = ' '")
							or die("Failed to query database ".mysql_error());
							
							
							if(mysql_num_rows($result) != 0){
								$result1 = mysql_query("UPDATE seats2 SET username = '$user',email = '$email',s1 = '$s1' where seats = '$c1' and s1 = ' '")
									or die("Failed to query  ".mysql_error());
									
				
								$result2 = mysql_query("UPDATE seats2 SET username = '$user',email = '$email',s2 = '$s2' where seats = '$c1' and s2 = ' '")
									or die("Failed to query  ".mysql_error());
									
					
								$result3 = mysql_query("UPDATE seats2 SET username = '$user',email = '$email',s3 = '$s3' where seats = '$c1' and s3 = ' '")
									or die("Failed to query  ".mysql_error());
							
								$result4 = mysql_query("UPDATE seats2 SET username = '$user',email = '$email',s4 = '$s4' where seats = '$c1' and s4 = ' '")
								or die("Failed to query  ".mysql_error());
								print "<form id = form4>";
										print "</br><h1>"."$user YOUR BOOKING IS CONFIRMED !!!"."</h1><br>";
										print "</br><h1>"."THE seats are $s1 $s2 $s3 $s4 "."</h1>";
										print "</br><h1>"."and the email is $email "."</h1>";
										print "</form>";
							}else{
							
								print "</br><h1>"."BOOKED ALREADY!!!"."</h1><br>";
								
							}
							
				
									mysql_close($db_handle);
					
					
					}
					
							
					}
					
					else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}
			
			}
				?>
				
				<!--SELECT `s1`, `s2`, `s3`, `s4` FROM `seats2` WHERE s1 <> ' ' and seats <> ' ' -->
				
		<?php
			
	/*
			$btn3 = "";
			$user = "";
			$email = "";
			$s1 = "";
			$s2 = "";
			$s3 = "";
			$s4 = "";
			$c1 = "";
			
			$username = "root";
			$password = "";
			$server = "localhost";
			$database = "busschedule";
			$db_handle = mysql_connect($server,$username,$password);
			$db_found = mysql_select_db($database,$db_handle);
				
			//if(isset($_POST['btn3'])){
					if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['c1']) && (!empty($_POST['s1']) || !empty($_POST['s2']) || !empty($_POST['s3']) || !empty($_POST['s4']))){
					$user  = $_POST['user'];
					$Email = $_POST['email'];
					$s1 = $_POST['s1'];
					$s2 = $_POST['s2'];
					$s3 = $_POST['s3'];
					$s4 = $_POST['s4'];
					$c1 = $_POST['c1'];
					//if($c1 == 'A' && ($s1 == 'A1' || $s2 == 'A2' || $s3 == 'A3' || $s4 == 'A4') || $c1 == 'B' && ($s1 == 'B1' || $s2 == 'B2' || $s3 == 'B3' || $s4 == 'B4') || $c1 == 'C' && ($s1 == 'C1' || $s2 == 'C2' || $s3 == 'C3' || $s4 == 'C4') || $c1 == 'D' && ($s1 == 'D1' || $s2 == 'D2' || $s3 == 'D3' || $s4 == 'D4') || $c1 == 'E' && ($s1 == 'E1' || $s2 == 'E2' || $s3 == 'E3' || $s4 == 'E4') || $c1 == 'F' && ($s1 == 'F1' || $s2 == 'F2' || $s3 == 'F3' || $s4 == 'F4') || $c1 == 'G' && ($s1 == 'G1' || $s2 == 'G2' || $s3 == 'G3' || $s4 == 'G4') || $c1 == 'H' && ($s1 == 'H1' || $s2 == 'H2' || $s3 == 'H3' || $s4 == 'H4') || $c1 == 'I' && ($s1 == 'I1' || $s2 == 'I2' || $s3 == 'I3' || $s4 == 'I4') || $c1 == 'J' && ($s1 == 'J1' || $s2 == 'J2' || $s3 == 'J3' || $s4 == 'J4')){ 
					
					
					
							
					}
					else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}
			//}
			*/
				?>
			
	</body>
</html>

			
