<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// Model untuk tabel user dan admin
class User_M extends CI_Model {

  private $table_name;

  public function __construct($table='user')
  {
    parent::__construct();
    $this->table_name =  $table ;
  }


  public function getAllUsers()
  {
    return $this->db->get($this->table_name)->result();
  }

  public function getUserId($username)
  {
    return $this->db->get('user', array('username' => $username))->row()->id_user;
  }

  public function getUser($username, $password)
  {
    $data = [
      'username' => $username,
      'password' => $password  
    ];

    return $this->db->get_where($this->table_name, $data)->row();
  }

  public function getUserById($id_user)
  {
    $where = array('id_user' => $id_user);

    return $this->db->get_where($this->table_name, $where)->row();
  }

  public function isAdmin($id_user)
  {
    $data = [
      'id_user' => $id_user 
    ];

    $result = $this->db->get_where('admin', $data)->row();

    if($result) return true;
    else return false;
  }

  private function findUsername($username)
  {
    $data = [
      'username' => $username
    ];

    // $result = $this->db->get_where($this->table_name, $data)->num_rows();

    //count row
    $result = $this->db->where($data)->count_all_results($this->table_name);

    return $result;
  }

  //create new user
  public function insert($data)
  {

    if($this->findUsername($data['username'])>0) return false;

    $this->db->insert($this->table_name, $data);
    return true;
  }

  public function update($data, $id_user)
  {
    if($this->findUsername($data['username'])>0) return false;

    $this->db->set($data)->where('id_user', $id_user)->update('user');
    return true;
  }

}
