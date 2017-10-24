<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index($numArtefatos = 1)
	{
		$dados['title']  	 = "Iconoteca";
		$dados['icones'] 	 = $this->m_icone->get("artefatos", $numArtefatos, "desc");
		$totalRows = $this->m_icone->get("artefatos")->num_rows();

		if($dados['icones']->num_rows() > 0) $dados['categorias'] = $this->m_icone->get("categorias");

		// Paginação
		$this->load->library('pagination');

		$config['base_url']   = base_url('');
		$config['total_rows'] = $totalRows;
		$config['per_page']   = 6;
		$config['num_links']  = 3;
		$config['use_page_numbers'] = TRUE;
		$config['cur_tag_open'] = '<a href="#" class="w3-bar-item w3-black w3-button">';
		$config['cur_tag_close'] = '</a>';
		$config['attributes'] = array('class' => 'w3-bar-item w3-button w3-hover-black');
		$this->pagination->initialize($config);
		
		$this->template->load('templates/default', 'home', $dados);
	}
}
