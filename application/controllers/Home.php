<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	/*
		$param1 pode ser tanto a categoria quanto a página
		$param2 só será chamado quando a categoria  ser especificada
	*/
	public function index($param1 = 1, $param2 = 1)
	{
		$categoria = (is_numeric($param1)) ? null 	 : $param1;
		$limit 	   = (is_numeric($param1)) ? $param1 : $param2;

		if($limit == 0) $limit++;

		$dados['title']  	= "Iconoteca";
		$dados['icones']	= $this->m_icone->get("artefatos", $categoria, $limit, "idArtefato", "desc");
		$dados['categoria']	= $categoria;
		$totalRows = $this->m_icone->get("artefatos", $categoria)->num_rows();

		if($dados['icones']->num_rows() > 0) $dados['categorias'] = $this->m_icone->get("categorias", null, null, "nomeCategoria", "asc");

		$URLPagination = base_url();
		if($categoria) $URLPagination = $URLPagination . "/$categoria/";

		// Paginação
		$this->load->library('pagination');
		$config['base_url']   = $URLPagination;
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
