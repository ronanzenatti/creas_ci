<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
	 public function index()
    {
    	
    }

    public function inserir(){
        $this->blade->view('usuarios/iuUsuario');
    }

}