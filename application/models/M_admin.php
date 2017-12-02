<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_admin extends CI_Model
{
    public function __construct() {
  		parent::__construct();

  	}

    function login($username, $password)
    {
        $cek = $this->db->get_where('admin', array('username'=>$username, 'password'=>md5($password)));
        if($cek->num_rows()>0)
        {
          $data['akses'] = TRUE;
          $data['username'] = $cek->row()->username;
          $data['type'] = 'admin';
        } else
        {
          $data['akses'] = FALSE;
        }
          return $data;
    }

    public function gettable_sort($tablename, $order_by){
      return $this->db->query("SELECT * FROM $tablename ORDER BY $order_by ASC")->result_array();
    }

    public function get_data_id($id)
    {
      $query = $this->db->get_where('produk', array('id_produk' => $id));
      return $query->row_array();
    }

    public function delete_data($id)
    {
      return $this->db->delete('produk', array('id_produk'=>$id));
    }

}
