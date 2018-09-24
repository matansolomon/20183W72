<!DOCOTYPE html>
<html>
<head>
<title> Tech View </title>
<link rel="stylesheet" href="css/Tomech.css">

</head>
<body link="white" vlink="white" alink="white">

<div id="main">
	
</div>
     
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>טכנאי</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  #map_canvas {
  height: 60%;
  width: 100%;
}
  </style>
  
  <script type="text/javascript">
	function script(){
	document.getElementById("hiddenField2").value=new Date().toJSON().slice(0,19).replace(/-/g,'/');
	document.getElementById("hiddenField2").value=document.getElementById("hiddenField2").value.replace(/:/g,'/');
	document.getElementById("hiddenField2").value=document.getElementById("hiddenField2").value.replace(/T/g,'/');	
	document.getElementById("hiddenField2").value=document.getElementById("hiddenField2").value.replace(/[/\\*]/g, "");	
	document.getElementById("hiddenField1").value=document.getElementById("hiddenField2").value + Math.floor(Math.random());
	
	//document.getElementById("_total").value;
	//document.getElementById("simpleCart_quantity").value;
	}
	function openNav() {
		document.getElementById("mySidenav").style.width = "300";
		document.getElementById("mySidenav").style.height = "100%";
	}
	
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("mySidenav").style.height = "0";
	}
	
	$(function() {
		$("input:checkbox").on('click', function() {
		// in the handler, 'this' refers to the box clicked on
		var $box = $(this);
		var eventButton = document.getElementById('btnCreateEvents');
		var deleteEventButton = document.getElementById('btnDeleteEvents');
		var openCalendar = document.getElementById('btnOpenCalendar');
		
		if ($box.is(":checked")) {
			// the name of the box is retrieved using the .attr() method
			// as it is assumed and expected to be immutable
			var group = "input:checkbox[name='" + $box.attr("name") + "']";
			// the checked state of the group/box on the other hand will change
			// and the current value is retrieved using .prop() method
			$(group).prop("checked", false);
			$box.prop("checked", true);
			if ($box.prop("value") == "3") {
				openCalendar.style.visibility = 'visible'; 		// if checked, hide button
				openCalendar.style.width = '';
				openCalendar.style.height = '';
				document.getElementById("tech01").innerHTML = "תיאום טכנאי:";
			} else {
				document.getElementById("myTechSidenav").style.visibility = "hidden";
				openCalendar.style.visibility = 'hidden'; 		// if checked, hide button
				openCalendar.style.width = '0';
				openCalendar.style.height = '0';
				document.getElementById("tech01").innerHTML = "";
			}
		} else {
			$box.prop("checked", false);
			if ($box.prop("value") == "3") {
				openCalendar.style.visibility = 'hidden'; 		// if checked, hide button
				openCalendar.style.width = '0';
				openCalendar.style.height = '0';
				document.getElementById("myTechSidenav").style.visibility = "hidden";
				document.getElementById("myTechSidenav").style.width = "0";
				document.getElementById("myTechSidenav").style.height = "0";
				document.getElementById("mySidenav").style.width = "250px";
				document.getElementById("mySidenav").style.height = "100%";
				document.getElementById("tech01").innerHTML = "";
				
			}
		}
		});
	});
	</script>
	
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<style>
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
</head>
<body>

	<div class="jumbotron text-center" style="margin-bottom:0;height:100px;">
	<h2 style="margin-top:-15px">תקלה מספר <?php echo $_POST['queryId']; ?></h2>
	</div>

	<div id="mySidenav" class="sidenav" style="width:0;">
	<form id='sampleForm' name='sampleForm' method='post' action='index.php' style="visibility:hidden;">
		<input type='hidden' name='authority' id='authority' value='2'>
	</form>
	<a id="ex" style="float:left;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<a id="sidenavea" href="#"><h2>תפריט</h2></a>
	<a id='sidenavea2' href='javascript:void(0)' onclick='gotoIndex()'>דף הבית</a>
	<a id="sidenavea" href="Tech.php">תקלות פתוחות</a>
	<a id="sidenavea" href="TechClosed.php">תקלות סגורות</a>
	<a id="sidenavea" href="warehouse.php">מלאי</a>
	<a id="sidenavea" href="#">תקלות נפוצות</a>
	<a id="sidenavea" href="#">טלפונים</a>
	<a id="sidenavea" href="#">הגדרות</a>
	<a id='sidenavea' href='javascript:void(0)' onclick='disconnect()'>התנתק</a>
	</div>
	
	<span id="cons" onclick="openNav()">תפריט&#9776;</span>
		
	
	<div class="container">
	<div class="row">
	<div class="col-sm-12">
	
	<table width="100%" border="1" style="background:#eeeeee;">
		<tr>
			<th style="text-align: center; vertical-align: middle;">מספר תקלה</th>
			<th style="text-align: center; vertical-align: middle;">איש קשר</th>
			<th style="text-align: center; vertical-align: middle;">טלפון</th>
			<th style="text-align: center; vertical-align: middle;">חברה</th>
			<th style="text-align: center; vertical-align: middle;">סניף</th>
		</tr>
		<tr>
		
		<?php 
			$queryId = $_POST['queryId'];
			
			DEFINE ('DB_USER', 'matanso');
			DEFINE ('DB_PASSWORD', 'pVUZVkA(l$Gf');
			DEFINE ('DB_HOST', 'Localhost');
			DEFINE ('DB_NAME', 'matanso_Sadna');
			
			$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			OR die('Could not connect to MySQL: ' .
			mysqli_connect_error());
			
			$query = "select * from submits where queryId = '".$queryId."'";
	
			$result = mysqli_query($conn, $query);
			
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'queryId'} . "</p></th>";
			echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'callerName'} . "</p></th>";
			echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'callerNumber'} . "</p></th>";
			echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'companyName'} . "</p></th>";
			echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'companyBranch'} . "</p></th>";
			echo "</tr>";
			echo "</table>";
			echo "<br>";
			echo "<h3>תיאור התקלה</h3><br>";
			echo "<textarea id='issueText' name='issueText' style='width:600px; height:300px; margin-right:50px;opacity:0.5;' disabled>". $row{'issueText'} ."</textarea><br>";
			echo "<h3>תיאור התקלה</h3><br>";
			echo "<textarea id='issueText2' name='issueText' style='width:600px; height:300px; margin-right:50px;opacity:0.5;' disabled>". $row{'issueText2'} ."</textarea><br>";
			
			$query1 = "select * from companies where Name = '". $row{'companyName'} ."'";
			$result1 = mysqli_query($conn, $query1);
			$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
			
			echo "<script type='text/javascript'>
			var geocoder;
			var map;
			var address ='". $row1{'address'} ."';
				
				function initialize() {
				geocoder = new google.maps.Geocoder();
				var latlng = new google.maps.LatLng(-34.397, 150.644);
				var myOptions = {
					zoom: 15,
					center: latlng,
					mapTypeControl: true,
					mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
					},
					navigationControl: true,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
				if (geocoder) {
					geocoder.geocode({
					'address': address
					}, function(results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
						map.setCenter(results[0].geometry.location);
				
						var infowindow = new google.maps.InfoWindow({
							content: '<b>' + address + '</b>',
							size: new google.maps.Size(150, 50)
						});
				
						var marker = new google.maps.Marker({
							position: results[0].geometry.location,
							map: map,
							title: address
						});
						google.maps.event.addListener(marker, 'click', function() {
							infowindow.open(map, marker);
						});
				
						} else {
						alert('No results found');
						}
					} else {
						alert('Geocode was not successful for the following reason: ' + status);
					}
					});
				}
				}
				google.maps.event.addDomListener(window, 'load', initialize);
			</script>";
			
			$adrs = str_replace(' ', '%20', $row1{'address'});
			
			echo "<br>";
			echo "<br>";
			echo "<h3>כתובת הלקוח: <a href='waze://?q=". $adrs ."&navigate=yes'>". $row1{'address'} ."</a></h3>";
			
			mysqli_close($conn);
		
		?>

	<!--The div element for the map -->
	<script>initialize();</script>
	<div id="map_canvas" style="height:45%"></div>

					
	<script type="text/javascript">
	function disconnect() {
		document.sampleForm.authority.value = 0;
		document.forms["sampleForm"].submit();
	}
	function gotoIndex() {
		document.forms["sampleForm"].submit();
	}
	</script>
</body>
</html>
