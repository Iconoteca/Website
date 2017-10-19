<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_icone extends CI_Model
{
    /*
        Busca os objetos no DB para mostrar no portfolio. Recebe três parâmetros, todos considerados null caso omitidos.

        $table      tabela que será realizado a busca
        $id         id do artefato
        $categoria  categoria do artefato
        $name       nome do artefato
    */
    public function get($table, $id = null, $categoria = null, $name = null)
    {
        if($id)        $this->db->where('idArtefato', $id);
        if($categoria) $this->db->where('categoria', $categoria);
        if($name)      $this->db->like('nome', $name);

        $this->db->order_by("idArtefato", "desc");
        $this->db->from($table);

        return $this->db->get();
    }
}
