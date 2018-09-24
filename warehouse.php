<!DOCOTYPE html>
<?php
DEFINE ('DB_USER', 'matanso');
DEFINE ('DB_PASSWORD', 'pVUZVkA(l$Gf');
DEFINE ('DB_HOST', 'Localhost');
DEFINE ('DB_NAME', 'matanso_Sadna');

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());

session_start();

if ($_POST["assign_cat"] == "1") {
	$count = intval($_POST["cat_count"]);
	$query = "INSERT INTO warehouse_items (catID, warehouseID) VALUES (".$_POST["cat_id"].",".$_POST["warehouse_id"].")";

	for ($i=1; $i <= $count; $i++)
		$result = mysqli_query($conn, $query);
}

if ($_POST["move_cat"] == "1") {
	$target_count = intval($_POST["counter_options"]);
	echo $_POST["cat_id"]."<BR>";
	echo $_POST["target_warehouse"]."<BR>";
	echo $target_count."<BR>";
	
	if ($target_count > 0) {
		$query = "UPDATE warehouse_items SET warehouseID=".$_POST["target_warehouse"]." WHERE warehouseID=".$_POST["curr_warehouse"]." AND catID=".$_POST["cat_id"]." LIMIT ".$target_count;
		$result = mysqli_query($conn, $query);
	}
}

if ($_POST["add_warehouse"] == "1") {
	$query = "INSERT INTO warehouses (name) VALUES ('".$_POST["warehouse_name"]."')";
	$result = mysqli_query($conn, $query);
}

if ($_POST["add_cat"] == "1") {
	$query = "INSERT INTO catalog (name,description) VALUES ('".$_POST["cat_name"]."','".$_POST["cat_desc"]."')";
	$result = mysqli_query($conn, $query);
}
?>

<html>
<head>
<title> Support View </title>
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
  <title>MESSI</title>
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
  </style>
  
  <script type="text/javascript">
	function script(){
	document.getElementById("hiddenField2").value=new Date().toJSON().slice(0,19).replace(/-/g,'/');
	document.getElementById("hiddenField2").value=document.getElementById("hiddenField2").value.replace(/:/g,'/');
	document.getElementById("hiddenField2").value=document.getElementById("hiddenField2").value.replace(/T/g,'/');	
	document.getElementById("hiddenField2").value=document.getElementById("hiddenField2").value.replace(/[/\\*]/g, "");	
	document.getElementById("hiddenField1").value=document.getElementById("hiddenField2").value + Math.floor(Math.random());
	document.getElementById("hiddenField2").value=document.getElementById("hiddenField1").value;
	
	//document.getElementById("_total").value;
	//document.getElementById("simpleCart_quantity").value;
	}
	
	function openNav() {
		document.getElementById("mySidenav").style.visibility = "visible";	
		document.getElementById("mySidenav").style.width = "300px";
		document.getElementById("mySidenav").style.height = "100%";
	}
	
	function closeTechNav() {
		document.getElementById("myTechSidenav").style.width = "0";
		document.getElementById("mySidenav").style.width = "300px";
		document.getElementById("mySidenav").style.height = "100%";
		document.getElementById("myTechSidenav").style.visibility = "hidden";	
	}
	
	function closeconNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("mySidenav").style.visibility = "hidden";	
	}
	
	function openCalendar() {
			document.getElementById("myTechSidenav").style.width = "80%";
			document.getElementById("myTechSidenav").style.height = "100%";
			document.getElementById("myTechSidenav").style.visibility = "visible";
	   }
	
	function closeNav() {
		document.getElementById("ifmCalendar").style.width = "0";
		document.getElementById("ifmCalendar").style.height = "0";
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

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>	
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0;height:100px;">
	<h2 style="margin-top:-15px">Website Header</h2>
	</div>

	<div id="mySidenav" class="sidenav">
		<form id='sampleForm' name='sampleForm' method='post' action='index.php' style="visibility:hidden;">
			<input type='hidden' name='authority' id='authority' value='1'>
		</form>
		<a id="ex" style="float:left;" href="javascript:void(0)" class="closebtn" onclick="closeconNav()">&times;</a>
		<a id="sidenavea" href="#"><h2>תפריט</h2></a>
		<a id='sidenavea2' href='javascript:void(0)' onclick='gotoIndex()'>דף הבית</a>
		<a id="sidenavea" href="Tomech.php">פתיחת תקלה</a>
		<a id="sidenavea" href="#">הגדרות</a>
		<a id="sidenavea" href="#">טלפונים</a>
		<a id="sidenavea" href="#">knowledge Base</a>
		<a id='sidenavea' href='javascript:void(0)' onclick='disconnect()'>התנתק</a>
	</div>
	
	<span id="cons" onclick="openNav()">תפריט&#9776;</span>

<?php
	$warehouses_options = "";
	$query = "SELECT * FROM warehouses";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		$warehouses_options .= "<option value='".$row['warehouseID']."'>".$row['name']."</option>";
	}
	mysqli_free_result($result);
	
	function getCounterOptions($count) {
		$res = "<select name='counter_options'>";
		for ($i=0; $i <= $count; $i++) {
			$res .= "<option value='".$i."'>".$i."</option>";
		}
		$res .= "</select>";
		
		return $res;
	}
