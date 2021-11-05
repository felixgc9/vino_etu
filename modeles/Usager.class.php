<?php

/**
 * Class Usager
 * 
 * Cette classe possède les fonctions de gestion des usagers.
 * 
 * @author PW2-DFV
 * @version 1.0
 */
class Usager extends Modele {

    const TABLE = 'vino__usager';

    public function connexion(){

        $connexion = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

        $email = $_POST['email'];

        $requete = mysqli_prepare($connexion, "SELECT vino__usager.email, vino__usager.id, vino__usager.password, vino__usager.nom, vino__usager.prenom, vino__usager.username, vino__usager.admin FROM vino__usager WHERE email = ?");

        if($requete) 
        {
            mysqli_stmt_bind_param($requete, 's',$email);

            mysqli_stmt_execute($requete);

            $resultat = mysqli_stmt_get_result($requete);

            $usager = $resultat->fetch_assoc();

            if (isset($usager['nom'])) {
                $_SESSION['nom'] = $usager['nom'];
                $_SESSION['usager_id'] = $usager['id'];
                $_SESSION['admin'] = $usager['admin'];
                $_SESSION['prenom'] = $usager['prenom'];
                $_SESSION['email'] = $usager['email'];
                $_SESSION['username'] = $usager['username'];
            }
        }
    }

    public function deconnexion(){

        session_destroy();
    }


    public function hashPassword($password){
        $options = [
            'cost' => 12,
        ];
        $hashPassword= password_hash($password, PASSWORD_BCRYPT, $options);
  
        return $hashPassword;
    }

    public function checkPassword($password, $email){
        
        $requete = "SELECT password FROM vino__usager WHERE email = '".$email."'";
        
        $res = $this->_db->query($requete);

        $row = $res->fetch_assoc();

        $dbpassword = $row['password'];

        return password_verify($password, $dbpassword);
    }

    public function inscription($data, $hashPass){

        $requete = "INSERT INTO vino__usager (nom, prenom, username, email, password) VALUE ('".$data->nom."', '".$data->prenom."', '".$data->username."', '".$data->email."', '".$hashPass."')";
   
        $res = $this->_db->query($requete);

		return $res;
    }


    /**
     * getListeUsager - Cette méthode récupère la liste de tous les usagers 
     *
     * @return void
     */    
    
    public function getListeUsager()
	{
        $rows = Array();
		$res = $this->_db->query('Select * from '. self::TABLE);
		if($res->num_rows)
		{
			while($row = $res->fetch_assoc())
			{
				$rows[] = $row;
			}
		}
		
		return $rows;

    }  
    
    /**
     * getUsagerId  - Cette méthode récupere les données d'un seul usager identifié par $id
     *
     * @param  mixed $id
     * @return void
     */
    public function getUsagerId($id)
	{
//        return $row;
    }   
        
    /**
     * ajouterUsager Cette méthode ajoute un usager avec les données reçues dans $data
     *
     * @param  Array $data Tableau des données du usager à inserer
     * @return int   $id du nouveau usager inséré
     */
    public function ajouterUsager($data)
	{
//        return $id;
    }   
        
    /**
     * supprimerUsager
     *
     * @param  int id de l'usager à supprimer
     * @return Boolean succés ou échec de l'ajout
     */
    public function supprimerUsager($id)
	{
        
 //       return $res;
    }   
        
    /**
     * modifierUsager met à jour les informations d'un usager existant
     *
     * @param  Array $data nouvelles données du Usager à modifier
     * @return Boolean succés ou échec de l'ajout
     */
    public function modifierUsager($data)
	{
  //      return $res;
    }   

    

}
