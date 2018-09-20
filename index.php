<!DOCOTYPE html>
<html>
<head>
<title> Support View </title>
<link rel="stylesheet" href="index.css">

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
  <style>
  .fakeimg {
      height: 200px;
      background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0; height:10%">
</div>

<img id="logo" src="images\background\extralblur.jpg" alt="blurbackground" style="width: 100%; height: 30%">

<form id='queryForm' name='queryForm' method='post' action='getIssue.php' style="visibility:hidden;">
	<input type='hidden' name='queryId' id='queryId' value='1'>
</form>

<div id="mySidenav" class="sidenav" style="width: 0;direction: ltr;">
	<div class="col-sm-12">
		<a id="ex" style="float:left;" href="javascript:void(0)" class="closebtn" onclick="closeconNav()">&times;</a>
		<form id='sampleForm' name='sampleForm' method='post' action='index.php' style="visibility:hidden;width: 0; height: 0;">
			<input type='hidden' name='authority' id='authority' value='0'>
		<datalist id="usernames">
			<?php 
				DEFINE ('DB_USER', 'matanso');
				DEFINE ('DB_PASSWORD', 'pVUZVkA(l$Gf');
				DEFINE ('DB_HOST', 'Localhost');
				DEFINE ('DB_NAME', 'matanso_Sadna');
				
				$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
				OR die('Could not connect to MySQL: ' .
				mysqli_connect_error());
			
				session_start();
				
				$query = "SELECT * FROM connectionString";

				$result = mysqli_query($conn, $query);
					
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					echo "<option>" . $row{'Username'} . "</option>";
					echo "<option>" . $row{'Password'} . "</option>";
				}
			
				mysqli_close($conn);
			
			?>
		</datalist>
		<a href='#' onclick='setValue();'></a>
		</form>
		<form id="fo1">
			<h4>User Name:</h4>
			<input id="user" type="text" name="user">
			<h4>Password:</h4>
			<input id="password" type="password" name="password">
			<a id='conConfirm' href='javascript:void(0)' onclick='conConfirm()'>Login</a>
		</form>
		<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea1' href='#'><h2>תפריט</h2></a>
		<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea2' href='javascript:void(0)' onclick='gotoIndex()'>דף הבית</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='tomechopen' href='Tomech.php'>פתיחת תקלה</a>
		<a style="visibility: hidden; width: 0; height: 0;" id='techopen1' href='Tech.php'>תקלות פתוחות</a>
		<a style="visibility: hidden; width: 0; height: 0;" id='techopen2' href='TechClosed.php'>תקלות סגורות</a>
	    <a style="visibility: hidden; width: 0; height: 0;" id='techopen3' href='Tech.php'>מלאי רכב</a>
		<a style="visibility: hidden; width: 0; height: 0;" id='manageropen' href='Tomech.php'>מלאי מחסנים</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea3' href='#'>תקלות נפוצות</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea4' href='#'>טלפונים</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea5' href='#'>הגדרות</a>
     	<a style="visibility: hidden; width: 0; height: 0;" id='sidenavea6' href='javascript:void(0)' onclick='disconnect()'>התנתק</a>
		
	</div>
		<!--<a id="sidenavea" href="#"><h2>תפריט</h2></a>
		<a id="ex" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<a id="sidenavea" href="index.html">דף הבית</a>
		<a id="sidenavea" href="Tomech.php">איזור אישי</a>
		<a id="sidenavea" href="#">תקלות נפוצות</a>
		<a id="sidenavea" href="#">טלפונים</a>
		<a id="sidenavea" href="#">הגדרות</a>-->
		</div>
		
		<span id="cons1" onclick="openNav()" style="visibility: hidden;">תפריט&#9776;</span>
		<span id="cons" onclick="connect()">התחבר&#9777;</span>
		<script type="text/javascript">
			document.sampleForm.authority.value = '<?php echo $_POST['authority']?>';
			if(document.sampleForm.authority.value == 1)
			{
				document.getElementById("mySidenav").style.visibility = "visible";	
				document.getElementById("fo1").style.width = "0";
				document.getElementById("fo1").style.height = "0";
				document.getElementById("fo1").style.visibility = 'hidden';
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
				document.getElementById("mySidenav").style.width = "300px";
				document.getElementById("mySidenav").style.height = "100%";
				document.getElementById("cons1").style.visibility = 'visible';
				document.getElementById("cons").style.visibility = 'hidden';
			}
			if(document.sampleForm.authority.value == 2)
			{
				document.getElementById("mySidenav").style.visibility = "visible";	
				document.getElementById("fo1").style.width = "0";
				document.getElementById("fo1").style.height = "0";
				document.getElementById("fo1").style.visibility = 'hidden';
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
			    document.getElementById("mySidenav").style.width = "300px";
				document.getElementById("mySidenav").style.height = "100%";
				document.getElementById("cons1").style.visibility = 'visible';
				document.getElementById("cons").style.visibility = 'hidden';
			}
			if(document.sampleForm.authority.value == 3)
			{
				document.getElementById("mySidenav").style.visibility = "visible";	
				document.getElementById("fo1").style.width = "0";
				document.getElementById("fo1").style.height = "0";
				document.getElementById("fo1").style.visibility = 'hidden';
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
				document.getElementById("manageropen").style.width = "";
				document.getElementById("manageropen").style.height = "";
				document.getElementById("manageropen").style.visibility = 'visible';
			    document.getElementById("mySidenav").style.width = "300px";
				document.getElementById("mySidenav").style.height = "100%";
				document.getElementById("cons1").style.visibility = 'visible';
				document.getElementById("cons").style.visibility = 'hidden';
			}
			
			
			
		</script>
		
		<script type="text/javascript">
	function disconnect() {
		document.sampleForm.authority.value = 0;
		document.forms["sampleForm"].submit();
	}
	
	function gotoIndex() {
		document.forms["sampleForm"].submit();
	}
			
	function conConfirm() {
		var user = document.getElementById('user').value;
		var password = document.getElementById('password').value;
		var c_user = '';
		var c_password = '';
		
		var options = document.getElementById('usernames').getElementsByTagName('option');
		i = 0; j = 1;
		
		for (i; i < options.length; i += 2) {
			if(options[i].value == user)
			{
				c_user = '1';
				if(options[j].value == password)
				{
					c_password = '1';
					if(options[i].value == 'tomech')
					{
						document.getElementById("mySidenav").style.visibility = "visible";	
						document.getElementById("fo1").style.width = "0";
						document.getElementById("fo1").style.height = "0";
						document.getElementById("fo1").style.visibility = 'hidden';
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
						document.getElementById("mySidenav").style.width = "300px";
						document.getElementById("mySidenav").style.height = "100%";
						document.sampleForm.authority.value = 1;
						document.getElementById("cons1").style.visibility = 'visible';
						document.getElementById("cons").style.visibility = 'hidden';
					}
					if(options[i].value == 'tech')
					{
						document.getElementById("mySidenav").style.visibility = "visible";	
						document.getElementById("fo1").style.width = "0";
						document.getElementById("fo1").style.height = "0";
						document.getElementById("fo1").style.visibility = 'hidden';
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
						document.getElementById("mySidenav").style.width = "300px";
						document.getElementById("mySidenav").style.height = "100%";
						document.sampleForm.authority.value = 2;
						document.getElementById("cons1").style.visibility = 'visible';
						document.getElementById("cons").style.visibility = 'hidden';
					}
					if(options[i].value == 'manager')
					{
						document.getElementById("mySidenav").style.visibility = "visible";	
						document.getElementById("fo1").style.width = "0";
						document.getElementById("fo1").style.height = "0";
						document.getElementById("fo1").style.visibility = 'hidden';
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
						document.getElementById("manageropen").style.width = "";
						document.getElementById("manageropen").style.height = "";
						document.getElementById("manageropen").style.visibility = 'visible';
						document.getElementById("mySidenav").style.width = "300px";
						document.getElementById("mySidenav").style.height = "100%";
						document.sampleForm.authority.value = 3;
						document.getElementById("cons1").style.visibility = 'visible';
						document.getElementById("cons").style.visibility = 'hidden';
					}
				}
			}
			j += 2;
		}
		
		if(c_user != '1')
		{
			alert("User not found!");
		}
		else
		{
			if(c_password != '1')
				{
					alert("Password incorrect!");
				}
		}
	}
	</script>
	<script>
	function connect() {
		document.getElementById("mySidenav").style.width = "300px";
		document.getElementById("mySidenav").style.height = "160px";
		document.getElementById("mySidenav").style.paddingLeft = "10px";
	}
	
	function openNav() {
		document.getElementById("mySidenav").style.width = "300px";
		document.getElementById("mySidenav").style.height = "100%";
	}
	
	function closeconNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("mySidenav").style.paddingLeft = "0";
	}
	</script>

	<br>
	<br>
	<br>
	<br>
	
