<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_personal extends CI_Model {
    public function __construct() {
		parent::__construct();
	}
        
    public function getAllPersonal(){
        $this->db->select('*');
        $this->db->from('personal');
               
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return null;
        }
    }
    public function getAllPersonalByCiudad($idCiudad)
    {
        $this->db->select('*');
        $this->db->from('Personal');
        $this->db->where('idCiudad',$idCiudad);
        $query=$this->db->get();
        if($query->num_rows()>0)
        {
            return $query->row();
        }
        else
        {
            return null;
        }
    }
    
    public function Create_Personal($usuario, $password, $perfil){
        $data = array(
            'USUARIO' => $usuario,
            'CONTRASENA' => $password,
            'PERFIL' => $perfil
        );
        return $this->db->insert('usuarios', $data);
    }
    
    public function getPersonalById($id){
        $this->db->select('*');
        $this->db->from('personal');
        $this->db->where('id',$id);
               
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return null;
        }
    }
    
    public function updatePersonal ($id, $usuario, $contrasena){
        
         $data = array(            
            'USUARIO' => $usuario,
            'CONTRASENA' => $contrasena
        );
        $this->db->where('id', $id);
        $this->db->update('personal', $data);
    }

    // aqui datos de otras tablas

}
?>

