<?php
include("Action.php");
class ActionInscription extends Action{
    public function __construct()
    {
        parent::__construct();
    }
    public function addInscription($Inscription){
        $PDOInscription=parent::getService()->getPDOInscription();
        $PDOInscription->addInscription($Inscription);
    }
    public function editInscription($Inscription){
        $PDOInscription=parent::getService()->getPDOInscription();
        $PDOInscription->editInscription($Inscription);
    }
    public function deleteInscription($id){
        $PDOInscription=parent::getService()->getPDOInscription();
        $PDOInscription->deleteInscription($id);
    }
    public function getAllInscription(){

        return parent::getService()->getAllInscription();
    }
    public function getInscription($id){
        return parent::getService()->getInscription($id);

    }
}
