<?php include('head.php'); ?>
	<title>Money Conversion | Come To Natal</title>
</head>
<body>
	<div id="content">
		
		<?php include('navbar.php'); ?>
		
		<div class="row">
			<div class="col-12">		
				<main>
					<?php include('submenu2.php'); ?>
					<h1>Money Conversion - USD to BRL</h1>
					<div class="row">
						<div class="col-12">

							<p>Here is a money conversor from dollars to reais and vice versa that can be very useful if you're coming to Natal or any other city in Brazil!</p>

							<form name="money1">
								<p>USD: <input type="text" id="usd1"></p>
								<p>BRL: R$ <span id="brl1"></span></p>
								<p><input type="button" value="Convert" onclick="moneyConversion1()"></p>
							</form>

							<form name="money2">
								<p>BRL: <input type="text" id="brl2"></p>
								<p>USD: $ <span id="usd2"></span></p>
								<p><input type="button" value="Convert" onclick="moneyConversion2()"></p>
							</form>
						</div>
					</div>
				</main>
			</div>
		</div>
<?php include('footer.php'); ?>