<div id="lastCallD">
	<h1>תקלות אחרונות</h1>
	<div id="lastCalls">
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
				
				$query = "SELECT * FROM submits order by queryId desc";
		
				$result = mysqli_query($conn, $query);
				
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					echo "<div class='call'>";
					echo " <p><label><input id='thQueryId".$row{'queryId'}."' type='checkbox' class='radio' value='".$row{'queryId'}."' name='mobil[1][]' class='radi' style='display: none;'/><font size='5' color='blue' style='cursor: pointer;'>".$row{'queryId'}."</font></label><br>";
					if($row{'opened'} == "1") {
						echo "סטאטוס תקלה: פתוח<br>";
						}
					else {	
						echo "סטאטוס תקלה: סגור<br>";
						}
					echo " לקוח:" . $row{'callerName'} . " <br>";
					echo "טלפון: " . $row{'callerNumber'} . " <br>";
					echo "שם חברה: " . $row{'companyName'} . " <br>";
					echo "</p>";
					echo "</div>";
				}
			
				mysqli_close($conn);
			
			?>
	</div>
</div>

<br>
<div class="footer" style="margin-bottom:0">
</div>

<script type="text/javascript">
	$(function() {
		$("input:checkbox").on('click', function() {
			// in the handler, 'this' refers to the box clicked on
			var $box = $(this);
			
			if ($box.is(":checked")) {
				var authority = document.sampleForm.authority.value;
				
				if((authority == 1) || (authority == 2) || (authority == 3))
				{
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
				else{
					alert("You Must Login First!");
				}
			}
		});
	});
</script>

</body>
</html>
