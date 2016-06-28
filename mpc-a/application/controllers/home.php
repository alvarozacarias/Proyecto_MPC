<?php
class Home extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->config->base_url = "http://localhost/Codegniter/mpac-a/qr_code/";
    }

    /*public function random($num){
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $string = '';
        for ($i = 0; $i < $num; $i++) {
            $string .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $string;
    }*/

    public function index(){
        //cargamos la librería
        $this->load->library('ciqrcode');
        //hacemos configuraciones
        $params['data'] = 'Prueba de codigo qr';
        $params['level'] = 'H';
        $params['size'] = 5;
        //decimos el directorio a guardar el codigo qr, en este
        //caso una carpeta en la raíz llamada qr_code
        $params['savename'] = FCPATH.'qr_code/qrcode.png';
        //generamos el código qr
        $this->ciqrcode->generate($params);
        echo '<img src="'.base_url().'qr_code/qrcode.png" />';
    }
}