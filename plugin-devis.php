<?php
/**
 * @package Devis AuverLink
 * @version 1.0
 */
/*
Plugin Name: Devis AuverLink
Plugin URI:
Description: Ce plugin permet de générer des devis sur-mesure à partir des packs produits de notre agence.
Author: L'équipe d'Auverlink
Version: 1.0
*/


add_action( 'template_redirect', 'getPluginDevis' );

function getPluginDevis()
{
    $url = '../wp-content/plugins/plugin-devis/index.php';

    if(is_page('devis'))
    {
        wp_redirect($url);
        die;
    }
}