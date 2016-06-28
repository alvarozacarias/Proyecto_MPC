<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_ciudad extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getAllCiudad(){
        $this->db->select('*');
        $this->db->from('Ciudad');

        $query = $this->db->get();

        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return null;
        }
    }
}
?>

