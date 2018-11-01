<?php

include '../includes/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-1 mb-4">
        </div>
        <div class="col-lg-10 mb-4" id="contentform">
<h2>L'offre la plus adaptée à vos besoins est notre pack Premium.</h2>

<h3>299€ HT/mois</h3>

Cet accompagnement personnalisé comprend :
<ul>
    <li>1 nom de domaine + 1 extension</li>
    Nous vous conseillons dans le choix du nom de domaine le plus adapté à votre projet.
    <li>6 à 10 page</li>
    En fonction de vos besoins, nous déployons six à dix pages sur votre site.
    <li>Administrable</li>
    Nous mettons à votre disposition une site administrable facilement. Nous vous accompagnons dans sa prise en main.
    <li>Maintenance & hébergement inclus</li>
    Nous assurons l'hébergement de votre site. Pas de soucis au fil du temps après la mise en ligne de votre site,
    nous assurons sa maintenance (mise à jour de votre site et de ses différents plugins).
    <li>Accompagnement en stratégie marketing</li>
    Après la mise en ligne de votre site, nous vous accompagnons dans la mise en place d'une stratégie marketing pour augmenter
    votre visibilité.
    <li>1 Template responsive</li>
    Nous vous proposons un modèle de pages adaptable et lisible sur tous supports, du mobile à l'ordinateur.
    <li>Charte Graphique</li>
    Nous déclinons votre charte graphique sur votre nouveau site si vous en disposez déjà d'une.
    <li>Fonctionnalités</li>
    Nous développons pour vous :
    <ul>
        <li>un formulaire de contact afin que vos internautes puissent vous contacter facilement via votre site internet.</li>
        <li>une Google Map</li>
        <li>Une galerie photos</li>
        <li>Un gestionnaire d'articles</li>
    </ul>

    <br /><br />

    <p>
    <form id="form1" name="form1" method="post" action="../envoi.php">
        <div class="row auverlinkform">
            <div class="col-lg-6 mb-4">
                <input name="nom" type="text" class="normal" id="nom" size="50" placeholder="Nom"/><br>
            </div>
            <div class="col-lg-6 mb-4">
                <input name="prenom" type="text" class="normal" id="prenom" size="50"  placeholder="Prénom"/><br>
            </div>
        </div>
        <div class="row auverlinkform">
            <div class="col-lg-6 mb-4">
                <input name="email" type="text" class="normal" id="email" size="50" placeholder="Adresse e-mail"/><br>
            </div>
            <div class="col-lg-6 mb-4">
                <input name="tel" type="text" class="normal" id="tel" size="50" placeholder="Téléphone"/><br>
            </div>
        </div>
        <div class="row auverlinkform">
            <div class="col-lg-6 mb-4">
                <input name="entreprise" type="text" class="normal" id="entreprise" size="50" placeholder="Entreprise"/><br>
            </div>
            <div class="col-lg-6 mb-4">
                <input name="fonction" type="text" class="normal" id="fonction" size="50" placeholder="Fonction"/><br>
            </div>
        </div>
        <div class="row auverlinkform">
            <div class="col-lg-12">
                <textarea name="msg" cols="50" rows="5" class="normal" id="msg" placeholder="Message"></textarea><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1">
                <input type="checkbox" id="rgpd" class="checkboxcontact" value="rgpd"/>
            </div>
            <div class="col-lg-11">
                <label for="rgpd" style="text-align: left">En soumettant ce formulaire, j’accepte que mes informations personnelles soient exploitées conformément à la
                    politique de confidentialité d’AuverLink</label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <input type="hidden" id="pack" name="pack" value="Site Vitrine : Pack Premium"/>
                <input type="submit" name="envoi" id="envoi" value="Envoyer" class="btn btn-auverlink"/>
            </div>
            <div class="col-lg-4">
            </div>
        </div>

    </form>
    </p>
    </div>
    </div>
    </div>

    <?php

    include '../includes/footer.php';
    ?>


