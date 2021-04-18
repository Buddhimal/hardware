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
	public function invoicelist()
	{
		$object['controller'] = $this;
		$object['active_tab'] = "InvoiceList";
		$object['title'] = "Invoice List";
		$this->load->view('header',$object);
		$this->load->view('top_header');
		$this->load->view('side_menu');
		$this->load->view('invoicelist');
		$this->load->view('footer');
		$this->load->view('js/invoicelistjs');
	}
	public function invoiceModal()
	{
		$object['controller'] = $this;
		//$object['active_tab'] = "InvoiceList";
		$object['title'] = "Invoice Modal";
		$this->load->view('header',$object);
		//$this->load->view('top_header');
		//$this->load->view('side_menu');
		$this->load->view('myModal');
		$this->load->view('footer');
		$this->load->view('js/invoicelistjs');
	}
	public function itemsaleshistory()
	{
		$object['controller'] = $this;
		$object['active_tab'] = "Itemsaleshistory";
		$object['title'] = "Item Sales History";
		$this->load->view('header',$object);
		$this->load->view('top_header');
		$this->load->view('side_menu');
		$this->load->view('itemsaleshistory');
		$this->load->view('footer');
		$this->load->view('js/itemsaleshistoryjs');
	}
	public function salestransaction()
	{
		$object['controller'] = $this;
		$object['active_tab'] = "Salestransaction";
		$object['title'] = "Sales Transaction";
		$this->load->view('header',$object);
		$this->load->view('top_header');
		$this->load->view('side_menu');
		$this->load->view('salestransaction');
		$this->load->view('footer');
		$this->load->view('js/salestransactionsjs');
	}
}
