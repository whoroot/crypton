<?php
/**
* @type = PAGE
*
* DESCRIPTION :
* Page d'édition des rapports
* Elle lance le controller edit.php
**/


#-> DEFINITION DES VARIABLES UNIQUES <-#
    global $sController,$rootpath,$sName;
#-> END <-#


#-> DEFINITION DU MODULE DE CONSTRUCTION GENERIQUE
    # Détermine le module à appeler ainsi que son Controller et sa View
    /* l'entier correspond au N de $GLOBALS['viewN'], $GLOBALS['controllerN']... */
    $iLayoutController = 0;
    $iLayoutView = 0;
#-> END <-#

    ## Détermine le controller du CONTENT à executer */
    

#-> 1/ DEFINITION DU CONTROLLER CONTENT A EXECUTER <-#
    ## Détermine le controller du CONTENT à executer en fonction du type de page (gage classique, doublePlayer, matrice) ##
    $sController = 'indexController';
#-> END <-#

#-> 2/ DEFINITION DU TYPE DE PAGE <-#
    if(isset($_GET['typepage'])){
        define('TYPE_PAGE', $_GET['typepage'], true);
    }
#-> END <-#


#-> 3/ DEFINITION DE LA PAGE A ROUTER (sensuel, hot,..) <-#
    if(isset($_GET['codepage'])){
        define('PAGE_CODE', $_GET['codepage'], true);
    }
    else{
        define('PAGE_CODE', '0', true);# sinon par défaut -> index. 
    }
#-> END <-#

# 4/ On défini le type de gage ## (classique, online)
if(isset($_GET['typegage'])){
    define('TYPE_GAGE', $_GET['typegage'], true);
}
else{
    define('TYPE_GAGE', '0', true);// sinon par défaut -> classique
}


#-> Exécution du bootstrap. <-#
    include('../application/bootstrap.php');
#-> END <-#


