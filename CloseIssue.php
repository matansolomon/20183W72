<!DOCOTYPE html>
<html>
<head>
<title> סגירת תקלה </title>
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
		
	<form id='queryForm' name='queryForm' method='post' action='getIssueClosed.php' style="visibility:hidden;">
		<input type='hidden' name='queryId' id='queryId' value='1'>
	</form>
	
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
				
				echo "<h2>תקלה מספר <label><input id='thQueryId".$_POST['queryId']."' type='checkbox' class='radio' value='".$_POST['queryId']."' name='mobil[1][]' class='radi' style='display: none;'/><font size='5' color='blue' style='cursor: pointer;'>".$_POST['queryId']."</font></label> נסגרה!</h2><br>";
				echo "<h3>תוכן סגירת התקלה: ".$_POST['IssueText2'].".</h3><br>";
				echo "<h3>מייל סגירה נשלח עם הפרטים.</h3><br>";
				?>
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
				document.queryForm.queryId.value = $box.prop("value");
				document.forms["queryForm"].submit();
			}
		});
	});
	</script>
</body>
</html>
