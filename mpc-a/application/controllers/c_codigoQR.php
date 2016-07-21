<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_codigoQR extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_codigoQR');
        $this->load->library('ciqrcode');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }

    function createCodigoQR()
    {

        $data['items'] = $this->m_codigoQR->getAllItemCodigoQR();
        $this->load->view('codigoQR/v_create_codigoQR',$data);
    }
    public function editItemCodigoQR()
    {

        $id_codigoQR = $this->input->post('id');
        $data['codigosqr'] = $this->m_codigoQR->getItemCodigoQRById($id_codigoQR);

        $varId = $data['codigosqr']->id;
        $varNombreItem = $data['codigosqr']->nombreItem;
        $varIdEntidad = $data['codigosqr']->idEntidad;
        $varDireccion = $data['codigosqr']->direccion;
        $varColorFO = $data['codigosqr']->colorFO;
        //Desde aqui se crea codigo QR
        $params['data'] = $varId.' '.$varNombreItem.' '.$varIdEntidad.' '.$varDireccion.' '.$varColorFO;
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['savename'] = FCPATH.'tes1.png';
        $this->ciqrcode->generate($params);
        $this->load->view('codigoQR/v_update_itemCodigoQR',$data);
    }
}
?>