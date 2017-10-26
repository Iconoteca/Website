<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artefato extends CI_Controller
{
    public function index($id)
    {
        $artefato = $this->m_icone->get("artefatos", null, null, null, "desc", $id);

        if($artefato->num_rows() > 0)  // Encontrou o artefato
        {
            $artefato = $artefato->row();
            $dados = array(
    			'nome'       => $artefato->nome,
    			'arquivo'    => base_url('assets/modelos/' . $artefato->nomeArquivo),
    			'complDesc'  => $artefato->complDesc,
    			'lat'        => $artefato->lat,
    			'lng'        => $artefato->lng,
    			// 'imagens'    => $this->m_icones->getImages($id)
    		);

            $dados['title'] = $dados['nome'] . " - Iconoteca";
            $dados['paginaArtefato'] = TRUE;

            $this->template->load('templates/default', 'artefato', $dados);
        }
        else    // Artefato inexistente
        {
            $dados['heading'] = "ERRO 404 - Artefato inexistente";
            $dados['message'] = "O artefato não foi encontrado.";
            $this->load->view('errors/html/error_404', $dados);
        }
    }
}
