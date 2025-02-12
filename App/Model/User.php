<?php

class User extends Orm
{

    public function __construct()
    {
        parent::__construct('users');
        if (!isset($_SESSION['id_user'])) {
            $_SESSION['id_user'] = 3;
        }
    }

    public function login($us, $pass)
    {
        //gestiona el login de l'usuari
        //retorna l'usuari logejat o null si no s'ha logejat

    }

    public function getByUsername($username)
    {
        //Retorna el usuari amb username=$username o null si no existeix

    }

    public function promote($id)
    {
        //promo a admin usuari amb id=$id
        //retorna el usuari promocionat

    }
}
