<?php
class Inscription{
	private $id_inscription;
	private $date_inscription;
	private $id_personne;

	private $adherent;
	
	public function __construct($id_inscription,$date_inscription,$id_personne){
		$this->id_inscription=$id_inscription;
		$this->date_inscription=$date_inscription;
		$this->id_personne=$id_personne;
	}
	public function getId_inscription(){return $this->id_inscription;}
	public function getDate_Insctiption(){return $this->date_inscription;}
	public function getId_personne(){return $this->id_personne;}
	
	public function setId_inscription($id_inscription){$this->id_inscription=$id_inscription;}
	public function setDate_Insctiption($date_inscription){$this->date_inscription=$date_inscription;}
	public function setId_personne($id_personne){$this->id_personne=$id_personne;}

	public function getAdherent(){return $this->adherent;}
	public function setAdherent($adherent){$this->adherent=$adherent;}
}

?>