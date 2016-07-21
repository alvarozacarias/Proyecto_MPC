<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_codigoQR extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getAllItemCodigoQR()
    {
        $this->db->select('i.id, i.nombreItem, e.nombreEntidad, i.direccion, i.colorFO' );
        $this->db->from('item as i');
        $this->db->join('entidad as e','i.idEntidad=e.id','INNER');

        $query = $this->db->get();

        if ($query->num_rows() > 0){
            return $query->result();
        }else{
            return null;
        }
    }
    public function getItemCodigoQRById($id){
        $this->db->select('*');
        $this->db->from('item as i');
        $this->db->join('entidad as ide',' i.identidad = ide.id' ,'INNER');
        $this->db->where('i.id',$id);
        $query = $this->db->get();

        if ($query->num_rows() > 0){
            return $query->row();
        }else{
            return null;
        }
    }
}
?>





