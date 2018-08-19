<DOCTYPE html>
<html>
	<head>
		<title>Online bus booking management</title>
		<link rel = "icon" href = "bus2.png"></link>
		<link rel = "stylesheet" type = "text/css" href = "style.css"/>
	
		<style>
			
			#table1{
				border:5px Indigo;
				margin:auto;
				height:70%;
				width:65%;
				padding: 5px;
				
			}
			#th1{
				background-color: LightSteelBlue ;
				color: DimGray;
				text-align: center;
			}
			#td1{
				background-color: rgba(0,0,0,.4);
				color: Lavender;
				text-align: center;
			}
			#t2{
				border:5px LightSteelBlue ;
				margin:auto;
				width:100%;
				padding: 50px;
			}
			h1 {
				
				width: 700px;
				margin: auto;
				color:Navy;
				margin-left:30%;
			}
			#h1 {
				width: 700px;
				margin: auto;
				color:Navy;
				margin-left:45%;
			}
			#bus{
				border-radius: 5px;
			}
			#time{
				border-radius: 5px;
			}
			#form2{
				border: solid gray 1px;
				width: 50%;
				border-radius: 10px;
				margin:100px auto;
				background-color: rgba(0,0,0,.4);
				padding: 10px;
				text-align:center;
				color: Linen;
			}
			#btn1{
				color: IndianRed;
				height: 50px;
				width: 150px;
				background-color: rgba(0,0,0,1);
				padding: 15px;
				border-radius: 15px;
				margin-left:5%;
			}
			#table2{
				border:5px Indigo;
				text-align:left;
				width:40%;
			}
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
			#ss1{
				
				color: gray;
				text-align: center;
			}
			#ss2{
				
				color: gray;
				text-align: center;
			}
			#ss3{
				
				color: gray;
				text-align: center;
			}
			#ss4{
				
				color: gray;
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
				color:Navy;
				margin-left:30%;
			}
			
			#h{
				width: 700px;
				margin: auto;
				color:Navy;
				margin-left:39%;
			}
			
			#h_1{
				width: 700px;
				margin: ]auto;
				color:linen;
				margin-left:39%;
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
			#div{
				background-color: rgba(0,0,0,.0);
				
				width:100%;
				border-radius: 5px;
				padding-top: 0px;
				text-align:center;
				color: Linen;
			}
			#div2{
				background-color:rgba(0,0,0,.8);
				border-radius: 5px;
				margin-top:30.50%;
			}
			#user{
				border-radius: 5px;
			}
			#email{
				border-radius: 5px;
			}
			#Deperturetime{
				border-radius: 5px;
			}
			#Deperturedate{
				border-radius: 5px;
			}
			#buses{
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
				<li id = "active"><a href = "Schedule.php">RESERVATION</a></li>
				<li><a href = "location.php">LOCATION</a></li>
				<li><a href = "contact.php">CONTACT</a></li>
			</ul>
		</div>
		</div>
		
		<table id = table1 border = "3">
			
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
											
											print "<br></br><h1 id = h1>". " Welcome "."<h1><br></br>";
											print "<tr><th id = th1>"."BUSES"."</th>";
											print "<th id = th1>"."SCHEDULE(AM/PM)"."</th>";
											print "<th id = th1>"."FROM"."</th>";
											print "<th id = th1>"."TO"."</th></tr>";
											print "<tr><td id = td1>".$db_field['Buses']."</td>";
											print "<td id = td1>".$db_field['Schedule']."</td>";
											print "<td id = td1>".$db_field['Fromlo']."</td>";
											print "<td id = td1>".$db_field['Tolo']."</td></tr>";
											print $db_field['Seats']."";	 
											
											while($db_field = mysql_fetch_assoc($result)){ 
												
												 print "<tr><td id = td1>".$db_field['Buses']."</td>";
												 print "<td id = td1>".$db_field['Schedule']."</td>";
												 print "<td id = td1>".$db_field['Fromlo']."</td>";
												 print "<td id = td1>".$db_field['Tolo']."</td></tr>";
												 print $db_field['Seats']."";	 
												}
												mysql_close($db_handle);
												
												
									}
				}else{
					
							print "</br><h1>"."TRY AGAIN FOR THE SCHEDUALE!!!"."</h1><br>";
				}
					
				
			}

