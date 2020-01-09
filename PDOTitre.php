<?php
include_once("Titre.php");
Class PDOTitreDao
{
	private $database;
	public function __construct($database)
	{
		$this->database=$database;
	}
	public function addTitre($titre)
	{
		$this->database->execc("insert into titre values(0,'".$titre->getTitre()."','".$titre->getAuteur()."','".$titre->getQuantite()."','".$titre->getCode_barre()."')");
	}
	public function editTitre($titre)
	{
		$this->database->execc("update titre set titre='".$titre->getTitre()."',auteur='".$titre->getAuteur()."',quantite='".$titre->getQuantite()."',code_barre='".$titre->getCode_barre()."' where id_titre='".$titre->getId_titre()."'");
	}
	public function deleteTitre($id)
	{
		$this->database->execc("delete from titre where id_titre='$id'");
	}
	public function chercheTitreById($id)
	{
		$rs=$this->database->select("select * from titre where id_titre='$id'");
		if($row=$rs->fetch())
		{
			return new Titre($row['id_titre'],$row['titre'],$row['auteur'],$row['quantite'],$row['code_barre']);
		}
		return null;
	}
	
	public function listeTitre()
	{
		$tab=array();
		$rs=$this->database->select("select * from titre");
		while($row=$rs->fetch())
		{
			$tab[]=new Titre($row['id_titre'],$row['titre'],$row['auteur'],$row['quantite'],$row['code_barre']);
		}
		return $tab;
	}
}
?>