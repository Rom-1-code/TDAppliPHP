<?php

class Programme
{

    private $_idprog;
    private $_adressepageprog; //numero fourni par la base qui donnera accès à la page php contenant le programme sportif

    public function __construct($id)
    {
        $this->_idprog = $id;
        
        try
        {
            $Base = new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','root');
        }
        catch(Exception $erreur)
        {
            echo "pas possible de se connecter à la base";
        }
        
        $adresse = $Base->query('SELECT adresse_prog from programme where id="'.$id.'"');
        $this->_adressepageprog = $adresse;
    }

    
    

        
    
    /*
    public function __construct($id)
    {
        try
        {
            $Base = new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','root');
        }
        catch(Exception $erreur)
        {
            echo "pas possible de se connecter à la base";
        }
        
        $Id = $Base->query('SELECT id_programme from programme where id="'.$id.'"');
        $adresse = $Base->query('SELECT adresse_prog from programme where id="'.$id.'"');
        $this->_idprog = $Id;
        $this->_adressepageprog = $adresse;
        
    }
    */
    public function syncronisewithbase()
    {
        try
        {
            $Base = new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','root');
        }
        catch(Exception $erreur)
        {
            echo "pas possible de se connecter à la base";
        }

        try
        {
            $donneesbrutes=$Base->query("SELECT id_programme from programme,user where programme.id_programme=user.id_programme");
        }
        catch(Exception $erreur)
        {
            echo "pas possible d'insérer cette valeur";
        }     
        
    }

    public function getadresse()
    {
        return $this->_adressepageprog;
    }

















}








?>