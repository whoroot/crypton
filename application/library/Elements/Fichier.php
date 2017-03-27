<?php 

/**
 * @package     Elements
 * @namespace   Elements
 */
namespace Elements;

/* Gestion des dépendances fortes. */
require_once __DIR__."/Filter/Item.php";

/* Chemin du fichier
 *
 * @var sFilePattern
 */
private $_sFilePattern = NULL;





/**
 * Récupération de la chaine de caractère établissant le chemin
 *
 * @param    $sFilePattern
 * @return  class_container
 */
public function setsFilePattern(sFilePattern $sFilePattern) {
   $this->sFilePattern = $sFilePattern;

   /* Fluent-Interface. */
   return $this;
}

/**
 * Enregistrement de la chaine de caractère établissant le chemin
 * 
 * @return sFilePattern
 */
public function getsFilePattern( ) {
    return $this->sFilePattern;
}
