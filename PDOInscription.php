<?php
include_once("Inscription.php");
class PDOInscription
{
    private $database;
    public function __construct($database)
    {
        $this->database=$database;
    }
    public function addInscription($inscription)
    {
        $this->database->execc("insert into inscription values(0,'".$inscription->getDate_Insctiption()."','".$inscription->getId_personne()."')");
    }
    public function editInscription($inscription)
    {
        $this->database->execc("update inscription set date_inscription='".$inscription->getDate_Insctiption()."',id_personne='".$inscription->getId_personne()."' where id_inscription='".$inscription->getId_inscription()."'");
    }
    public function deleteInscription($id)
    {
        $this->database->execc("delete from inscription where id_inscription='$id'");
    }
    public function listeInscription()
    {
        $tab=array();
        $rs=$this->database->select("select * from inscription");
        while($row=$rs->fetch())
        {
            $tab[]=new Titre($row['id_inscription'],$row['date_inscription'],$row['id_personne']);
        }
        return $tab;
    }
}
?>