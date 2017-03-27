<?php
#-> DEFINITION DES CONSTANTES SYSTEMES <-#
    //define('ROOTPATH', 'http://localhost/apigit/jgc/application', true);
    define( 'PATH_ABSOLUT','../application/');
    define( 'PATH_CONF','config');
    define( 'PATH_LIB','library');
    define( 'PATH_VAR',PATH_ABSOLUT.'/data');
    define( 'PATH_IMG',PATH_ABSOLUT.PATH_LIB.'/images');
#-> END <-#

#-> INCLUSION DES LIBRAIRIES <-#
    include(PATH_LIB.'/module.php'); 
    include(PATH_LIB.'/translations/translation_fr.php');
    include(PATH_CONF.'/config.php');
    include(PATH_CONF.'/fonctions.php');
#-> END <-#
?>
<!-- Inclusion des styles CSS -->
<!--style type="text/css"-->
<style>
    <?php include(PATH_CONF.'/style.css'); ?>
</style>

<!-- Inclusion des scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script type="text/javascript">
    <?php include(PATH_CONF.'/script.js'); ?>
</script>



<?php 
/**
    *L'étape suivante permet de rendre personnalisable le module Générique à appeler ainsi que son controller et sa view.
    * Dans chaque page /public/page.php les 2 variables $iModuleController et $iModuleView sont setées.
**/
$sModuleController = $GLOBALS['controller'.$iLayoutController];
$sModuleView = $GLOBALS['view'.$iLayoutView];



#-> EXECUTION DES CALCULS, FONCTIONS,...
    module_execute( 'Layout',$sModuleController.'Controller' );
#-> END <-#

#-> TRANSMISSION DU CONTENU GENERE
    echo module_render( 'Layout', $sModuleView.'View' );
#-> END <-#


/**
    En effet, c'est ici que l'on construit le site. C'est à dire que l'on détermine la structure qu'il va avoir, en fonction du module choisi.

    1/ on appelle un Controller qui gère les calculs, fonctions, etc... via "module_execute"
    2/ on appelle un Template qui affichera le resultat du Controller, via module_render.

    Par défaut, on execute le module 'Layout', qui exécutera le Controller layoutController.php et affichera layoutView.phtml (= gabarit global par défaut).
    Les noms du Controller et du View étant déterminés dans chaque page /public/page.php, comme vu plus haut.
    Dans cette application, les 2 pages index.php et gage.php setent la valeur 0 qui correspond à "layout" (pour les noms des controllers et des views).
    [le '.php' et '.phtml' sont, quant à eux, déterminés dans la page /application/library/module.php]

    Mais on peut imaginer qu'une troisième page soit structurellement complètement différente des 2 autres qui, elles, ont le même gabarit "layout".
    On pourra alors directement appeler un autre gabarit en changeant la valeur de $iLayoutController et/ou $iLayoutView après avoir préalablement créé un autre Module et/ou d'autres Controllers / Views

**/