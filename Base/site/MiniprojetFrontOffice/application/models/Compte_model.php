 <?php
class Compte_model extends CI_Model{

  public function test_admin($nom,$pass)
     {
     $query = $this->db->query('SELECT COUNT(id) AS id  FROM compte WHERE nom= \''.$nom.'\'  AND  password=\''.$pass.'\' ');
     return $query->result();
     }
    

    public function maka_id_compte($nom,$pass)
     {
     $query = $this->db->query('SELECT id  FROM compte WHERE nom= \''.$nom.'\' AND  password=\''.$pass.'\' or EMail= \''.$nom.'\' AND  password=\''.$pass.'\' ');
     return $query->result();
     var_dump($query);
     }


    
    public function insert_compte($nom,$password)
    {
     $query = $this->db->query('Insert into Compte(`nom`, `phone`, `adresse`, `EMail`, `password`)values(\''.$nom.'\',\''.$password.'\')');
     var_dump($query);
    }
}



