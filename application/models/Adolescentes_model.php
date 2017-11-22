<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Adolescentes_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "adolescentes a";
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
}