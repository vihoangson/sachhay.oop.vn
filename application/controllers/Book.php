<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
	public function index()
	{
		$this->load->model('article_model');
		$rs = $this->article_model->get_all();
		$this->load->view('homepage',compact("rs"));
	}

	public function detail($id)
	{
		$this->load->model('article_model');
		$rs = $this->article_model->get($id);
		$this->load->view('detail',compact("rs"));
	}
}
