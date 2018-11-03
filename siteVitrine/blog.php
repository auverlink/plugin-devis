<?php
// Lancement de la session
session_start();
?>


<html>
<body>

<H1>Commencez votre projet : demandez un devis</H1>


<form method="post" action="postBlog.php">

    <div>Dans votre site, un espace "Blog" sera utile ? </div>

    <input type="radio" name="blog" value="yes" />Oui
    <br/>
    <input type="radio" name="blog" value="no" />Non
    <br />
    <br/>
    <button type="submit">Validez</button>

</form>


    <?php if(array_key_exists('errors', $_SESSION)): ?>

    <?= implode('<br>', $_SESSION['errors']); ?>

    <?php unset($_SESSION['errors']); endif ?>

</body>
</html>