<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->model('model_wis');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function wisata()
	{
		$data['wis'] = $this->model_wis->all();
		$this->load->view('wisata',$data);
	}
	public function detail_tutor($wis_id)
	{
		$data['emu'] = $this->model_wis->find_wis($wis_id);
		$this->load->view('wisata_detail',$data);
	}
	public function bahari()
	{
		$data['wis'] = $this->model_wis->all_bahari();
		$this->load->view('bahari',$data);
	}
	public function detail_bahari($wis_id)
	{
		$data['emu'] = $this->model_wis->find_bahari($wis_id);
		$this->load->view('wisata_detail',$data);
	}
	public function budaya()
	{
		$data['wis'] = $this->model_wis->all_budaya();
		$this->load->view('budaya',$data);
	}
	public function detail_budaya($wis_id)
	{
		$data['emu'] = $this->model_wis->find_budaya($wis_id);
		$this->load->view('wisata_detail',$data);
	}
	public function sejarah()
	{
		$data['wis'] = $this->model_wis->all_sejarah();
		$this->load->view('sejarah',$data);
	}
	public function detail_sejarah($wis_id)
	{
		$data['emu'] = $this->model_wis->find_sejarah($wis_id);
		$this->load->view('wisata_detail',$data);
	}
}