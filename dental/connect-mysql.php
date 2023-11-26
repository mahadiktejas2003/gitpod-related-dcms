<?php

DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD',''); // Empty string as the password is blank
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','dentalclinic');


$dbcon=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if(!$dbcon){
	die('error connecting to database');
}

echo '';

?>
