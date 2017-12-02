<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_transaksi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
  parent::__construct();
			$this->load->model('M_transaksi');
  }

	public function index()
	{
		if($this->session->userdata('akses'))
				{
					$this->load->view('admin/header');
					$data['transaksi'] = $this->M_transaksi->getTransaksi();
					$this->load->view('admin/transaksi/readTransaksi', $data);
					$this->load->view('admin/footer');
				}else
				{
						redirect('c_transaksi');
				}
	}

	public function detailTransaksi($id){
		if($this->session->userdata('akses'))
				{
					$this->load->view('admin/header');
					$data['edit'] = $this->M_transaksi->getTransaksiWhere($id);
					$this->load->view('admin/transaksi/updateTransaksi', $data);
					$this->load->view('admin/footer');
				}else
				{
						redirect('admin/dashboard');
				}
	}

}
