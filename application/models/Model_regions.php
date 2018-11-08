<?php

class Model_regions extends CI_Model
{
    public function GetAllRegions($user)
    {
        $sql = $this->db->query("select idRegion, nomRegion from region where idUser =".$user);
        return $sql->result();
    }
}

?>

