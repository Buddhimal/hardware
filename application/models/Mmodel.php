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

    public function get_item_list()
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

//        var_dump($result->result());
//        die();

        return $result;
    }



}
