<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'maverick_hatsil');
define('DB_PASSWORD', '2*5&{QJp=#Za');
define('DB_DATABASE', 'maverick_silverhat');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>