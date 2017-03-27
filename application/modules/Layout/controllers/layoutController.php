<?php

#-> DEFINITION DES VARIABLES GLOBALES <-#
    global $sController;
#-> END <-#

#-> EXECUTION DES MODULES <-#
    /**
    * Tous les modules exécutent le controller par défaut
    * SAUF "Content", qui est défini dans chaque page.php
    * Le Controller par défaut est défini dans library/module.php (c'est indexController.php)
    **/


    # On détermine quels Modules (et donc le Controller qui lui est attaché) appeler à chaque sollication du Module Layout = à chaque appel de page (clique sur /public/page.php) comme paramétré dans Bootstrap.php

    //module_execute( 'Auth');
    module_execute( 'Menu', 'menuController');
    module_execute( 'Content', $sController); # change en fonction de la page consultée
    module_execute( 'Footer', 'footerController');

    /**
    * Chaque module_execute (donc Chaque Controller) à un module_render qui lui correspond et qui permettra d'afficher dans view/page.phtml ce que son Controller exécute
    * Ici, les modules Menu et Footer appeleront toujours le même Controller ("menuController" et "footerController")
    * Le module CONTENT, quant à lui, exécutera différents Controller, en fonction de la navigation de l'utilisateur
    **/
#-> END <-#


