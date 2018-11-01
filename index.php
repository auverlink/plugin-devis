
<?php
session_start();
include 'header.php';

         try
         {
             if(isset($_POST['site']) && $_POST['site'] == "Site Vitrine")
             {
                 header('Location:siteVitrine/nbPages.php');
                 exit();
             }

             if(isset($_POST['site']) && $_POST['site'] == "Site E-commerce")
             {
                 header('Location:SiteEcommerce/nbPages.php');
                 exit();
             }

             // TODO L'exception ne s'affiche pas.
             else if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['site']) )
             {
                 if(!$_POST['site'])
                 {
                     throw new Exception("Vous devez choisir une de ces deux propositions pour poursuivre votre demande de devis.");
                 }
             }
         }
         catch (Exception $e) {
             echo $e->getMessage();
         }

?>

<div class="container">
    <div class="row">
        <div class="col-lg-1 mb-4">
        </div>
        <div class="col-lg-10 mb-4" id="contentform">
                 <form method="post">
                     <div>
                         Quel type de site souhaitez-vous ?
                     </div>
                     <div class="auverlinkradio">
                         <div class="auverlinkradio-default">
                             <input type="radio" name="site" id="radio1" value="Site Vitrine"/>
                             <label for="radio1">Site Vitrine</label>
                         </div>
                         <div class="auverlinkradio-default">
                             <input type="radio" name="site" value="Site E-commerce" id="radio2"/>
                             <label  for="radio2">Site E-commerce</label>
                         </div>
                     </div>

                     <button type="submit" class="btn btn-auverlink">Question Suivante</button>
                 </form>
        </div>
    </div>

</div>




<?php

include 'footer.php';
?>