<?php
include_once("Bibliothecaire.php");
class BibliothecaireDao
{
	private $database;
	public function __construct($database)
	{
		$this->database=$database;
	}
	public function addBibliothecaire($bibliothecaire)
	{
		$this->database->execc("insert into personne values(0,'".$bibliothecaire->getNom()."','".$bibliothecaire->getPrenom()."',
			'".$bibliothecaire->getDate_naissance()."','".$bibliothecaire->getAdresse()."','".$bibliothecaire->getTelephone()."',
			'".$bibliothecaire->getEmail()."','".$bibliothecaire->getCin()."','".$bibliothecaire->getMatricule()."','".$bibliothecaire->getImage()."',
			'".$bibliothecaire->getLogin()."','".$bibliothecaire->getPassword()."','Bibliothecaire')");
		
	}
	public function editBibliothecaire($bibliothecaire)
	{
		$this->database->execc("update personne set nom='".$bibliothecaire->getNom()."',prenom='".$bibliothecaire->getPrenom()."',
            date_naissance='".$bibliothecaire->getDate_naissance()."',adresse='".$bibliothecaire->getAdresse()."',
            telephone='".$bibliothecaire->getTelephone()."',email='".$bibliothecaire->getEmail()."',cin='".$bibliothecaire->getCin()."',
            matricule='".$bibliothecaire->getMatricule()."',image='".$bibliothecaire->getImage()."',login='".$bibliothecaire->getLogin()."',
            password='".$bibliothecaire->getPassword()."',fonction='".$bibliothecaire->getFonction()."'. where id_personne='".$bibliothecaire->getId_personne()."'");
	}
	public function deleteBibliothecaire($id)
	{
		$this->database->execc("delete from personne where id_personne='$id'");
	}
	public function chercherBibliothecaire($id)
	{
		$rs=$this->database->select("select * from personne where id_personne='$id'");
		if($row=$rs->fetch())
		{
			return new Bibliothecaire($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['login'],$row['password']);
		}
		return null;
	}
	public function listerBibliothecaire()
	{
		$tab=array();
		$rs=$this->database->select("select * from personne where fonction='Bibliothecaire'");
		while($row=$rs->fetch())
		{
			$tab[]=new Bibliothecaire($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['login'],$row['password']);
		}
		return $tab;
	}
	public function authentificationBibliothecaire($login,$password)
	{
		$rs=$this->database->select("select * from personne where login='$login' and password='$password'");
		if($row=$rs->fetch())
		{
			return new Bibliothecaire($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['login'],$row['password']);
		}
		return null;
	}
}
?>