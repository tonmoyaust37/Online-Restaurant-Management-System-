<?php
	session_start();
	session_destroy();
	header("location:test1.php");
?>