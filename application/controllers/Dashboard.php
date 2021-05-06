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
	public function Uinvoice()
	{
	$object['controller'] = $this;
	$object['active_tab'] = "Invoice";
	$object['title'] = "Invoice";

	$trans_id= $this->input->get("id");

	$data["customer_details"]=$this->mmodel->get_all_by_id("invoice_header", $trans_id);
	$data["invoice_details"]=$this->mmodel->get_invoice_details('invoice_lines', $trans_id);

	$this->load->view('header',$object);
	$this->load->view('top_header');
	$this->load->view('side_menu');
	$this->load->view('usercash_invoice', $data);
	$this->load->view('footer');

	}

	public function CreateSKU()
	{
	$object['controller'] = $this;
	$object['active_tab'] = "createSKU";
	$object['title'] = "create_SKU";
	$this->load->view('header',$object);
	$this->load->view('top_header');
	$this->load->view('side_menu');
	$this->load->view('create_SKU');
	$this->load->view('footer');
	}

	public function save_sku(){

        $data["sku_code"] = $this->input->get_post('sku_code');
        $data["sku_name"] = $this->input->get_post('sku_name');
        $data['last_modified_at'] = date('Y-m-d H:i:s');
        $data['last_modified_by'] = $this->session->userdata('name');

        if($this->mmodel->insert('item_sku',$data)){
            $this->add_sku('SKU Added Successfully');
        } else{
            $this->add_sku('SKU failed to Insert','alert-danger');
        }

	}

}
