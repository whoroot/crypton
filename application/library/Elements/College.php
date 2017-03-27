<?php
/*
 * @package     Elements

 * @namespace   Elements


namespace Elements;
 */



/* Gestion des dépendances fortes. */

//require_once __DIR__."/Rapport.php";
/** LISTES **/

/**
* 
*/



class College
{
  
  function __construct(){}
    /* Liste des rapports
     *
     * @var aRapport
     */
    private $_aRapport = NULL;

    /* jfee
     *
     * @var idCollege
     */
    private $_idCollege = NULL;





    /**
     * introSetter
     *
     * @param    $idCollege
     * @return  class_container
     */
    public function setidCollege($idCollege) {
       $this->idCollege = $idCollege;

    }

    /**
     * introGetter
     * 
     * @return  idCollege
     */
    public function getidCollege( ) {
        return $this->idCollege;
    }





    /**
     * R2cupère la liste des rapports
     *
     * @param    $aRapport
     * @return  class_container
     */
    public function setaRapport($aRapport) {
       $this->aRapport = $aRapport;

      
    }

    /**
     * Enregistre la liste des rapports
     * 
     * @return  aRapport
     */
    public function getaRapport( ) {
        return $this->aRapport;
    }




    /** PROPRIETES **/

    /* Etablit le nom du collège
     *
     * @var NameCollege
     */
    private $_sNameCollege = NULL;


    /* Etablit la commune du collège
     *
     * @var NameCommune
     */
    private $_sNameCommune = NULL;

    /**
     * Récupère le nom de la commune
     *
     * @param    $sNameCommune
     * @return  class_container
     */
    public function setNameCommune( $sNameCommune) {
       $this->sNameCommune = $sNameCommune;

    
    }

    /**
     * Enregistre le nom de la commune
     * 
     * @return  NameCommune
     */
    public function getNameCommune( ) {
        return $this->sNameCommune;
    }

    /**
     * Récupère le Nom du College
     *
     * @param    $sNameCollege
     * @return  class_container
     */
    public function setNameCollege(  $sNameCollege) {
       $this->sNameCollege = $sNameCollege;

    }

    /**
     * Enregistre le Nom du collège
     * 
     * @return  NameCollege
     */
    public function getNameCollege( ) {
        return $this->sNameCollege;
    }

}
