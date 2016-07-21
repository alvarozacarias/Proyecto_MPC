<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_mapa extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }

    public  function verMapa()
    {


        $this->load->view('mapa/v_mapa-google');
    }
}
?>

