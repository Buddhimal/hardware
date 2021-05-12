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

        $this->load->view('inventory', $data);
        $this->load->view('footer');
        $this->load->view('js/inventoryjs');
    }

    public function itemupdate()
    {

        $object['controller'] = $this;
        $object['active_tab'] = "item_update";
        $object['title'] = "ItemUpdate";
        $this->load->view('header', $object);
        $this->load->view('top_header');
        $this->load->view('side_menu');

        $this->load->view('updateinventory');
        $this->load->view('footer');
        $this->load->view('js/updateinventoryjs');
    }
    
    public function add_sku($msg = "", $alert_type = "alert-success")
    {
        $object['controller'] = $this;
        $object['active_tab'] = "add_sku";
        $object['active_main_tab'] = "add_sku";
        $object['title'] = "Inventory";
        $this->load->view('header', $object);
        $this->load->view('top_header');
        $this->load->view('side_menu');
        $data["msg"] = $msg;
        $data["alert_type"] = $alert_type;

        $this->load->view('create_SKU', $data);
        $this->load->view('footer');
    }

    public function save_sku()
    {
        $data["sku_code"] = $this->input->get_post('sku_code');
        $data["sku_name"] = $this->input->get_post('sku_name');
        $data["status"] = $this->input->get_post('status');
        $data['last_modified_at'] = date('Y-m-d H:i:s');
        $data['last_modified_by'] = $this->session->userdata('name');

        if ($this->mmodel->get_where_count('item_sku', array('sku_code' => $data["sku_code"])) > 0) {
            $this->add_sku('SKU Code Already exists', 'alert-danger');
        } else {
            if ($this->mmodel->insert('item_sku', $data)) {
                $this->add_sku('SKU Added Successfully');
            } else {
                $this->add_sku('SKU failed to Insert', 'alert-danger');
            }
        }
    }

    public function view_sku(){
        $object['controller'] = $this;
        $object['active_tab'] = "view_sku";
        $object['title'] = "Inventory";

        $search_param = $this->input->get_post('search_param');

        $this->load->view('header', $object);
        $this->load->view('top_header');
        $this->load->view('side_menu');
        $data['sku_list'] = $this->mmodel->get_sku_list($search_param);
        $this->load->view('view_SKU', $data);
        $this->load->view('footer');
    }

    public function create_invoice()
    {
        $object['controller'] = $this;
        $object['active_tab'] = "Invoice";
        $object['title'] = "Invoice";

        $trans_id = $this->input->get("id");

        $data["customer_details"] = $this->mmodel->get_all_by_id("invoice_header", $trans_id);
        $data["invoice_details"] = $this->mmodel->get_invoice_details($trans_id);

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

        $param_data["from"] =  $this->input->get('from');
        $param_data["to"] = $this->input->get('to');
        $param_data["item_code"] =  $this->input->get('item_code') ;
        $param_data["param"] = $this->input->get('param');
        
        $data["sales_history_table"]=$this->mmodel->get_salesHistory_table($param_data);
        $data["item_codes"]=$this->mmodel->get_item_codes();
        $this->load->view('itemsaleshistory', $data);
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

        $data["inv_number"] = $this->mmodel->generate_invoice_number();
        $data["items"] = $this->mmodel->get_item_list();
        $data["inv_date"] = date('Y-m-d');

        $this->load->view('salestransaction', $data);
        $this->load->view('footer');
        $this->load->view('js/salestransactionsjs');
    }

    public function save_transaction()
    {
        $header['invoice_number'] = $this->input->post('invoice_number');
        $header['invoice_date'] = $this->input->post('inv_date');
        $header['customer_name'] = $this->input->post('cus_name');
        $header['address'] = $this->input->post('cus_address');
        $header['telephone'] = $this->input->post('cus_tel');
        $header['gross_total'] = $this->input->post('gross_total');
        $header['qty_total'] = $this->input->post('total_qty');
        $header['tax'] = $this->input->post('tax_amt');
        $header['discount'] = $this->input->post('total_discount');
        $header['net_total'] = $this->input->post('net_total');
        $header['net_total'] = $this->input->post('net_total');
        $header['net_total'] = $this->input->post('net_total');
        $header['last_modified_at'] = date('Y-m-d H:i:s');
        $header['last_modified_by'] = $this->session->userdata('name');

        $item_list = json_decode($this->input->post('item_list'));

        $line_records = [];

        foreach ($item_list as $item) {
            $line['item_code'] = $item[0];
            $line['unit_price'] = $item[1];
            $line['discount'] = $item[2];
            $line['qty'] = $item[3];
            $line['total_price'] = $item[4];
            $line_records[] = $line;
        }

        $data['status'] = 0;

        $trans_id = $this->mmodel->save_transaction($header, $line_records);

        if ($trans_id) {
            $data['status'] = 1;
            $data['trans_id'] = $trans_id;
        }

        echo json_encode($data);
    }


    public function get_item_details()
    {
        $item_code = $this->input->get('item_code');

        $item_details = $this->mmodel->get_item_details_for_transaction($item_code);

        echo json_encode($item_details->row());

    }

}
