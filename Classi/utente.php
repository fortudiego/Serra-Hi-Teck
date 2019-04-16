<?php
/**
 * Created by PhpStorm.
 * User: Francesco
 * Date: 08/03/2019
 * Time: 10:51
 */

class utente
{
    private $username = null;
    private $nome = null;
    private $cognome = null;
    private $email = null;
    private $pwd = null;
    private $flag_admin = null;
    private $pdo = null;

    /**
     * utente constructor.
     * @param $username
     */
    public function __construct($username){
        $this->username = $username;
    }


    /**
     * @param $nome
     * @param $cognome
     * @param $email
     * @param $pwd
     * @param $flag_admin
     */
    public function setDati($nome, $cognome, $email, $pwd, $flag_admin){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->flag_admin = $flag_admin;
    }


    public function isUtente(){
        $esito = false;
        include_once "../pdo.php";
        $this->pdo = connessione_normale();
        try{
            $Nutenti = $this->pdo->query("SELECT * FROM utenti WHERE username = '$this->username'")->rowCount();
            if($Nutenti > 0){
                $esito =  true;
            }
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        $this->pdo = null;
        return $esito;
    }

    public function verifyPassword($pwd){
        $esito = false;
        if (password_verify($pwd, $this->pwd)) {
            $esito = true;
        }
        return $esito;
    }

    public function getFlag(){
        return $this->flag_admin;
    }



}