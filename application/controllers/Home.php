<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index($numArtefatos = 0)
	{
		if($numArtefatos != 0)
		{
			echo "<h1>NICE</h1>";
		}
		else {
			$dados['title']  = "Iconoteca";
			$dados['icones'] = $this->m_icone->get("icones");

			// Paginação
			$this->load->library('pagination');

			$config['base_url']   = base_url('home/');
			$config['total_rows'] = $dados['icones']->num_rows();
			$config['per_page']   = 3;
			$config['num_links']  = 3;
			$config['cur_tag_open'] = '<a href="#" class="w3-bar-item w3-black w3-button">';
			$config['cur_tag_close'] = '</a>';
			$config['attributes'] = array('class' => 'w3-bar-item w3-button w3-hover-black');
			// $config['next_link'] = '&gt;';
			// $config['prev_link'] = '&lt;';

			$this->pagination->initialize($config);
			$this->template->load('templates/default', 'home', $dados);
		}
	}
}
