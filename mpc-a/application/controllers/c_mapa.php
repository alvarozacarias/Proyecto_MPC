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
        $this->load->library('googlemaps');

        //configuracion de mapa
        $config=array();
        $config['center']='cochabamba,bolivia';
        //$config['zoom']=90;
        $this->googlemaps->initialize($config);
        //fin de la configuracion de mapa
        $data['map']=$this->googlemaps->create_map();

        $this->load->view('mapa/v_mapa-google',$data);
    }
    public function ver()
    {
        //$mifirePHP->log("Este es el contenido del Array miArray");
        $this->load->view('personal/v_create_personal');
    }
}
?>

