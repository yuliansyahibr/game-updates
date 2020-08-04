<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_models extends CI_Model {
  public function index()
  {
    $this->load->view('home');
  }

  function showGenres($where) {
    // Ditampilin di detail artikel
    $this->db->select('*');
    $this->db->from('genres as gen');
    $this->db->join('game_genres as gg', 'gg.id_genre = gen.id_genre');
    $this->db->join('games as g', 'g.id_game = gg.id_game');
    $this->db->where($where);
    $query = $this->db->get();

    return $query;
    if ($query->num_rows() >0){
        foreach ($query as $data) {
            $results = $data;
        }
    return $results;
    }
  }

  function showAllByGenre($where){
    //Menampilkan Judul artikel, judul game, nama developer
    $this->db->select('a.judul_artikel, g.judul_game, d.nama_developer, p.nama_platform');
    $this->db->from('genres as gen');
    $this->db->join('game_genres as gg', 'gg.id_genre = gen.id_genre');     //Join 1 (tabel game_genres)
    $this->db->join('games as g', 'g.id_game = gg.id_game');                //Join 2 (tabel games)
    $this->db->join('developers as d', 'd.id_developer = g.id_developer');  //Join 3 (tabel developers)
    $this->db->join('game_platforms as gp', 'gp.id_game = g.id_game');      //Join 4 (tabel game_platforms)
    $this->db->join('platforms as p', 'p.id_platform = gp.id_platform');    //Join 5 (tabel platforms)
    $this->db->join('artikel as a', 'a.id_game = g.id_game');               //Join 6 (tabel artikel)
    $this->db->where($where);         //Kondisi dimana id_genre = 3 (FPS)
    // $this->db->group_by('a.judul_artikel');
    $query = $this->db->get();

    // return $query;

    if ($query->num_rows() > 0){
        foreach ($query as $data) {
            $results = $data;
        }
    return $results;
    }
	}
}
