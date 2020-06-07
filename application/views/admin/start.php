<?php
$name = $this->session->userdata('user_name');
$email = $this->session->userdata('user_email');
$pass = $this->session->userdata('user_password');
$id = $this->session->userdata('user_id');
include_once "template/header.php";
include_once "template/navbar.php";
include_once "pages/" . $pageName.".php";
include_once "template/footer.php";
