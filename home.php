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
					<!-- Start eClub Schedule -->
					<?php 
						$schedule_type = 'upcoming';
						$type = 'eclub';
						include('schedule.php'); 
					?>

				</div>
				<div class="blog_main1">
					<h2 class="blog">Other Events</h2>

					<!-- Start local Schedule -->
					<?php 
						$schedule_type = 'upcoming';
						$type = 'local';
						include('schedule.php'); 
					?>

					</div>
					
				
				<!-- start News   -->
			
				<!--
				<div class="blog_main">
					<h2 class="blog">NEWS</h2>
					
					<div class="blog_date">
						<p><br/></p>
						<div class="blog_date_left">
							<h2>WEBSITE</h2>
							<p><a href="http://www.entrepreneur.com" target="_blank">www.entrepreneur.com</a></p>
							
						</div>
						<div class="blog_date_right">
							<script language="JavaScript" src="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fentrepreneur%2Flatest&chan=y&desc=200&au=y&date=y&num=2&targ=y&utf=y"  charset="UTF-8" type="text/javascript">
							</script>

							<noscript>
<a href="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fentrepreneur%2Flatest&chan=y&desc=200&au=y&num=2&date=y&targ=y&utf=y&html=y">View RSS feed</a>
							</noscript>

						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="blog_main">
					
						<div class="blog_date">
							<p><br/></p>
							<div class="blog_date_left">
								<h2>Website</h2>
								<p><a href="http://www.businessinsider.com" target="_blank"">www.businessinsider.com</a></p>
								
							</div>
							<div class="blog_date_right">
								<script language="JavaScript" src="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fbusinessinsider%3Fformat%3Dxml&chan=title&num=2&desc=200&targ=y&utf=y"  charset="UTF-8" type="text/javascript">
								</script>

								<noscript>
									<a href="http://www.feedroll.com/rssviewer/feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2Fbusinessinsider%3Fformat%3Dxml&chan=title&num=2&desc=200&targ=y&utf=y&html=y">
										View RSS feed
									</a>
								</noscript>
							</div>
							<div class="clear"></div>							
						</div>
					</div>
					-->
				</div>
				
				<!-- Start Sidebar -->
				<?php include('sidebar.php'); ?>

			</div>
		</div>		
		<!-- start footer  -->
		<div class="footer_bg">
			<div class="wrap">
				<div class="footer">
					<div class="clear"></div>
		
					<div class="footer_top">
						<p class="link">
							<span>© All rights reserved | Template by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
