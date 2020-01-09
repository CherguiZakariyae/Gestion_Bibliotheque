<?php
include("Action.php");
class ActionAdmin extends Action{
    public function __construct()
    {
        parent::__construct();
    }
    public function addAdmin($admin){
        $PDOAdmin=parent::getService()->getPDOAdmin();
        $PDOAdmin->addAdmin($admin);
    }
    public function editAdmin($admin){
        $PDOAdmin=parent::getService()->getPDOAdmin();
        $PDOAdmin->editAdmin($admin);
    }
    public function deleteAdmin($id){
        $PDOAdmin=parent::getService()->getPDOAdmin();
        $PDOAdmin->deleteAdmin($id);
    }
    public function getAllAdmin(){
        $PDOAdmin=parent::getService()->getPDOAdmin();
        return $PDOAdmin->listerAdmin();
    }
    public function getAdmin($id){
        $PDOAdmin=parent::getService()->getPDOAdmin();
        return $PDOAdmin->chercherAdmin($id);
    }
    public function authentificationAdmin($login,$password)
    {
        $PDOAdmin=parent::getService()->getPDOAdmin();
        return $PDOAdmin->authentificationAdmin($login,$password);
    }
}
