<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_icone extends CI_Model
{
    /*
        Busca os objetos no DB para mostrar no portfolio. Recebe três parâmetros, todos considerados null caso omitidos.

        $table      tabela que será realizado a busca
        $limit      limite de busca
        $orderBy    nome do campo da ordenação
        $orderHow   desc ou asc
        $id         id do artefato
        $categoria  categoria do artefato
        $name       nome do artefato
    */
    public function get($table, $categoria = null, $limit = null, $orderBy = null, $orderHow = null, $id = null, $name = null)
    {
        if($id)        $this->db->where('idArtefato', $id);
        if($categoria) $this->db->where('categoria', $categoria);
        if($name)      $this->db->like('nome', $name);
        if($limit)     $this->db->limit(6, 6*($limit-1));
        if($orderBy)   $this->db->order_by($orderBy, ($orderHow) ? $orderHow : "desc");
        $this->db->from($table);

        return $this->db->get();
    }

    // Busca as imagens do artefato $id
    public function getImages($id)
    {
        $this->db->where('idArtefato', $id);
        $this->db->from("artefatos");
        $this->db->select("nomeImagem");
        $this->db->join('imagens', 'artefatos.idArtefato = imagens.idIcone');

        return $this->db->get();
    }
}
