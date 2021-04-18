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

    public function get_item_list()
    {
        $result = $this->db
            ->select("*")
            ->from('item_master')
            ->get();

        return $result;
    }

    public function get_inventory(){
        $result = $this->db->query("
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
                                        AND im.item_sku_id = sku.id
        ");

        return $result;
    }

}
