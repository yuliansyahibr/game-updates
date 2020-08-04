<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->isLoggedIn();
		$this->load->model('user_m');
	}

	private function isLoggedIn()
	{
		if($this->session->userdata('id_user')) return true;
		else return false;
	}

	public function profile()
	{
		$id = $this->session->userdata('id_user');	
		
		$title = "Profile Page - GameUpdates";
		$this->load->view('templates/user_header', array('title' => $title));

		$data['user'] = $this->user_m->getUserById($id);

		$this->load->view('templates/top_panel');
		$this->load->view('profile', $data);
		$this->load->view('templates/footer');
	}

	public function update()
	{
		$id_user = $this->session->userdata('id_user');
		$input = $this->input->post();

		//image
        $img_ext = strtolower(pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION));
        if($img_ext != ''){
            $profile_pic = $input['username']. "." . $img_ext;
		}
		if($this->_uploadImage($profile_pic) != 'default.jpg'){
			$input += ['profile_pic' => $profile_pic];
		}

		// print_r($input);
		if($this->user_m->update($input, $id_user)) redirect(site_url('User/profile'));

		echo "Error";
	}

  	public function logout(){
		$this->session->sess_destroy();
		redirect('wiki/index');
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
