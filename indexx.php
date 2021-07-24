<?php
// déclaration

$nom=$_GET["nom"];
$prenom=$_GET["prenom"];
$telephone=$_GET["telephone"];
$adresse=$_GET["adresse"];
$email=$_GET["email"];
$envoyer=$_GET["envoyer"];
$erreur="";
if(isset($envoyer))
  {
    // Le nom est-il rempli ?
    if(empty($nom)) $erreur= "<li>Veuillez indiquer votre nom svp !</li>";
    if(empty($prenom)) $erreur.= "<li>Veuillez indiquer votre prenom svp !</li>";
    if(empty($telephone)) $erreur.= "<li>Veuillez indiquer votre telephone svp !</li>";
    if(empty($adresse)) $erreur.= "<li>Veuillez indiquer votre adresse svp !</li>";
    if(empty($email)) $erreur.= "<li>Veuillez indiquer votre email svp !</li>";
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css" />
</head>
<body>
 <section>
 <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="GET">     <fieldset>
        <legend>inscription</legend>
        
        <div class="label">Nom</div>
        <div class="champ">
           <input type="text" id="nom" name="nom" value="" placeholder="Nom"/>
        </div>
        <div class="label">Prénom</div>
        <div class="champ">
           <input type="text" id="prenom" name="prenom" value="" placeholder="Demande  Num telephone" />
        </div>
        <div class="label">Email</div>
        <div class="champ">
           <input type="text" id="email" name="email" value="" placeholder=" email"/>
        </div>
        <div class="label">Adresse</div>
        <div class="champ">
           <input type="Adresse"id="Adresse" name="Adresse" value="" />
        </div>
        <div class="label">telephone</div>
        <div class="champ">
           <input type="telephone" id="telephone" name="telephone" value="" />
        </div>
        <div class="champ">
           <input type="submit" name="envoyer" value="envoyer" />
        </div>
     </fieldset>
</form>

</section>
    

<?php if(!empty($erreur)){ ?>


<div id="erreur"><?php echo $erreur ?></div>
<?php }  ?>

</body>
</html>