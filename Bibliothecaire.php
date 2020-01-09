<?php
include_once("Personne.php");
class Bibliothecaire extends Personne
{
	private $login;
	private $password;
	public function __construct($id_admin,$nom,$prenom,$date_naissance,$adresse,$telephone,$email,$cin,$login,$password)
	{
		parent::__construct($id_admin,$nom,$prenom,$date_naissance,$adresse,$telephone,$email,$cin,"Bibliothecaire");
		$this->login=$login;
		$this->password=$password;
	}
	public function getLogin(){return $this->login;}
	public function getPassword(){return $this->password;}

	public function setLogin($login){$this->login=$login;}
	public function setPassword($password){$this->password=$password;}
}
?>