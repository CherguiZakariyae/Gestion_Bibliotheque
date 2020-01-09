<?php
include("Action.php");
class ActionEmprunt extends Action{
    public function __construct()
    {
        parent::__construct();
    }
    public function addEmprunt($emprunt){
        $PDOEmprunt=parent::getService()->getPDOEmprunt();
        $PDOEmprunt->addEmprunt($emprunt);
    }
    public function editEmprunt($emprunt){
        $PDOEmprunt=parent::getService()->getPDOEmprunt();
        $PDOEmprunt->editEmprunt($emprunt);
    }
    public function deleteEmprunt($id){
        $PDOEmprunt=parent::getService()->getPDOEmprunt();
        $PDOEmprunt->deleteEmprunt($id);
    }
    public function getAllEmprunt(){

        return parent::getService()->getAllEmrunt();
    }
    public function getEmprunt($id){
        return parent::getService()->getEmrunt($id);

    }
}
