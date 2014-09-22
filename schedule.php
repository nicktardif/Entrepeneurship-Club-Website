<?php
	$schedule_xml_file = $schedule_type.'_schedule.xml';	
	$events = simplexml_load_file($schedule_xml_file);

	echo '<h2 class="blog">E-Club Events</h2>';
	echo '<p><br/></p>';

	foreach ($events->event as $event) {
		if($event->type == $type) {
			echo '<div class="blog_date">';

				echo '<center><h2 class="blog">'.$event->title.'</h2> </center>';
				echo '<div class="clear"></div>';
				echo '<p><br/></p>';

				echo '<div class="blog_date_left">';
					if($event->date != '') {
						echo '<span>'.$event->date.'</span>';
						echo '<div class="clear"></div>';
					}
					if($event->time != '') {
						echo '<span>'.$event->time.'</span>';
						echo '<div class="clear"></div>';
					}
					if($event->location != '') {
						echo '<span>'.$event->location.'</span>';
						echo '<div class="clear"></div>';
					}
				echo '</div>';

				echo '<div class="blog_date_right">';
					echo '<p class="para">'.$event->info.'</p>';
				echo '</div>';
				echo '<div class="clear"></div>';
			echo '</div>';
		}
	}
?>
