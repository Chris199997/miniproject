<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Categorie_model');
        $data['categorie'] = $this->Categorie_model->select_categorie();
    
        $this->load->view('index',$data);
       
	}
}
