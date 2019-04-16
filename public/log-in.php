<?php
/**
 * Created by PhpStorm.
 * User: Francesco
 * Date: 05/03/2019
 * Time: 09:29
 */
session_start();
$id_utente = filter_input(INPUT_POST, "id_utente",FILTER_SANITIZE_STRING);
$pwd = filter_input(INPUT_POST,"pwd", FILTER_SANITIZE_STRING);

include_once "../Classi/utente.php";
$utente = new utente($id_utente,"","","","","");
$esiste = $utente->isUtente();
if($esiste == true){
    if($utente->verifyPassword($pwd)){
        $_SESSION['login']= true;
        $_SESSION['id_utente'] = $id_utente;
        $_SESSION['flag_admin']= $id_utente->getFlag();
    }
}
