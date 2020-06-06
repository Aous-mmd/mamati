<?php
	$name = $this->session->userdata('user_name');
	include_once "header.php";
	include_once "navbar.php";
	include_once $pageName.".php";
	include_once "footer.php";
?>