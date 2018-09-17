<!DOCOTYPE html>
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
		document.getElementById("mySidenav").style.width = "300px";
		document.getElementById("mySidenav").style.height = "100%";
	}
	
	function closeTechNav() {
		document.getElementById("myTechSidenav").style.width = "0";
		document.getElementById("myTechSidenav").style.height = "0";
		document.getElementById("mySidenav").style.width = "300px";
		document.getElementById("mySidenav").style.height = "100%";
		document.getElementById("myTechSidenav").style.visibility = "hidden";
		
	}
	
	function openCalendar() {
			document.getElementById("myTechSidenav").style.width = "80%";
			document.getElementById("myTechSidenav").style.height = "100%";
			document.getElementById("myTechSidenav").style.visibility = "visible";
	   }
	
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
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
	<h2 style="margin-top:-15px">סגירת תקלה</h2>
	</div>

	<div id="mySidenav" class="sidenav">
		<a id="ex" style="float:left;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a id="sidenavea" href="#"><h2>תפריט</h2></a>
		<a id='sidenavea2' href='javascript:void(0)' onclick='gotoIndex()'>דף הבית</a>
		<a id="sidenavea" href="Tech.php">תקלות פתוחות</a>
		<a id="sidenavea" href="TechClosed.php">תקלות סגורות</a>
		<a id="sidenavea" href="TechClosed.php">מלאי רכב</a>
		<a id="sidenavea" href="#">הגדרות</a>
		<a id="sidenavea" href="#">טלפונים</a>
		<a id="sidenavea" href="#">knowledge Base</a>
		<a id='sidenavea' href='javascript:void(0)' onclick='disconnect()'>התנתק</a>
	</div>
	<form id='sampleForm' name='sampleForm' method='post' action='index.php' style="visibility:hidden;">
		<input type='hidden' name='authority' id='authority' value='2'>
	</form>
	
	<span id="cons" onclick="openNav()">תפריט&#9776;</span>
		
	<?php 
		echo "<p>".$_POST['queryId']."</p>";
		echo "<p>".$_POST['IssueText2']."</p>";
		$queryId = $_POST['queryId'];
		$IssueText2 = $_POST['IssueText2'];
		
		DEFINE ('DB_USER', 'matanso');
		DEFINE ('DB_PASSWORD', 'pVUZVkA(l$Gf');
		DEFINE ('DB_HOST', 'Localhost');
		DEFINE ('DB_NAME', 'matanso_Sadna');
		
		$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
		OR die('Could not connect to MySQL: ' .
		mysqli_connect_error());
		
		$query = "UPDATE submits SET opened = '0', issueText2 = '".$IssueText2."' where queryId = '".$queryId."'";

		$result = mysqli_query($conn, $query);
	
		mysqli_close($conn);
	
	?>
	
	<div id="finish" class="container" style="margin-left:150px;">
		<div class="row">
			<div class="col-sm-12">
				<h2>!התקלה נסגרה</h2><br>
				<a type="button" href="Tech.php">לחץ כאן כדי לעבור לתקלות הפתוחות</a><br>
				<a type="button" href="TechClosed.php">או כאן כדי לעבור לתקלות הסגורות</a>
			</div>
		</div>
	</div>

					
	<div class="jumbotron text-center" style="margin-bottom:0">
	<p>Footer</p>
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
