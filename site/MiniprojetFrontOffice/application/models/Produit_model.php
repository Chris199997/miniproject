 <?php
class Produit_model extends CI_Model{

    public function insert_produit($nom,$description,$id_Categorie,$prix)
    {
   $query = $this->db->query('Insert into produit (nom,description,id_Categorie,prix)values
  	('.$nom.','.$description.','.$id_Categorie.','.$prix.' )');
      var_dump($query);
    }
    
    
    public function update_produit($id,$nom,$description,$id_Categorie,$prix)
    {
    $query = $this->db->query('UPDATE  produit SET nom=\''.$nom.'\',description=\''.$description.'\', id_Categorie=\''.$id_Categorie.'\',prix=\''.$prix.'\'  WHERE id=\''.$id.'\'');
      
    }

    public function delete_produit($id)
    {
    $query = $this->db->query('DELETE FROM produit   WHERE id=\''.$id.'\'');
      
    }

   
    
     public function select_produit($id_categorie)
    {
     $query = $this->db->query('SELECT  id,nom,prix,image FROM produit WHERE id_categorie= \''.$id_categorie.'\' ');
     return $query->result();
    }
    

     public function select_produit_id($id)
    {
     $query = $this->db->query('SELECT id,nom,description,categorie,prix,image FROM produit_categorie WHERE id= \''.$id.'\' ');
     return $query->result();
      }
}