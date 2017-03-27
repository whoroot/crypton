<?php
/**
 * @package     Elements
 * @namespace   Elements
 */
namespace Elements;

/* Gestion des dépendances fortes. */
require_once __DIR__."/Filter/Item.php";
require_once __DIR__."/Rapport.php";

/* Etablit le nom du tag
 *
 * @var NameTag
 */
private $_sNameTag = NULL;

/* Etablit l'id du Tag
 *
 * @varidTag
 */
private $_idTag = NULL;





/**
 * Récupère l'Id du Tag
 *
 * @param    $idTag
 * @return  class_container
 */
public function setidTag(idTag $idTag) {
   $this->idTag = $idTag;

   /* Fluent-Interface. */
   return $this;
}

/**
 * Enregistre l'id du TAG
 * 
 * @return idTag
 */
public function getidTag( ) {
    return $this->idTag;
}


/**
 * Récpère la valeur du NameTag
 *
 * @param    $sNameTag
 * @return  class_container
 */
public function setNameTag( NameTag $sNameTag) {
   $this->sNameTag = $sNameTag;

   /* Fluent-Interface. */
   return $this;
}

/**
 * Enregistre al valeur du nameTag
 * 
 * @return  NameTag
 */
public function getNameTag( ) {
    return $this->sNameTag;
}



?>
 