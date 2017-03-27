<?php

/*
 * @package     Elements
 * @namespace   Elements
 
namespace Elements;*/

/* Gestion des dépendances fortes. */
/*
require_once __DIR__."/Rapporteur.php";
require_once __DIR__."/College.php";
require_once __DIR__."/Tag.php";
require_once __DIR__."/Fichier.php";
*/

class Rapport {
  /** PROPRIETES **/

  /* Etablit le rapporteur
   *
   * @var Rapporteur
   */
  private $_oRapporteur = NULL;


  /* Etablit le collège concerné
   *
   * @var College
   */
  private $_oCollege = NULL;


  /* Date du rapport
   *
   * @var sDate
   */
  private $_sDate = NULL;

  /* Titre du rapport
   *
   * @var sTitreRapport
   */
  private $_sTitreRapport = NULL;


  /* Remarques et textes du rapport
   *
   * @var sRemarque
   */
  private $_sRemarque = NULL;




  /** LISTES **/

  /* Etablit la liste des tags
   *
   * @var aTag
   */
  private $_aTag = NULL;


  /* Etablit la liste dees fichiers
   *
   * @var aFichier
   */
  private $_aFichier = NULL;


/* Id du rapport
 *
 * @var idRapport
 */
private $_idRapport = NULL;





/**
 * introSetter
 *
 * @param    $idRapport
 * @return  class_container
 */
public function setidRapport($idRapport) {
   $this->idRapport = $idRapport;

   /* Fluent-Interface. */
   return $this;
}

/**
 * introGetter
 * 
 * @return  idRapport
 */
public function getidRapport( ) {
    return $this->idRapport;
}



  /**
   * Récupère la liste des fichiers
   *
   * @param    $aFichier
   * @return  class_container
   */
  public function setaFichier($aFichier) {
     $this->aFichier = $aFichier;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre la liste des fichiers
   * 
   * @return  aFichier
   */
  public function getaFichier( ) {
      return $this->aFichier;
  }




  /**
   * Récupère la liste des tags
   *
   * @param    $aTag
   * @return  class_container
   */
  public function setaTag($aTag) {
     $this->aTag = $aTag;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre la liste des tags
   * 
   * @return  aTag
   */
  public function getaTag( ) {
      return $this->aTag;
  }








  /**
   * Récupère la chaine de caractères de la remarque
   *
   * @param    $sRemarque
   * @return  class_container
   */
  public function setsRemarque($sRemarque) {
     $this->sRemarque = $sRemarque;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre la chaine de caratère de la remarque
   * 
   * @return sRemarque
   */
  public function getsRemarque( ) {
      return $this->sRemarque;
  }



  /**
   * Récupère le titre du rapport
   *
   * @param    $sTitreRapport
   * @return  class_container
   */
  public function setsTitreRapport($sTitreRapport) {
     $this->sTitreRapport = $sTitreRapport;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre le titre du rapport
   * 
   * @return sTitreRapport
   */
  public function getsTitreRapport( ) {
      return $this->sTitreRapport;
  }




  /**
   * Récupère la date
   *
   * @param    $sDate
   * @return  class_container
   */
  public function setsDate($sDate) {
     $this->sDate = $sDate;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre la date
   * 
   * @return sDate
   */
  public function getsDate( ) {
      return $this->sDate;
  }


   
  /**
   * Récupère le nom du college
   *
   * @param    $oCollege
   * @return  class_container
   */
  public function setCollege($oCollege) {
     $this->oCollege = $oCollege;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre le nom du collège
   * 
   * @return  College
   */
  public function getCollege( ) {
      return $this->oCollege;
  }



  /**
   * Récupère le nom du rapporteur
   *
   * @param    $oRapporteur
   * @return  class_container
   */
  public function setRapporteur($oRapporteur) {
     $this->oRapporteur = $oRapporteur;

     /* Fluent-Interface. */
     return $this;
  }

  /**
   * Enregistre le nom du rapporteur
   * 
   * @return  Rapporteur
   */
  public function getRapporteur( ) {
      return $this->oRapporteur;
  }
}