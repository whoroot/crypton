



<?php
/*
* @type = CONTROLLER
*
* DESCRIPTION :
* Affiche le formulaire d'AUTHENTIFICATION en fonction de "l'état" du visiteur
* Authantifié 	= > LOGOUT
* Visiteur 		= > LOGIN
*/
/* Définition des variables globales. */
global $viewAuth, $bIsAuthenticated, $ProfilSession, $UsernameSession,$messages,$rootpath;


connexionbdd();
session_start();


    /**
    Vérification de l'authentification
**/
if (isset($_POST['username']) && isset($_POST['password'])) {
     /*On echappe les variables pour pouvoir les mettre dans des requetes SQL*/
                
    if(get_magic_quotes_gpc())
    {
            $ousername = stripslashes($_POST['username']);
            $username = mysql_real_escape_string(stripslashes($_POST['username']));
            $password = stripslashes($_POST['password']);
    }
    else
    {
            $username = mysql_real_escape_string($_POST['username']);
            $password = $_POST['password'];
    }

    $username = $_POST['username'];
    $password = $_POST['password'];/* md5($_POST['password']) ==> md5 permet de crypter le MDP pour pouvoir le comparer à celui de la BBD (qui est crypté aussi :p)*/

    /*
     * EXEMPLE DE CONNEXION A BDD
    //On recupere les identifiants de l'utilisateur
    $req = mysql_query('SELECT ID_cp,nom_cp,prenom_cp,pwd_cp,profil_cp from Correspondant where nom_cp="'.$username.'"');
    $dn = mysql_fetch_array($req);
    //On le compare a celui quil a entre et on verifie si le membre existe
    if($dn['pwd_cp']==$password and mysql_num_rows($req)>0)
    {
        //Si le mot de passe es bon, on ne vas pas afficher le formulaire
        $form = false;
        //On enregistre son pseudo dans la session username et son identifiant dans la session userid
        $_SESSION['username'] = $dn['nom_cp'];
        $_SESSION['userid'] = $dn['ID_cp'];
        $_SESSION['userfirstname'] = $dn['prenom_cp'];
        $_SESSION['profil'] = $dn['profil_cp'];
        //$bIsAuthenticated = TRUE;

        
    }
    */
    if($password=="admin" && $username=="admin")
    {
        //Si le mot de passe es bon, on ne vas pas afficher le formulaire
        $form = false;
        //On enregistre son pseudo dans la session username et son identifiant dans la session userid
        $_SESSION['username'] = "Admin";
        $_SESSION['userid'] = 1;
        $_SESSION['userfirstname'] = "Istrator";
        $_SESSION['profil'] = 1;
        //$bIsAuthenticated = TRUE;


    }


}


/**
* Si une session USERID est en court (et que DECONNEXION n'a pas été pressé)
* Alors on passe en TRUE $bIsAuthenticated pour afficher l'Auth LOGOUT
**/
if(isset($_SESSION['userid'])){

    $bIsAuthenticated = TRUE;
}
else{
    $bIsAuthenticated = FALSE;
}





/**
* Si le bouton DECONNEXION est pressé, on supprime la Session USERID en cours
* Ainsi, $bIsAuthenticated passe en FALSE, et nous voilà déconnecté
* On affiche alors LOGIN et Le formulaire d'Auth s'affiche alors de nouveau
**/
if (isset($_POST['deconnexion'])){
	unset($_SESSION['userid']);
    $bIsAuthenticated = FALSE;
}


/* Détermination de la vue. */
if ($bIsAuthenticated==TRUE) {

	$viewAuth = 'logout';
} else {
	$viewAuth = 'login';
}