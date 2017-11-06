<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cargos_model', 'cm');
    }

    public function index()
    {
        $dados = Array();
        $dados['lista'] = $this->cm->GetAll('idcargo');
        $this->blade->view('cargos/listar', $dados);
    }

    public function inserir()
    {
        $this->blade->view('cargos/iuCargo');
    }

    public function save()
    {
        $cargos = Array();
        $id = $this->input->post('idcargo');
        if (empty($id)) {
            $cargos['descricao'] = $this->input->post('descricao');
            $cargos['created_at'] = date('Y-m-d H:i:s');
            $cargos['updated_at'] = date('Y-m-d H:i:s');
            $this->cm->Insert($cargos);
        } else {
            $cargos['idcargo'] = $id;
            $cargos['descricao'] = $this->input->post('descricao');
            $cargos['updated_at'] = date('Y-m-d H:i:s');
            $this->cm->Update('idcargo', $id, $cargos);
        }
        redirect('cargos/index');
    }

    public function alterar($id)
    {
        $dados = Array();
        $dados['obj'] = $this->cm->GetById('idcargo', $id);
        $this->blade->view('cargos/iuCargo', $dados);
    }

}