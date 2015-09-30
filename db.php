<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'maverick_current');
define('DB_PASSWORD', '[GS{zXM(%.q$');
define('DB_DATABASE', 'maverick_games');
$connection = @mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$base_url='http://maverickgame.com/email_activation/';
?>