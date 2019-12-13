<?php
$theTime = microtime(true);
echo $theTime;
error_log('Access ' . $_SERVER['REQUEST_URI'] . ' via ' . $_SERVER['SERVER_PORT'] . ' at ' . $theTime);
