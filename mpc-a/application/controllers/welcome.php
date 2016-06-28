<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('m_login');
            $this->load->library(array('session','form_validation'));
            $this->load->helper(array('url','form'));
            $this->load->database('default');
        }
	public function index()
	{
		$this->load->view('template');
	}
        
        function bienvenidos(){
            //$data['tipos'] = $this->m_tipo->getAllTipos();
            $this->load->view('welcome/v_bienvenidos');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */