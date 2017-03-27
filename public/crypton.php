<?php
/**
 * @type = PAGE
 *
 * DESCRIPTION :
 * Page des gages
 * Elle lance l'un des controllers du module Content, en fonction des paramètres setés
 **/


#-> DEFINITION DES VARIABLES UNIQUES <-#
    global $sController,$rootpath,$typeLayout;
#-> END <-#

#-> DEFINITION DU MODULE DE CONSTRUCTION GENERIQUE
    # Détermine le module à appeler ainsi que son Controller et sa View
    /* l'entier correspond au N de $GLOBALS['viewN'], $GLOBALS['controllerN']... */
    $iLayoutController = 0;
    $iLayoutView = 0;
#-> END <-#

#-> 1/ DEFINITION DU CONTROLLER CONTENT A EXECUTER <-#
    /* Détermine le controller du CONTENT à executer en fonction du type de page (gage classique, doublePlayer, matrice) */

    ##-> DEFINITION DU TYPE DE PAGE <-##
    
        ###-> DEFINITION DU CONTROLLER <-###
        $sController = 'cryptonController';
    
#-> END <-#


#-> 2/ DEFINITION DE LA PAGE A ROUTER (crypter, décrypte,..) <-#
    if(isset($_GET['codepage'])){
        define('PAGE_CODE', $_GET['codepage'], true);
    }
    else{
        define('PAGE_CODE', '0', true);# sinon par défaut -> index. 
    }
#-> END <-#



#-> 3/ DEFINITION DU TYPE DE GAGE (classique, online) <-#
    if(isset($_GET['typepage'])){
        define('TYPE_PAGE', $_GET['typepage'], true);
    }
    else{
        define('TYPE_PAGE', '1', true);// sinon par défaut -> classique
    }
#-> END <-#





/* INFO : le $_GET['type'] est envoyé en paramètre dans le menu (Modules/Menu/views)*/

#-> Exécution du bootstrap. <-#
    include('../application/bootstrap.php');
#-> END <-#


    