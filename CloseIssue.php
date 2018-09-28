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
  <title>פתיחת תקלה</title>
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
		document.getElementById("mySidenav").style.width = "300px";
		document.getElementById("mySidenav").style.height = "100%";
	}
	
	
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}

	</script>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>

	<div class="jumbotron text-center" style="margin-bottom:0;height:100px;">
	<h2 style="margin-top:-15px">סגירת תקלה</h2>
	</div>

	<div id="mySidenav" class="sidenav">
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
	<form id='sampleForm' name='sampleForm' method='post' action='index.php' style="visibility:hidden;">
		<input type='hidden' name='authority' id='authority' value='2'>
	</form>
	
	<span id="cons" onclick="openNav()">תפריט&#9776;</span>
		
	<div id="finish" class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php 
					$queryId = $_POST['queryId'];
					$IssueText2 = $_POST['IssueText2'];
					$email = $_POST['email'];
					
					DEFINE ('DB_USER', 'matanso');
					DEFINE ('DB_PASSWORD', 'pVUZVkA(l$Gf');
					DEFINE ('DB_HOST', 'Localhost');
					DEFINE ('DB_NAME', 'matanso_Sadna');
					
					$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
					OR die('Could not connect to MySQL: ' .
					mysqli_connect_error());
					
					$query = "UPDATE submits SET opened = '0', issueText2 = '".$IssueText2."' where queryId = '".$queryId."'";
			
					$result = mysqli_query($conn, $query);
				
					$query2 = "select * from submits where queryId = '".$queryId."'";
					
					$result2 = mysqli_query($conn, $query2);
					$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
					
					$to      = $email; 
					
					$subject = 'NO-REPLY: Your Ticket Was Closed';
					$message = 'Ticket Number: '.$row{'queryId'}.".\nTicket Information: ". $row{'issueText'} .".\nTechnician Information: ". $row{'issueText2'} .".";
					$headers = 'From: Noreply@Corby.com' . "\r\n" .
						'Reply-To: Noreply@Corby.com' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
					
					mail($to, $subject, $message, $headers);
					
					$partsUsed = array();
					$query = "SELECT warehouses.name AS warehouse_name, catalog.catID, warehouse_items.warehouseID AS wID, warehouse_items.catID AS catID
						FROM `warehouses` JOIN warehouse_items ON warehouses.warehouseID = warehouse_items.warehouseID JOIN catalog ON warehouse_items.catID = catalog.catID
						GROUP BY warehouses.warehouseID, catalog.catID ORDER BY warehouse_name";
					$result = mysqli_query($conn, $query);
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						$count = $_POST['counter_options_'.$row['wID']."_".$row['catID']];
						if ($count > 0) {
							$partsUsed[$row['wID']."_".$row['catID']] = $count;
						}
					}
					mysqli_free_result($result);
					
					/* "use" needed items from selected warehouses */
					foreach ($partsUsed as $item => $count) {
						$item = explode("_", $item);
						$query = "DELETE FROM warehouse_items WHERE warehouseID=".$item[0]." AND catID=".$item[1]." LIMIT ".$count;
						$result = mysqli_query($conn, $query);
					}
					
					mysqli_close($conn);
				
				echo "<h2>תקלה מספר ".$_POST['queryId']." נסגרה!</h2><br>";
				echo "<h3>תוכן סגירת התקלה: ".$_POST['IssueText2'].".</h3><br>";
				echo "<h3>מייל סגירה נשלח עם הפרטים.</h3><br>";
				?>
				
				<a type="button" href="Tech.php">לחץ כאן כדי לעבור לתקלות הפתוחות</a><br>
				<a type="button" href="TechClosed.php">או כאן כדי לעבור לתקלות הסגורות</a>
			</div>
		</div>
	</div>

					
		
	<br>
	<div class="footer">
	</div>
	
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
