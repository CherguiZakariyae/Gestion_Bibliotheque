<?php
class Emprunt{
	private $id_emprunt;
	private $date_emprunt;
	private $date_retour_prevu;
	private $date_retour_effective;
	private $id_adherent;
	private $id_titre;
	
	private $titre;
	private $adherent;
	
	public function __construct($id_emprunt,$date_emprunt,$date_rp,$date_re,$id_adherent,$id_titre){
		$this->id_emprunt=$id_emprunt;
		$this->date_emprunt=$date_emprunt;
		$this->date_retour_prevu=$date_rp;
		$this->date_retour_effective=$date_re;
		$this->id_adherent=$id_adherent;
		$this->id_titre=$id_titre;
	}
	public function getId_emprunt(){return $this->id_emprunt;}
	public function getDate_emprunt(){return $this->date_emprunt;}
	public function getDate_retour_prevu(){return $this->date_retour_prevu;}
	public function getDate_retour_effective(){return $this->date_retour_effective;}
	public function getId_adherent(){return $this->id_adherent;}
	public function getId_titre(){return $this->id_titre;}

	public function setId_emprunt($id_emprunt){$this->id_emprunt=$id_emprunt;}
	public function setDate_emprunt($date_emprunt){$this->date_emprunt=$date_emprunt;}
	public function setDate_retour_prevu($date_retour_prevu){$this->date_retour_prevu=$date_retour_prevu;}
	public function setDate_retour_effective($date_retour_effective){$this->date_retour_effective=$date_retour_effective;}
	public function setId_adherent($id_adherent){$this->id_adherent=$id_adherent;}
	public function setId_titre($id_titre){$this->id_titre=$id_titre;}

	public function getTitre(){return $this->titre;}
	public function getAdherent(){return $this->adherent;}
	public function setTitre($titre){$this->titre=$titre;}
	public function setAdherent($adherent){$this->adherent=$adherent;}
}

?>