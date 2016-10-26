<?php
	echo "<h3> DAILY LIFE > ";
	echo "<span id=";
	echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/school.php' ? 'active2' :  '');
	echo "><a href='school.php'>school life</a></span> | ";
	echo "<span id=";
	echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/night.php' ? 'active2' :  '');
	echo "><a href='night.php'>night life</a></span> | ";
	echo "<span id=";
	echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/beaches.php' ? 'active2' :  '');
	echo "><a href='beaches.php'>beaches</a></span> | ";
	echo "<span id=";
	echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/shopping.php' ? 'active2' :  '');
	echo "><a href='shopping.php'>shopping</a></span> | ";
	echo "<span id=";
	echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/money.php' ? 'active2' :  '');
	echo "><a href='money.php'>money conversion</a></span></h3>";
?>