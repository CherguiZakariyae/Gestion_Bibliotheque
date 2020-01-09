<?php
include_once("Adherant.php");
class PDOAdherentDao
{
	private $database;
	public function __construct($database)
	{
		$this->database=$database;
	}
	public function addAdherant($adherant)
	{
		$this->database->execc("insert into personne values(0,'".$adherant->getNom()."','".$adherant->getPrenom()."',
			'".$adherant->getDate_naissance()."','".$adherant->getAdresse()."','".$adherant->getTelephone()."',
			'".$adherant->getEmail()."','".$adherant->getCin()."','".$adherant->getMatricule()."','".$adherant->getImage()."',
			'".$adherant->getLogin()."','".$adherant->getPassword()."','Adherent')");
		
	}
	public function editAdherant($adherant)
	{
		$this->database->execc("update personne set nom='".$adherant->getNom()."',prenom='".$adherant->getPrenom()."',
            date_naissance='".$adherant->getDate_naissance()."',adresse='".$adherant->getAdresse()."',
            telephone='".$adherant->getTelephone()."',email='".$adherant->getEmail()."',cin='".$adherant->getCin()."',
            matricule='".$adherant->getMatricule()."',image='".$adherant->getImage()."',login='".$adherant->getLogin()."',
            password='".$adherant->getPassword()."',fonction='".$adherant->getFonction()."'. where id_personne='".$adherant->getId_personne()."'");
	}
	public function deleteAdherant($id)
	{
		$this->database->execc("delete from personne where id_personne='$id'");
	}
	public function chercherAdherant($id)
	{
		$rs=$this->database->select("select * from personne where id_personne='$id'");
		if($row=$rs->fetch())
		{
			return new Adherant($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['matricule'],$row['image']);
		}
		return null;
	}
	public function listerAdherant()
	{
		$tab=array();
		$rs=$this->database->select("select * from personne where fonction='Adherant'");
		while($row=$rs->fetch())
		{
			$tab[]=new Adherant($row['id_personne'],$row['nom'],$row['prenom'],$row['date_naissance'],$row['adresse'],$row['telephone'],$row['email'],$row['cin'],$row['matricule'],$row['image']);
		}
		return $tab;
	}
}
?>