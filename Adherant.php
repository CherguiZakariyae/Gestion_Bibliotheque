<?php
include_once("Personne.php");
class Adherant extends Personne
{

	private $matricule;
	private $image;

	private $inscriptions;
	public function __construct($id_adherant,$nom,$prenom,$date_naissance,$adresse,$telephone,$email,$cin,$matricule,$image)
	{
		parent::__construct($id_adherant,$nom,$prenom,$date_naissance,$adresse,$telephone,$email,$cin,"Adherant");
		$this->matricule=$matricule;
		$this->image=$image;
	}

	public function getMatricule(){return $this->matricule;}
	public function getImage(){return $this->image;}
	public function getInscriptions(){return $this->inscriptions;}


	public function setMatricule($matricule){$this->matricule=$matricule;}
	public function setImage($image){$this->image=$image;}
	public function setInscriptions($inscriptions){$this->inscriptions=$inscriptions;}

}
?>