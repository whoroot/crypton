<?php
/*
 * @package     Elements
 * @namespace   Elements


namespace Elements; */

/* Gestion des dépendances fortes. */

require_once __DIR__."/Profil.php";

class Rapporteur
{

  /* Nom du rapporteur
   *
   * @var sNmRapporteur
   */
  private $_sNmRapporteur = NULL;


  /* Prénom du rapporteur
   *
   * @var sPnmRapporteur
   */
  private $_sPnmRapporteur = NULL;


  /* Profil du rapporteur
   *
   * @var Profil
   */
  private $_oProfil = NULL;





  /**
   * Récupère le type de profil du rapporteur
   *
   * @param    $oProfil
   * @return  class_container
   */
  public function setProfil($oProfil) {
     $this->oProfil = $oProfil;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre le type de profil du rapporteur
   * 
   * @return  Profil
   */
  public function getProfil( ) {
      return $this->oProfil;
  }



  /**
   * Récupère le prénom du rapporteur
   *
   * @param    $sPnmRapporteur
   * @return  class_container
   */
  public function setsPnmRapporteur($sPnmRapporteur) {
     $this->sPnmRapporteur = $sPnmRapporteur;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre le prénom du rapporteur
   * 
   * @return sPnmRapporteur
   */
  public function getsPnmRapporteur( ) {
      return $this->sPnmRapporteur;
  }



  /**
   * Récupération du nom du rapporteur
   *
   * @param    $sNmRapporteur
   * @return  class_container
   */
  public function setsNmRapporteur($sNmRapporteur) {
     $this->sNmRapporteur = $sNmRapporteur;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre le nom du rapporteur
   * 
   * @return sNmRapporteur
   */
  public function getsNmRapporteur( ) {
      return $this->sNmRapporteur;
  }
}

?>