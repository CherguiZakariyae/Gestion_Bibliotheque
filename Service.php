<?php
include_once("PDOInscription.php");
include_once("PDOArchive.php");
include_once("PDOEmprunt.php");
include_once("PDOTitre.php");
include_once("PersonneDao.php");
include_once("AdherantDao.php");
include_once("AdminDao.php");
include_once("BibliothecaireDao.php");
class Service{
    private $PDOInscription;
    private $PDOArchive;
    private $PDOEmprunt;
    private $PDOTitre;
    private $PDOPersonne;
    private $PDOAdherent;
    private $PDOAdmin;
    private $PDOBibliothecaire;
    public function __construct($PDOInscription,$PDOArchive,$PDOEmprunt,$PDOTitre,$PDOPersonne,$PDOAdherent,$PDOAdmin,$PDOBibliothecaire)
    {
        $this->PDOAdherent=$PDOAdherent;
        $this->PDOAdmin=$PDOAdmin;
        $this->PDOArchive=$PDOArchive;
        $this->PDOBibliothecaire=$PDOBibliothecaire;
        $this->PDOEmprunt=$PDOEmprunt;
        $this->PDOInscription=$PDOInscription;
        $this->PDOPersonne=$PDOPersonne;
        $this->PDOTitre=$PDOTitre;
    }
    public function getPDOInscription(){return $this->PDOInscription;}
    public function getPDOArchive(){return $this->PDOArchive;}
    public function getPDOEmprunt(){return $this->PDOEmprunt;}
    public function getPDOTitre(){return $this->PDOTitre;}
    public function getPDOPersonne(){return $this->PDOPersonne;}
    public function getPDOAdherent(){return $this->PDOAdherent;}
    public function getPDOAdmin(){return $this->PDOAdmin;}
    public function getPDOBibliothecaire(){return $this->PDOBibliothecaire;}


    /*functions*/
    public function getEmrunt($id_emprunt)
    {
        $emprunt=$this->PDOEmprunt->chercheEmpruntById($id_emprunt);
        $emprunt->setAdherent($this->PDOAdherent->chercherAdherant($emprunt->getId_adherent()));
        $emprunt->setTitre($this->PDOTitre->chercheTitreById($emprunt->getId_titre()));
        return $emprunt;
    }
    public function getAllEmrunt()
    {
        $tab_emrunt=$this->PDOEmprunt->listeEmprunt();
        $L=count($tab_emrunt);
        for($i=0;$i<$L;$i++)
        {
            $tab_emrunt[$i]->setAdherent($this->PDOAdherent->chercherAdherant($tab_emrunt[$i]->getId_adherent()));
            $tab_emrunt[$i]->setTitre($this->PDOTitre->chercheTitreById($tab_emrunt[$i]->getId_titre()));
        }
        return $tab_emrunt;
    }
    public function getInscription($id_inscription)
    {
        $inscription=$this->PDOEmprunt->chercheEmpruntById($id_inscription);
        $inscription->setAdherent($this->PDOAdherent->chercherAdherant($inscription->getId_personne()));
        return $inscription;
    }
    public function getAllInscription()
    {
        $tab_inscription=$this->PDOInscription->listeInscription();
        $L=count($tab_inscription);
        for($i=0;$i<$L;$i++)
        {
            $tab_inscription[$i]->setAdherent($this->PDOAdherent->chercherAdherant($tab_inscription[$i]->getId_personne()));
        }
        return $tab_inscription;
    }
    public function getArchive($id_archive)
    {
        $archive=$this->PDOArchive->chercheArchiveById($id_archive);
        $archive->setTitre($this->PDOTitre->chercheTitreById($archive->getId_titre()));
        return $archive;
    }
    public function getAllArchive()
    {
        $tab_archive=$this->PDOArchive->listeArchive();
        $L=count($tab_archive);
        for($i=0;$i<$L;$i++)
        {
            $tab_archive[$i]->setTitre($this->PDOTitre->chercheTitreById($tab_archive[$i]->getId_titre()));
        }
        return $tab_archive;
    }

}