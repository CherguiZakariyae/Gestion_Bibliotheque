<?php
class Archive{
	private $id_archive;
	private $date;
	private $quantite;
	private $id_titre;
	
	private $titre;
	
	public function __construct($id_archive,$quantite,$date,$id_titre){
		$this->id_archive=$id_archive;
		$this->date=$date;
		$this->quantite=$quantite;
		$this->id_titre=$id_titre;
	}
	public function getId_archive(){return $this->id_archive;}
	public function getDate(){return $this->date;}
	public function getQuantite(){return $this->quantite;}
	public function getId_titre(){return $this->titre;}
	
	public function setId_archive($id_archive){$this->id_archive=$id_archive;}
	public function setDate($date){$this->date=$date;}
	public function setQuantite($quantite){$this->quantite=$quantite;}
	public function setId_titre($id_titre){$this->id_titre=$id_titre;}
	
	public function getTitre(){return $this->titre;}
	public function setTitre($titre){$this->titre=$titre;}
	}

?>