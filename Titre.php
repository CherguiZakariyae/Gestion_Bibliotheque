<?php
class Titre{
	private $id_titre;
	private $titre;
	private $auteur;
	private $quantite;
	private $code_barre;
	
	public function __construct($id_titre,$titre,$auteur,$quantite,$code_bare){
		$this->id_titre=$id_titre;
		$this->titre=$titre;
		$this->auteur=$auteur;
		$this->quantite=$quantite;
		$this->code_barre=$code_bare;
	}
	public function getId_titre(){return $this->id_titre;}
	public function getTitre(){return $this->titre;}
	public function getAuteur(){return $this->auteur;}
	public function getQuantite(){return $this->quantite;}
	public function getCode_barre(){return $this->code_bare;}
	
	public function setId_titre($id_titre){$this->id_titre=$id_titre;}
	public function setTitre($titre){$this->titre=$titre;}
	public function setAuteur($auteur){$this->auteur=$auteur;}
	public function setQuantite($quantite){$this->quantite=$quantite;}
	public function setCode_barre($code_bare){$this->code_bare=$code_bare;}
	
	}

?>