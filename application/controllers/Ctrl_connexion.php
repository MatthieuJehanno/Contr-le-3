<?php

class Ctrl_Connexion extends CI_Controller {
    
	public function index()
	{
            $this->load->model("Model_connexion");
            $data['lesUsers'] = $this->Model_connexion->GetAllUsers();
            $this->load->view('view_connexion',$data);

    
    }
   
    public function  GetAllRegions()
	{
            $idSaison = $_GET['idUser'];
            $this->load->model("Model_regions");
            $data['lesRegions'] = $this->Model_regions->GetAllRegions($idUser);
            $this->load->view('view_regions',$data);
    }
       
}


?>