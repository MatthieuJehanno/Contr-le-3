<?php

class Ctrl_Connexion extends CI_Controller {
    
	public function index()
	{
            $this->load->model("Model_connexion");
            $data['lesUsers'] = $this->Model_connexion->GetAllUsers();
            $this->load->view('view_connexion',$data);

            //afficher les regions
            $this->load->model("Model_regions");
            $data['lesDivisions'] = $this->Model_regions->GetAllRegions($data['lesRegions'][1]->idUser);
            $this->load->view('view_division',$data);
    }
   
    public function  GetAllRegions()
	{
         
            $idSaison = $_GET['idSaison'];
            $this->load->model("Model_regions");
            $data['lesRegions'] = $this->Model_regions->GetAllRegions($idUser);
            $this->load->view('view_regions',$data);
    }
       
}
