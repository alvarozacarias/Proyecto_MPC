<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_tecnico extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_tecnico');        
        //$this->load->library(array('session','form_validation'));
	$this->load->helper(array('url','form'));
	$this->load->database('default');
    }

    public function getAllTecnico(){
        $data['tecnicos'] = $this->m_tecnico->getAllTecnico();   
        $this->load->view('tecnico/v_lista_tecnicos',$data);
    }
    
    public function createTecnico(){
        $this->load->view('tecnico/v_create_tecnico');
    }
    
    public function createpacienteAhora(){
        $usuario = $this->input->post('usuario');
        $pass = $this->input->post('pass');
        $perfil = $this->input->post('perfil');
        
        $elemento = $this->m_tecnico->Create_Usuario($usuario, $pass, $perfil);
         
        $this->load->view('tecnico/v_create_tecnico');
    }
    
    public function listaUsuarios(){
         $data['tecnicos'] = $this->m_tecnico->getAllTecnico();   
        $this->load->view('tecnico/v_lista_tecnicos',$data);
    }
    
    public function edidTecnico(){
        $id_usuario = $this->input->post('id');
        
        $data['usuario'] = $this->m_tecnico->getUsuarioById($id_usuario);
        $this->load->view('tecnico/v_update_ususario',$data);
    }
    public function updateTecnico()
    {
        $usuario = $this->input->post('usuario');
        $pass = $this->input->post('contrasena');
        $id =   $this->input->post('id_usuario');
        $this->m_tecnico->updateTecnico ($id, $usuario, $pass);
    }
            
}
?>

