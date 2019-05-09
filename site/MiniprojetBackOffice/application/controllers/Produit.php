<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Controller {

	

    
     public function select_categorie($id_categorie){
      
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

      public function test(){
        echo 'hai';
      }


      public function select_produit($id){
      
       $this->load->model('Categorie_model');
       $this->load->model('Produit_model');
       $data['Categorie']=$this->Categorie_model->select_Categorie();
       $data['Produit']=$this->Produit_model->select_produit_id($id);
       $this->load->view('produit',$data);
        
      }



      public function create() {
            
             $this->load->model('Produit_model');

             $nom=$this->input->post('nom',true);
             $description=$this->input->post('description',true);
             $id_Categorie=$this->input->post('id_Categorie',true);
             $prix=$this->input->post('prix',true);
             $image=$this->input->post('image',true);
             
             $this->Produit_model->insert_produit($nom,$description,$id_Categorie,$prix,$image);
             $data['Produit']=$this->Produit_model-> select_produit_maina();
             
            
             $this->load->view('accueil',$data);
             
            

            
          }


 
  public function update($id) {
            
             $this->load->model('Produit_model');

             $nom=$this->input->post('nom',true);
             $description=$this->input->post('description',true);
             $id_Categorie=$this->input->post('id_categorie',true);
             $prix=$this->input->post('prix',true);
             $image=$this->input->post('image',true);
             
             $this->Produit_model->update_produit($id,$nom,$description,$id_Categorie,$prix,$image);
             $data['Produit']=$this->Produit_model-> select_produit_maina();
             
            
             $this->load->view('accueil',$data);
             
            

            
          }


  public function delete($id) {
            
             $this->load->model('Produit_model');

             
             $this->Produit_model->delete_produit($id);
             $data['Produit']=$this->Produit_model-> select_produit_maina();
             
            
             $this->load->view('accueil',$data);
             
            

            
          }
          
    
}
