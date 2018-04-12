<html>

<head>
<meta charset = "UTF-8">

<link rel = "stylesheet" type = "text/css"href = "style.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="script.js"></script>

<title>Fetch</title>

<?php
if ($_GET['throw']) {
  exec("/path/to/name.sh");
}
if ($_GET['dispense']) {
  exec("/path/to/name.sh");
}
if ($_GET['auto']) {
  exec("/path/to/name.sh");
}
if ($_GET['init']) {
  exec("/path/to/name.sh");
}
?>

</head>


<body>

	<div id="video_div">
		<iframe id="video" 	align="middle" src="http://localhost:8081/"></iframe>
	</div>

	<div id="controls">
		<div id="slider_div" class="slidecontainer">
		  <input type="range" min="1" max="100" value="50" class="slider" id="interval_slider">
			<div id="output"></div>
		</div>

		<div id="buttons">
			<button id="throw" href="?throw=true" class="button toggle">Throw Ball</button>
			<button id="dispense" href="?dispense=true" class="button toggle">Dispense Treat</button>
			<button id="auto" href="?auto=true" class="button toggle grey">Auto: Off</button>
		</div>

	</div>


</body>

</html>
