<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user/mlogin');
		$this->load->model('mloging');
		$this->load->model('mmodel');
		$this->load->model('user/muser');

		if (is_login() == '') {
			$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$login_info = array(
				'last_url'  => $actual_link);
			$this->session->set_userdata($login_info);
			redirect(base_url());
		}
	}

	public function index()
	{
		$object['controller'] = $this;
		$object['active_tab'] = "Dashboard";
		$object['title'] = "Dashboard";
		$this->load->view('header',$object);
		$this->load->view('top_header');
		$this->load->view('side_menu');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

	public function inventory()
	{
		$object['controller'] = $this;
		$object['active_tab'] = "Inventory";
		$object['title'] = "Inventory";
		$this->load->view('header',$object);
		$this->load->view('top_header');
		$this->load->view('side_menu');

        $data['items'] = $this->mmodel->get_item_list();
        $data['inventory'] = $this->mmodel->get_inventory();

		$this->load->view('inventory');
		$this->load->view('footer');
		$this->load->view('js/inventoryjs');
	}

}
