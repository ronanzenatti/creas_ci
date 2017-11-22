<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Entidades_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "entidades";
        $this->column_order = array('identidade', 'nome', 'cnpj', 'telefones', 'email');
        $this->column_search = array('identidade', 'nome', 'cnpj', 'telefones', 'email');
        $this->order = array('identidade');
        $this->dates = array();
    }
}