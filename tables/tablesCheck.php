<?php
	if (isLoggedIn()){
		echo '<a href="registration_successful.php">';
	} else {
		echo '<a href="registration_unsuccessful.php">';
	}
?>
