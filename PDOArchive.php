<?php
include_once("Archive.php");
Class PDOArchiveDao
{
	private $database;
	public function __construct($database)
	{
		$this->database=$database;
	}
	public function addArchive($archive)
	{
		$this->database->execc("insert into archive values(0,'".$archive->getQuantite()."','".$archive->getDate()."','".$archive->getId_titre()."')");
	}
	public function editArchive($archive)
	{
		$this->database->execc("update archive set quantite='".$archive->getQuantite()."',date_archivage='".$archive->getDate()."',id_titre='".$archive->getId_titre()."' where id_archive='".$archive->getId_archive()."'");
	}
	public function deleteArchive($id)
	{
		$this->database->execc("delete from archive where id_archive='$id'");
	}
	public function chercheArchiveById($id)
	{
		$rs=$this->database->select("select * from archive where id_archive='$id'");
		if($row=$rs->fetch())
		{
			return new Archive($row['id_archive'],$row['quantite'],$row['date_archivage'],$row['id_titre']);
		}
		return null;
	}
	
	public function listeArchive()
	{
		$tab=array();
		$rs=$this->database->select("select * from archive");
		while($row=$rs->fetch())
		{
			$tab[]=new Archive($row['id_archive'],$row['quantite'],$row['date_archivage'],$row['id_titre']);
		}
		return $tab;
	}
	public function chercheArchiveByTitree($id_titre)
	{
		$tab=array();
		$rs=$this->database->select("select * from archive where id_titre='$id_titre'");
		while($row=$rs->fetch())
		{
			$tab[]=new Archive($row['id_archive'],$row['quantite'],$row['date_archivage'],$row['id_titre']);
		}
		return $tab;
	}
}
?>