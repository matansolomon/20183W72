<!DOCOTYPE html>
<html>
<head>
<title> פתיחת תקלה </title>
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
		document.getElementById("mySidenav").style.width = "0";
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
				document.getElementById('Kb').style.width = '0';
				document.getElementById('Kb').value = '';
				document.getElementById('Kb').style.visibility = 'hidden';
			} else {
				if($box.prop("value") == "4"){
					document.forms["form1"].submit();
				}
				else{
					if($box.prop("value") == "1"){
						document.getElementById('Kb').style.visibility = 'visible';
						document.getElementById('Kb').style.width = '100%';
						document.getElementById('Kb').value = 'יש לוודא חיבור כבל חשמל שחור מחובר מאחורי הסטרימר.\nאם כבל מחובר, יש לחפש את השנאי של הסטרימר, אמור להיות עליו מנורה ירוקה/אדומה.\nאם מנורה לא דולקת יש לוודא כבל חשמל קומקום מחובר באופן תקין לשנאי.\nבמידה ומחובר תקין להדק, ולוודא שמחובר לשקע.\nאם מחובר לשקע יש לנסות להחליף לשקע חשמל אחר.\nאם ממשיך - החלפת ספק בעזרת טכנאי.';
					}
					else{
						if($box.prop("value") == "2"){
							document.getElementById('Kb').style.visibility = 'visible';
							document.getElementById('Kb').style.width = '100%';
							document.getElementById('Kb').value = 'יש לבצע אתחול חשמלי לראוטר/נתב, וכן לסטרימר.\nלהמתין מספר דקות לעלייה. לאחר התחברות מחודשת לבדוק שוב כעבור שעה.\nאם ניתוקים ממשיכים - העברה לחברת האינטרנט לטיפול.\nבנתיים עד לתיקון ניתן לנתק כבל רשת של הסטרימר על מנת שלא יהיו קפיצות במוזיקה.';
						}
						else{
							if($box.prop("value") == "5"){
								document.getElementById('Kb').style.visibility = 'visible';
								document.getElementById('Kb').style.width = '100%';
								document.getElementById('Kb').value = 'יש לוודא כבל LAN מחובר לסטרימר, אם הוא מחובר אך נורות לא דולקות בכניסת LAN ככל הנראה מנותק מהצד השני.\nיש לחפש את הצד השני ולוודא שמחובר למודם/ראוטר.\nאם מחובר לשקע רשת, יש למצוא את השקע בצד השני (לרוב נמצא במחסן), ולוודא שממנו יש חיבור לראוטר/נתב.\nאם מחובר לראוטר/נתב יש לוודא שהם מחוברים לאינטרנט.\nאם מחובר ונורות דולקות בסטרימר יש לוודא נורת INTERNET דולקת בראוטר, אם לא - הפניה לחברת האינטרנט.\nאם כבל רשת מחובר בשתי הקצוות אך עדיין נורות לא נדלקות - יש להחליף כבל רשת.';
							}
							else{
								document.getElementById('Kb').style.width = '0';
								document.getElementById('Kb').value = '';
								document.getElementById('Kb').style.visibility = 'hidden';
								document.getElementById("myTechSidenav").style.visibility = "hidden";
								openCalendar.style.visibility = 'hidden'; 		// if checked, hide button
								openCalendar.style.width = '0';
								openCalendar.style.height = '0';
								document.getElementById("tech01").innerHTML = "";
							}
						}
					}
				}
			}
		} else {
			$box.prop("checked", false);
			if ($box.prop("value") == "3") {
				openCalendar.style.visibility = 'hidden'; 		// if checked, hide button
				openCalendar.style.width = '0';
				openCalendar.style.height = '0';
				document.getElementById("tech01").innerHTML = "";
			}
			else{
				document.getElementById('Kb').style.width = '0';
				document.getElementById('Kb').value = '';
				document.getElementById('Kb').style.visibility = 'hidden';
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
	<h2 style="margin-top:-15px">פתיחת תקלה</h2>
	</div>

	<div id="mySidenav" class="sidenav" style="width: 0;">
		<a id="ex" style="float:left;" href="javascript:void(0)" class="closebtn" onclick="closeconNav()">&times;</a>
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

	<div id="issueForm" class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2>פתיחת תקלה:</h2>
				<form action="postIssue.php" method="post" id="form1">
					<input type="hidden" name="authority" id="authority" value="<?php echo $_POST['authority'];?>">
					<input name="hiddenField1" style="margin-right:50px;" id="hiddenField1" disabled/>
					<input type="hidden" name="hiddenField2" id="hiddenField2"/>
					<script>script();</script>
					<h3>שם מלא: </h3>
					<input id="callerFullName" style="margin-right:50px;" type="text" name="callerFullName">
					<br>
					<h3>שם חברה: </h3>
					<select id="companyNameList" style="margin-right:50px;width:175px;height:25px;" list="companies" name="companyNameList">
					<datalist id="companies">
						<?php 
							DEFINE ('DB_USER', 'matanso');
							DEFINE ('DB_PASSWORD', 'pVUZVkA(l$Gf');
							DEFINE ('DB_HOST', 'Localhost');
							DEFINE ('DB_NAME', 'matanso_Sadna');
							
							$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
							OR die('Could not connect to MySQL: ' .
							mysqli_connect_error());
						
							session_start();
							
							$query = "SELECT Name FROM `companies` group by Name";
		
							$result = mysqli_query($conn, $query);
								
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
								echo "<option>" . $row{'Name'} . "</option>";
							}
						
							mysqli_close($conn);
						
						?>
					</datalist>
					</select>
					<br>
					<h3>מייל: </h3>
					<input id="companyBranchList" style="margin-right:50px;" name="companyBranchList" type="email" placeholder="Enter your email">
					<br>
					<h3>טלפון: </h3>
					<input id="telNumber" style="margin-right:50px;" type="text" name="telNumber">
					<br>
					<h3>תיאור פתיחת התקלה:</h3><br>
					<textarea id="issueText" style="width:600px; height:300px;margin-right:50px;" name="issueText"></textarea>
					<br>
					<div class="radio" style="width:30%;float:right;">
						<h3>בעיות נפוצות:</h3>
						<label><input id="optionsRadios1" style="margin-right:50px;" type="checkbox" class="radio" value="1" name="mobil[1][]">סטרימר לא נדלק</label><br>
						<label><input id="optionsRadios2" style="margin-right:50px;" type="checkbox" class="radio" value="2" name="mobil[1][]">ניתוקים במוזיקה</label><br>
						<label><input id="optionsRadios5" style="margin-right:50px;" type="checkbox" class="radio" value="5" name="mobil[1][]">מוזיקה מתנגת אך לא מחוברת לרשת</label><br>
						<label><input id="optionsRadios3" style="margin-right:50px;" type="checkbox" class="radio" value="3" name="mobil[1][]">נדרש טיפול נוסף בעזרת טכנאי שטח</label><br>
						<a id="btnOpenCalendar" style="visibility: hidden; width: 0; height: 0;margin-right:170px;" href="javascript:void(0)" class="closebtn" onclick="openCalendar()">Open Calendar</a><br>
						<div style="height: 100px;" id="event-response"></div>
					</div>
					<br>
					<br>
					<br>
					<div style="width:27%;float:right;">
						<textarea id="Kb" style="visibility:hidden;height: 100px;width:0;" name="Kb"></textarea>
					</div>
					<h3 id="tech01" style="visibility: hidden; width: 0; height: 0;" ></h3>
					<br>
					<br>
					<br>
					<br>
					<br>
					<label style="margin-left:50%; float: left;"><input id="thQueryId" type="checkbox" class="radio" value="4" name="mobil[1][]" style="display: none;"><font size="5" color="blue" style="cursor: pointer;text-align: center; vertical-align: middle; border: 1px solid black; border-radius: 5px; padding: 3px;">פתיחת תקלה</font></label>
				</form>
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
					
	<br>
	<br>


	<script type="text/javascript">
        // date variables
        var now = new Date();
        today = now.toISOString();
		
		var hiddenField2 = document.getElementById("hiddenField1").value
		var eventId = '';
		var fromInput;
		var toInput;
		
        var twoHoursLater = new Date(now.getTime() + (2 * 1000 * 60 * 60));
        twoHoursLater = twoHoursLater.toISOString();

        // Google api console clientID and apiKey 
        var clientId = '941242941637-7p2flj4ek9dkr5hsne83qq5kcijpq8k0.apps.googleusercontent.com';
        var apiKey = 'AIzaSyASUNzENtSrAdhwNZeBVi6i1JJraH37mzQ';

        // enter the scope of current project (this API must be turned on in the Google console)
        var scopes = 'https://www.googleapis.com/auth/calendar';

        // OAuth2 functions
        function handleClientLoad() {
            gapi.client.setApiKey(apiKey);
            window.setTimeout(checkAuth, 1);
        }

        function checkAuth() {
            gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: true }, handleAuthResult);
        }
		
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
			
        // show/hide the 'authorize' button, depending on application state
        function handleAuthResult(authResult) {
            var authorizeButton = document.getElementById('authorize-button');
            var eventButton = document.getElementById('btnCreateEvents');
            var resultPanel = document.getElementById('result-panel');
            var resultTitle = document.getElementById('result-title');

            if (authResult && !authResult.error) {
                authorizeButton.style.visibility = 'hidden'; 		// if authorized, hide button
				authorizeButton.style.width = '0';
				authorizeButton.style.height = '0';
                resultPanel.className = resultPanel.className.replace(/(?:^|\s)panel-danger(?!\S)/g, '')	// remove red class
                resultPanel.className += ' panel-success'; 			// add green class
                resultTitle.innerHTML = 'Application Authorized'		// display 'authorized' text
                $("#txtEventDetails").attr("visibility", "visible");
            } else {													// otherwise, show button
                authorizeButton.style.visibility = 'visible';
				authorizeButton.style.width = '';
				authorizeButton.style.height = '';
                $("#txtEventDetails").attr("visibility", "hidden");
                resultPanel.className += ' panel-danger'; 			// make panel red
                authorizeButton.onclick = handleAuthClick; 			// setup function to handle button click
            }
        }

        // function triggered when user authorizes app
        function handleAuthClick(event) {
            gapi.auth.authorize({ client_id: clientId, scope: scopes, immediate: false }, handleAuthResult);
            return false;
        }

        function refreshICalendarframe() {
            var iframe = document.getElementById('divifm')
            iframe.innerHTML = iframe.innerHTML;
        }
        // setup event details
        
        // function load the calendar api and make the api call
        function makeApiCall() {
            var eventResponse = document.getElementById('event-response');
			fromInput = new Date(document.getElementById('fromInput').value);
			console.log(fromInput);			
			toInput = new Date(document.getElementById('toInput').value);
			console.log(toInput);
			var resource = {
				"summary": "ISSUE#" + hiddenField2,
				"start": {
					"dateTime": fromInput
				},
				"end": {
					"dateTime": toInput
				},
				"description":"We are organizing events",
				"location":"ISRAEL",
				"attendees":[
				],
			};
			setTimeout(function(){
				setTimeout(function(){
					gapi.client.load('calendar', 'v3', function () {					// load the calendar api (version 3)
						var request = gapi.client.calendar.events.insert
						({
							'calendarId': 'yoniel23@gmail.com', // calendar ID
							'resource': resource							// pass event details with api call
						});
						
						// handle the response from our api call
						request.execute(function (resp) {
							if (resp.status == 'confirmed') {
								eventResponse.innerHTML = "Event created successfully. View it <a href='" + resp.htmlLink + "'>online here</a>.";
								eventResponse.className += ' panel-success';
								console.log('Event updated successfully' );
								refreshICalendarframe();
							} else {
								document.getElementById('event-response').innerHTML = "There was a problem. Reload page and try again.";
								console.log('Event failed' );
								eventResponse.className += ' panel-danger';
							}
						});
					});
				}, 200);
				
				setTimeout(function(){
					fromInput = fromInput.toISOString();
					toInput = toInput.toISOString();
					gapi.client.load('calendar', 'v3', function() {
						var request = gapi.client.calendar.events.list({
						'calendarId': 'yoniel23@gmail.com',
							"singleEvents": true,
							'timeMin': fromInput, //2018-08-19T00:00:00-01:00
							'timeMax': toInput //2018-08-19T00:00:00-01:00
						});
						request.execute(function(resp) {
							for (var i = 0; i < resp.items.length; i++) {
									var event = resp.items[i]; 
									console.log(event);
									console.log(event['id']);
							};
							eventId = event['id'];
						});
					});
				}, 3000);
			}, 100);
        }

		// FUNCTION TO DELETE EVENT
	   function deleteEvent() {
			fromInput = new Date(document.getElementById('fromInput').value);
			fromInput = fromInput.toISOString();
			console.log(fromInput);			
			toInput = new Date(document.getElementById('toInput').value);
			toInput = toInput.toISOString();
			console.log(toInput);
			
			setTimeout(function(){
				gapi.client.load('calendar', 'v3', function() {
					var request = gapi.client.calendar.events.list({
					'calendarId': 'yoniel23@gmail.com',
						"singleEvents": true,
						'timeMin': fromInput, //2018-08-19T00:00:00-01:00
						'timeMax': toInput //2018-08-19T00:00:00-01:00
					});
					setTimeout(function(){
						request.execute(function(resp) {
							for (var i = 0; i < resp.items.length; i++) {
									var event = resp.items[i]; 
									console.log(event);
									console.log(event['id']);
							};
							eventId = event['id'];
						});
					}, 100);	
				});
			}, 200);
			
			setTimeout(function(){
				gapi.client.load('calendar', 'v3', function() {  
					var request = gapi.client.calendar.events.delete({
						'calendarId': 'yoniel23@gmail.com',
						'eventId': eventId
					});
					request.execute(function(resp) {
						if (resp.status == null) {
							console.log("Event was successfully removed from the calendar!");
							refreshICalendarframe();
						}
						else{
							console.log('An error occurred, please try again later.')
						}
					});
				});
			}, 400);
		}
	   
	   function getEventID(date1, date2) {
			if(date1 == null)
			{
				date1=new Date(document.getElementById('fromInput').value);
				date1=date1.toISOString();
				date2=new Date(document.getElementById('toInput').value);
				date2=date2.toISOString();
			}
			gapi.client.load('calendar', 'v3', function() {
                var request = gapi.client.calendar.events.list({
                   'calendarId': 'yoniel23@gmail.com',
                    "singleEvents": true,
                    'timeMin': date1, //2018-08-19T00:00:00-01:00
                    'timeMax': date2 //2018-08-19T00:00:00-01:00
                });
                request.execute(function(resp) {
					for (var i = 0; i < resp.items.length; i++) {
							var event = resp.items[i]; 
							console.log(event);
							console.log(event['id']);
					};
					eventId = event['id'];
				});
            });
		}
 
		function submitQuery() {
			var queryId=document.getElementById("hiddenField1").value;
			var callerName=document.getElementById("callerFullName").value;
			var companyName=document.getElementById("companyNameList").value;
			var companyBranch=document.getElementById("companyBranchList").value;
			var callerNumber=document.getElementById("telNumber").value;
			var issueText=document.getElementById("issueText").value;
			
			if((callerName != "") && (companyName != "") && (callerNumber != "") && (companyBranch != "") && (issueText != ""))
			{
				document.getElementById("submitForm").disabled = false;
			}
		}
		
		$('#hiddenField1').on('input',function(e){
			submitQuery();
		});
		$('#callerFullName').on('input',function(e){
			submitQuery();
		});
		$('#companyNameList').on('change',function(e){
			// in the handler, 'this' refers to the box clicked on
			var companyNameList = document.getElementById('companyNameList').value;
			
			if (companyNameList != null) {
				document.getElementById("companyBranchList").disabled = false;
			}
			else
			{
				document.getElementById("companyBranchList").value = '';
				document.getElementById("companyBranchList").disabled = true;
			}
			submitQuery();
		});
		$('#companyBranchList').on('input',function(e){
			submitQuery();
		});
		$('#telNumber').on('input',function(e){
			submitQuery();
		});
		$('#issueText').on('input',function(e){
			submitQuery();
		});
				
		</script>
    <script src="https://apis.google.com/js/client.js?onload=handleClientLoad" type="text/javascript"></script>
</body>
</html>
