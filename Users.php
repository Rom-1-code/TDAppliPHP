<?php
class Users
{
    //propriété :
    private $_Nom;
    private $_Mdp;

    //méthode :
    public function __construct($newNom, $newMdp)
    {
        $this->_Nom = $newNom;
        $this->_Mdp = $newMdp;
    }
    public function login()
    {
    }
}
?>
