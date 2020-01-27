<?php
//commentaire detete dev : a quoi sert la classe date 

class Users
{
    //propriété :
    private $_Nom;
    private $_Mdp;
    private $_Iduser;
    private $_Idprog;
    private $_Imc;

    /*public function getProgramme(){

        $p1 = new Programme($this->_Idprog);

        

        return $p1
    }

    public function setProgramme($idProgramm){

        //requet insert Id program dans la table user

        $this->_Idprog = $idProgramm;

        
    }*/


    //constructeur :
    public function __construct($newNom,$newMdp,$newimc)
    {
        $this->_Nom = $newNom;
        $this->_Mdp = $newMdp;
        $this->_Imc = $newimc;
    }
    
    //permet de connect le user a l'application
    public function login($nom,$mdp)
    {
        try
		{
			$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','root');
		}
		catch(Exception $erreur)
		{
			echo "accès à la base impossible";
        }
         
        $Donneesbase = $Base->query('SELECT pseudo,motdepasse from user where pseudo ="'.$nom.'" AND motdepasse ="'.$mdp.'"');
        while($futurtableau = $Donneesbase->fetch()){

            if($futurtableau["pseudo"]==$nom && $futurtableau["motdepasse"]==$mdp){

                header('Location: navprogrammes.php');
            }
            
        }
        if($futurtableau["pseudo"]!=$nom || $futurtableau["motdepasse"]!=$mdp);{
            echo"Cet utilisateur n'existe pas !";
		}
	
        
         

         
    }

    public function inscription($nom,$mdp,$imc,$idprog)
    {
        try
		{
			$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','root');
            $Base->query('INSERT INTO user (id_programme,imc,pseudo,motdepasse) VALUES ("'.$idprog.'","'.$imc.'","'.$nom.'","'.$mdp.'")'); //insertion d'une nouvelle ligne dans la bdd
        
        }
		catch(Exception $erreur)
		{
			echo "accès à la base impossible";
        }
        
       

        $Id = $Base->query('SELECT id_user from user where pseudo="'.$nom.'" AND motdepasse="'.$mdp.'" AND imc="'.$imc.'"'); //on recupère l'id de l'utilisateur qui vient d'être crée
        $this->_Iduser=$Id;
        $this->_Nom=$nom;
        $this->_Imc=$imc;
        $this->_Mdp=$mdp;
        $this->_Idprog=$idprog;
        
        
    }


    public function suppressionuser($nom,$mdp)
    {
        try
		{
			$Base =  new PDO('mysql:host=localhost; dbname=base_sportive; charset=utf8','root','root');
		}
		catch(Exception $erreur)
		{
			echo "accès à la base impossible";
        }

        $Base->query('DELETE from user where pseudo="'.$nom.'" AND motdepasse="'.$mdp.'"'); //suppression d'une ligne dans la bdd
        session_destroy(); //on surpprime les infos de l'utilisateur de la session actuelle
    }

    public function getidprog()
    {
        return $this->_Idprog; //pour savoir quel(s) programme(s) est affilié à l'utilisateur
    }

    public function getname()
    {
        return $this->_Nom; //pour savoir le nom de l'utilisateur courant
    }

    public function liaisonproguser()
    {
        
    }

    public function SetIMC()
    {

    }


}
?>
