<?php

class Personne
{
	private $id_personne;
	private $nom;
	private $prenom;
	private $date_naissance;
	private $adresse;
	private $telephone;
	private $email;
	private $cin;
	private $fonction;

	public function __construct($id_personne,$nom,$prenom,$date_naissance,$adresse,$telephone,$email,$cin,$fonction)
	{
		$this->id_personne=$id_personne;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->date_naissance=$date_naissance;
		$this->adresse=$adresse;
		$this->telephone=$telephone;
		$this->email=$email;
		$this->cin=$cin;
		$this->fonction=$fonction;

	}
	public function getId_personne(){return $this->id_personne;}
	public function getNom(){return $this->nom;}
	public function getPrenom(){return $this->prenom;}
	public function getDate_naissance(){return $this->date_naissance;}
	public function getAdresse(){return $this->adresse;}
	public function getTelephone(){return $this->telephone;}
	public function getEmail(){return $this->email;}
	public function getCin(){return $this->cin;}
	
	public function getFonction(){return $this->fonction;}


	public function setId_personne($id_personne){$this->id_personne=$id_personne;}
	public function setNom($nom){$this->nom=$nom;}
	public function setPrenom($prenom){$this->prenom=$prenom;}
	public function setDate_naissance($date_naissance){$this->date_naissance=$date_naissance;}
	public function setAdresse($adresse){$this->adresse=$adresse;}
	public function setTelephone($telephone){$this->telephone=$telephone;}
	public function setEmail($email){$this->email=$email;}
	public function setCin($cin){$this->cin=$cin;}
	
	public function setFonction($fonction){$this->fonction=$fonction;}
	



}
?>