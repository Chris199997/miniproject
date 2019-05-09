<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Controller {

	
     /* public function getModel() {
		$this->load->model('Model_model');
		$postData = $this->input->get('idC');
		$data = $this->Model_model->select_Model_id($postData);
		echo json_encode($data); 
	}
   */

     public function getCategorie() {
        $this->load->model('Categorie_model');
        $data['categorie'] = $this->Categorie_model->select_categorie();
        $this->load->view('index',$data);
    }
   public function select_produit($id){
      
       $this->load->model('Categorie_model');
       $this->load->model('Produit_model');
       $data['Categorie']=$this->Categorie_model->select_Categorie();
       $data['Produit']=$this->Produit_model->select_produit_id($id);
       $this->load->view('produit',$data);
        
      }

}
