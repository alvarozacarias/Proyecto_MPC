<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_codigoQR extends CI_Controller {
    public function __construct() {
        parent::__construct();
        //$this->load->model('m_codigoQR');

        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }

    function createCodigoQR()
    {
        $this->load->view('codigoQR/v_create_codigoQR');
    }
}
?>