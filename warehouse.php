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
<title> Manager\Tech View </title>
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
  <title>Manager\Tech View</title>
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
	function openNav() {
		document.getElementById("mySidenav").style.width = "300";
		document.getElementById("mySidenav").style.height = "100%";
	}
	
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("mySidenav").style.paddingLeft = "0";
	}

	function disconnect() {
		document.sampleForm.authority.value = 0;
		document.forms["sampleForm"].submit();
	}
	
	function gotoIndex() {
		document.forms["sampleForm"].submit();
	}
	</script>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>	
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0;height:100px;">
	<h2 style="margin-top:-15px">מלאי מחסנים</h2>
	</div>

	<div id="mySidenav" class="sidenav" style="width: 0;">
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
					<table border=1 width=40% style="background:#eeeeee;">
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
				<form method="post" style="margin-left: 10%;float: left;">
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
				
				<form method="post" style="margin-left: 10%;float: left;">
					<input type="hidden" name="add_warehouse" value="1"/>
					<h3>הוספת מחסן חדש:</h3>
					שם מחסן:<br>
					<input type="text" name="warehouse_name">
					<br><input id="submitForm" type="submit" value="הוסף">
				</form>
				
				<form method="post" style="margin-left: 10%;float: left;">
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
			
	<br>
	<br>
	<br>
	<br>
	<div class="footer">
	</div>
</body>
</html>

<?php
mysqli_close($conn);
?>