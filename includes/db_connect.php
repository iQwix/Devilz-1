<?php
define("HOSTNAME", '127.0.0.1');
define("USERNAME", 'root');
define("PASSWORD", '');
define("DANAME", 'devilz');

@mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DANAME) or "Not Connect";
?>
