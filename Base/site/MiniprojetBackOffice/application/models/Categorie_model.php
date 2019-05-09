 <?php
class Categorie_model extends CI_Model{

public function insert_categorie($nom,$description,$id_Categorie,$prix)
    {
   $query = $this->db->query('Insert into categorie (nom)values
  	('.$nom.')');
      var_dump($query);
      return $query->result();
    }
    
    
    public function update_categorie($id,$nom)
    {
    $query = $this->db->query('UPDATE  categorie SET nom=\''.$nom.'\' WHERE id=\''.$id.'\'');
    return $query->result();
    }

    public function delete_categorie($id)
    {
    $query = $this->db->query('DELETE FROM categorie   WHERE id=\''.$id.'\'');
    return $query->result();  
    }
    
     public function select_categorie()
    {
    $query = $this->db->query('SELECT id,nom FROM categorie');
     return $query->result(); 
    }
}