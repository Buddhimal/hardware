<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function query($query)
    {
        return $this->db->query($query);
    }

    public function insert($table,$data){

        $this->db->insert($table,$data);
        return ($this->db->affected_rows() >= 0);
    }

    public function get_all($table){
        $result = $this->db
            ->select("*")
            ->from($table)
            ->get();

        return $result;
    }

    public function get_all_by_id($table, $id){
        $result = $this->db
            ->select("*")
            ->from($table)
            ->where('id',$id)
            ->get();

        return $result;
    }

    public function get_all_where($table, $where){
        $result = $this->db
            ->select("*")
            ->from($table)
            ->where($where)
            ->get();

        return $result;
    }

    public function get_invoice_details($table, $id){
        $result = $this->db
            ->select("*")
            ->from($table)
            ->where('invoice_id',$id)
            ->get();

        return $result;
    }

    public function get_item_list()
    {
        $result = $this->db
            ->select("*")
            ->from('item_master')
            ->get();

        return $result;
    }

    public function get_customer_details()
    {
        $result = $this->db
            ->select("*")
            ->from('item_master')
            ->get();

        return $result;
    }

    public function get_inventory($param_data){

        $from = $param_data["from"];
        $to = $param_data["to"];
        $type = $param_data["search_by"];
        $param = $param_data["param"];

        $query = "
                                    SELECT
                                        im.item_code,
                                        im.item_name,
                                        sku.sku_code,
                                        sku.sku_name,
                                        inv.qty,
                                        inv.purchased_price,
                                        inv.selling_price,
                                        inv.date_purchased 
                                    FROM
                                        inventory AS inv
                                        INNER JOIN item_master AS im ON inv.item_id = im.id
                                        INNER JOIN item_sku AS sku ON inv.item_sku_id = sku.id 
                                        AND im.item_sku_id = sku.id ";

        if (isset($param_data['from']))
            $query.= " AND inv.date_purchased >= '$from'";
        if (isset($param_data['to']))
            $query.= " AND inv.date_purchased <= '$to'";
        if (isset($type) && $type =='price')
            $query.= " AND inv.purchased_price = '$param'";
        if (isset($type) && $type =='item')
            $query.= " AND im.item_code LIKE '%$param%'";


        $result = $this->db->query($query);

        return $result;
    }

    public function get_item_details_for_transaction($item_code){

        return $this->db->query("
                    SELECT
                        im.item_code, 
                        im.item_name, 
                        im.unit_type, 
                        sku.sku_code, 
                        sku.sku_name, 
                        i.selling_price
                    FROM
                        item_master AS im
                        INNER JOIN
                        item_sku AS sku
                        ON 
                            im.item_sku_id = sku.id
                        INNER JOIN
                        inventory AS i
                        ON 
                            im.id = i.item_id AND
                            sku.id = i.item_sku_id
                    WHERE im.item_code='$item_code'
        ");

    }

    public function generate_invoice_number()
    {
        $this->db->select("id");
        $this->db->from("invoice_header");
        $this->db->limit(1);
        $this->db->order_by('id', "DESC");
        $result = $this->db->get();
        if ($result->num_rows() == 0)
            $rowcount = 0;
        else {
            $rowcount = $result->row()->id;
        }
        $rowcount++;
        if ($rowcount < 10) $invoice_number = "INV0000" . $rowcount;
        else if ($rowcount < 100) $invoice_number = "INV000" . $rowcount;
        else if ($rowcount < 1000) $invoice_number = "INV00" . $rowcount;
        else if ($rowcount < 10000) $invoice_number = "INV0" . $rowcount;
        else $invoice_number = "INV" . $invoice_number;


        return $invoice_number;
    }

    public function save_transaction($header,$line_records){

        if($this->db->insert('invoice_header', $header)){
            $invoice_id = $this->db->insert_id();

            foreach ($line_records as $lines){
                $lines['invoice_id']= $invoice_id;
                $this->db->insert('invoice_lines', $lines);
            }
            return true;
        }
        return false;
    }



}
