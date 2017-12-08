<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Situacao_habitacional_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "situacao_habitacional sh";
        $this->column_order = array('p.idpessoa', 'p.nome', 'd.RG', 'a.responsavel');
        $this->column_search = array('p.idpessoa', 'p.nome', 'd.RG', 'a.responsavel');
        $this->order = array('idpessoa');
        $this->dates = array();
        $this->joins = array(
            ['tabela' => 'pessoas p', 'juncao' => 'p.idpessoa = a.idpessoa', 'tipo' => 'RIGHT'],
            ['tabela' => 'documentos d', 'juncao' => 'p.idpessoa = d.idpessoa', 'tipo' => 'RIGHT']
        );
        $this->select = "p.idpessoa, p.nome, d.RG, a.responsavel";
    }

    public function shPorPessoa($idend)
    {
        $this->db->select("COUNT(idsh) AS sh");
        $this->db->from($this->table);
        $this->db->where("idendereco", $idend);
        $this->db->where('deleted_at IS NULL ', null, false);
        $query = $this->db->get();
        return $query->row_object();
    }
}