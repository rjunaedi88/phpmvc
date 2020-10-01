<?php 

class About extends Controller{

	public function index($nama = "junaedi", $pekerjaan = "Developer", $umur = 26, $foto = "rahmat.jpg") {

		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['foto'] = $foto;

		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}

	public function page() {

		$data['judul'] = 'My Page';
		$this->view('templates/header', $data);
		$this->view('templates/header');
		$this->view('about/page');
		$this->view('templates/footer');
		}
}