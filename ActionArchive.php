<?php
include("Action.php");
class ActionArchive extends Action{
    public function __construct()
    {
        parent::__construct();
    }
    public function addArchive($archive){
        $PDOArchive=parent::getService()->getPDOArchive();
        $PDOArchive->addArchive($archive);
    }
    public function editArchive($archive){
        $PDOArchive=parent::getService()->getPDOArchive();
        $PDOArchive->editArchive($archive);
    }
    public function deleteArchive($id){
        $PDOArchive=parent::getService()->getPDOArchive();
        $PDOArchive->deleteArchive($id);
    }
    public function getAllArchive(){

        return parent::getService()->getAllArchive();
    }
    public function getArchive($id){
        return parent::getService()->getArchive($id);

    }
}
