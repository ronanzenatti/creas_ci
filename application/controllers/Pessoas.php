<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pessoas_model', 'pm');
    }

    public function index()
    {

    }

    public function save()
    {
        parse_str($this->input->post('form'), $form);
        if (empty($form['dt_nasc'])) {
            $form['dt_nasc'] = null;
        } else {
            $form['dt_nasc'] = date('Y-m-d H:i:s', strtotime(str_replace("/", "-", $form['dt_nasc'])));
        }

        if (empty($form['idpessoa'])) {
            $form['created_at'] = date('Y-m-d H:i:s');
            $form['updated_at'] = date('Y-m-d H:i:s');
            echo $this->pm->Insert($form);
        } else {
            $form['updated_at'] = date('Y-m-d H:i:s');
            $this->pm->Update('idpessoa', $form['idpessoa'], $form);
            echo $form['idpessoa'];
        }


    }

}