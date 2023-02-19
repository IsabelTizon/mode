<?php
//Log out destroy the session that was started and redirect to the home page
session_start();
session_destroy();

header("Location: index.php");
exit;
