<?php

class Model_regions extends CI_Model
{
    public function GetAllRegions($user)
    {
        $sql = $this->db->query("SELECT idRegion, nomRegion FROM region WHERE idUser =".$user);
        return $sql->result();
    }
}

?>

