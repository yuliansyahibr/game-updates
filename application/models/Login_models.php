<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_models extends CI_Model {
  public function index()
  {
    $this->load->view('home');
  }

  function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
}
