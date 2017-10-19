<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$dados['title'] = "Iconoteca";
		$this->template->load('templates/default', 'home', $dados);
	}
}
