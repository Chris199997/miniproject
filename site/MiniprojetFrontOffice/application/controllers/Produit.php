<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Controller {

	

    
     public function select_categorie(){
      
        $id_categorie = $this->input->get('idCateg');
       $this->load->model('Categorie_model');
       $this->load->model('Produit_model');
       $data['Categorie']=$this->Categorie_model->select_Categorie();
       $data['Produit']=$this->Produit_model->select_produit($id_categorie);
      

         if($id_categorie==1){

        $data['cate']="Classique";
        $this->load->view('categorie',$data);

          }
         else if($id_categorie==2){
        $data['cate']="Basket";
        $this->load->view('categorie',$data);
          }

      }


      public function select_produit(){
      
      $id = $this->input->get('idProd');
       $this->load->model('Categorie_model');
       $this->load->model('Produit_model');
       $data['Categorie']=$this->Categorie_model->select_Categorie();
       $data['Produit']=$this->Produit_model->select_produit_id($id);
       $this->load->view('produit',$data);
        
      }
    
}
