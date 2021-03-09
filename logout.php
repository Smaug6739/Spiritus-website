<?php

session_start();

unset($_SESSION);

session_destroy();

header("Location: http://spiritus-tech.mon.world/index.php");

?>

