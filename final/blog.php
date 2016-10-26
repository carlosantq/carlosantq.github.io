<?php include('head.php'); ?>
	<title>Blog | Come To Natal</title>
</head>
<body>
	<div id="content">
		
		<?php include('navbar.php'); ?>
		
		<div class="row">
			<div class="col-12">		
				<main>
					<div class="row">
						<div class="col-12">
							<h1>Blog</h1>

							<p>
								Leave your feedback about our site! We are open to suggestions, critics and everything else that you wanna tell us!
								Just leave a comment on the form below:
							</p>

							<form action="blog.php" name="blog" onsubmit="return validateForm();" method="POST">
								<p>Name:</p><input type="text" name="name">
								<p>Comment: </p><textarea rows="5" name="comment" cols="50"></textarea>
								<p><input type="submit" value="Submit" src="button" alt="submit"> </p>
							</form>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<h1>Comments</h1>

							<?php

							    // Identify the server information
							    $servername = "mysql9.000webhost.com";
							    $username = "a3869306_carlos"; // better to prompt the user for this
							    $password = "senha123"; // prompt the user for this too of course
							    $dbname = "a3869306_test"; // the database name is your username on this server


							    // Grab the user input from form if it exists
							    $name = $_POST['name'];
							    $comment = $_POST['comment'];

							    //Check if name and/or comment is empty
							    if ((empty($name) && empty($comment)) == FALSE){
								    // Name and comment are good, put them in the database
								    $conn = new mysqli($servername, $username, $password, $dbname);
								    // Check connection
								    if ($conn->connect_error) {
								    	die("Connection failed: " . $conn->connect_error);
								    }
								    
								    $insert = "INSERT INTO commentsProject (id, name, comment)
								        	VALUES (NULL , '". $name ."', '". $comment . "');";
								        
								    $result = $conn->query($insert);

								    //Redirects to the same page, preventing the form to be sent again when the page is refreshed
								    header('Location: '.$_SERVER['PHP_SELF']);
								}
							    // Create a connection to the server
							    $conn = new mysqli($servername, $username, $password, $dbname);

							    // Check connection
							    if ($conn->connect_error) {
							        die("Connection failed: " . $conn->connect_error);
							    } 

							    // Create a query string
							    $sql = "SELECT id, name, comment FROM commentsProject";

							    // Execute your query on the server connection
							    $result = $conn->query($sql);

							    // Check to see if results were found
							    if ($result->num_rows > 0) {
							        while($row = $result->fetch_assoc()) {
							            echo "<p>" . $row["name"] . " - ";
							            echo $row["comment"] . "</p>";
							        }
							    }else {
							        echo "<p>There are no comments.</p>";
							    }

							    // close the connection to the database on the server

							    //header('Location: '.$_SERVER['PHP_SELF']);

							    $conn->close();
							?>

						</div>
					</div>
				</main>
			</div>
		</div>
<?php include('footer.php'); ?>