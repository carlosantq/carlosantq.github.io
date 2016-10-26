<?php
	echo "<h3> CULTURE > ";
	echo "<span id=";
	echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/nature.php' ? 'active2' :  '');
	echo "><a href='nature.php'>nature</a></span> | ";
	echo "<span id=";
	echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/food.php' ? 'active2' :  '');
	echo "><a href='food.php'>food</a></span> | ";
	echo "<span id=";
	echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/music.php' ? 'active2' :  '');
	echo "><a href='music.php'>music</a></span> | ";
	echo "<span id=";
	echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/art.php' ? 'active2' :  '');
	echo "><a href='art.php'>art</a></span></h3>";
?>