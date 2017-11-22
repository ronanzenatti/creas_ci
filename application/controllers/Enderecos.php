<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enderecos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Enderecos_model', 'em');
    }

    public function index()
    {

    }

    public function save()
    {
        parse_str($this->input->post('form'), $form);
        $form['idpessoa'] = $this->input->post('idpessoa');

        $ativo = isset($form['ativo_end']) ? true : false;

        unset($form['ativo_end']);

        if (empty($form['dt_mudanca']) || $ativo) {
            $form['dt_mudanca'] = null;
            $form['motivo'] = null;
        } else {
            $form['dt_mudanca'] = date('Y-m-d', strtotime(str_replace("/", "-", $form['dt_mudanca'])));
        }

        if (empty($form['iddocumento'])) {
            $form['created_at'] = date('Y-m-d H:i:s');
            $form['updated_at'] = date('Y-m-d H:i:s');
            echo $this->em->Insert($form);
        } else {
            $form['updated_at'] = date('Y-m-d H:i:s');
            $this->em->Update('iddocumento', $form['iddocumento'], $form);
            echo $form['iddocumento'];
        }
    }

    public function iu()
    {
        $idPessoa = $this->input->post('idpessoa');
        $idE = $this->input->post('idE');

        $dados = Array();
        $dados['obj'] = $this->em->GetById('idendereco', $idE);
        if (!empty($dados['obj']['dt_mudanca'])) {
            $dados['obj']['dt_mudanca'] = date("d/m/Y", strtotime($dados['obj']['dt_mudanca']));
        }
        $this->blade->view('usuarios/modals/iuEndereco', $dados);
    }

    public function Ajax_Datatables()
    {
        $idpessoa = $this->input->post('idpessoa');
        $where = array("idpessoa"=>$idpessoa);
        $list = $this->em->Get_Datatables(null, $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $obj) {
            $no++;
            $row = array();
            //    $row[] = $no;
            $row[] = $obj->descricao;
            $row[] = $obj->logradouro;
            $row[] = $obj->numero;
            $row[] = $obj->bairro;
            $row[] = $obj->cidade;
            $row[] = (empty($obj->dt_mudanca)) ? "<strong class='text-success'>SIM</strong>" : "<strong class='text-danger'>NÃO</strong>";

            $btns = "<button type='button' onclick='iuEndereco($obj->idendereco)' class='btn btn-warning btn-sm '> <i class='fa fa-pencil' aria-hidden='true'></i></button> ";
            $btns .= " <button type='button' onclick='deletarRegistro(\"enderecos\", " . $obj->idendereco . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
            $row[] = $btns;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->em->count_all(null, $where),
            "recordsFiltered" => $this->em->count_filtered(null, $where),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function deletar()
    {
        $id = $this->input->post('id');
        $obj = Array();
        $obj['deleted_at'] = date('Y-m-d H:i:s');
        return $this->em->Update('idendereco', $id, $obj);
    }

}