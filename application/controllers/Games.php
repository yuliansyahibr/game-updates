<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('games_m');
  }

  private function loadHeader($title='')
  {
    $data['title'] = $title;
    if($this->isLoggedIn()){
      $this->load->view('templates/user_header', $data);
    }else{
      $this->load->view('templates/header', $data);
    }
  }

  private function isLoggedIn()
  {
    if($this->session->userdata('username')) return true;
    else return false;
  }

  public function artikel($judul_artikel='Final_Fantasy_VII')
  {
    // $this->load->model('games_m');
    $result = $this->games_m->getArtikel($judul_artikel);
    $result['jumlah_komentar'] = count($result['komentar']);

    if($result['jumlah_komentar']){
      // print_r($result);
      // $users=array();
      // foreach ($result['komentar'] as $item) {
      //   $user=$this->komentar($item->id_user);
      // }
      // echo "<pre>";
      for ($i=0; $i < $result['jumlah_komentar']; $i++) { 
        $user=$this->user($result['komentar'][$i]->id_user);
        $result['komentar'][$i]->user = $user;
        // print_r($result['komentar'][$i]->user);
      }

    }

    // print_r($result);
    $title = "Artikel Game - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel', array('idArtikel' => $result['artikel']->id_artikel));
    $this->load->view('artikel/artikel_temp', $result);
    $this->load->view('templates/footer');
  }

  public function edit($id_artikel)
  {
    if(!$this->isLoggedIn()) redirect('Wiki/login');


    $data = $this->games_m->getArtikel($id_artikel, 'id_artikel', false);

    $data['devs'] = $this->games_m->getAllDevelopers();
    $data['gens'] = $this->games_m->getAllGenres();
    $data['plats'] = $this->games_m->getAllPlatforms();

    $this->load->view('artikel/editor', $data);

    // $this->load->view('editor/css');
    // $this->load->view('editor/froala');
    // $this->load->view('editor/js');
  }

  public function saveEdit()
  {

    $input['artikel'] = [
        'konten_artikel' => $this->input->post('konten_artikel')
        // 'id_user' => $this->input->post('id_user')
    ];

    $id_artikel=  $this->input->post('id_artikel');
    $id_user = $this->session->userdata('id_user');
  

    $this->games_m->updateKontenArtikel($input, $id_artikel, $id_user);

    // print_r($input);
    redirect(site_url('Games/artikel/'.$this->input->post('judul_artikel')));
  }

  public function preview($id_artikel='')
  {
    // $data = $this->input->post();

    // print_r($data);

    // $id_artikel = $this->input->get('id_artikel');
    $data=array();
    if($id_artikel) $data = $this->games_m->getArtikel($id_artikel, 'id_artikel', false);
    else $data += ['author' => $this->session->userdata('username')];

    // $data['artikel']['artikel']->konten_artikel = $this->input->get('konten_artikel');

    $this->load->view('artikel/live_preview', $data);

  }

  private function user($id_user)
  {
    $this->load->model('user_m');

    return $this->user_m->getUserById($id_user);
  }

  //insert new article comment
  public function komentar()
  {
    if(empty($this->session->userdata('username'))) {
      redirect(site_url('Wiki/Login'));
      die();
    }

    $input = $this->input->post();

    print_r($input);

    $article_page = $input['judul_artikel'];
    unset($input['judul_artikel']);

    $response = $this->games_m->insertKomentar($input);

    redirect(site_url("Games/artikel/".$article_page));
    
  }

}

?>