<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 public function __construct()
        {
                parent::__construct();
                $this->load->model("product_m");
        }
	public function index()
	{
		$produk = $this->product_m->index();
		$data = array('produk' =>$produk  );
		$this->load->view('welcome_message',$data);
	}
	public function load()
	{
		$produk = $this->product_m->load();
		$data = array('produk' =>$produk  );
		$this->load->view('tampil',$data);
	}
}
