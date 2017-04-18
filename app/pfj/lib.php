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
    public function Create($nome, $apelido)
    {
        $query = $this->db->prepare("INSERT INTO pfj(PESSOA, TIPO, NOMECLIE, APELIDO) VALUES ('1','CLIENTE',:nomeclie, :apelido)");
        $query->bindParam("nomeclie", $nome, PDO::PARAM_STR);
        $query->bindParam("apelido", $apelido, PDO::PARAM_STR);
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
        $query = $this->db->prepare("SELECT * FROM pfj WHERE TIPO = 'CLIENTE' ORDER BY NOMECLIE");
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
        $query = $this->db->prepare("DELETE FROM pfj WHERE CHAVPFJ = :id");
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
    public function Update($first_name, $last_name, $id)
    {
        $query = $this->db->prepare("UPDATE pfj SET NOMECLIE = :first_name, APELIDO = :last_name  WHERE CHAVPFJ = :id");
        $query->bindParam("first_name", $first_name, PDO::PARAM_STR);
        $query->bindParam("last_name", $last_name, PDO::PARAM_STR);
        $query->bindParam("id", $id, PDO::PARAM_STR);
        $query->execute();
    }
 
    /*
     * Get Details
     *
     * @param $user_id
     * */
    public function Details($user_id)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam("id", $user_id, PDO::PARAM_STR);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
}
 
?>