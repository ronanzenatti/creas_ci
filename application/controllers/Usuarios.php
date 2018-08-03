<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuarios_model', 'um');
        $this->load->model('Cargos_model', 'cm');
        $this->load->model('Documentos_model', 'dm');
        $this->load->model('Entidades_model', 'em');
        $this->load->model('Ion_auth_model');
        $this->load->model("Pessoas_model", "pm");
        $this->load->model("Contatos_model", "com");
    }

    public function index()
    {
        $this->blade->view('usuarios/listar');
    }

    public function inserir()
    {
        $dados = array();
        $dados['entidades'] = $this->em->GetAll('identidade');
        $dados['cargos'] = $this->cm->GetAll('idcargo');
        $this->blade->view('usuarios/iuUsuario_', $dados);
    }

    public function save()
    {
        $this->um->table = "usuarios";
        parse_str($this->input->post('form'), $form);
        $form['idpessoa'] = $this->input->post('idpessoa');
        $form['password'] = $this->Ion_auth_model->hash_password($form['password']);
        $form['ip_address'] = $this->input->ip_address();
        $form['active'] = 1;
        $form['termo'] = 0;
        unset($form['confirma']);

        if (empty($form['idusuario'])) {
            $form['created_at'] = date('Y-m-d H:i:s');
            $form['updated_at'] = date('Y-m-d H:i:s');
            echo $this->um->Insert($form);
        } else {
            if (empty($form['password'])) {
                unset($form['password']);
            }
            $form['updated_at'] = date('Y-m-d H:i:s');
            $this->um->Update('idusuario', $form['idusuario'], $form);
            echo $form['idusuario'];
        }
    }

    public function alterar($id)
    {
        $dados = Array();
        $dados['objU'] = $this->um->GetById('idpessoa', $id);
        $dados['objP'] = $this->pm->GetById('idpessoa', $id);
        $dados['objP']['dt_nasc'] = (!empty($dados['objP']['dt_nasc'])) ? date("d/m/Y", strtotime($dados['objP']['dt_nasc'])) : null;
        $dados['objD'] = $this->dm->GetById('idpessoa', $id);
        $dados['objD']['RG_emissao'] = (!empty($dados['objD']['RG_emissao'])) ? date("d/m/Y", strtotime($dados['objD']['RG_emissao'])) : null;
        $dados['entidades'] = $this->em->GetAll('identidade');
        $dados['cargos'] = $this->cm->GetAll('idcargo');
        $this->blade->view('usuarios/iuUsuario_', $dados);
    }

    public function deletar()
    {
        $id = $this->input->post('id');
        $usuarios = Array();
        $usuarios['deleted_at'] = date('Y-m-d H:i:s');
        return $this->um->Update('idusuario', $id, $usuarios);
    }

    public function Ajax_Datatables()
    {
        $where = Array("p.tipo_pessoa" => 'F');
        $list = $this->um->Get_Datatables('p', $where);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $obj) {
            $no++;
            $contatos = $this->com->contatosPorPessoa($obj->idpessoa);
            $row = array();
            //    $row[] = $no;
            $row[] = $obj->idpessoa;
            $row[] = $obj->nome;
            $row[] = $obj->cargo;
            $row[] = $obj->email;
            $row[] = "<button type='button' onclick='showContatos($obj->idpessoa)' class='btn btn-default btn-sm'><span class='badge'>$contatos->contatos</span></button>";

            $btns = "<a href='" . base_url('usuarios/alterar/' . $obj->idpessoa) . "' class='btn btn-warning btn-sm'><i class='fa fa-pencil' aria-hidden='true'></i></a> ";
            $btns .= "<button type='button' onclick='deletarRegistro(\"usuarios\", " . $obj->idpessoa . ")' class='btn btn-danger btn-sm'><i class='fa fa-trash-o' aria-hidden='true'></i></button>";
            $row[] = $btns;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->um->Count_All('p', $where),
            "recordsFiltered" => $this->um->Count_Filtered('p', $where),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

}
