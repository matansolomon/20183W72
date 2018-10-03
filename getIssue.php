<!DOCOTYPE html>
<html>
<head>
<title> תקלה מספר <?php echo $_POST['queryId']; ?> </title>
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="favicon" href="favicon.ico" />
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
	}
	
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
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

	<div id="mySidenav" class="sidenav" style="width: 0;">
		<a id="ex" style="float:left;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<form id='sampleForm' name='sampleForm' method='post' action='index.php' style="visibility:hidden;width: 0; height: 0;">
			<input type='hidden' name='authority' id='authority' value='<?php echo $_POST['authority'];?>'>
		</form>
		<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea1' href='#'><h2>תפריט</h2></a>
		<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea2' href='javascript:void(0)' onclick='gotoIndex()'>דף הבית</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='tomechopen' href='javascript:void(0)' onclick='gotoTomech()'>פתיחת תקלה</a>
		<a style="visibility: hidden; width: 0; height: 0;" id='techopen1' href='javascript:void(0)' onclick='gotoTech()'>תקלות פתוחות</a>
		<a style="visibility: hidden; width: 0; height: 0;" id='techopen2' href='javascript:void(0)' onclick='gotoTechClosed()'>תקלות סגורות</a>
	    <a style="visibility: hidden; width: 0; height: 0;" id='techopen3' href='javascript:void(0)' onclick='gotoWarehouse()'>מלאי</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea3' href='#'>תקלות נפוצות</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea4' href='#'>טלפונים</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea5' href='#'>הגדרות</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea6' href='javascript:void(0)' onclick='disconnect()'>התנתק</a>
	</div>
	
	<span id="cons" onclick="openNav()">תפריט&#9776;</span>
	<script type="text/javascript">
		if(document.sampleForm.authority.value == 1)
		{
			document.getElementById("mySidenav").style.visibility = "visible";	
			document.getElementById("sidenavea1").style.width = "";
			document.getElementById("sidenavea1").style.height = "";
			document.getElementById("sidenavea1").style.visibility = 'visible';
			document.getElementById("sidenavea2").style.width = "";
			document.getElementById("sidenavea2").style.height = "";
			document.getElementById("sidenavea2").style.visibility = 'visible';
			document.getElementById("sidenavea3").style.width = "";
			document.getElementById("sidenavea3").style.height = "";
			document.getElementById("sidenavea3").style.visibility = 'visible';
			document.getElementById("sidenavea4").style.width = "";
			document.getElementById("sidenavea4").style.height = "";
			document.getElementById("sidenavea4").style.visibility = 'visible';
			document.getElementById("sidenavea5").style.width = "";
			document.getElementById("sidenavea5").style.height = "";
			document.getElementById("sidenavea5").style.visibility = 'visible';
			document.getElementById("sidenavea6").style.width = "";
			document.getElementById("sidenavea6").style.height = "";
			document.getElementById("sidenavea6").style.visibility = 'visible';
			document.getElementById("tomechopen").style.width = "";
			document.getElementById("tomechopen").style.height = "";
			document.getElementById("tomechopen").style.visibility = 'visible';
			document.getElementById("techopen1").style.width = "";
			document.getElementById("techopen1").style.height = "";
			document.getElementById("techopen1").style.visibility = 'visible';
			document.getElementById("techopen2").style.width = "";
			document.getElementById("techopen2").style.height = "";
			document.getElementById("techopen2").style.visibility = 'visible';
			document.getElementById("mySidenav").style.paddingLeft = "0";
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("mySidenav").style.height = "100%";
		}
		if(document.sampleForm.authority.value == 2)
		{
			document.getElementById("mySidenav").style.visibility = "visible";	
			document.getElementById("sidenavea1").style.width = "";
			document.getElementById("sidenavea1").style.height = "";
			document.getElementById("sidenavea1").style.visibility = 'visible';
			document.getElementById("sidenavea2").style.width = "";
			document.getElementById("sidenavea2").style.height = "";
			document.getElementById("sidenavea2").style.visibility = 'visible';
			document.getElementById("sidenavea3").style.width = "";
			document.getElementById("sidenavea3").style.height = "";
			document.getElementById("sidenavea3").style.visibility = 'visible';
			document.getElementById("sidenavea4").style.width = "";
			document.getElementById("sidenavea4").style.height = "";
			document.getElementById("sidenavea4").style.visibility = 'visible';
			document.getElementById("sidenavea5").style.width = "";
			document.getElementById("sidenavea5").style.height = "";
			document.getElementById("sidenavea5").style.visibility = 'visible';
			document.getElementById("sidenavea6").style.width = "";
			document.getElementById("sidenavea6").style.height = "";
			document.getElementById("sidenavea6").style.visibility = 'visible';
			document.getElementById("tomechopen").style.width = "";
			document.getElementById("tomechopen").style.height = "";
			document.getElementById("tomechopen").style.visibility = 'visible';
			document.getElementById("techopen1").style.width = "";
			document.getElementById("techopen1").style.height = "";
			document.getElementById("techopen1").style.visibility = 'visible';
			document.getElementById("techopen2").style.width = "";
			document.getElementById("techopen2").style.height = "";
			document.getElementById("techopen2").style.visibility = 'visible';
			document.getElementById("techopen3").style.width = "";
			document.getElementById("techopen3").style.height = "";
			document.getElementById("techopen3").style.visibility = 'visible';
			document.getElementById("mySidenav").style.paddingLeft = "0";
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("mySidenav").style.height = "100%";
		}
		if(document.sampleForm.authority.value == 3)
		{
			document.getElementById("mySidenav").style.visibility = "visible";	
			document.getElementById("sidenavea1").style.width = "";
			document.getElementById("sidenavea1").style.height = "";
			document.getElementById("sidenavea1").style.visibility = 'visible';
			document.getElementById("sidenavea2").style.width = "";
			document.getElementById("sidenavea2").style.height = "";
			document.getElementById("sidenavea2").style.visibility = 'visible';
			document.getElementById("sidenavea3").style.width = "";
			document.getElementById("sidenavea3").style.height = "";
			document.getElementById("sidenavea3").style.visibility = 'visible';
			document.getElementById("sidenavea4").style.width = "";
			document.getElementById("sidenavea4").style.height = "";
			document.getElementById("sidenavea4").style.visibility = 'visible';
			document.getElementById("sidenavea5").style.width = "";
			document.getElementById("sidenavea5").style.height = "";
			document.getElementById("sidenavea5").style.visibility = 'visible';
			document.getElementById("sidenavea6").style.width = "";
			document.getElementById("sidenavea6").style.height = "";
			document.getElementById("sidenavea6").style.visibility = 'visible';
			document.getElementById("techopen1").style.width = "";
			document.getElementById("techopen1").style.height = "";
			document.getElementById("techopen1").style.visibility = 'visible';
			document.getElementById("techopen2").style.width = "";
			document.getElementById("techopen2").style.height = "";
			document.getElementById("techopen2").style.visibility = 'visible';
			document.getElementById("techopen3").style.width = "";
			document.getElementById("techopen3").style.height = "";
			document.getElementById("techopen3").style.visibility = 'visible';
			document.getElementById("mySidenav").style.paddingLeft = "0";
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("mySidenav").style.height = "100%";
		}
	</script>
		
	<form id='queryForm' name='queryForm' method='post' action='CloseIssue.php'>
		<input type='hidden' name='authority' id='authority' value='<?php echo $_POST['authority'];?>'>
		<?php echo "<input type='hidden' name='queryId' id='queryId' value='". $_POST['queryId'] ."'>"?>
		<input type='hidden' name='IssueText2' id='IssueText2' value='1'>
		<?php
			DEFINE ('DB_USER', 'matanso');
			DEFINE ('DB_PASSWORD', 'pVUZVkA(l$Gf');
			DEFINE ('DB_HOST', 'Localhost');
			DEFINE ('DB_NAME', 'matanso_Sadna');
			
			$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
			OR die('Could not connect to MySQL: ' .
			mysqli_connect_error());
			
			$query = "select * from submits where queryId = '".$_POST['queryId']."'";
	
			$result = mysqli_query($conn, $query);
			
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			
			echo "<input type='hidden' name='email' id='email' value='".$row{'companyBranch'}."'>";
		?>
	
	<div class="container">
	<div class="row">
	<div class="col-sm-12">
	
	<table width="100%" border="1" style="background:#eeeeee;">
		<tr>
			<th style="text-align: center; vertical-align: middle;">מספר תקלה</th>
			<th style="text-align: center; vertical-align: middle;">איש קשר</th>
			<th style="text-align: center; vertical-align: middle;">טלפון</th>
			<th style="text-align: center; vertical-align: middle;">חברה</th>
			<th style="text-align: center; vertical-align: middle;">מייל</th>
		</tr>
		<tr>
		
		<?php 
		
	function getCounterOptions($itemId, $count) {
		$res = "<select name='counter_options_".$itemId."'>";
		for ($i=0; $i <= $count; $i++) {
			$res .= "<option value='".$i."'>".$i."</option>";
		}
		$res .= "</select>";
		
		return $res;
	}
	
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
			$companyName = $row{'companyName'};
			echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'queryId'} . "</p></th>";
			echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'callerName'} . "</p></th>";
			echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'callerNumber'} . "</p></th>";
			echo "<th style='text-align: center; vertical-align: middle;'><a id='btnOpenCalendar' href='javascript:void(0)' class='closebtn' onclick='openSidenav()'>" . $row{'companyName'} . "</a></th>";
			echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'companyBranch'} . "</p></th>";
			echo "</tr>";
			echo "</table>";
			echo "<br>";
			echo "<h3>תיאור פתיחת התקלה</h3><br>";
			echo "<textarea id='issueText' name='issueText' style='width:600px; height:300px; margin-right:50px;opacity:0.5;' disabled>". $row{'issueText'} ."</textarea><br>";
			echo "<h3>תיאור סגירת התקלה</h3><br>";
			echo "<textarea id='issueText2' name='issueText' style='width:600px; height:300px; margin-right:50px;'>". $row{'issueText2'} ."</textarea><br>";
			
			echo "<h3>שימוש במלאי:</h3><table border=1 width=80% style='background:#eeeeee;'>";
			$query = "SELECT warehouses.name AS warehouse_name, catalog.name AS catalog_name, catalog.description AS catalog_desc, count(catalog.name) AS count, catalog.catID, warehouse_items.warehouseID AS wID, warehouse_items.catID AS catID
				FROM `warehouses` JOIN warehouse_items ON warehouses.warehouseID = warehouse_items.warehouseID JOIN catalog ON warehouse_items.catID = catalog.catID
				GROUP BY warehouses.warehouseID, catalog.catID ORDER BY warehouse_name";
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				if ($lastWarehouse != $row['warehouse_name']) {
					echo "<tr><td colspan=4><br>" . $row['warehouse_name'] . "</td></tr>";
					echo "<tr><td>שם פריט</td><td>תיאור</td><td>כמות</td><td>כמות שימוש</td></tr>";
					$lastWarehouse = $row['warehouse_name'];
				}
				
				echo "<tr><td>".$row['catalog_name']."</td><td>".$row['catalog_desc']."</td><td>".$row['count']."</td>";
				echo "<td>".getCounterOptions($row['wID']."_".$row['catID'], $row['count'])."</td></tr>";
			}
			mysqli_free_result($result);
			
			echo "</table></form>";
			
			$query1 = "select * from companies where Name = '". $companyName ."'";
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
			echo "<label style='margin-left:50%; float: left;'><input id='thQueryId' type='checkbox' class='radio' name='mobil[1][]' class='radi' style='display: none;'/>";
			echo "<font size='5' color='blue' style='cursor: pointer;text-align: center; vertical-align: middle; border: 1px solid black; border-radius: 5px; padding: 3px;'>סגירת תקלה</font></label><br>";
			echo "<br>";
			echo "<div id='myTechSidenav' style='visibility: hidden; width: 0; height: 0;' class='container sidenav'>";
				echo "<a href='javascript:void(0)' class='closebtn' onclick='closeTechNav()'>&times;</a>";
				echo "<div class='row'>";
					echo "<h3><a href='waze://?q=". $adrs ."&navigate=yes'>". $row1{'address'} ."</a></h3>";
			
			mysqli_close($conn);
		
		?>

					<!--The div element for the map -->
					<script>initialize();</script>
					<div id="map_canvas" style="height:45%"></div>
				</div>
			</div>
			
			<br>
			<br>
			<br>
					
	<script type="text/javascript">
	function closeTechNav() {
		document.getElementById("myTechSidenav").style.width = "0";
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("myTechSidenav").style.visibility = "hidden";	
	}
	
	function openSidenav() {
		document.getElementById("myTechSidenav").style.width = "80%";
		document.getElementById("myTechSidenav").style.height = "100%";
		document.getElementById("myTechSidenav").style.visibility = "visible";
    }
	
	$(function() {
		$("input:checkbox").on('click', function() {
			// in the handler, 'this' refers to the box clicked on
			var $box = $(this);
			
			if ($box.is(":checked")) {
				// the name of the box is retrieved using the .attr() method
				// as it is assumed and expected to be immutable
				var group = "input:checkbox[name='" + $box.attr("name") + "']";
				// the checked state of the group/box on the other hand will change
				// and the current value is retrieved using .prop() method
				$(group).prop("checked", false);
				$box.prop("checked", true);
				document.queryForm.IssueText2.value = document.getElementById("issueText2").value;
				document.forms["queryForm"].submit();
			}
		});
	});
	
	function disconnect() {
		document.sampleForm.authority.value = 0;
		document.forms["sampleForm"].submit();
	}
	
	function gotoIndex() {
		document.forms["sampleForm"].submit();
	}
	
	function gotoTomech() {
		document.forms["sampleForm"].action = "Tomech.php";
		document.forms["sampleForm"].submit();
	}
	
	function gotoTech() {
		document.forms["sampleForm"].action = "Tech.php";
		document.forms["sampleForm"].submit();
	}
	
	function gotoTechClosed() {
		document.forms["sampleForm"].action = "TechClosed.php";
		document.forms["sampleForm"].submit();
	}
	
	function gotoWarehouse() {
		document.forms["sampleForm"].action = "Warehouse.php";
		document.forms["sampleForm"].submit();
	}
	</script>
</body>
</html>
