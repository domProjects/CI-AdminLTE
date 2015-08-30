<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function get_count_record($table)
    {     
        $query = $this->db->count_all($table);

        return $query;
    }


    public function disk_space_use()
    {     


$diskSpaceTotal  = disk_total_space(DIRECTORY_SEPARATOR);
$diskSpaceFree   = disk_free_space(DIRECTORY_SEPARATOR);
$diskSpaceUse    = $diskSpaceTotal - $diskSpaceFree;
$diskPercFree    = round(($diskSpaceFree * 100) / $diskSpaceTotal, 0);
$diskPercUse     = round(($diskSpaceUse * 100) / $diskSpaceTotal, 0);


        return $diskPercUse;

    }


}
