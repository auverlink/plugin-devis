<?php
// Lancement de la session
session_start();
?>


<html>
<body>

<H1>Commencez votre projet : demandez un devis</H1>

<p>Vous avez une idée, un projet web mais vous ne savez pas par quoi commencer.
    Ce formulaire va vous aider à trouver la formulaire la plus adéquate pour vous lancer.</p>


<form method="post" action="post_index.php">

    <div>Quel type de site souhaitez-vous ?</div>

    <input type="radio" name="site" value="Site Vitrine" />Site Vitrine
    <br/>
    <input type="radio" name="site" value="Site E-commerce" />Site E-commerce
    <br />
    <button type="submit">Validez</button>

</form>

<br/>

<?php if(array_key_exists('errors', $_SESSION)): ?>

    <?= implode('<br>', $_SESSION['errors']); ?>

    <?php unset($_SESSION['errors']); endif ?>

</body>
</html>









