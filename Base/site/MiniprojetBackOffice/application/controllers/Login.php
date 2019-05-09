<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function log() {
             $this->load->model('Login_model');
             $this->load->library('session');
            $this->load->model('Produit_model');

             $user=$this->input->post('administrateur',true);
             $pass=$this->input->post('password',true);
             
             $testcompte=$this->Login_model->test_admin($user,$pass);
             $this->session->set_userdata('id_use',$testcompte);
             $data['Produit']=$this->Produit_model-> select_produit_maina();
             



    
             if($testcompte[0]->id=='1'){
                 $this->load->view('accueil',$data);
              
             }
             else if ($testcompte[0]->id=='0'){
                redirect('/Welcome/index');
              
             }
            

            
          }

    public function Loug_out()
        { 
            $this->session->sess_destroy();
            //$this->load->view('index');
            redirect('/Welcome/index');
        }
  
}
