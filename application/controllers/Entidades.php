<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entidades extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Entidades_model', 'em');
    }

    public function index()
    {
        $this->blade->view('entidades/listar');
    }

    public function inserir()
    {
        $this->blade->view('entidades/iuEntidade');
    }

    public function save()
    {
        $entidades = Array();
        $id = $this->input->post('identidade');

        $entidades['nome'] = $this->input->post('nome');
        $entidades['cnpj'] = $this->input->post('cnpj');
        $entidades['logradouro'] = $this->input->post('logradouro');
        $entidades['numero'] = $this->input->post('numero');
        $entidades['bairro'] = $this->input->post('bairro');
        $entidades['cidade'] = $this->input->post('cidade');
        $entidades['estado'] = $this->input->post('estado');
        $entidades['cep'] = $this->input->post('cep');
        $entidades['telefones'] = $this->input->post('telefones');
        $entidades['email'] = $this->input->post('email');
        $entidades['responsavel'] = $this->input->post('responsavel');
        $entidades['resp_tel'] = $this->input->post('resp_tel');
        $entidades['resp_email'] = $this->input->post('resp_email');

        if (empty($id)) {
            $entidades['created_at'] = date('Y-m-d H:i:s');
            $entidades['updated_at'] = date('Y-m-d H:i:s');
            $this->em->Insert($entidades);
        } else {
            $entidades['updated_at'] = date('Y-m-d H:i:s');
            $this->em->Update('identidade', $id, $entidades);
        }
        redirect('entidades/');
    }

    public function alterar($id)
    {
        $dados = Array();
        $dados['obj'] = $this->em->GetById('identidade', $id);
        $this->blade->view('entidades/iuEntidade', $dados);
    }

    public function deletar()
    {
        $id = $this->input->post('id');
        $entidades = Array();
        $entidades['deleted_at'] = date('Y-m-d H:i:s');
        return $this->em->Update('identidade', $id, $entidades);
    }

    public function Ajax_Datatables()
    {

        $list = $this->em->Get_Datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $obj) {
            $no++;
            $row = array();
            //    $row[] = $no;
            $row[] = $obj->identidade;
            $row[] = $obj->nome;
            $row[] = $obj->cnpj;
            $row[] = $obj->telefones;
            $row[] = $obj->email;

            $btns = "<a href='" . base_url('entidades/alterar/' . $obj->identidade) . "' class='btn btn-warning btn-sm'> <i class='fa fa-pencil' aria-hidden='true'></i></a> ";
            $btns .= "<button type='button' onclick='deletarRegistro(\"entidades\", " . $obj->identidade . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
            $row[] = $btns;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->em->count_all(),
            "recordsFiltered" => $this->em->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

}
