<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_ciudad extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_ciudad');

        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }

    function createCiudad()
    {
        $this->load->view('ciudad/v_create_ciudad');
    }
}
?>

