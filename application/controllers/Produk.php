<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	public function index(){
        // echo "tes aja ini";
        $data['page']="produk/form";
        $this-> load ->view('main',$data);
		}

			public function submit()

		{
			$this->load->model('produk_model');

			$produk = $this->input->post();
			// $pelanggan['pelangganId'] = "P002";

			$this->produk_model->add($produk);
		}
}
