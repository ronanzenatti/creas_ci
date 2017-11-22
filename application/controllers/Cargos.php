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
        $this->blade->view('cargos/listar');
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
            $cargos['nome'] = $this->input->post('nome');
            $cargos['descricao'] = $this->input->post('descricao');
            $cargos['created_at'] = date('Y-m-d H:i:s');
            $cargos['updated_at'] = date('Y-m-d H:i:s');
            $this->cm->Insert($cargos);
        } else {
            $cargos['nome'] = $this->input->post('nome');
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

    public function deletar()
    {
        $id = $this->input->post('id');
        $dados = Array();
        $cargos['deleted_at'] = date('Y-m-d H:i:s');
        return $this->cm->Update('idcargo', $id, $cargos);
    }

    public function Ajax_Datatables()
    {

        $list = $this->cm->Get_Datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $obj) {
            $no++;
            $row = array();
            //    $row[] = $no;
            $row[] = $obj->idcargo;
            $row[] = $obj->nome;
            $row[] = $obj->descricao;
            $row[] = date('d/m/Y H:i:s', strtotime($obj->created_at));

            $btns = "<a href='" . base_url('index.php/cargos/alterar/' . $obj->idcargo) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
            $btns .= "<button type='button' onclick='deletarRegistro(\"cargos\", " . $obj->idcargo . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
            $row[] = $btns;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->cm->count_all(),
            "recordsFiltered" => $this->cm->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

}