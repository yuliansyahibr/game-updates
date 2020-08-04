<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wiki extends CI_Controller {

	// Landing page
	public function index()
	{
		$this->load->model('games_m');
		$data['latest'] = $this->games_m->getLatestArtikel();
		$data['upcoming'] = $this->games_m->getUpcomingGame();
		$data['new'] = $this->games_m->getNewGames();
		// print_r($data);
		$title = "GameUpdates - Encyclopedia of Games";
		$this->loadHeader($title);
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
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

	// Login page
	public function login($notFound=false)
	{
		if($this->isLoggedIn()) redirect(base_url());
		else{
			$data['title'] = "Login to GameUpdates";
			$this->load->view('templates/header', $data);

			$error['notFound'] = $notFound;
			$this->load->view('login', $error);

			$this->load->view('templates/footer');
		}
	}

	// Register page
	public function register()
	{
		if($this->isLoggedIn()) redirect(base_url());
		else{
			$data['title'] = "Create Acoount - GameUpdates";
			$this->load->view('templates/header', $data);
			$this->load->view('register');
			$this->load->view('templates/footer');
		}
	}

	// Categories page
	public function categories()
	{
		$title = "Categories - GameUpdates";
		$this->loadHeader($title);
		$this->load->view('templates/top_panel');
		$this->load->view('category');
		$this->load->view('templates/footer');
	}

	// Search page
	public function search()
	{
		$title= " - GameUpdates";
		$this->loadHeader($title);
		$this->load->view('templates/top_panel');
		$data['games'] = array();
		if($this->input->get('search')){
			$this->load->model("games_m");
			$search = $this->input->get('search');
			$data['games'] = $this->games_m->searchByTitle($search);
			$this->load->view('category/search', $data);
		}else{
			$this->load->view('search', $data);
		}
		
		$this->load->view('templates/footer');
	}

	// Browse page
	public function browse()
	{
		$title = "Browse All Articles - GameUpdates";
		$this->loadHeader($title);

		$this->load->model('games_m');
		$data['artikel'] = $this->games_m->getAllArtikel(TRUE);

		// echo '<pre>';
		// print_r($data);

		$this->load->view('templates/top_panel');
		$this->load->view('browse', $data);
		$this->load->view('templates/footer');
	}

	// About page
	public function about()
	{
		$title = "About Us - GameUpdates";
		$this->loadHeader($title);
		$this->load->view('templates/top_panel');
		$this->load->view('about');
		$this->load->view('templates/footer');
	}


	// Platforms page
	public function platforms($platform='')
	{
		$title = "Platforms - GameUpdates";
		$this->loadHeader($title);
		$this->load->view('templates/top_panel');
		$this->load->model('games_m');

		if($platform == ''){
			// $gr = 'genres';
			$data['platforms'] = $this->games_m->getAllPlatforms();
			$this->load->view('platforms', $data);
		}else{
			$data['games'] = $this->games_m->getByPlatform($platform);
			$this->load->view('category/search', $data);
		}

		$this->load->view('templates/footer');
	}

	// Developers page
	public function developers($dev='')
	{
		$title = "Browse by Devlopers - GameUpdates";
		$this->loadHeader($title);
		$this->load->view('templates/top_panel');
		$this->load->model('games_m');

		if($dev == ''){
			$data['devs'] = $this->games_m->getAllDevelopers();
			$this->load->view('developers', $data);
		}else{
			$data['games'] = $this->games_m->getByDeveloper($dev);
			$this->load->view('category/search', $data);
		}
		$this->load->view('templates/footer');
	}
	
	// Genres pages
	public function genres($genre = '')
	{
		$title = "Genres - GameUpdates";
		$this->loadHeader($title);

		$this->load->model('games_m');
		$this->load->view('templates/top_panel');

		if($genre == ''){
			// $gr = 'genres';
			$data['genres'] = $this->games_m->getAllGenres();
			$this->load->view('genres', $data);
		}else{
			$data['games'] = $this->games_m->getByGenre($genre);
			$this->load->view('category/search', $data);
		}

		$this->load->view('templates/footer');
	}


	public function artikel($judul_artikel='')
	{
		$title = "Artikel Game - GameUpdates";
		$this->loadHeader($title);
		$this->load->view('templates/top_panel');
		$this->load->view('artikel/artikel_temp');
		$this->load->view('templates/footer');
	}


	// public function action()
	// {
	// 	$data['title'] = "Action - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/action');
	// 	$this->load->view('templates/footer');
	// }

	// public function adventure()
	// {
	// 	$data['title'] = "Adventure - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/adventure');
	// 	$this->load->view('templates/footer');
	// }

	// public function fighting()
	// {
	// 	$data['title'] = "Fighting - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/fighting');
	// 	$this->load->view('templates/footer');
	// }

	// public function fps()
	// {
	// 	$data['title'] = "FPS - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/fps');
	// 	$this->load->view('templates/footer');
	// }

	// public function rpg()
	// {
	// 	$data['title'] = "RPG - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/rpg');
	// 	$this->load->view('templates/footer');
	// }

	// public function racing()
	// {
	// 	$data['title'] = "Racing - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/racing');
	// 	$this->load->view('templates/footer');
	// }

	// public function mmorpg()
	// {
	// 	$data['title'] = "MMORPG - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/mmorpg');
	// 	$this->load->view('templates/footer');
	// }

	// public function sport()
	// {
	// 	$data['title'] = "Sport - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/sport');
	// 	$this->load->view('templates/footer');
	// }

	// public function simulator()
	// {
	// 	$data['title'] = "Simulator - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/simulator');
	// 	$this->load->view('templates/footer');
	// }

	// public function strategy()
	// {
	// 	$data['title'] = "Strategy - GameUpdates";
	// 	if($this->session->userdata('status') == ''){
	// 		$this->load->view('templates/header', $data);
	// 	}
	// 	else if($this->session->userdata('status') == 'login'){
	// 		$this->load->view('templates/logged_header', $data);
	// 	}
	// 	$this->load->view('templates/top_panel');
	// 	$this->load->view('category/strategy');
	// 	$this->load->view('templates/footer');
	// }
}