?>
				</table>
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
				if(!empty($_POST['from']) && !empty($_POST['to']) && !empty($_POST['ondate'])){
					
								$from  = $_POST['from'];
								$to = $_POST['to'];
								$ondate = $_POST['ondate'];
								$retdate = $_POST['retdate'];
					
								$result = mysql_query("select * from schedule where Fromlo = '$from' and Tolo = '$to'")
									or die("Failed to query database ".mysql_error());
										$db_field = mysql_fetch_assoc($result);
										if($db_field['Fromlo'] == $from && $db_field['Tolo'] == $to){
												print "
												<div id = 'form2'>
												<form  id action= 'Schedule.php' method = 'POST'>
												<p>
												<label>BUS:</label>
												
												<td><select id = 'bus' name = 'bus' placeholder = 'Enter bus name'>
												<option></option>
												<option>A.R Travels</option>
												<option>Agomony Express</option>
												<option>Ena Transport (Pvt) Ltd</option>
												<option>Hanif Enterprise</option>
												<option>HIMACHOL EXPRESS</option>
												<option>Nabil Paribahan</option>	
												</select></td></tr>	
												
												<label>TIME:</label>
												
												<select id = 'time' placeholder = 'Enter time' name = 'time'>
												<option> </option>
												<option>01:00:00</option>
												<option>02:00:00</option>
												<option>03:00:00</option>
												<option>04:00:00</option>
												<option>05:00:00</option>
												<option>06:00:00</option>
												<option>07:00:00</option>
												<option>08:00:00</option>
												<option>09:00:00</option>
												<option>10:00:00</option>
												<option>11:00:00</option>
												<option>12:00:00</option>
												
												</select>
												
												<br></br><input type = 'submit' name = 'btn1' id = 'btn1' value = 'SEATS' >
												</p>
													
												</form>
												</div>";
												mysql_close($db_handle);
					}
					else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}
				}
											
				?>
	

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
		
					$result = mysql_query("select * from schedule where Buses = 'Hanif Enterprise' and Schedule = '01:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>Hanif Enterprise</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn2' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
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
		
					$result = mysql_query("select * from schedule where Buses = 'Hanif Enterprise' and Schedule = '08:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>Hanif Enterprise</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn2' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
		
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
		
					$result = mysql_query("select * from schedule where Buses = 'Agomony Express' and Schedule = '02:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>Agomony Express</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn13' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
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
		
					$result = mysql_query("select * from schedule where Buses = 'Agomony Express' and Schedule = '09:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>Agomony Express</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn2' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
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
		
					$result = mysql_query("select * from schedule where Buses = 'A.R Travels' and Schedule = '03:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>A.R Travels</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn12' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
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
		
					$result = mysql_query("select * from schedule where Buses = 'A.R Travels' and Schedule = '10:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>A.R Travels</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn12' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
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
		
					$result = mysql_query("select * from schedule where Buses = 'Ena Transport (Pvt) Ltd' and Schedule = '04:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>Ena Transport (Pvt) Ltd</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn11' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
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
		
					$result = mysql_query("select * from schedule where Buses = 'Ena Transport (Pvt) Ltd' and Schedule = '11:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>Ena Transport (Pvt) Ltd</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn11' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
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
		
					$result = mysql_query("select * from schedule where Buses = 'Nabil Paribahan' and Schedule = '06:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>Nabil Paribahan</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn10' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
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
		
					$result = mysql_query("select * from schedule where Buses = 'Nabil Paribahan' and Schedule = '12:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>Nabil Paribahan</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn10' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
		
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
		
					$result = mysql_query("select * from schedule where Buses = 'HIMACHOL EXPRESS' and Schedule = '05:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>HIMACHOL EXPRESS</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn9' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
				}
				
			}

		?>
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
		
					$result = mysql_query("select * from schedule where Buses = 'HIMACHOL EXPRESS' and Schedule = '07:00:00'")
							or die("Failed to query database ".mysql_error());
								$db_field = mysql_fetch_assoc($result);
								
									if($db_field['Buses'] == $bus && $db_field['Schedule'] == $time){
											
										print"

										<h1 id = h>HIMACHOL EXPRESS</h1><br></br>
										<div id = 'left'>
										<table border = '3'>
										<tr>
										<th>A</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A2</th>
										</tr>
										<tr>
										<th>B</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B2</th>
										</tr>
										<tr>
										<th>C</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C2</th>
										</tr>
										<tr>
										<th>D</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D2</th>
										</tr>
										<tr>
										<th>E</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E2</th>
										</tr>
										<tr>
										<th>F</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F2</th>
										</tr>
										<tr>
										<th>G</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G2</th>
										</tr>
										<tr>
										<th>H</th>
									
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H2</th>
										</tr>
										<tr>
										<th>I</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I2</th>
										</tr>
										<tr>
										<th>J</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J1</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J2</th>
										</tr>
										</table>
										</div>
										<div id = 'right'>
										<table border = '3'>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>A4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>B4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>C4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>D4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>E4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>F4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>G4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>H4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>I4</th>
										</tr>
										<tr>
										
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J3</th>
										
										<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>
										<th>J4</th>
										</tr>
										</table>
										</div>
										
										
										";
										print"
										<form  id action= 'Schedule.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn9' id = 'btn2' value = 'CHEACK'>
										</form>";
										mysql_close($db_handle);
		
									}
									/*else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}*/
									
				}
				else{
					
							print "</br><h1>"."YOU HAVE TO FILL THE BOTH FIELDS!!!"."</h1><br>";
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
					
	
					$result = mysql_query("SELECT * FROM `seats1` WHERE id is NOT NULL ")
							or die("Failed to query database ".mysql_error());
							print "<div id = 'left'>";
							print"<table border = '3'>";
							
								while($db_field = mysql_fetch_assoc($result)){
										  
										 print "<tr><th>".$db_field['seats']."<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th id = ss1>".$db_field['s1']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss2>".$db_field['s2']."</th> ";
										
									}
									print "</table>";
									print "</div>";
									
									$result = mysql_query("SELECT * FROM `seats1` WHERE id is NOT NULL ")
									or die("Failed to query database ".mysql_error());
									print "<div id = 'right'>";
									print"<table border = '3'>";
									while($db_field = mysql_fetch_assoc($result)){
										
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss3>".$db_field['s3']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss4>".$db_field['s4']."</th></tr>";

									}
									print "</table>";
									print "</div>";
									mysql_close($db_handle);
							
			
						
									print "   
												
												<br></br><div id = 'div2'>
												<br></br><h1 id = h_1>Reservation Form</h1>
												</div2>
												
												<div id = 'div'>
												<table id = table2>
												<form action= 'confirm.php' method = 'POST'>
												
												<tr><td><label id = lvl1>Name:</label></td>
												<td><input type = 'text' id = 'user' placeholder = 'username' name = 'user' value = ''></td>
												</tr>
												<tr><td><label  id = lvl1>Email:</label></td>
												<td><input type = 'email' id = 'email' placeholder = 'Email' name = 'email'  value = ''></td></tr>
											
												<tr><td><label id = 'c2'>Choose row:</label></td>
												<td><select id = 'c1' name = 'c1'>
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
												</select></td>
												
												<tr><td><label id = 's1'>Seat:</label></td>
												<td><select id = 's1' name = 's1'>
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
												</select></td></tr>
												<br></br>
												<input type = 'submit' name = 'btn3' id = 'btn3' value = 'Reserve seats' >

												</form>
												</table>
												</div>
												</form>
												";
												
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
				
			if(isset($_POST['btn13'])){
					
	
					$result = mysql_query("SELECT * FROM `seats2` WHERE id is NOT NULL ")
							or die("Failed to query database ".mysql_error());
							print "<div id = 'left'>";
							print"<table border = '3'>";
							
								while($db_field = mysql_fetch_assoc($result)){
										  
										 print "<tr><th>".$db_field['seats']."<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th id = ss1>".$db_field['s1']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss2>".$db_field['s2']."</th> ";
										
									}
									print "</table>";
									print "</div>";
									
									$result = mysql_query("SELECT * FROM `seats2` WHERE id is NOT NULL ")
									or die("Failed to query database ".mysql_error());
									print "<div id = 'right'>";
									print"<table border = '3'>";
									while($db_field = mysql_fetch_assoc($result)){
										
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss3>".$db_field['s3']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss4>".$db_field['s4']."</th></tr>";

									}
									print "</table>";
									print "</div>";
									mysql_close($db_handle);
							
			
						
									print "   
												
												<br></br><div id = 'div2'>
												<br></br><h1 id = h_1>Reservation Form</h1>
												</div2>
												
												<div id = 'div'>
												<table id = table2>
												<form action= 'confirm1.php' method = 'POST'>
												
												<tr><td><label id = lvl1>Name:</label></td>
												<td><input type = 'text' id = 'user' placeholder = 'username' name = 'user' value = ''></td>
												</tr>					
												
												<tr><td><label  id = lvl1>Email:</label></td>
												<td><input type = 'email' id = 'email' placeholder = 'Email' name = 'email'  value = ''></td></tr>
											
												<tr><td><label id = 'c2'>Choose row:</label></td>
												<td><select id = 'c1' name = 'c1'>
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
												</select></td>
												
												<tr><td><label id = 's1'>Seat:</label></td>
												<td><select id = 's1' name = 's1'>
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
												</select></td></tr>
												<br></br>
												<input type = 'submit' name = 'btn4' id = 'btn3' value = 'Reserve seats' >

												</form>
												</table>
												</div>
												</form>
												";
												
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
				
			if(isset($_POST['btn12'])){
					
	
					$result = mysql_query("SELECT * FROM `seats3` WHERE id is NOT NULL ")
							or die("Failed to query database ".mysql_error());
							print "<div id = 'left'>";
							print"<table border = '3'>";
							
								while($db_field = mysql_fetch_assoc($result)){
										  
										 print "<tr><th>".$db_field['seats']."<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th id = ss1>".$db_field['s1']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss2>".$db_field['s2']."</th> ";
										
									}
									print "</table>";
									print "</div>";
									
									$result = mysql_query("SELECT * FROM `seats3` WHERE id is NOT NULL ")
									or die("Failed to query database ".mysql_error());
									print "<div id = 'right'>";
									print"<table border = '3'>";
									while($db_field = mysql_fetch_assoc($result)){
										
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss3>".$db_field['s3']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss4>".$db_field['s4']."</th></tr>";

									}
									print "</table>";
									print "</div>";
									mysql_close($db_handle);
							
			
						
									print "   
												
												<br></br><div id = 'div2'>
												<br></br><h1 id = h_1>Reservation Form</h1>
												</div2>
												
												<div id = 'div'>
												<table id = table2>
												<form action= 'confirm2.php' method = 'POST'>
												
												<tr><td><label id = lvl1>Name:</label></td>
												<td><input type = 'text' id = 'user' placeholder = 'username' name = 'user' value = ''></td>
												</tr>					
												
												<tr><td><label  id = lvl1>Email:</label></td>
												<td><input type = 'email' id = 'email' placeholder = 'Email' name = 'email'  value = ''></td></tr>
											
												<tr><td><label id = 'c2'>Choose row:</label></td>
												<td><select id = 'c1' name = 'c1'>
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
												</select></td>
												
												<tr><td><label id = 's1'>Seat:</label></td>
												<td><select id = 's1' name = 's1'>
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
												</select></td></tr>
												<br></br>
												<input type = 'submit' name = 'btn5' id = 'btn3' value = 'Reserve seats' >

												</form>
												</table>
												</div>
												</form>
												";
												
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
				
			if(isset($_POST['btn11'])){
					
	
					$result = mysql_query("SELECT * FROM `seats4` WHERE id is NOT NULL ")
							or die("Failed to query database ".mysql_error());
							print "<div id = 'left'>";
							print"<table border = '3'>";
							
								while($db_field = mysql_fetch_assoc($result)){
										  
										 print "<tr><th>".$db_field['seats']."<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th id = ss1>".$db_field['s1']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss2>".$db_field['s2']."</th> ";
										
									}
									print "</table>";
									print "</div>";
									
									$result = mysql_query("SELECT * FROM `seats4` WHERE id is NOT NULL ")
									or die("Failed to query database ".mysql_error());
									print "<div id = 'right'>";
									print"<table border = '3'>";
									while($db_field = mysql_fetch_assoc($result)){
										
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss3>".$db_field['s3']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss4>".$db_field['s4']."</th></tr>";

									}
									print "</table>";
									print "</div>";
									mysql_close($db_handle);
							
			
						
									print "   
												
												<br></br><div id = 'div2'>
												<br></br><h1 id = h_1>Reservation Form</h1>
												</div2>
												
												<div id = 'div'>
												<table id = table2>
												<form action= 'confirm3.php' method = 'POST'>
												
												<tr><td><label id = lvl1>Name:</label></td>
												<td><input type = 'text' id = 'user' placeholder = 'username' name = 'user' value = ''></td>
												</tr>					
												
												
												<tr><td><label  id = lvl1>Email:</label></td>
												<td><input type = 'email' id = 'email' placeholder = 'Email' name = 'email'  value = ''></td></tr>
											
												<tr><td><label id = 'c2'>Choose row:</label></td>
												<td><select id = 'c1' name = 'c1'>
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
												</select></td>
												
												<tr><td><label id = 's1'>Seat:</label></td>
												<td><select id = 's1' name = 's1'>
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
												</select></td></tr>
												<br></br>
												<input type = 'submit' name = 'btn6' id = 'btn3' value = 'Reserve seats' >

												</form>
												</table>
												</div>
												</form>
												";
												
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
				
			if(isset($_POST['btn10'])){
					
	
					$result = mysql_query("SELECT * FROM `seats5` WHERE id is NOT NULL ")
							or die("Failed to query database ".mysql_error());
							print "<div id = 'left'>";
							print"<table border = '3'>";
							
								while($db_field = mysql_fetch_assoc($result)){
										  
										 print "<tr><th>".$db_field['seats']."<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th id = ss1>".$db_field['s1']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss2>".$db_field['s2']."</th> ";
										
									}
									print "</table>";
									print "</div>";
									
									$result = mysql_query("SELECT * FROM `seats5` WHERE id is NOT NULL ")
									or die("Failed to query database ".mysql_error());
									print "<div id = 'right'>";
									print"<table border = '3'>";
									while($db_field = mysql_fetch_assoc($result)){
										
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss3>".$db_field['s3']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss4>".$db_field['s4']."</th></tr>";

									}
									print "</table>";
									print "</div>";
									mysql_close($db_handle);
							
			
						
									print "   
												
												<br></br><div id = 'div2'>
												<br></br><h1 id = h_1>Reservation Form</h1>
												</div2>
												
												<div id = 'div'>
												<table id = table2>
												<form action= 'confirm4.php' method = 'POST'>
												
												<tr><td><label id = lvl1>Name:</label></td>
												<td><input type = 'text' id = 'user' placeholder = 'username' name = 'user' value = ''></td>
												</tr>					
												
												
												<tr><td><label  id = lvl1>Email:</label></td>
												<td><input type = 'email' id = 'email' placeholder = 'Email' name = 'email'  value = ''></td></tr>
											
												<tr><td><label id = 'c2'>Choose row:</label></td>
												<td><select id = 'c1' name = 'c1'>
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
												</select></td>
												
												<tr><td><label id = 's1'>Seat:</label></td>
												<td><select id = 's1' name = 's1'>
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
												</select></td></tr>
												<br></br>
												<input type = 'submit' name = 'btn7' id = 'btn3' value = 'Reserve seats' >

												</form>
												</table>
												</div>
												</form>
												";
												
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
				
			if(isset($_POST['btn9'])){
					
	
					$result = mysql_query("SELECT * FROM `seats6` WHERE id is NOT NULL ")
							or die("Failed to query database ".mysql_error());
							print "<div id = 'left'>";
							print"<table border = '3'>";
							
								while($db_field = mysql_fetch_assoc($result)){
										  
										 print "<tr><th>".$db_field['seats']."<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th id = ss1>".$db_field['s1']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss2>".$db_field['s2']."</th> ";
										
									}
									print "</table>";
									print "</div>";
									
									$result = mysql_query("SELECT * FROM `seats6` WHERE id is NOT NULL ")
									or die("Failed to query database ".mysql_error());
									print "<div id = 'right'>";
									print"<table border = '3'>";
									while($db_field = mysql_fetch_assoc($result)){
										
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss3>".$db_field['s3']."</th>";
										 print "<th><img src = 'icon-car-seat.png' width = '30px' height = '30px'></th>"."<th  id = ss4>".$db_field['s4']."</th></tr>";

									}
									print "</table>";
									print "</div>";
									mysql_close($db_handle);
							
			
						
									print "   
												
												<br></br><div id = 'div2'>
												<br></br><h1 id = h_1>Reservation Form</h1>
												</div2>
												
												<div id = 'div'>
												<table id = table2>
												<form action= 'confirm5.php' method = 'POST'>
												
												<tr><td><label id = lvl1>Name:</label></td>
												<td><input type = 'text' id = 'user' placeholder = 'username' name = 'user' value = ''></td>
												</tr>					
												
												
												<tr><td><label  id = lvl1>Email:</label></td>
												<td><input type = 'email' id = 'email' placeholder = 'Email' name = 'email'  value = ''></td></tr>
											
												<tr><td><label id = 'c2'>Choose row:</label></td>
												<td><select id = 'c1' name = 'c1'>
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
												</select></td>
												
												<tr><td><label id = 's1'>Seat:</label></td>
												<td><select id = 's1' name = 's1'>
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
												</select></td></tr>
												<br></br>
												<input type = 'submit' name = 'btn8' id = 'btn3' value = 'Reserve seats' >

												</form>
												</table>
												</div>
												</form>
												";
												
			}
								
								
			?>
		
			
				
				</body>

</html>