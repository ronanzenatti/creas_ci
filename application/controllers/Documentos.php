<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Documentos_model', 'dm');
    }

    public function index()
    {

    }

    public function save()
    {
        parse_str($this->input->post('form'), $form);
        $form['idpessoa'] = $this->input->post('idpessoa');

        if (empty($form['RG_emissao'])) {
            $form['RG_emissao'] = null;
        } else {
            $form['RG_emissao'] = date('Y-m-d H:i:s', strtotime(str_replace("/", "-", $form['RG_emissao'])));
        }

        if (empty($form['iddocumento'])) {
            $form['created_at'] = date('Y-m-d H:i:s');
            $form['updated_at'] = date('Y-m-d H:i:s');
            echo $this->dm->Insert($form);
        } else {
            $form['updated_at'] = date('Y-m-d H:i:s');
            $this->dm->Update('iddocumento', $form['iddocumento'], $form);
            echo $form['iddocumento'];
        }


    }

}