
<?php
	if(isset($_POST["gt"])){
		// Set the cookie for immediate access by gt_lookup
		setcookie("gamertag", $_POST["name"], time()+3600);
		$_COOKIE["gamertag"] = $_POST["gt"];
	}
	echo $_COOKIE["gamertag"];
?>