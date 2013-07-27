<?php
session_start();
?>

<html>
<head>

<title>MP</title>
<script type="text/javascript" src="./js/jquery-1.4.2.js"></script>
<script type='text/javascript' src="./js/jquery.autocomplete.js"></script>

<link rel="stylesheet" href="styles/bootstrap-responsive.css" media="screen" />
<link rel="stylesheet" href="styles/bootstrap.css" media="screen" /><!--added for bootstrap-->
<link rel="stylesheet" href="css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery.autocomplete.css" />

<script type="text/javascript">
$().ready(function() {
	$("#state").autocomplete("autoCompleteMain.php", {
		width: 150,
		matchContains: true,
		//mustMatch: true,
		//minChars: 0,
		//multiple: true,
		//highlight: false,
		//multipleSeparator: ",",
		selectFirst: false
	});
});
</script>
</head>
<body>
<h2 id="banner">Autocomplete using jQuery, Ajax, PHP</h1>
<div id="content">
	<form action="myprocess22.php" method="post" autocomplete="on">
		<p>
			Enter State Name <label>:</label>
			<input type="text" name="state" id="state" />
		</p>
		<input type="submit" value="Submit" />
		
	</form>
</div>
</body>
</html>
