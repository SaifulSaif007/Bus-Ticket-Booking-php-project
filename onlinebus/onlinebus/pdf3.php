
<?php
session_start();
if(isset($_SESSION['name'])&&isset($_SESSION['email']) && isset($_SESSION['s1']) && isset($_SESSION['s2']) && isset($_SESSION['s3']) && isset($_SESSION['s4']) /*&& isset($_SESSION['time']) && isset($_SESSION['Buses'])*/){
$name=$_SESSION['name'];
$uemail=$_SESSION['email'];
$s1=$_SESSION['s1'];
$s2=$_SESSION['s2'];
$s3=$_SESSION['s3'];
$s4=$_SESSION['s4'];

	
$host = "localhost"; 
$user = "root";
$pass = "";

$db="busschedule";

$dbcon = mysql_connect($host, $user, $pass)
  or die("Go to hell");


$Q = mysql_select_db($db)
  or die("Error");

 
require("fpdf/fpdf.php");
$pdf=new FPDF();


$query = "SELECT * FROM seats4 WHERE username ='$name' && email='$uemail' && (s1='$s1' || s2='$s2' || s3='$s3' || s4='$s4')";


 
$result = mysql_query($query) or die("error1");
$row = mysql_fetch_array($result);

if($row['username']==$name && $row['email']== $uemail && ($row['s1']==$s1 || $row['s2']==$s2 || $row['s3']==$s3 || $row['s4']==$s4 )){
	

$pdf->AddPage();

$pdf->SetFont("Arial","B","15");
$pdf->Cell(70,10,"",0,1,"C");
$pdf->Image("bus2.png");
$pdf->Cell(0,10,"Welcome to Ena Transport (Pvt) Ltd",0,1,"C");
$pdf->Cell(0,10,"",0,1,"C");
$pdf->Cell(70,10,"Name:",0,0,"C");
$pdf->Cell(5,10,"{$name}",0,1,"C");
$pdf->Cell(70,10,"Email:",0,0,"C");
$pdf->Cell(60,10,"{$uemail}",0,1,"C");
$pdf->Cell(200,10,"Your booking is confirmed for",0,1,"C");
$pdf->Cell(70,10,"Seats:",0,0,"C");
$pdf->Cell(5,10,"{$s1}{$s2}{$s3}{$s4}",0,1,"C");
$pdf->Cell(0,10,"at 04:00:00",0,1,"C");
$pdf->Cell(70,10,"",0,1,"C");
$pdf->Cell(70,10,"",0,1,"C");
$pdf->Cell(70,10,"",0,1,"C");
$pdf->Cell(0,10,"Thanks for using our website and booking bus tickets.",0,1,"C");
$pdf->Cell(0,10,"You are always welcome here",0,1,"C");
$pdf->Cell(0,10,"for any emergency please call:",0,1,"C"); 
$pdf->Cell(0,10,"+088 0175 0884 014 and visit our contact page",0,1,"C");
$pdf->Cell(0,10,"---------------------BUSM.ORG--------------------------",0,1,"C");

$pdf->output();


}
else{ 
    echo"error";
	
}


	//require("fpdf/fpdf.php");
	//$pdf=new FPDF();
	
	

	$pdf->output();
}

?>



