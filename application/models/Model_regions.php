<?php

class Model_regions extends CI_Model
{
    function GetAllRegions($user)
    {
        $sql = $this->db->query("select idRegion, nomRegion from region");
        return $sql->result();
    }
}

?>

