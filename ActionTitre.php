<?php
include("Action.php");
class ActionTitre extends Action{
    public function __construct()
    {
        parent::__construct();
    }
    public function addTitre($titre){
        $PDOTitre=parent::getService()->getPDOTitre();
        $PDOTitre->addAdherant($titre);
    }
    public function editTitre($titre){
        $PDOTitre=parent::getService()->getPDOTitre();
        $PDOTitre->editTitre($titre);
    }
    public function deleteTitre($id){
        $PDOTitre=parent::getService()->getPDOTitre();
        $PDOTitre->deleteTitre($id);
    }
    public function getAllTitre(){
        $PDOTitre=parent::getService()->getPDOTitre();
        return $PDOTitre->listeTitre();
    }
    public function getTitre($id){
        $PDOTitre=parent::getService()->getPDOTitre();
        return $PDOTitre->chercheTitreById($id);
    }
}
