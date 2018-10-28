<?php
/**
 * @package Plugin Devis
 * @version 1.0
 */
/*
Plugin Name: Plugin Devis
Plugin URI:
Description: Ce plugin permet de générer des devis sur-mesure à partir des packs produits de notre agence.
Author: Vanessa Asse
Version: 1.0
*/

add_action( 'template_redirect', 'getPluginDevis' );

function getPluginDevis()
{
    $url = '/plugin-devis/index.php';

    if(is_page('devis'))
    {
        wp_redirect($url);
        die;
    }
}

