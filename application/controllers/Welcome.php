<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/welcome
     *    - or -
     *        http://example.com/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $dados = array(
            'page_title' => 'CodeIgniter com Blade Template Engine!',
            'page_content' => 'Esse é um exemplo do CodeIgniter com Blade Template Engine',
            'message' => ""
        );

        $this->blade->view('auth/login', $dados);
    }
}
