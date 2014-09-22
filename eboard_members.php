<?php
	$schedule_xml_file = 'eboard.xml';	
	$members = simplexml_load_file($schedule_xml_file);

	foreach ($members->member as $member) {
		echo '<div class="blog_date">';

			echo '<h2 class="eboard_name">'.$member->name.' - '.$member->role.'</h2>';
			echo '<img class="eboard_picture" src="'.$member->pic.'" height="15%" width="15%">';

			echo '<div class="eboard_info">';
				if($member->phone != '') {
					echo '<h2>Phone: </h2>';
					echo '<p class="para">'.$member->phone.'</p>';
					echo '<div class="clear"></div>';
				}	
				if($member->email != '') {
					echo '<h2>Email: </h2>';
					echo '<p class="para">'.$member->email.'</p>';
					echo '<div class="clear"></div>';
				}	
				if($member->bio != '') {
					echo '<h2>Bio: </h2>';
					echo '<p class="para">'.$member->bio.'</p>';
					echo '<div class="clear"></div>';
				}	
			echo '</div>';

			echo '<div class="clear"></div>';
		echo '</div>';
	}
?>
