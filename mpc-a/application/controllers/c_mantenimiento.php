<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_mantenimiento extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mantenimiento');
        $this->load->model('m_tipoMantenimiento');
        $this->load->model('m_ciudad');
        $this->load->model('m_personal');
        $this->load->model('m_item');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }

    public function getAllMantenimiento()
    {
        $data['mantenimientos'] = $this->m_mantenimiento->getAllMantenimiento();
        $this->load->view('mantenimiento/v_lista_mantenimiento',$data);
    }

    public function crear()
    {
        //Envia datos de otras tablas a la vista de crear
        $data['ciudad']=$this->m_ciudad->getAllCiudad();
        $data['personal']=$this->m_personal->getAllPersonal();
        $this->load->view('mantenimiento/v_create_mantenimiento', $data);
    }

    public function createMantenimiento()
    {
        $tipoMantenimiento = $this->input->post('tipoMantenimiento');
        $item = $this->input->post('item');
        $ciudad = $this->input->post('ciudad');
        $personal = $this->input->post('personal');
        $fecha = $this->input->post('fecha');
        $frecuencia = $this->input->post('frecuencia');
        $descripcion = $this->input->post('descripcion');
        $estado = $this->input->post('estado');

        $this->m_mantenimiento->CreateMantenimiento($tipoMantenimiento, $item, $ciudad,$personal,$fecha,$frecuencia,$descripcion,$estado);

        $this->load->view('mantenimiento/v_create_mantenimiento');


    }

    public function listaMantenimiento()
    {
        $data['mantenimientos'] = $this->m_mantenimiento->getAllMantenimiento();
        $this->load->view('mantenimiento/v_lista_mantenimiento',$data);
    }
    public function edidMantenimiento()
    {
        $id_mantenimiento = $this->input->post('id');

        $data['mantenimiento'] = $this->m_mantenimiento->getMantenimientoById($id_mantenimiento);
        $this->load->view('mantenimiento/v_update_mantenimiento',$data);
    }
    public function updateMantenimiento()
    {
        $usuario = $this->input->post('usuario');
        $pass = $this->input->post('contrasena');
        $id =   $this->input->post('id_usuario');
        $this->m_tecnico->updateTecnico ($id, $usuario, $pass);
    }
    public function mapa()
    {
        $this->load->library('googlemaps');
        $this->googlemaps->initialize();
        $data['map']=$this->googlemaps->create_map();

        $this->load->view('mantenimiento/v_mapa-google',$data);
    }
    
    public function mapa_dos()
    {
        
        $this->load->view('mantenimiento/v_mapa-google_dos');
    }
    
    public function test()
    {
        
        $this->load->view('mantenimiento/test');
    }
}
?>

