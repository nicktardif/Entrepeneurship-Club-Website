<?php
	$schedule_xml_file = 'xml/schedule.xml';	
	$events = simplexml_load_file($schedule_xml_file);

	foreach ($events->event as $event) {
		$dateString = $event->date;
		$date = DateTime::createFromFormat('M d, Y', $dateString);
		$today = new DateTime();

		if($schedule_type == 'upcoming' and $event->type == $type and $date >= $today and $date->sub(new DateInterval('P50D')) < $today) {
			echo '<div class="blog_date">';

				echo '<h2 class="blog">'.$event->title.'</h2>';
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
		if($schedule_type == 'past' and $event->type == $type and $date < $today and $date->add(new DateInterval('P50D')) >= $today) {
			echo '<div class="blog_date">';

				echo '<h2 class="blog">'.$event->title.'</h2>';
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
