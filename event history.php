<!--A Design  by Gaurav, Karan and Neha
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Entrepreneurship Club at University of Florida</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
		<!-- Start Header -->
		<?php include('header.php'); ?>

		<div class="main">
			<!-- start content_left  -->
			<div class="content_left">
				<div class="blog_main">
					<h1 class="blog">E-Club Events</h1>
					<p><br/></p>
					<?php 
						$schedule_type = 'past';
						$type = 'eclub';
						include('schedule.php'); 
					?>
				<div class="blog_main1">
					<h1 class="blog">Local Events</h1>
					<p><br/></p>
					<?php 
						$schedule_type = 'past';
						$type = 'local';
						include('schedule.php'); 
					?>
				</div>
				</div>
			</div>

			<!-- Start Sidebar -->
			<?php include('sidebar.php'); ?>
		</div>

		<!-- start Footer  -->
		<?php include('footer.php'); ?>

	</body>
</html>
