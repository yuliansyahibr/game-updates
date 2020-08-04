<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->isAdmin();
        $this->load->model('games_m');
    }

    public function index()
    {        
        $this->dashboard();                
    }

    private function isAdmin()
	{
		if($this->session->userdata('level') != 'admin') redirect(base_url());
		// else return false;
    }
    
    public function post()
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        // $this->load->model('games_m');
        $result['artikel'] = $this->games_m->getAllArtikel();
        $result['jumlah_artikel'] = count($result['artikel']);
        
        for ($i=0; $i < $result['jumlah_artikel']; $i++) { 
            $artikel = $this->games_m->getArtikel($result['artikel'][$i]->judul_artikel, 'judul_artikel');
            $result['artikel'][$i]->detail = (object) $artikel;
        }

        // print_r($result);
        $this->load->view('admin/dashboard', $result);
    }

    public function create()
    {
        $data['devs'] = $this->games_m->getAllDevelopers();
        $data['gens'] = $this->games_m->getAllGenres();
        $data['plats'] = $this->games_m->getAllPlatforms();

        $this->load->view('admin/editor', $data);
    }

    public function edit($id_artikel)
    {
        // $this->load->model('games_m');
        $data = $this->games_m->getArtikel($id_artikel, 'id_artikel', false);

        $data['devs'] = $this->games_m->getAllDevelopers();
        $data['gens'] = $this->games_m->getAllGenres();
        $data['plats'] = $this->games_m->getAllPlatforms();

        // echo "<pre>";
        // print_r($data);
        $this->load->view('admin/editor', $data);
    }
    public function delete($id_game)
    {
        $this->games_m->deleteArtikel($id_game);

        redirect(site_url('Admin'));
    }

    public function preview()
    {
        // $data = $this->input->post();

        // print_r($data);

        $this->load->view('admin/live_preview');
    }

    public function publish()
    {

        $judul_artikel = str_replace(array(' ', ':'), '_', $this->input->post('judul_game'));
        $img_ext = strtolower(pathinfo($_FILES['game_img']['name'], PATHINFO_EXTENSION));
        $game_img='';
        if($img_ext != ''){
            $game_img = $judul_artikel. "." . $img_ext;
        }

        $input['game'] = [
            'judul_game' => $this->input->post('judul_game'),
            'release_date' => $this->input->post('release_date'),
            'game_img' => $this->_uploadImage($game_img),
            'id_developer' => $this->input->post('id_developer')
        ];

        $input['artikel'] = [
            'judul_artikel' => $judul_artikel,            
            'konten_artikel' => $this->input->post('konten_artikel'),
            'id_user' => $this->input->post('id_user')
        ];

        $input['platforms'] = array();
        if(!empty($this->input->post('platforms'))){
            foreach ($this->input->post('platforms') as $item) {
                $input['platforms'][] = $item;
            }
        }

        $input['genres'] = array();
        if(!empty($this->input->post('genres'))){
            foreach ($this->input->post('genres') as $item) {
                $input['genres'][] =  $item;
            }
        }

        // $this->load->model('games_m');

        // jika ada inputan id_game, update
        if($this->input->post('id_game')){
            
            $id_game = $this->input->post('id_game');
            $id_artikel=  $this->input->post('id_artikel');
            
            if($input['game']['game_img'] == 'default.jpg') unset($input['game']['game_img'] );

            $this->games_m->updateArtikel($input, $id_game, $id_artikel);
            $this->games_m->updatePlatforms($input['platforms'], $id_game);
            $this->games_m->updateGenres($input['genres'], $id_game);

        }else{
            $id_game = $this->games_m->insertGame($input['game']);
            $input['artikel'] += [ 'id_game' =>  $id_game];
            $this->games_m->insertArtikel($input['artikel']);

            $this->games_m->insertPlatforms($input['platforms'], $id_game);
            $this->games_m->insertGenres($input['genres'], $id_game);

        }

        redirect(site_url('Admin'));


        // echo '<pre>';
        // print_r($this->input->post());
        // print_r($input);
    }

    private function _uploadImage($img_name)
    {
        $config['upload_path']          = './images/articles-tn/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['file_name']            = $img_name;
        $config['overwrite']			= true;
        $config['max_size']             = 500; 
        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('game_img')) {
            return $this->upload->data("file_name");
        }
        
        return "default.jpg";
    }

    public function _editorImg()
    {
        
    }

    public function test()
    {
        // $data = $this->input->post();
        $data = [
            'eee' => 'aaa',
            'ccc' => 'bbb<br>'
        ];
        print_r($data);
        $data += ['ddd' => 'ggg'];
        print_r($data);

    }

}

?>
