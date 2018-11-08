<?php

class Model_connexion extends CI_Model
{
    function GetAllUsers()
    {
        $sql = $this->db->query("select idUser, nomUser from user");
        return $sql->result();
    }  
}

?>