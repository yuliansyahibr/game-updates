<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games_M extends CI_Model {

  // ----------------------------------------------------------//
  //----------------------------Game------------------------//

  // ------GET ALL -------//
  public function getAllDevelopers()
  {
      return $this->db->get('developers')->result();
  }
  public function getAllGenres()
  {
      return $this->db->get('genres')->result();
  }
  public function getAllPlatforms()
  {
      return $this->db->get_where('platforms')->result();
  }

  public function getByGenre($genre)
  {

    $where = array('gen.id_genre' => $this->getIdGenre($genre));

    //Menampilkan Judul artikel, judul game, nama developer
    $this->db->select('a.judul_artikel, a.konten_artikel, g.judul_game, d.nama_developer');
    $this->db->from('genres as gen');
    $this->db->join('game_genres as gg', 'gg.id_genre = gen.id_genre');     //Join 1 (tabel game_genres)
    $this->db->join('games as g', 'g.id_game = gg.id_game');                //Join 2 (tabel games)
    $this->db->join('developers as d', 'd.id_developer = g.id_developer');    //Join 5 (tabel platforms)
    $this->db->join('artikel as a', 'a.id_game = g.id_game');               //Join 6 (tabel artikel)
    $this->db->where($where);   
    $this->db->group_by('g.id_game');      //Kondisi dimana id_genre = 3 (FPS)
    // $this->db->group_by('a.judul_artikel');
    $query = $this->db->get();

    // return $query;

    // if ($query->num_rows() > 0){
    //     foreach ($query as $data) {
    //         $results = $data;
    //     }
    //   return $results;
    // }

    return $query->result();
  }

  public function getByPlatform($platform)
  {

    $where = array('p.id_platform' => $platform);

    //Menampilkan Judul artikel, judul game, nama developer
    $this->db->select('a.judul_artikel, a.konten_artikel, g.judul_game, d.nama_developer');
    $this->db->from('platforms as p');
    $this->db->join('game_platforms as gp', 'gp.id_game = p.id_platform');      //Join 1 (tabel game_genres)
    $this->db->join('games as g', 'g.id_game = gp.id_game');                //Join 2 (tabel games)
    $this->db->join('developers as d', 'd.id_developer = g.id_developer');    //Join 5 (tabel platforms)
    $this->db->join('artikel as a', 'a.id_game = g.id_game');               //Join 6 (tabel artikel)
    $this->db->where($where);   
    $this->db->group_by('g.id_game');      //Kondisi dimana id_genre = 3 (FPS)
    // $this->db->group_by('a.judul_artikel');
    $query = $this->db->get();

    return $query->result();
  }

  public function getByDeveloper($dev)
  {

    $where = array('d.id_developer' => $dev);

    //Menampilkan Judul artikel, judul game, nama developer
    $this->db->select('a.judul_artikel, a.konten_artikel, g.judul_game, d.nama_developer');
    $this->db->from('developers as d');    //Join 1 (tabel game_genres)
    $this->db->join('games as g', 'g.id_developer = d.id_developer');    //Join 5 (tabel platforms)
    $this->db->join('artikel as a', 'a.id_game = g.id_game');               //Join 6 (tabel artikel)
    $this->db->where($where);   
    // $this->db->group_by('g.id_game');   
    // $this->db->group_by('a.judul_artikel');
    $query = $this->db->get();

    return $query->result();
  }

  public function searchByTitle($judul)
  {

    $where = "judul_game LIKE ('%{$judul}%')";

    //Menampilkan Judul artikel, judul game, nama developer
    $this->db->select('a.judul_artikel, a.konten_artikel, g.judul_game, d.nama_developer');
    $this->db->from('developers as d');    //Join 1 (tabel game_genres)
    $this->db->join('games as g', 'g.id_developer = d.id_developer');    //Join 5 (tabel platforms)
    $this->db->join('artikel as a', 'a.id_game = g.id_game');               //Join 6 (tabel artikel)
    $this->db->where($where);   
    // $this->db->group_by('g.id_game');   
    // $this->db->group_by('a.judul_artikel');
    $query = $this->db->get();

    return $query->result();
  }

  // ----------------SEARCH -----------------//
  public function searchByJudul($judul)
  {
    $where = "judul_game LIKE ('%{$judul}%')";
    return $this->db->get_where('games', $where)->result();
  }

  // ----------- GET ------ //
  public function getGame($id_game='')
  {
      $where = array('id_game' => $id_game);

      return $this->db->get_where('games', $where)->row();
  }
  public function getUpcomingGame()
  {
    $where="release_date > DATE(NOW())";
    return $this->db->order_by('release_date', 'DESC')->get_where('games', $where)->row();
  }
  public function getNewGames()
  {
    $where="release_date <= DATE(NOW())";
    return $this->db->order_by('release_date', 'DESC')->limit(2)->get_where('games', $where)->result();
  }
  public function getDeveloper($id_developer='')
  {
      $where = array('id_developer' => $id_developer);

      return $this->db->get_where('developers', $where)->row();
  }
 
  public function getGameGenres($id_game='')
  {
      $where = array('id_game' => $id_game);

      $id_genres = $this->db->select('id_genre')->get_where('game_genres', $where)->result();

      $genres=array();
      foreach ($id_genres as $item) {
          $genres[] = $this->db->get_where('genres', array('id_genre' => $item->id_genre))->row();
      }

      return $genres;
  }
  public function getGamePlatforms($id_game='')
  {
      $where = array('id_game' => $id_game);

      $id_platforms = $this->db->select('id_platform')->get_where('game_platforms', $where)->result();

      $platforms=array();
      foreach ($id_platforms as $item) {
          $platforms[] = $this->db->get_where('platforms', array('id_platform' => $item->id_platform))->row();
      }

      return $platforms;
  }

  public function getIdGenre($genre)
  {
    $result = $this->db->get_where('genres', array('nama_genre' => $genre))->row();

    return $result->id_genre;
  }
  public function getIdPlatform($data)
  {
    $result = $this->db->get_where('platforms', array('nama_platform' => $data))->row();

    return $result->id_platform;
  }
  public function getIdDeveloper($data)
  {
    $result = $this->db->get_where('developers', array('nama_developer' => $data))->row();

    return $result->id_developer;
  }


  // --------------------------------------------------------------------------//
  //---------------------------ARTIKEL-------------------------------------------//
  public function getArtikel($value, $colName='judul_artikel', $withComment=TRUE)
  {
      $where = array($colName => $value);

      $data['artikel'] = $this->db->get_where('artikel', $where)->row();
      
      $data['game'] = $this->getGame($data['artikel']->id_game);
      $data['developer'] = $this->getDeveloper($data['game']->id_developer);
      $data['genres'] = $this->getGameGenres($data['artikel']->id_game);
      $data['platforms'] = $this->getGamePlatforms($data['artikel']->id_game);

      // if($withContent) $data['konten'] = $this->getKontenArtikel($data['artikel']->id_artikel);
      $data['author'] = $this->getAuthor($data['artikel']->id_user);

      if($withComment){
        $data['komentar'] = $this->getKomentar($data['artikel']->id_artikel);
      }

      return $data;
  }

  public function getLatestArtikel()
  {
    $data = array();

    $data['artikel'] = $this->db->select('id_game, judul_artikel')->order_by('time_created', 'DESC')->get('artikel')->row();

    $data['game'] = $this->getGame($data['artikel']->id_game);

    return $data;
  }

  public function getAuthor($id_user)
  {
    // $where = array('id_admin' => $id_admin);
    // $admin = $this->db->get_where('admin', $where)->row();

    $where = array('id_user' => $id_user);    
    $user = $this->db->get_where('user', $where)->row();

    return $user->nama;
  }

  public function getAllArtikel($sort=FALSE)
  {
    if($sort) return $this->db->order_by('judul_artikel', 'ASC')->get('artikel')->result();

    return $this->db->order_by('time_created', 'DESC')->get('artikel')->result();
  }
  public function getAllArtikel_Detailed()
  {
    $data['artikel'] =  $this->db->get('artikel')->result();

  }
  //  Tabel konten_artikel sudah dihapus
  // public function getKontenArtikel($id_artikel='')
  // {
  //   $where = array('id_artikel' => $id_artikel);

  //    return $this->db->get_where('konten_artikel', $where)->result();
  // }

  // =========== INSERT ==============//
  public function insertGame($data)
  {
    $this->db->insert('games', $data);

    return $this->db->insert_id();
  }

  public function insertArtikel($data)
  {
    $this->db->insert('artikel', $data);

    $id_artikel = $this->db->insert_id();

    // $this->insertKonten($id_artikel, $data['konten']);
  }

  public function insertPlatforms($data, $id_game)
  {
    foreach ($data as $id_platform) {
      $this->db->insert('game_platforms', array(
        'id_game' => $id_game,
        'id_platform' =>$id_platform
      )) ;
    }
  }
  public function insertGenres($data, $id_game)
  {
    foreach ($data as $id_genre) {
      $this->db->insert('game_genres', array(
        'id_game' => $id_game,
        'id_genre' =>$id_genre
      )) ;
    }
  }

  public function updateArtikel($data, $id_game, $id_artikel)
  {
    $this->db->set($data['game'])->where('id_game', $id_game)->update('games');

    $this->db->set($data['artikel'])->where('id_artikel', $id_artikel)->update('artikel');
  }

  public function updateKontenArtikel($data, $id_artikel, $id_user)
  {

    $this->updateLogs($id_artikel, $id_user);

    $this->db->set($data['artikel'])->where('id_artikel', $id_artikel)->update('artikel');
  }
  
  public function updateLogs($id_artikel, $id_user)
  {
    $artikel = $this->getKontenArtikel($id_artikel);

    $data = [
      'id_artikel' => $id_artikel,
      'id_user' => $id_user,
      'prev_konten' => $artikel->konten_artikel
    ];

    $this->db->insert('edit_artikel_logs', $data);
  }

  public function getKontenArtikel($id_artikel)
  {
    return $this->db->select('konten_artikel')->get_where('artikel', array('id_artikel' => $id_artikel))->row();
  }

  public function updatePlatforms($data, $id_game)
  {
    $this->deletePlatforms($id_game);

    $this->insertPlatforms($data, $id_game);
  }

  public function updateGenres($data, $id_game)
  {
    $this->deleteGenres($id_game);

    $this->insertGenres($data, $id_game);
  }

  public function deletePlatforms($id_game)
  {
    $this->db->delete('game_platforms', array('id_game' => $id_game));
  }

  public function deleteGenres($id_game)
  {
    $this->db->delete('game_genres', array('id_game' => $id_game));
  }

  public function deleteArtikel($id_game)
  {
    // $id_game = $this->db->select('id_game')->get_where('artikel', array('id_artikel' => $id_artikel))->row()->id_game;

    $this->db->delete('games', array('id_game' => $id_game));

  }

    // ---------------------------------------------------//
  // -----------------KOMENTAR-----------------------------//
 
  public function getKomentar($id_artikel)
  {
    $where = array('id_artikel' => $id_artikel);

    return $this->db->order_by('time_komentar', 'DESC')->get_where('komentar', $where)->result();
  }
  public function insertKomentar($data)
  {
    return $this->db->insert('komentar', $data);
  }


}
