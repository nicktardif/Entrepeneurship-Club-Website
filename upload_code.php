<?php
	//if they DID upload a file...
	if($_FILES['file']['name'])
	{
		//if no errors...
		if(!$_FILES['file']['error'])
		{
			//now is the time to modify the future file name and validate the file
			$new_file_name = $_POST['list'];

			$upload_dir = 'xml/';
			$new_file = $upload_dir.$new_file_name;
			echo $new_file;
			echo '<br>';
			if(is_writable($upload_dir)) {
				//move it to where we want it to be
				$today = new DateTime();

				// Make a backup of the old xml file
				$backup_filename = $new_file.$today->format('_m_d_H:i');
				echo $backup_filename;
				copy($new_file, $backup_filename);

				// Copy the new xml file over the old one
				if(move_uploaded_file($_FILES['file']['tmp_name'], $new_file))
					$message = 'Congratulations!  Your file was accepted.';
				else
					$message = 'Your file was not moved correctly.';
			}
			else
				$message = 'Upload directory is not writable';
			
		}
		//if there is an error...
		else
		{
			//set that to be the returned message
			$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
		}
	}
	echo $message;
?>
