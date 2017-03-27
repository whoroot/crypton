
<?php
#-> DEFINITION DES VARIABLES GLOBALES <-#
    global $viewMenu;
#-> END <-#

## en cas d'activation du module "AUTH"
    ///* Si l'utilisateur est déjà authentifié, on exécute le Controller ECRAN2 */
    //if ($bIsAuthenticated) { 
    //	$viewMenu = 'menuV';
    //}
    //
    ///* Sinon (c'est que c'est un profil Rapporteur)*/
    //else{
    //	$viewMenu = 'indexV';
    //}
## ##

#-> Affichage du menu <-#
    # la variable globale TYPE_GAGE est difinie dans les pages "public", en fonction des paramètres reçus dans l'url lors d'un clique sur le menu
    if(TYPE_GAGE == 0){ # si version clasique
        $viewMenu = 'menuClassic';
    }

    if(TYPE_GAGE == 1){ # si version online
        $viewMenu = 'menuOnline';
    }
#-> END <-#
