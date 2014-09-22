<h1>Form for editing our website</h1>

<p>What do you want to do?</p>
<p> Go <a href=http://codebeautify.org/online-xml-editor#>Here</a> and 'Load URL' for the file you want to change</p>
<p>Edit schedule file: http://www.eclubuf.com/xml/schedule.xml</p>
<p>Edit members file: http://www.eclubuf.com/xml/eboard.xml</p>
<p>Edit startups file: http://www.eclubuf.com/xml/startups.xml</p>

<p>Edit the file, clicking the right arrow in the middle of the screen to apply your changes, <strong>making sure that when you're done there is not a parseError on the right side of the screen.</strong></p>
<p>Copy and paste all the text on the left side into Notepad (if you're using Windows) or TextEdit (if you're using a Mac)</p>
<p>Save the file to your computer, and come back to this webpage</p>
<p>Select the file type you edited in the dropdown, upload your file, and click send. Your changes will be on the site immediately!</p>

<br>

<form action="upload_code.php" method="post" enctype="multipart/form-data">
<select name="list">
	<option value="schedule.xml">schedule.xml</option>
	<option value="eboard.xml">eboard.xml</option>
	<option value="startups.xml">startups.xml</option>
</select>
<br>

<p>XML File:
<input type="file" name="file" />
<br>

<input name="submit" type="submit" value="Send" />
</p>
</form>
