<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_transaksi extends CI_Model
{
    public function __construct() {
  		parent::__construct();

  	}

    public function getTransaksiWhere($id)
    {
        $this->db->select ( 'pesanan.*,cart.*,datauser.*' );
        $this->db->from ( 'pesanan as pesanan' );
        $this->db->join ( 'cart cart', 'cart.id_pesanan = pesanan.id');
        $this->db->join ( 'datauser datauser ', 'datauser.email = pesanan.emailuser');
        $this->db->where ( 'pesanan.id', $id);
        $query = $this->db->get ();
        return $query->row();
    }

    function getTransaksi()
    {
        $this->db->select('*');
        $this->db->from('pesanan');
        $this->db->join('cart', 'cart.id_transaksi=pesanan.id', 'left');
        $this->db->join('datauser', 'datauser.email=pesanan.emailuser', 'left');

        $this->db->order_by('pesanan.tanggal_pesan','asc');
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
          return $query->result_array();
        }
        else
        {
          return false;
        }
    }

}
