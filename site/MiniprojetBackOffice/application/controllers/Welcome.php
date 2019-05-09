<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
    
        $this->load->view('index');
       
	}
  
  public function accueils()
	{
    
        $this->load->model('Produit_model');
        $data['Produit']=$this->Produit_model-> select_produit_maina();
        $this->load->view('accueil',$data);
       
	}


  public function inserts() {
        
             
              $this->load->view('insert');
              
           }

  public function updates() {
        
             $this->load->model('Produit_model');
              $data['Produit']=$this->Produit_model-> select_produit_maina_tsotra();
              $this->load->view('update',$data);
              
           }

  public function deletes() {
        
             $this->load->model('Produit_model');
              $data['Produit']=$this->Produit_model-> select_produit_maina_tsotra();
              $this->load->view('supression',$data);
              
  }
}
