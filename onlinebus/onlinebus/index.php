<DOCTYPE html>
<html>
	<head>
		<title>Online bus booking management</title>
		
		<link rel = "stylesheet" type = "text/css" href = "style.css"/>
		<link rel = "icon" type="image/x-icon" href = "bus2.png"/>
		
		<style>
		body{
			background:Black;
		}
			#slider{
				width : 1340px;
				height: 290px;
				margin: 0;
				overflow: hidden;
				position:relative;
			}
			#img{
				position: absolute;
				width:1340px;
				height:290px;
				animation: mm 20s infinite;
				-webkit-animation: mm 20s infinite;
				opacity: 0;
			}
			@keyframes mm{
				10%{opacity:1}
				30%{opacity:0}
			}
			@-webkit-keyframes mm{
				10%{opacity:1}
				30%{opacity:0}
			}

			#img:nth-child(0){animation-delay: 0s;-webkit-animation-delay: 0s;}
			#img:nth-child(1){animation-delay: 5s;-webkit-animation-delay: 5s;}
			#img:nth-child(2){animation-delay: 10s;-webkit-animation-delay: 10s;}
			#img:nth-child(3){animation-delay: 15s;-webkit-animation-delay: 15s;}
		#from{
			border-radius: 5px;
		}
		#to{
			border-radius: 5px;
		}
		#ondate{
			border-radius: 5px;
		}
		#retdate{
			border-radius: 5px;
		}
		#a:active {
			color: blue;
		}
		
		</style>
	</head>
	
	<body>
		<div id = "slider">
		
		<img  src = "317196.jpg" id = "img">
		<img  src= "Wallpaper_Tourismo_RH_03.jpg" id = "img">
		<img  src = "school-bus-school-bus-road.jpg" id = "img">
		<img  src = "3.4_keyvisual_buses1.jpg" id = "img">
		
		</div>
			
			<div id = "menu">
				<div id = "Name">
					<h2 id = "h2">---BusM.org---</h2>
					
				<ul>
					<img id = "im" src = "bus.png" width = "40px" height = "50px">	
					<li id = "active"><a href = "index.php">HOME</a></li>
					<li><a href = "location.php">LOCATION</a></li>
					<li><a href = "contact.php">CONTACT</a></li>
				</ul>
			</div>
			</div>
			<div id = "form">
			<form action="Schedule.php" method = "POST">
				<p>
					<label id = "fr">FROM:</label>
					<input type = "text" id = "from" placeholder = "Enter city" name = "from" value = "" />
					
					<label id = "toa">TO:</label>
					<input type = "text" id = "to" placeholder = "Enter city" name = "to"  value = ""/>
						
					<label id = "ona">ONWARD DATE:</label>
					<input type = "date"  min="2017-02-11" max="2017-12-31"id = "ondate" name = "ondate"  value = ""/>
					
					<label id = "ra">RETURN DATE:</label>
					<input type = "date"  min="2017-02-11" max="2017-12-31" id = "retdate" name = "retdate" value = "" /><br></br>
				
					<br></br><input type = "submit" name = "btn" id = "btn" value = "SEARCH BUS" />
				</p>
			</form>
		</div>
		
		
	<div id = "des">	
			<h2 align = "center">Available Bus Routes</h2>
			<div align = "center">
			Dhaka to Bogra,
			Dhaka to Feni,
			Dhaka to Panchagor, 
			Dhaka to Chittagong,
			Dhaka to Khulna,
			Dhaka to Rangpur,
			Dhaka to Sylhet,
			Dhaka to Barisal,
			Dhaka to Gaibandha, 
			Dhaka to Bandarban,
			Dhaka to Jhenaidah ,
			Dhaka to Dinajpur,
			Dhaka to Cox's Bazar,
			Dhaka to Tangail,  
			Dhaka to Joypurhat, 
			Dhaka to Satkhira , 
			Dhaka to Noagaon, 
			Dhaka to Rajshahi ,
			Dhaka to  Jessore,
			Dhaka to Kushtia
			 
			</div>
		
	</body>
</html>