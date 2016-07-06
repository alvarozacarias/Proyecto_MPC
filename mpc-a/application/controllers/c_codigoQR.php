<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_codigoQR extends CI_Controller {
    public function __construct() {
        parent::__construct();
        //$this->load->model('m_codigoQR');
        $this->load->library('ciqrcode');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }

    function createCodigoQR()
    {
        $params['data'] = 'Hola esto 2';
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH.'tes.png';
        
        $this->ciqrcode->generate($params);


        $this->load->view('codigoQR/v_create_codigoQR');
    }
}
?>