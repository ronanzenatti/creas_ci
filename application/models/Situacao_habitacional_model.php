<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Situacao_habitacional_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "situacao_habitacional sh";
        $this->column_order = array('p.idpessoa', 'p.nome', 'd.RG', 'a.responsavel');
        $this->column_search = array('p.idpessoa', 'p.nome', 'd.RG', 'a.responsavel');
        $this->order = array('p.idpessoa');
        $this->dates = array();
        $this->joins = array(
			['tabela' => 'enderecos e', 'juncao' => 'e.idendereco = sh.idendereco', 'tipo' => 'RIGHT']
        );
        $this->select = "p.idpessoa, p.nome, d.RG, a.responsavel";
    }

    public function shPorPessoa($idpessoa)
    {
        $this->db->select("COUNT(idsh) AS sh");
        $this->db->from($this->table);
		$this->db->join("enderecos e", "e.idendereco = sh.idendereco");
        $this->db->where("e.idpessoa", $idpessoa);
        $this->db->where('sh.deleted_at IS NULL ', null, false);
        $query = $this->db->get();
        return $query->row_object();
    }
}
