<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define("TEMPLATE_URL","/assets/template/porto/");
$this->load->view('_includes/header');
?>
	<h1><?= $rs->article_title; ?></h1>
	<div><?= $rs->article_content; ?></div>
<?php
$this->load->view('_includes/footer');
?>
