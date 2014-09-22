<?php
	$xml_file = 'xml/startups.xml';	
	$startups = simplexml_load_file($xml_file);

	foreach ($startups->company as $company) {
		echo '<div class="blog_date">';

			echo '<center><h2 class="blog">'.$company->name.'</h2> </center>';
			echo '<div class="clear"></div>';
			echo '<p><br/></p>';

			echo '<div class="startup_left_col">';
				if($company->name != '') {
					echo '<h2>Name: </h2>';
					echo '<p>'.$company->name.'</p>';
					echo '<div class="clear"></div>';
				}

				#Special case for bad data
				if($company->contact == 'Information Requested for all...') {
					echo '</div>';

					echo '<div class="clear"></div>';
					echo '</div>';
					continue;
				}

				if($company->contact != 'No Contact Person Listed' and $company->contact != '') {
					echo '<h2>Contact: </h2>';
					echo '<p>'.$company->contact.'</p>';
					echo '<div class="clear"></div>';
				}
				if($company->email != 'no Contact email' and $company->email != '') {
					echo '<h2>Email: </h2>';
					echo '<p>'.$company->email.'</p>';
					echo '<div class="clear"></div>';
				}
				if($company->phone != '' and $company->phone != 'No Phone Number Listed') {
					echo '<h2>Phone: </h2>';
					echo '<p>'.$company->phone.'</p>';
					echo '<div class="clear"></div>';
				}
				if($company->address != 'No Address Listed' and $company->address != '') {
					echo '<h2>Address: </h2>';
					echo '<p>'.$company->address.'</p>';
					echo '<div class="clear"></div>';
				}
				if($company->website != '' and $company->website != 'No Website') {
					echo '<h2>Website: </h2>';
					echo '<a href='.$company->website.'>'.$company->website.'</a>';
					echo '<div class="clear"></div>';
				}
				if($company->facebook != '' and $company->facebook != 'No Facebook') {
					echo '<h2>Facebook: </h2>';
					echo '<a href='.$company->facebook.'>'.$company->facebook.'</a>';
					echo '<div class="clear"></div>';
				}
				if($company->twitter != '' and $company->twitter != 'No Twitter') {
					echo '<h2>Twitter: </h2>';
					echo '<a href='.$company->twitter.'>'.$company->twitter.'</a>';
					echo '<div class="clear"></div>';
				}
			echo '</div>';

			echo '<div class="clear"></div>';
		echo '</div>';
	}
?>
