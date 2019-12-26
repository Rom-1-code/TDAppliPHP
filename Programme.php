<?php

class Programme
{

    private $_idprog;
    private $_adressepageprog; //numero fourni par la base qui donnera accès à la page php contenant le programme sportif


    public function syncronisewithbase($this->_idprog)
    {
        try
        {
            $Base = new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','');
        }
        catch(Exception $erreur)
        {
            echo "pas possible de se connecter à la base";
        }

        try
        {
            $Base->query("INSERT into user (id_programme) VALUES ('$this->_idprog')");
        }
        catch(Exception $erreurs)
        {
            echo "pas possible d'insérer cette valeur";
        }

        try
        {
            $donneesbrutes=$Base->query("SELECT adressepageprogramme from programme,user where programme.id_programme=user.id_programme");
        }
        catch(Exception $erreur)
        {
            echo "pas possible d'insérer cette valeur";
        }


        
        
    }

















}








?>