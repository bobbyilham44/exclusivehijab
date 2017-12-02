<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

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
			$this->load->model('M_inbox');
			$this->load->model('M_admin');
  }

	public function index()
	{
		$data['notif'] = "<div class='alert alert-info fade in'>
										 Masukkan Username dan Password</div>";
		$this->load->view('admin/login', $data);
	}

	public function login(){
    if(isset($_POST['login']))
        {
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->M_admin->login($username,$password);
            if($hasil['akses']==TRUE)
            {
								$this->session->set_flashdata('sukses', 'Login Berhasil');
								$this->session->set_userdata($hasil);
								//var_dump($hasil);die();
                redirect ('c_admin/beranda', $data);
            } else{
                $data['notif'] = "<div class='alert alert-danger fade in'>
			                           <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			                           Login Gagal</div>";
                $this->load->view('admin/login', $data);
            }
        }
  }

	public function beranda(){
		if($this->session->userdata('akses'))
        {
					$this->load->view('admin/header');
			    $this->load->view('admin/dashboard');
			    $this->load->view('admin/footer');
        }else
        {
            redirect('admin/dashboard');
        }
  }

	public function logout()
	{
				$this->session->sess_destroy();
				redirect('c_admin');
	}

	public function readProduk(){
		if($this->session->userdata('akses'))
				{
					$this->load->view('admin/header');
					$data['produk'] = $this->M_admin->gettable_sort("produk", "id_produk");
					$this->load->view('admin/produk/readProduk', $data);
					$this->load->view('admin/footer');
				}else
				{
						redirect('c_admin');
				}
	}

	public function createProduk(){
		if($this->session->userdata('akses'))
    {
				$target_Path = NULL;
				if ($_FILES['image']['name'] != NULL)
				{
						$target_Path = "assets/img/";
						$string = basename( $_FILES['image']['name'] );
						$string = str_replace(" ","-", $string);
						$target_Path = $target_Path.$string;
				}

			if($target_Path!=NULL){
				$data = array(
					'ID_PRODUK'=> $this->input->post('id_produk'),
					'NAMA_PRODUK'=> $this->input->post('nama_produk'),
					'HARGA'=> $this->input->post('harga'),
					'IMAGE' => $target_Path,
					'DESKRIPSI' => $this->input->post('deskripsi'));

					$query = $this->Model_produk->insert('produk', $data);
			}

			if($query)
			{
				if ($target_Path != NULL) {
					move_uploaded_file( $_FILES['image']['tmp_name'], $target_Path );
				}
				$this->session->set_flashdata('suksesproduk', '<div class="col-sm-12 alert alert-success fade in">
												 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
												 Produk Berhasil Disimpan</div>');
				redirect ('c_admin/readProduk');
			}else
			{
				$this->session->set_flashdata('gagalproduk', '<div class="col-sm-12 alert alert-danger fade in">
												 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
												 Produk Gagal Disimpan</div>');
				redirect ('c_admin/createProduk');
			}
		}else
		{
				redirect('c_admin');
		}
	}

	public function editProduk($id){
		if($this->session->userdata('akses'))
				{
					$this->load->view('admin/header');
					$data['edit'] = $this->M_admin->get_data_id($id);
					$this->load->view('admin/produk/updateProduk', $data);
					$this->load->view('admin/footer');
				}else
				{
						redirect('c_admin');
				}
	}

	public function updateProduk($id){
		if($this->session->userdata('akses'))
    {
			$target_Path = NULL;
			if ($_FILES['image']['name'] != NULL)
			{
				$target_Path = "assets/img/";
				$string = basename( $_FILES['image']['name'] );
				$string = str_replace(" ","-", $string);
				$target_Path = $target_Path.$string;
			}
			if ($_FILES['image']['name'] == NULL){
				$data = array(
					'NAMA_PRODUK'=> $this->input->post('nama_produk'),
					'HARGA'=> $this->input->post('harga'),
					'DESKRIPSI' => $this->input->post('deskripsi'));

				$query = $this->db->where('id_produk', $id);
				$query = $this->db->update('produk', $data);
				if($query)
				{
					$this->session->set_flashdata('suksesproduk', '<div class="col-sm-12 alert alert-success fade in">
													 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
													 Produk Berhasil Diupdate</div>');
					redirect ('C_admin/readProduk');
				}
				else
				{
					$this->session->set_flashdata('gagalproduk', '<div class="col-sm-12 alert alert-danger fade in">
													 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
													 Slider Gagal Disimpan</div>');
					redirect ('c_admin/editProduk/$id');
				}
			}
			if($target_Path!=NULL)
			{
				$data = array(
					'NAMA_PRODUK'=> $this->input->post('nama_produk'),
					'HARGA'=> $this->input->post('harga'),
					'IMAGE' => $target_Path,
					'DESKRIPSI' => $this->input->post('deskripsi'));

				$query = $this->db->where('id_produk', $id);
				$query = $this->db->update('produk', $data);
				if($query)
				{
					if ($target_Path != NULL) {
						move_uploaded_file( $_FILES['image']['tmp_name'], $target_Path );
					}
					$this->session->set_flashdata('suksesproduk', '<div class="col-sm-12 alert alert-success fade in">
													 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
													 Produk Berhasil Diupdate</div>');
					redirect ('c_admin/readProduk');
				}
				else
				{
					$this->session->set_flashdata('gagalproduk', '<div class="col-sm-12 alert alert-danger fade in">
													 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
													 Produk Gagal Disimpan</div>');
					redirect ('c_admin/editProduk/$id');
				}
			}
		} else
		{
				redirect('c_admin');
		}
	}

	public function hapusProduk($id){
		if($this->session->userdata('akses'))
		{
			$this->M_admin->delete_data($id);
			redirect('c_admin/readProduk');
		}else
		{
				redirect('c_admin');
		}
	}

	public function readPesan(){
		if($this->session->userdata('akses'))
				{
					$this->load->view('admin/header');
					$data['pesan'] = $this->M_inbox->gettable_sort('inbox', 'ib_time');
					$this->load->view('admin/pesan/readPesan', $data);
					$this->load->view('admin/footer');
				}else
				{
						redirect('c_admin');
				}
	}

	public function hapusPesan($id){
		if($this->session->userdata('akses'))
		{
			$this->M_inbox->delete_data($id);
			redirect('c_admin/readPesan');
		}else
		{
				redirect('c_admin');
		}
	}

	public function insertPesan() {
		$this->form_validation->set_rules('email', 'EMAIL', 'required');
		$this->form_validation->set_rules('nama', 'NAMA', 'required');
		$this->form_validation->set_rules('judul', 'JUDUL', 'required');
		$this->form_validation->set_rules('konten', 'KONTEN', 'required');
			if($this->form_validation->run() === FALSE){
				//redirect('beranda');
				echo '<script language="javascript">';
				echo 'alert("Gagal mengirim pesan. Ada field yang kosong");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}else{
				$nama		= $this->input->post('nama');
				$email		= $this->input->post('email');
				$judul	= $this->input->post('judul');
				$konten		= $this->input->post('konten');
				$status = "UNREAD";

				$data=array(
					'STATUS' => $status,
					'NAMA' => $nama,
					'EMAIL' => $email,
					'JUDUL' => $judul,
					'KONTEN' => $konten
					);
				$res=$this->Model_pesan->insert('pesan', $data);
				echo '<script language="javascript">';
				echo 'alert("Pesan berhasil dikirim");';
				echo 'window.history.go(-1);';
				echo '</script>';
			}

	}

}
