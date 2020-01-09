<?php
include_once("Emprunt.php");
Class PDOEmpruntDao
{
	private $database;
	public function __construct($database)
	{
		$this->database=$database;
	}
	public function addEmprunt($emprunt)
	{
		$this->database->execc("insert into emprunt values(0,'".$emprunt->getDate_emprunt()."','".$emprunt->getDate_retour_prevu()."','".$emprunt->getDate_retour_effective()."','".$emprunt->getId_adherent()."','".$emprunt->getId_titre()."')");
	}
	public function editEmprunt($emprunt)
	{
		$this->database->execc("update emprunt set date_emprunt='".$emprunt->getDate_emprunt()."',date_retour_prevu='".$emprunt->getDate_retour_prevu()."',date_retour_effective='".$emprunt->getDate_retour_effective()."',id_adherent='".$emprunt->getId_adherent()."',id_titre='".$emprunt->getId_titre()."' where id_emprunt='".$emprunt->getId_emprunt()."'");
	}
	public function deleteEmprunt($id)
	{
		$this->database->execc("delete from emprunt where id_emprunt='$id'");
	}
	public function chercheEmpruntById($id)
	{
		$rs=$this->database->select("select * from emprunt where id_emprunt='$id'");
		if($row=$rs->fetch())
		{
			return new Emprunt($row['id_emprunt'],$row['date_emprunt'],$row['date_retour_prevu'],$row['date_retour_effective'],$row['id_adherent'],$row['id_titre']);
		}
		return null;
	}
	
	public function listeEmprunt()
	{
		$tab=array();
		$rs=$this->database->select("select * from emprunt");
		while($row=$rs->fetch())
		{
			$tab[]=new Emprunt($row['id_emprunt'],$row['date_emprunt'],$row['date_retour_prevu'],$row['date_retour_effective'],$row['id_adherent'],$row['id_titre']);
		}
		return $tab;
	}

}
?>