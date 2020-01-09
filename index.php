<?php
session_start();
if(isset($_GET['action']))
{
    $action=$_GET['action'];
}
else if (isset($_POST['action']))
{
    $action=$_POST['action'];
}else $action="AV_login";
if((!isset($_SESSION['login']) || $_SESSION['login']==null) && $action!="login") $action="AV_login";
/**/
if($action=="logout")
{
    session_destroy();
    $_SESSION["id_personne"]=null;
    $_SESSION["login"]=null;
    $_SESSION["password"]=null;
    $_SESSION["fonction"]=null;
    $vue="Form_Login.php";
}
if($action=="AV_login")
{
    $vue="Form_Login.php";
}

if($action=="login")
{
    $username=$_POST['login'];
    $password=$_POST['password'];
    include_once("Action_Admin.php");
    $Action_Admin=new ActionAdmin();
    $resultat=$Action_Admin->authentificationAdmin($username,$password);
    if($resultat==null)
    {
        $message="compte n'existe pas";
        $vue="Form_Login.php";
    }
    else
    {
        //session_start();
        $_SESSION["id_personne"]=$resultat->getId_personne();
        $_SESSION["login"]=$resultat->getLogin();
        $_SESSION["fonction"]=$resultat->getFonction();
        $vue="Acceuil.php";
    }
}


include($vue);
?>