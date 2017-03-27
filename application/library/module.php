<?php

/**
 * Lance l'exécution des traitements du module appelé.
 * 
 * @param		string $sName
 * @param		string $sController[optional]
 * @return	NULL
 */


/**
Par défaut, si aucun Controller n'est spécifié, le module exécutera l'Index
comme le précise $sController = 'index'
**/

function module_execute( $sName, $sController='indexController') {
	include("../application/modules/{$sName}/controllers/{$sController}.php");
}

/**
 * Construit le rendu du module.
 * 
 * @param		string $sName
 * @param		string $sView[optional]
 * @return	string
 */
function module_render( $sName, $sView='indexView') {
	
	/* Démarage du tampon de sortie. */
	ob_start( );
	
	/* Réalisation du contenu PHTML. */
	include("../application/modules/{$sName}/views/{$sView}.phtml");
	
	/* Libération du tampon. */
	$sRendered = ob_get_clean( );
	
	/* Retour du contenu produit. */
	return $sRendered;
}