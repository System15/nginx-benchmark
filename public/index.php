<?php
$theTime = microtime(true);
echo $theTime;
error_log('Access via ' . $_SERVER['SERVER_PORT'] . ' at ' . $theTime);
