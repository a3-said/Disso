<?php
	session_start();
	//include 'includes/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Chess Lovers</title>
	<body>
    <img src="image8.png" alt="Image" class="small-image">
</body>
</head>

<!-- <body>
	<header>
		<div id="loginBar">
		 <?php
				if(isset($_SESSION['UserID'])) {
					echo '<form action="includes/logout.php" method="post">
						<button class="topButton" type="submit" name="logout-button">Log Out</button>
						</form>';
				} else {
					echo '<form><button class="topButton" type="submit" name="Register-button" formaction="login.php">Log In | Register</button></form>';
				}
			?> 
		</div> -->


		<h1 id="Title">Chess Lovers</h1>

		<div id="navigationBar">
			<ul id="navigation">
				<li class="navigationList"><a id="selected" class="nav" href="Home.php">Home</a></li>
				<li class="navigationList"><a class="nav" href="gameofchess.php">Game of Chess</a></li>
				<li class="navigationList"><a class="nav" href="discussion.php">Discussion</a></li>
				<li class="navigationList"><a class="nav" href="signin.php">Register</a></li>
			</ul>
		</div>
	</header>

<div class="page">
    <h2 class="heading"></h2>
    <?php
        // Database query to fetch chess-related content
        $sql = "SELECT * FROM chess_guides ORDER BY DateUploaded DESC LIMIT 3;";
        //$result = mysqli_query($connection, $sql);
       // $resultCheck = mysqli_num_rows($result);

        // Check if there are any results
       //// if ($resultCheck > 0) {
            // Loop through each fetched row
        //    while ($row = mysqli_fetch_assoc($result)) {
                // Display chess-related information
          //      echo '<a class="clickableLink" href="guideDetails.php?guideID='.$row['ID'].'">
             //       <div class="GuideResult">
             //           <h2 class="guideTitle">'.$row['GuideTitle'].'</h2>
             //           <p>'.$row['Description'].'</p>
                //    </div>
             //   </a>';
        //    }
      //  }
    ?> 
</div>
	<footer class="footer">
		<!-- Footer content -->
	</footer> 

</body>

</html>
