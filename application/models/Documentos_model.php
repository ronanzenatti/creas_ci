<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Documentos_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "documentos";
    }
}