?>
	
	<div id="issueForm" class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>ניהול מחסנים:</h2>
					<h3>פריטים קיימים:</h3>
					<table border=1 width=40%>
					<?php
						$lastWarehouse = "";
						$query = "SELECT warehouses.name AS warehouse_name, catalog.name AS catalog_name, catalog.description AS catalog_desc, count(catalog.name) AS count, catalog.catID, warehouse_items.warehouseID
							FROM `warehouses` JOIN warehouse_items ON warehouses.warehouseID = warehouse_items.warehouseID JOIN catalog ON warehouse_items.catID = catalog.catID
                            GROUP BY warehouses.warehouseID, catalog.catID ORDER BY warehouse_name";
						$result = mysqli_query($conn, $query);
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							if ($lastWarehouse != $row['warehouse_name']) {
								echo "<tr><td colspan=4><br>" . $row['warehouse_name'] . "</td></tr>";
								echo "<tr><td>שם פריט</td><td>תיאור</td><td>כמות</td><td>העברה</td></tr>";
								$lastWarehouse = $row['warehouse_name'];
							}
							
							echo "<tr><td>".$row['catalog_name']."</td><td>".$row['catalog_desc']."</td><td>".$row['count']."</td>";
							echo "<td><form method=post><input type=hidden name='move_cat' value='1'><input type=hidden name='curr_warehouse' value='".$row['warehouseID']."'><input type=hidden name='cat_id' value='".$row['catID']."'>";
								echo "כמות ".getCounterOptions($row['count'])."<br>";
								echo "<select name='target_warehouse'>".$warehouses_options."</select><input type=submit value='העבר'>";
							echo "</form></td></tr>";
						}
						mysqli_free_result($result);
					?>
					</table>
				<form method="post">
					<input type="hidden" name="assign_cat" value="1"/>
					<h3>שיבוץ חדש לפריט קיים במחסן:</h3>
					בחר מחסן:<br>
					<select name="warehouse_id"><?php echo $warehouses_options?></select>
					<br>
					בחר פריט:<br>
					<select name="cat_id">
					<?php
						$query = "SELECT * FROM catalog";
						$result = mysqli_query($conn, $query);
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							echo "<option value='".$row['catID']."'>".$row['name']."</option>";
						}
						mysqli_free_result($result);
					?>
					</select><br>
					כמות:<br>
					<input type="text" name="cat_count" value='1' size=2>
					<input id="submitForm" type="submit" value="הוסף">
				</form>
				
				<form method="post">
					<input type="hidden" name="add_warehouse" value="1"/>
					<h3>הוספת מחסן חדש:</h3>
					שם מחסן:<br>
					<input type="text" name="warehouse_name">
					<br><input id="submitForm" type="submit" value="הוסף">
				</form>
				
				<form method="post">
					<input type="hidden" name="add_cat" value="1"/>
					<h3>הוספת פריט חדש:</h3>
					שם:<br>
					<input type="text" name="cat_name"><br>
					תיאור:<br>
					<input type="text" name="cat_desc"><br>
					<br><input id="submitForm" type="submit" value="הוסף">
				</form>
			</div>
		</div>
	</div>
	
	<div id="finish" class="container" style="visibility: hidden; width: 0; height: 0;margin-left:150px;">
		<div class="row">
			<div class="col-sm-12">
				<h2>!התקלה נפתחה במערכת</h2><br>
				<a type="button" href="Tomech.php">לפתיחת תקלה חדשה לחץ כאן</a>
			</div>
		</div>
	</div>

	<div id="myTechSidenav" style="visibility: hidden; width: 0; height: 0;" class="container sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeTechNav()">&times;</a>
		<div class="row">
			<div>
				<button id="authorize-button" style="visibility: hidden; width: 0; height: 0;" class="btn btn-primary">Authorize</button>
			</div>
			
			<!-- .col -->
			<div>
				<div class="panel panel-danger" id="result-panel" style="visibility: hidden; width: 0; height: 0;">
					<div class="panel-heading">
						<h1>
							My Calendar</h1>
						<h3 class="panel-title" id="result-title">
							Application Not Authorized</h3>
						&nbsp;
						<p>
							Insert Event into Public Calendar&hellip;</p>
					</div>
				</div>
				<p style="float:left;margin-left:150px;margin-top:3px;">From</p>
				<input id="fromInput" style="float:left;text-align:center;margin-left:10px;" size="16"  value="2018-08-19T15:45:00.000" type="datetime-local">
				<p style="float:left;margin-left:10px;margin-top:3px;">To</p>
				<input id="toInput" style="float:left;text-align:center;margin-left:10px;" size="16" value="2018-08-19T16:45:00.000" type="datetime-local"><br>
				<button id="btnCreateEvents" style="margin-right: 100px;" class="btn btn-primary" onclick="makeApiCall();">Create Events</button>  
				<button id="btnDeleteEvents" class="btn btn-primary" onclick="deleteEvent();">Delete Events</button> 	
				<button id="btnGetEvents" class="btn btn-primary" onclick="getEventID();">Get Events</button> 	
				<!--<button id="btnShowEvents" style="" class="btn btn-primary" onclick="showEvents();">Show Events</button> 	-->
				<div id="divifm">
					<iframe id="ifmCalendar" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=yoniel23%40gmail.com&amp;color=%23875509&amp;ctz=Asia%2FJerusalem" style="border-width: 0" width="90%" height="80%" frameborder="0" scrolling="no"></iframe>
				</div>
			</div>
		</div>
	</div>
					
	<div class="jumbotron text-center" style="margin-bottom:0">
	<p>Footer</p>
	</div>
</body>
</html>

<?php
mysqli_close($conn);
?>