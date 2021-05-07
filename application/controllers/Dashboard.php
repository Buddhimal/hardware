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
                'last_url' => $actual_link);
            $this->session->set_userdata($login_info);
            redirect(base_url());
        }
    }

    public function index()
    {
        $object['controller'] = $this;
        $object['active_tab'] = "Dashboard";
        $object['title'] = "Dashboard";
        $this->load->view('header', $object);
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
        $this->load->view('header', $object);
        $this->load->view('top_header');
        $this->load->view('side_menu');
        $this->load->view('usercash_invoice');
        $this->load->view('footer');
    }

    public function inventory()
    {

        $param_data["from"] = $this->input->get_post('from');
        $param_data["to"] = $this->input->get_post('to');
        $param_data["search_by"] = $this->input->get_post('search_by');
        $param_data["param"] = $this->input->get_post('param');

        $object['controller'] = $this;
        $object['active_tab'] = "Inventory";
        $object['title'] = "Inventory";
        $this->load->view('header', $object);
        $this->load->view('top_header');
        $this->load->view('side_menu');

        $data['items'] = $this->mmodel->get_item_list();
        $data['inventory'] = $this->mmodel->get_inventory($param_data);

        $this->load->view('inventory');
        $this->load->view('footer');
        $this->load->view('js/inventoryjs');
    }

    public function add_sku($msg = "hello", $alert_type = "alert-success")
    {
        $object['controller'] = $this;
        $object['active_tab'] = "Inventory";
        $object['title'] = "Inventory";
        $this->load->view('header', $object);
        $this->load->view('top_header');
        $this->load->view('side_menu');
        $data["msg"] = $msg;
        $data["alert_type"] = $alert_type;

//        $this->load->view('add_sku',$data);
        $this->load->view('footer');
    }

    public function UIinvoice()
    {

        $object['controller'] = $this;
        $object['active_tab'] = "Invoice";
        $object['title'] = "Invoice";

        $trans_id = $this->input->get("id");

        $data["customer_details"] = $this->mmodel->get_all_by_id("invoice_header", $trans_id);
        $data["invoice_details"] = $this->mmodel->get_invoice_details('invoice_lines', $trans_id);

        $this->load->view('header', $object);
        $this->load->view('top_header');
        $this->load->view('side_menu');
        $this->load->view('usercash_invoice', $data);
        $this->load->view('footer');

    }

    public function invoicelist()
    {
        $object['controller'] = $this;
        $object['active_tab'] = "InvoiceList";
        $object['title'] = "Invoice List";
        $this->load->view('header', $object);
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
        $this->load->view('header', $object);
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
        $this->load->view('header', $object);
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
        $this->load->view('header', $object);
        $this->load->view('top_header');
        $this->load->view('side_menu');
        $this->load->view('salestransaction');
        $this->load->view('footer');
        $this->load->view('js/salestransactionsjs');
    }


    public function CreateSKU()
    {
        $object['controller'] = $this;
        $object['active_tab'] = "createSKU";
        $object['title'] = "create_SKU";
        $this->load->view('header', $object);
        $this->load->view('top_header');
        $this->load->view('side_menu');
        $this->load->view('create_SKU');
        $this->load->view('footer');
    }


    public function save_sku()
    {
        $data["sku_code"] = $this->input->get_post('sku_code');
        $data["sku_name"] = $this->input->get_post('sku_name');
        $data['last_modified_at'] = date('Y-m-d H:i:s');
        $data['last_modified_by'] = $this->session->userdata('name');

        if ($this->mmodel->insert('item_sku', $data)) {
            $this->add_sku('SKU Added Successfully');
        } else {
            $this->add_sku('SKU failed to Insert', 'alert-danger');
        }
    }

}
