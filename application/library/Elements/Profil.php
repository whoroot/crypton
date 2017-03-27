<?php

/*
 * @package     Elements
 * @namespace   Elements

namespace Elements;*/

/* Gestion des dépendances fortes. */


/**
* 
*/
class Profil
{
	
	
	/* Type de profil
	 *
	 * @var sTypeProfil
	 */
	private $_sTypeProfil = NULL;





	/**
	 * Récupère le type du profil
	 *
	 * @param    $sTypeProfil
	 * @return  class_container
	 */
	public function setProfil_type($sTypeProfil) {
	   $this->sTypeProfil = $sTypeProfil;

	   /* Fluent-Interface. */
	   return $this;
	}

	/**
	 * Enregistre le type du profil
	 * 
	 * @return  Profil_type
	 */
	public function getProfil_type( ) {
	    return $this->sTypeProfil;
	}

}
