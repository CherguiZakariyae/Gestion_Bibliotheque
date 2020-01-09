<?php
include("Action.php");
class ActionAdherent extends Action{
    public function __construct()
    {
        parent::__construct();
    }
    public function addAdherent($adherent){
        $PDOAdherent=parent::getService()->getPDOAdherent();
        $PDOAdherent->addAdherant($adherent);
    }
    public function editAdherent($adherent){
        $PDOAdherent=parent::getService()->getPDOAdherent();
        $PDOAdherent->editAdherant($adherent);
    }
    public function deleteAdherent($id){
        $PDOAdherent=parent::getService()->getPDOAdherent();
        $PDOAdherent->deleteAdherant($id);
    }
    public function getAllAdherent(){
        $PDOAdherent=parent::getService()->getPDOAdherent();
        return $PDOAdherent->listerAdherant();
    }
    public function getAdherent($id){
        $PDOAdherent=parent::getService()->getPDOAdherent();
        return $PDOAdherent->chercherAdherant($id);
    }
}
