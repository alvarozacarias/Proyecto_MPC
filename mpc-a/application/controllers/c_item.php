<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_item extends CI_Controller {
    public function __construct() {
        parent::__construct();


        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }

    function createItem()
    {
        $this->load->view('item/v_create_item');
    }

}
?>

