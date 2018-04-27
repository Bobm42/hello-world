<html>
<head>
<title>Search</title>
<link rel="stylesheet" type="text/css" href="css/data.css">
<script>
function goBack() {
	window.history.back();
}

function myFunction() {
    var d = new Date();
    var n = d.getDate();
	var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
	var da = weekday[d.getDay()];
	var month = new Array();
	month[0] = "January";
	month[1] = "February";
	month[2] = "March";
	month[3] = "April";
	month[4] = "May";
	month[5] = "June";
	month[6] = "July";
	month[7] = "August";
	month[8] = "September";
	month[9] = "October";
	month[10] = "November";
	month[11] = "December";
	var m = month[d.getMonth()];
	var y = d.getFullYear();
    document.getElementById("demo").innerHTML = n;
	document.getElementById("demod").innerHTML = da;
	document.getElementById("demom").innerHTML = m;
	document.getElementById("demoy").innerHTML = y;
	document.getElementById("dem").innerHTML = d;
}

function ramdon() {
	window.location.reload();
}

</script>
</head>
<body>


<h1>Search</h1>

<?php


if ($_SERVER ['REQUEST_METHOD'] == "POST") {
	if (!empty($_POST['sqlhappen1'])) {
	include 'sqlhappen1.php';
} elseif (!empty($_POST['sqlhappen2'])) {
	include 'sqlhappen2.php';
} elseif (!empty($_POST['sqlhappen3'])) {
	include 'sqlhappen3.php';
} else {
	echo "no selection made";
}
}

?>

<button onclick="ramdon()">Refresh</button> 

<button onclick="goBack()">Back</button>

<button onclick="myFunction()">Day today</button>
<p id="demod" >+<p id="demo">+<p id="demom">+<p id="demoy"></p>

<p id="dem"></p>

</body>
</html>
