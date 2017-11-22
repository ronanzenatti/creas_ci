<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adolescentes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Adolescentes_model', 'am');
        $this->load->model('Documentos_model', 'dm');
        $this->load->model("Pessoas_model", "pm");
        $this->load->model("Contatos_model", "com");
        $this->load->model("Enderecos_model", "em");
    }

    public function index()
    {
        $this->blade->view('adolescentes/listar');
    }

    public function inserir()
    {
        $dados = array();
        $this->blade->view('adolescentes/iuAdolescente', $dados);
    }

    public function save()
    {
        $this->am->table = "adolescentes";
        parse_str($this->input->post('form'), $form);
        $form['idpessoa'] = $this->input->post('idpessoa');

        if (empty($form['pai_nasc'])) {
            $form['pai_nasc'] = null;
        } else {
            $form['pai_nasc'] = date('Y-m-d H:i:s', strtotime(str_replace("/", "-", $form['pai_nasc'])));
        }
        if (empty($form['mae_nasc'])) {
            $form['mae_nasc'] = null;
        } else {
            $form['mae_nasc'] = date('Y-m-d H:i:s', strtotime(str_replace("/", "-", $form['mae_nasc'])));
        }

        if (empty($form['idadolescente'])) {
            $form['created_at'] = date('Y-m-d H:i:s');
            $form['updated_at'] = date('Y-m-d H:i:s');
            echo $this->am->Insert($form);
        } else {
            $form['updated_at'] = date('Y-m-d H:i:s');
            $this->am->Update('idadolescente', $form['idadolescente'], $form);
            echo $form['idadolescente'];
        }
    }

    public function alterar($id)
    {
        $dados = Array();
        $dados['objP'] = $this->pm->GetById('idpessoa', $id);
        $dados['objP']['dt_nasc'] = (!empty($dados['objP']['dt_nasc'])) ? date("d/m/Y", strtotime($dados['objP']['dt_nasc'])) : null;
        $dados['objA'] = $this->am->GetById('idpessoa', $id);
        $dados['objA']['pai_nasc'] = (!empty($dados['objA']['pai_nasc'])) ? date("d/m/Y", strtotime($dados['objA']['pai_nasc'])) : null;
        $dados['objA']['mae_nasc'] = (!empty($dados['objA']['mae_nasc'])) ? date("d/m/Y", strtotime($dados['objA']['mae_nasc'])) : null;
        $dados['objD'] = $this->dm->GetById('idpessoa', $id);
        $dados['objD']['RG_emissao'] = (!empty($dados['objD']['RG_emissao'])) ? date("d/m/Y", strtotime($dados['objD']['RG_emissao'])) : null;
        $this->blade->view('adolescentes/iuAdolescente', $dados);
    }

    public function deletar()
    {
        $id = $this->input->post('id');
        $adolescentes = Array();
        $adolescentes['deleted_at'] = date('Y-m-d H:i:s');
        return $this->am->Update('idadolescentes', $id, $adolescentes);
    }

    public function Ajax_Datatables()
    {
        $where = Array("p.tipo_pessoa" => 'A');
        $list = $this->am->Get_Datatables('p', $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $obj) {
            $no++;
            $contatos = $this->com->contatosPorPessoa($obj->idpessoa);
            $end = $this->em->enderecosPorPessoa($obj->idpessoa);
            $row = array();
            //    $row[] = $no;
            $row[] = $obj->idpessoa;
            $row[] = $obj->nome;
            $row[] = $obj->RG;
            $row[] = $obj->responsavel;
            $row[] = "<button type='button' onclick='showEnderecos($obj->idpessoa)' class='btn btn-default btn-sm'><span class='badge'>$end->enderecos</span></button>";
            $row[] = "<button type='button' onclick='showContatos($obj->idpessoa)' class='btn btn-default btn-sm'><span class='badge'>$contatos->contatos</span></button>";

            $btns = "<a href='" . base_url('index.php/adolescentes/alterar/' . $obj->idpessoa) . "' class='btn btn-warning btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></a> ";
            $btns .= "<button type='button' onclick='deletarRegistro(\"adolescentes\", " . $obj->idpessoa . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
            $row[] = $btns;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->am->Count_All('p', $where),
            "recordsFiltered" => $this->am->Count_Filtered('p', $where),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

}