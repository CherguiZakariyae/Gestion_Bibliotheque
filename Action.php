<?php
include_once("MySQLDataSource.php");
include_once("Database.php");
include_once("Inscription.php");
include_once("PDOInscription.php");
include_once("PDOArchive.php");
include_once("Emprunt.php");
include_once("PDOEmprunt.php");
include_once("Titre.php");
include_once("PDOTitre.php");
include_once("Titre.php");
include_once("Personne.php");
include_once("PersonneDao.php");
include_once("Adherant.php");
include_once("AdherantDao.php");
include_once("AdminDao.php");
include_once("Bibliothecaire.php");
include_once("BibliothecaireDao.php");
include_once("Service.php");
class Action
{
    private $service;
    public function __construct()
    {
        $datasource=new MySQLDataSource("localhost","gestion_bibliotheque","root","");
        $database=new DataBase($datasource);
        $database->Open();
        $PDOInscription=new PDOInscription($database);
        $PDOArchive=new PDOArchiveDao($database);
        $PDOEmprunt=new PDOEmpruntDao($database);
        $PDOTitre=new PDOTitreDao($database);
        $PDOPersonne=new PDOPersonneDao($database);
        $PDOAdherent=new PDOAdherentDao($database);
        $PDOAdmin=new PDOAdminDao($database);
        $PDOBibliothecaire=new BibliothecaireDao($database);
        $this->service=new service($PDOInscription,$PDOArchive,$PDOEmprunt,$PDOTitre,$PDOPersonne,$PDOAdherent,$PDOAdmin,$PDOBibliothecaire);
    }
    public function getService(){return $this->service;}
    public function setService($service){$this->service=$service;}

}
?>