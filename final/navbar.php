<?php
echo <<< END
<div class="row">
			<div class="col-12">
				<navbar>	
					<div class="col-5">
						<ul>
END;
							echo "<li id='";
							echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/index.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/blog.php' ? 'active' : '');
							echo "'><a href='index.php'>HOME</a></li>";

							echo "<li id='";
							echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/history.php' ? 'active' : '');
							echo "'><a href='history.php'>HISTORY</a></li>";
echo <<< END
						</ul>
					</div>

					<div class="col-2">
						<img src="assets/images/natal.png" alt="logo">
					</div>

					<div class="col-5">
						<ul>
END;
							echo "<li id='";
							echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/culture.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/food.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/music.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/nature.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/art.php' ? 'active' : '');
							echo "'><a href='culture.php'>CULTURE</a></li>";
							
							echo "<li id='";
							echo ($_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/dailylife.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/school.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/night.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/beaches.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/shopping.php' | $_SERVER['PHP_SELF'] == '/~cxd5393/ISTE240/final/money.php' ? 'active' : '');
							echo "'><a href='dailylife.php'>DAILY LIFE</a></li>";

echo <<< END
						</ul>
					</div>
				</navbar>
			</div>
		</div>
END;
?>