<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "usuarios u";
        $this->column_order = array('p.idpessoa', 'p.nome', 'c.nome', 'u.email');
        $this->column_search = array('p.idpessoa', 'p.nome', 'c.nome', 'u.email');
        $this->order = array('idpessoa');
        $this->dates = array();
        $this->joins = array(
            ['tabela' => 'pessoas p', 'juncao' => 'p.idpessoa = u.idpessoa', 'tipo' => 'RIGHT'],
            ['tabela' => 'cargos c', 'juncao' => 'c.idcargo = u.idcargo', 'tipo' => 'LEFT'],
        );
        $this->select = "p.idpessoa, p.nome, c.nome AS cargo, u.email";
    }


}