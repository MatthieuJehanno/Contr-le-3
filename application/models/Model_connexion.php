<?php

class Model_connexion extends CI_Model
{
    function getAllRegions($nom)
    {
        $sql = $this->db->query("select statut from user where nom=".$nom);
        if ($sql->result()[0]->Statut === 'admin');
     
    }  
}

?>
