<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentikasi extends CI_Controller {

    public function __construct()
	{
        parent::__construct();
        if($this->isLoggedIn()) redirect('Wiki');
        $this->load->model('user_m');
    }
    
    private function isLoggedIn()
    {
        if($this->session->userdata('username')) return true;
        else return false;
    }


    public function verify(){

        //get post values
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // get user
        $user = $this->user_m->getUser($username, $password);

        // if user null
        if(empty($user)){
            $notFound = true;
            redirect("wiki/login/$notFound");
        }

        $this->session->set_userdata('id_user', $user->id_user);
        $this->session->set_userdata('username', $username);

        //cek admin
        if($this->user_m->isAdmin($user->id_user)) {
            // $this->session->set_userdata('id_user');
            $this->session->set_userdata('level', 'admin');
            redirect(site_url("Admin"));
        }

        $this->session->set_userdata('level', 'user');
        redirect(site_url());

    }

    public function register(){

        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $profile_pic = '';

        //image
        $img_ext = strtolower(pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION));
        if($img_ext != ''){
            $profile_pic = $username. "." . $img_ext;
        }

        $data = [
            'username' => $username,
            'password' => $password,            
            'email' => $email,
            'nama' => $nama,
            'profile_pic' => $profile_pic
        ];

        //username sudah ada di database
        if(!$this->user_m->insert($data)){
            echo "Username sudah ada";
        }else{
            // get user
            $user = $this->user_m->getUser($username, $password);
            
            //UPLOAD FILE KE DIREKTORI
            $this->_uploadImage($profile_pic);

            //set session
            $this->session->set_userdata('id_user', $user->id_user);
            // $this->session->set_userdata('id_user', $this->user_m->getUserId($username));
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('level', 'user');
            //redirect
            redirect(site_url());
        }
    }

    private function _uploadImage($img_name)
    {
        $config['upload_path']          = './images/profile_pics/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $img_name;
        $config['overwrite']			= true;
        $config['max_size']             = 500; 
        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('profile_pic')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }



}


?>