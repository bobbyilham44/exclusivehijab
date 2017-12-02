<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_inbox extends CI_Model
{
    public function __construct() {
  		parent::__construct();

  	}

    public function gettable_sort($tablename, $order_by){
      return $this->db->query("SELECT * FROM $tablename ORDER BY $order_by ASC")->result_array();
    }

    public function delete_data($id)
    {
      return $this->db->delete('inbox', array('ib_nama'=>$id));
    }

}
