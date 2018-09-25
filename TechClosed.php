<!DOCOTYPE html>
<html>
<head>
<title> Tech View </title>
<link rel="stylesheet" href="css/Tech.css">

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
		document.getElementById("mySidenav").style.width = "300";
		document.getElementById("mySidenav").style.height = "100%";
	}
	
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("mySidenav").style.paddingLeft = "0";
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
  <h2 style="margin-top:-15px">תקלות פתוחות</h2>
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
	
	<form id='queryForm' name='queryForm' method='post' action='getIssueClosed.php' style="visibility:hidden;">
		<input type='hidden' name='queryId' id='queryId' value='1'>
	</form>

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
		
			<?php 
				$queryId = $_POST['hiddenField2'];
				$callerName = $_POST['callerFullName'];
				$companyName = $_POST['companyNameList'];
				$companyBranch = $_POST['companyBranchList'];
				$callerNumber = $_POST['telNumber'];
				$issueText = $_POST['issueText'];
				
				DEFINE ('DB_USER', 'matanso');
				DEFINE ('DB_PASSWORD', 'pVUZVkA(l$Gf');
				DEFINE ('DB_HOST', 'Localhost');
				DEFINE ('DB_NAME', 'matanso_Sadna');
				
				$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
				OR die('Could not connect to MySQL: ' .
				mysqli_connect_error());
				
				$query = "select * from submits where opened = '0'";
		
				$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					echo "<tr>";
					echo "<th style='text-align: center; vertical-align: middle;'><label><input id='thQueryId".$row{'queryId'}."' type='checkbox' class='radio' value='".$row{'queryId'}."' name='mobil[1][]' class='radi' style='display: none;'/><font size='5' color='blue' style='cursor: pointer;'>".$row{'queryId'}."</font></label><br></th>";
					echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'callerName'} . "</p></th>";
					echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'callerNumber'} . "</p></th>";
					echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'companyName'} . "</p></th>";
					echo "<th style='text-align: center; vertical-align: middle;'><p>" . $row{'companyBranch'} . "</p></th>";
					echo "</tr>";
				}
			
				mysqli_close($conn);
			
			?>
	</table>
  
	   
	   
</select>
	  </div>
	  <div>
		<h2 id="tech01"></h2>
		<iframe id="calendar" src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=yoniel23%40gmail.com&amp;color=%23875509&amp;ctz=Asia%2FJerusalem" width="0" height="0" frameborder="0" scrolling="no"></iframe>
	  </div>
    </div>
  </div>
</div>


	<script type="text/javascript">
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
	
	function disconnect() {
		document.sampleForm.authority.value = 0;
		document.forms["sampleForm"].submit();
	}
	function gotoIndex() {
		document.forms["sampleForm"].submit();
	}
	</script>
	
	<br>
	<div class="footer">
	</div>
</body>
</html>
