<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan extends CI_Controller {

		public function index(){


			$data['page'] = "pelanggan/form";
			$this->load->view('main',$data);
		}

		public function submit()

		{
			$this->load->model('pelanggan_model');
			$this->load->helper('autoid');
			$table = 'pelanggan';
			$fields = 'pelangganId';
			$inisial = 'PL';

			$pelanggan = $this->input->post();
			$pelanggan['pelangganId'] = get_id($fields, $table, $inisial);

			$this->pelanggan_model->add($pelanggan);
		}

		public function show_list_pelanggan()
		{
			#code...
			$data['page'] = "pelanggan/list_pelanggan";
			$this->load->model('pelanggan_model');
			$data["pelanggan"] = $this->pelanggan_model->get_pelanggan();
			//$this->load->view('pelanggan/list_pelanggan',$data);

			$this->load->view('main',$data);
		}

		public function hapus_pelanggan()
		{
			$this->load->model('pelanggan_model');
			$id_pelanggan = $this->uri->segment(3);
			$this->pelanggan_model->delete_pelanggan($id_pelanggan);		
		}

		public function edit_pelanggan()
		{
			$id_pelanggan = $this->uri->segment(3);
			echo $id_pelanggan;
		}	
}
