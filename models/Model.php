<?php

abstract class Model
{
    private PDO $db;

    public function getDB() : PDO
    {
        $this->db = new PDO("mysql:dbname=grp-175_s3_progweb;host=127.0.0.1","grp-175", "21aulwmh");
        return $this->db;
    }

    protected function execRequest(string $sql, array $params = null):PDOStatement|false
    {
        $this->getDB();
        $requete = $this->db->prepare($sql);
        $requete->execute($params);
        return $requete;
    }
}
?>