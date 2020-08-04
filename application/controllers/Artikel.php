<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('artikel_models');
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

  private function loadArtikel($judul_artikel)
  {
    $this->load->model("artikel_models");
  }

  public function artikel($judul_artikel)
  {
    $title = "Artikel Game - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');
    $this->load->view('artikel/artikel_temp');
    $this->load->view('templates/footer');
  }

  public function getAllAction()
  {
    $title = "Action - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '1');
    $data['action'] = $this->artikel_models->showAllByGenre($where)->result();
    //ditampilin di detail artikel
    // $data['genres'] = $this->artikel_models->showGenres($where2)->result();
		$this->load->view('category/action', $data);

    $this->load->view('templates/footer');
  }

  public function getAllAdventure()
  {
    $title = "Adventure - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '2');
    $data['adventure'] = $this->artikel_models->showAllByGenre($where)->result();
    //ditampilin di detail artikel
    // $data['genres'] = $this->artikel_models->showGenres($where2)->result();
		$this->load->view('category/adventure', $data);

    $this->load->view('templates/footer');
  }

  public function getAllFps()
  {
    $title = "FPS - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '3');
    $data['fps'] = $this->artikel_models->showAllByGenre($where)->result();
		$this->load->view('category/fps', $data);

    $this->load->view('templates/footer');
  }

  public function getAllRpg()
  {
    $title = "RPG - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '4');
    $data['rpg'] = $this->artikel_models->showAllByGenre($where)->result();
		$this->load->view('category/rpg', $data);

    $this->load->view('templates/footer');
  }

  public function getAllSport()
  {
    $title = "Sports - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '5');
    $data['sport'] = $this->artikel_models->showAllByGenre($where)->result();
		$this->load->view('category/sport', $data);

    $this->load->view('templates/footer');
  }

  public function getAllFighting()
  {
    $title = "Fighting - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '6');
    $data['fighting'] = $this->artikel_models->showAllByGenre($where)->result();
		$this->load->view('category/fighting', $data);

    $this->load->view('templates/footer');
  }

  public function getAllRacing()
  {
    $title = "Racing - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '7');
    $data['racing'] = $this->artikel_models->showAllByGenre($where)->result();
		$this->load->view('category/racing', $data);

    $this->load->view('templates/footer');
  }

  public function getAllMmorpg()
  {
    $title = "MMORPG - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '8');
    $data['mmorpg'] = $this->artikel_models->showAllByGenre($where)->result();
		$this->load->view('category/mmorpg', $data);

    $this->load->view('templates/footer');
  }

  public function getAllSimulator()
  {
    $title = "Simulator - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '9');
    $data['simulator'] = $this->artikel_models->showAllByGenre($where)->result();
		$this->load->view('category/simulator', $data);

    $this->load->view('templates/footer');
  }

  public function getAllStrategy()
  {
    $title = "Strategy - GameUpdates";
    $this->loadHeader($title);
    $this->load->view('templates/top_panel');

    // Join tabel games, games_genres,developer, game_platforms
    $where = array('gen.id_genre' => '10');
    $data['strategy'] = $this->artikel_models->showAllByGenre($where)->result();
		$this->load->view('category/strategy', $data);

    $this->load->view('templates/footer');
  }
}


?>
