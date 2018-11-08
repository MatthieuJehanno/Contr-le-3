<?php

class Model_connexion extends CI_Model
{
    public function GetAllUsers()
    {
        $sql = $this->db->query("SELECT idUser, nomUser FROM user");
        return $sql->result();
    }
    

}

