<?php
// Lancement de la session
session_start();
?>

<html>
<body>

<H1>Commencez votre projet : demandez un devis</H1>

<form method="post" action="PostStrategieMarketing.php">

    <div>Souhaitez-vous que l'on vous propose un accompagnement en stratégie marketing
        afin d'augmenter la visibilité de votre e-commerce ?</div>

    <input type="radio" name="marketing" value="yes" />Oui
    <br/>
    <input type="radio" name="marketing" value="no" />Non
    <br />
    <br/>
    <button type="submit">Validez</button>

</form>

    <?php if(array_key_exists('errors', $_SESSION)): ?>

    <?= implode('<br>', $_SESSION['errors']); ?>

    <?php unset($_SESSION['errors']); endif ?>
</body>
</html>