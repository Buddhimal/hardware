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

}
