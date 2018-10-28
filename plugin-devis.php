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

add_action('registered_post_type', 'getPluginDevis');
function getPluginDevis()
{
    if(is_page('Devis'))
    {
        return "index.php";
    }
}

