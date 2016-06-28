<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_tipoMantenimiento extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getAllMantenimiento(){
        $this->db->select('*');
        $this->db->from('TipoMantenimiento');

        $query = $this->db->get();

        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return null;
        }
    }
}
?>

