<?php
require_once '../../config.php';
 
class CRUD
{
 
    protected $db;
 
    function __construct()
    {
        $this->db = DB();
    }
 
    function __destruct()
    {
        $this->db = null;
    }
 
    /*
     * Add new Record
     *
     * @param $first_name
     * @param $last_name
     * @param $email
     * @return $mixed
     * */
    public function Create($descri)
    {
        $query = $this->db->prepare("INSERT INTO aux0(TIPDES, DESCRI) VALUES ('TipoAtividade',:descri)");
        $query->bindParam("descri", $descri, PDO::PARAM_STR);
        $query->execute();
        return $this->db->lastInsertId();
    }
 
    /*
     * Read all records
     *
     * @return $mixed
     * */
    public function Read()
    {
        $query = $this->db->prepare("SELECT * FROM aux0 WHERE TIPDES = 'TipoAtividade' ");
        $query->execute();
        $data = array();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }
 
    /*
     * Delete Record
     *
     * @param $user_id
     * */
    public function Delete($user_id)
    {
        $query = $this->db->prepare("DELETE FROM aux0 WHERE chvaux = :id");
        $query->bindParam("id", $user_id, PDO::PARAM_STR);
        $query->execute();
    }
 
    /*
     * Update Record
     *
     * @param $first_name
     * @param $last_name
     * @param $email
     * @return $mixed
     * */
    public function Update($id, $descri)
    {
        $query = $this->db->prepare("UPDATE aux0 SET DESCRI = :descri WHERE CHVAUX = :id");
        //$query = $this->db->prepare("UPDATE aux0 SET DESCRI = :descri  WHERE CHVAUX = :id");
        $query->bindParam("descri", $descri, PDO::PARAM_STR);
        $query->bindParam("id", $id, PDO::PARAM_STR);
        //var_dump($query);
        $query->execute();
    }
 
    /*
     * Get Details
     *
     * @param $user_id
     * */
    public function Details($id)
    {
        $query = $this->db->prepare("SELECT * FROM aux0 WHERE CHVAUX = :id");
        $query->bindParam("id", $id, PDO::PARAM_STR);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
}
 
?>