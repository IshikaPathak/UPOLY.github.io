<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
        <title>App1</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"rel="stylesheet"/>
		<link rel="stylesheet" href="app1.css">
    </head>
	<body>
		<main class="main">
			<div class="sidebar">
				<div class="nav">
					<a class="nav-link" href="#">
					<span class="material-icons-outlined" style="position:relative; vertical-align:middle;
                    display: relative;
                    color: black;
                    text-decoration: none;"> home</span>	Home
					</a>
					<a class="nav-link " href="academiccalendar.pdf">
					<span class="material-icons-outlined" style="vertical-align:middle; position:relative;
                    display: relative;
                    color: black;
                    text-decoration: none;">
                    event_available</span>
					Academic Calendar
					</a>
					<a class="nav-link " href="instituevision.pdf">
					<span class="material-icons-outlined" style="position:relative;vertical-align:middle;
                    display: relative;
                    color: black;
                    text-decoration: none;">
                    verified</span>Institute Mission
					</a>
					<a class="nav-link " href="Holidaylist.pdf"><span class="material-icons-outlined" style="position:relative; vertical-align:middle;
                     display: relative;
                     color: black;
                     text-decoration: none;">
                    assignment_turned_in</span>Holiday List
					</a>
					<a class="nav-link " href="Feestructure.pdf">
					<span class="material-icons-outlined" style="position:relative; vertical-align:middle;
    display: relative;
    color: black;
    text-decoration: none;">
                    price_check</span>Fee structure
					</a>
					<p class="nav-l">_____________________</p>
					<a class="nav-link " href="facultydetails.pdf">
					<span class="material-icons-outlined" style="position:relative; vertical-align:middle;
    display: relative;
    color: black;
    text-decoration: none;">
                    person_pin</span>	Faculty Details
					</a>
					<a class="nav-link " href="contactdetails.html"><span class="material-icons-outlined" style="position:relative; vertical-align:middle;
    display: relative;
    color: black;
    text-decoration: none;">
                    contacts</span>Contact Details
					</a>
					<a class="nav-link " href="overview.pdf"><span class="material-icons-outlined" style="position:relative; vertical-align:middle;
    display: relative;
    color: black;
    text-decoration: none;">
                     summarize</span>
						Institute Overview
					</a>
					<p class="nav-l">_____________________</p>
					
					<a class="nav-link " href="picture.html">
					<span class="material-icons-outlined" style="position:relative; vertical-align:middle;
    display: relative;
    color: black;
    text-decoration: none;">
                    collections</span>Picture Gallery
					</a>
				</div>
			</div>
			<div class="content">
            <div class="container mt-3 mb-3">
		<hr/>
				<a href="upload.php" class="btn btn-primary mt-3">Upload a New Video</a>
				<hr/>
		<div class="row">
				<?php
				include("db.php");
					
				$q = "SELECT * FROM video";

				$query = mysqli_query($conn,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['name'];
					?>

					<div class="col-md-4">
						<video width="100%" controls>
<source src="<?php echo 'upload/'.$name;?>">
</video>
					</div>

				<?php }
?>
</div>
				</div>

			</div>
		</main>

		</body>
		</html>