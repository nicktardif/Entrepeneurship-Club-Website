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