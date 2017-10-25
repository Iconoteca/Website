<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artefato extends CI_Controller
{
    public function index($id)
    {
        $nomeArtefato = "Null"; // Posteriormente será buscado no DB
        $dados['title'] = "$nomeArtefato - Iconoteca";

        $this->template->load('templates/default', 'artefato', $dados);
    }
}
