 <?php
class Login_model extends CI_Model{

  public function test_admin($nom,$pass)
     {
     $query = $this->db->query('SELECT COUNT(id) AS id  FROM compte WHERE nom= \''.$nom.'\'  AND  password=\''.$pass.'\' ');
     return $query->result();
     }

}