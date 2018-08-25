<!DOCOTYPE html>
<html>
<head>
<title> Support View </title>
<link rel="stylesheet" href="css/edit.css">

</head>
<body link="white" vlink="white" alink="white">

<div id="main">
	
</div>
     
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
		document.getElementById("calendar").style.width = "100%";
		document.getElementById("calendar").style.height = "100%";
	}
	
	function closeNav() {
		document.getElementById("calendar").style.width = "0";
		document.getElementById("calendar").style.height = "0";
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
			if ($box.prop("value") == "3") {
				document.getElementById("calendar").style.width = "100%";
				document.getElementById("calendar").style.height = "80%";
				document.getElementById("tech01").innerHTML = "תיאום טכנאי";
			} else {
				document.getElementById("calendar").style.width = "0";
				document.getElementById("calendar").style.height = "0";
				document.getElementById("tech01").innerHTML = "";
			}
		} else {
			$box.prop("checked", false);
			if ($box.prop("value") == "3") {
				document.getElementById("calendar").style.width = "0";
				document.getElementById("calendar").style.height = "0";
				document.getElementById("tech01").innerHTML = "";
			}
		}
		});
	});
	</script>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0;height:100px;">
  <h2 style="margin-top:-15px">ניהול מחסנים ומלאי בחברה</h2>
</div>

<div id="mySidenav" class="sidenav">
	<a id="sidenavea" href="#"><h2>תפריא</h2></a>
	<a id="sidenavea" href="index.html">דף הבית</a>
	<a id="sidenavea" href="Tomech.html">איזור אישי תומך</a>
	<a id="sidenavea" href="#">הגדרות</a>
	<a id="sidenavea" href="#">טלפונים</a>
	<a id="sidenavea" href="#">knowledge Base</a>
	</div>
	
	<span id="cons" onclick="openNav()">תפריט&#9776;</span>
	


<div class="container">
  <div class="row">
    <div class="col-sm-12">
	  <h2>בחר מחסן:</h2>
	 
		<?php 
							DEFINE ('DB_USER', 'matanso');
							DEFINE ('DB_PASSWORD', 'pVUZVkA(l$Gf');
							DEFINE ('DB_HOST', 'Localhost');
							DEFINE ('DB_NAME', 'matanso_Sadna');
							
							$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
							OR die('Could not connect to MySQL: ' .
							mysqli_connect_error());
						
							session_start();
							
							$query = "SELECT ID, name FROM `warehouses`";
		
							$result = mysqli_query($conn, $query);
							 
							echo "<table><tr><th>קוד מחסן</th><th>שם המחסן</th><th>פעולות</th></tr>";
							
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								echo "<tr><th>" . $row{'ID'} . "</th><th>" . $row{'name'} . "</th><th>  <a href=#> ספירת מלאי </a>  <a href=#> עריכה </a>  <a href=#> מחיקה </a> </th></tr>";
							}
							echo "</table><br>";
							mysqli_close($conn);
						
						?>
		
  
	   
	   
</select>
	  </div>
	  <div>
		<h2 id="tech01"></h2>
		<iframe id="calendar" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=yoniel23%40gmail.com&amp;color=%23875509&amp;ctz=Asia%2FJerusalem" width="0" height="0" frameborder="0" scrolling="no"></iframe>
	  </div>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Footer</p>
</div>

</body>
</html>
