<?php
    $data = $this->Home_model->get_all();
	include_once "template/header.php";
    include_once $pageName.".php";
    include_once "template/footer.php";
?>