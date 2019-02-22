<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_m extends CI_Model {


	public function index()
	{

		 $query = $this->db->get('products', 4);
                return $query->result();
	}
	public function load()
	{
		$tambah=$_POST['tambah'];
		$query = $this->db->get('products',$tambah);
                return $query->result();
	}
}
