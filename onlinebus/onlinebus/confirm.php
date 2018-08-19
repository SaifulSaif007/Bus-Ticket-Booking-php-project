
<html>
	<head>
		<title>Online bus booking management</title>
		<link rel = "icon" href = "bus2.png"></link>
		<link rel = "stylesheet" type = "text/css" href = "style.css">
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
				color:white;
				margin-left:30%;
			}
			#h1 {
				width: 700px;
				margin: auto;
				color:white;
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
				background-color: CadetBlue;
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
				margin-left:3%;
				width: 40px;
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
			#h2 {			
				width: 1500px;
				height:20px;
				margin: auto;
				color:white;
				text-align: center;
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
		
			<?php
			
			
			$btn3 = "";
			$User = "";
			$Email = "";
			$s1 = "";
			$s2 = "";
			$s3 = "";
			$s4 = "";
			$c1 = "";
			$Ddate = "";
			$Dtime = "";
			$buses = "";
			
			$username = "root";
			$password = "";
			$server = "localhost";
			$database = "busschedule";
			$db_handle = mysql_connect($server,$username,$password);
			$db_found = mysql_select_db($database,$db_handle);
			
			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
            session_start();
			if($_SERVER["REQUEST_METHOD"] == "POST"){
					if(!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['c1']) && (!empty($_POST['s1']) || !empty($_POST['s2']) || !empty($_POST['s3']) || !empty($_POST['s4']))){
					$user  = test_input($_POST['user']);
					$email = test_input($_POST['email']);
					$s1 = test_input($_POST['s1']);
					$s2 = test_input($_POST['s2']);
					$s3 = test_input($_POST['s3']);
					$s4 = test_input($_POST['s4']);
					$c1 = test_input($_POST['c1']);
					$_SESSION['name']=$user;
					$_SESSION['email']=$email;
					$_SESSION['s1']=$s1;
					$_SESSION['s2']=$s2;
					$_SESSION['s3']=$s3;
					$_SESSION['s4']=$s4;

					
					if($c1 == 'A' && ($s1 == 'A1' || $s2 == 'A2' || $s3 == 'A3' || $s4 == 'A4') || $c1 == 'B' && ($s1 == 'B1' || $s2 == 'B2' || $s3 == 'B3' || $s4 == 'B4') || $c1 == 'C' && ($s1 == 'C1' || $s2 == 'C2' || $s3 == 'C3' || $s4 == 'C4') || $c1 == 'D' && ($s1 == 'D1' || $s2 == 'D2' || $s3 == 'D3' || $s4 == 'D4') || $c1 == 'E' && ($s1 == 'E1' || $s2 == 'E2' || $s3 == 'E3' || $s4 == 'E4') || $c1 == 'F' && ($s1 == 'F1' || $s2 == 'F2' || $s3 == 'F3' || $s4 == 'F4') || $c1 == 'G' && ($s1 == 'G1' || $s2 == 'G2' || $s3 == 'G3' || $s4 == 'G4') || $c1 == 'H' && ($s1 == 'H1' || $s2 == 'H2' || $s3 == 'H3' || $s4 == 'H4') || $c1 == 'I' && ($s1 == 'I1' || $s2 == 'I2' || $s3 == 'I3' || $s4 == 'I4') || $c1 == 'J' && ($s1 == 'J1' || $s2 == 'J2' || $s3 == 'J3' || $s4 == 'J4')){ 
					$result = mysql_query("SELECT * FROM `seats1` where s1 = ' ' || s2 = ' ' || s3 = ' ' || s4 = ' '")
							or die("Failed to query database ".mysql_error());
						$row = mysql_fetch_array($result);
						
					
							
							if(mysql_num_rows($result) != 0){
								$result1 = mysql_query("UPDATE seats1 SET username = '$user',email = '$email',s1 = '$s1' where seats = '$c1' and s1 = ' '")
									or die("Failed to query  ".mysql_error());
									
				
								$result2 = mysql_query("UPDATE seats1 SET username = '$user',email = '$email',s2 = '$s2' where seats = '$c1' and s2 = ' '")
									or die("Failed to query  ".mysql_error());
									
					
								$result3 = mysql_query("UPDATE seats1 SET username = '$user',email = '$email',s3 = '$s3' where seats = '$c1' and s3 = ' '")
									or die("Failed to query  ".mysql_error());
							
								$result4 = mysql_query("UPDATE seats1 SET username = '$user',email = '$email',s4 = '$s4' where seats = '$c1' and s4 = ' '")
								or die("Failed to query  ".mysql_error());
								
								 
									/*require("fpdf/fpdf.php");
									$pdf=new FPDF();
							
									$pdf->AddPage();
									$pdf->SetFont("Arial","B","20");
									$pdf->Cell(0,10,"welcome",1,1,"C");
									$pdf->Cell(70,10,"seat:",1,0,"C");
									$pdf->Cell(0,10,"$s1",1,1,"C");
									$pdf->Cell(70,10,"seat",1,0,"C");
									$pdf->Cell(0,10,"$s2",1,1,"C");
									$pdf->output();
								*/
							
								
								
								/*print   "<center><div id = 'HTMLtoPDF'>";
										print "<table border = 5 name = tdf>";
										print "<tr><th>"."Name:"."</th>";
										print "<th>"." $user"."</th></tr>";
										print "<tr><th>"."Email:"."</th>";
										print "<th>"." $email"."</th></tr>";
										print "<tr><th>"."Seats: "."</th>";
										print "<th>"."$s1 $s2 $s3 $s4 "."</th></tr>";
										print "<tr><th>"."Departure date: "."</th>";
										print "<th>"."$Ddate"."</th></tr>";
										print "<tr><th>"."Departure time: "."</th>";
										print "<th>"."$Dtime"."</th></tr>";
										print "<tr><th>"."Bus:"."</th>";
										print "<th>"."$buses"."</th></tr>";
										print "</table>";
										print "</div></center>";
										print"
										<form  id action= 'pdf.php' method = 'POST'>
										<br></br><input type = 'submit' name = 'btn4' id = 'btn2' value = 'Download file'>
										</form>";
										*/
							}
					
							else{
							
								print "</br><h1>"."BOOKED ALREADY!!!"."</h1><br>";
								
							}
					}
									mysql_close($db_handle);
					
					
					}
							else{
										print "</br><h1>"."WRONG INPUT TRY AGAIN !!!"."</h1><br>";
								}
						header("location:pdf.php");



					}
					
	
		?>
		
		<?php

				/*if(isset($_POST['bt3'])){
				$user=$_POST['user'];
				$email=$_POST['email'];
					

				 


				//}
				/*else{ 
					echo"error";
					
				}*/
				//}
?>
		</body>
</html>		
