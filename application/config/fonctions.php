<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set("Europe/Paris");

/*
Moussh@ker
Page fonctions.php

Contient quelques fonctions globales.

Quelques indications : (utiliser l'outil de recherche et rechercher les mentions données)

Liste des fonctions :
--------------------------
sqlquery($requete,$number)
connexionbdd()
actualiser_session()
vider_cookie()
wLog()
sRace()
--------------------------


Liste des informations/erreurs :
--------------------------
Mot de passe de session incorrect
Mot de passe de cookie incorrect
L'id de cookie est incorrect
--------------------------
*/


//***********
function pageTitle($siteTitleShort,$param){
    echo '<title>['.$siteTitleShort.'] - '.$param.'</title>';
}


function wLog($path,$param,$sMessage) { // Fonction d'inscription dans la logs
  
            $fp = fopen ($path."/".$param.".log", "a+");
            if (fputs ($fp, $sMessage.(chr(13)))) {
                    return true;
            } else {
                    return false;
            }
            fclose ($fp);
        
}


function wLogErase($path,$param) { // Fonction d'inscription dans la logs
  
            $fp = unlink($path."/".$param.".log");
            //fclose ($fp);
        
}





function wLogRead($path,$param) { // Fonction d'inscription dans la logs
  
            $fp = fopen ($path."/".$param.".log", "a+");// Un nouveau fichier créé chaque jour
            $ligne = fgetcsv($fp, 1024);
            fclose ($fp);

            return $ligne[0];
        
}





 function wd_remove_accents($str, $charset='utf-8')
{
    /* Permet de remplacer tous les caractères spéciaux par des lettres neutre "a, e, c -> à, é,ç... */
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
    
    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères
    //$str = str_replace(' ', '_', $str);
    //$str = str_replace(',', "", $str);
    
    return $str;
}

function countFiles($path)
{
    /* cette fonction remplace la fonction glog() en cas d'incompatibilité*/
    $nbFichiers = -2;
    $repertoire = opendir($path);
                 
    while ($fichier = readdir($repertoire))
    {
        if($fichier!=".DS_Store"){
            $nbFichiers += 1;
        }
        //$nbFichiers += 1;
    }
                 
    return (int) $nbFichiers;
}











