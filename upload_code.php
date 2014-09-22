<?php
	//if they DID upload a file...
	if($_FILES['file']['name'])
	{
		//if no errors...
		if(!$_FILES['file']['error'])
		{
			//now is the time to modify the future file name and validate the file
			$new_file_name = $_POST['list'];
			echo $new_file_name;
			echo '<br>';

			$upload_dir = 'xml/';
			if(is_writable($upload_dir)) {
				//move it to where we want it to be
				if(move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$new_file_name))
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
