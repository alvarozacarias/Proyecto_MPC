<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_personal extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_personal');
        $this->load->model('m_ciudad');
        //$this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }

    public function getAllPersonal(){
        $data['personales'] = $this->m_personal->getAllPersonal();
        $this->load->view('personal/v_lista_personal',$data);
    }

    //metodo para obtener personal por ciudad
    public function getAllPersonalByCiudad($idCiudad)
    {
        $data['PersByCiu']=$this->m_personal->getAllPersonalByCiudad($idCiudad);
        $this->load->view('mantenimiento/v_create_mantenimiento',$data);
    }
    //
    public function createPersonal(){
        $data['ciudad']=$this->m_ciudad->getAllCiudad();
        $this->load->view('personal/v_create_personal',$data);
    }

    public function createPersonalAhora(){
        $usuario = $this->input->post('usuario');
        $pass = $this->input->post('pass');
        $perfil = $this->input->post('perfil');

        $elemento = $this->m_personal->Create_Usuario($usuario, $pass, $perfil);

        $this->load->view('personal/v_create_personal');
    }

    public function listaPersonal(){
        $data['personales'] = $this->m_personal->getAllPersonal();
        $this->load->view('personal/v_lista_personal',$data);
    }

    public function edidPersonal(){
        $id_usuario = $this->input->post('id');

        $data['usuario'] = $this->m_personal->getUsuarioById($id_usuario);
        $this->load->view('personal/v_update_personal',$data);
    }
    public function updatePersonal()
    {
        $usuario = $this->input->post('usuario');
        $pass = $this->input->post('contrasena');
        $id =   $this->input->post('id_usuario');
        $this->m_personal->updatePersonal ($id, $usuario, $pass);
    }
}
?>

