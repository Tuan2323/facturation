<html><body>
<h1> Connexion </h1>

<form action="<?=$_SERVER['PHP_SELF'] ?> " method="post">
<input type="text" name="pseudo" placeholder ="Votre pseudo">
<input type="text" name="password" placeholder ="Votre mdp">
<input type="submit" value="Connexion" >
</form>

<?php 
if (!empty($_POST['pseudo']) && !empty($_POST['password'])){
    $pseudo = $idcom->escape_string($_POST['pseudo']);
    $password = $idcom->escape_string($_POST['password']);
    $requete ="SELECT password, id_membre FROM membres WHERE pseudo =' pseudo'";

    $result = $idcom->query($requete);
    $coord = $result->fetch_row();
    $idcom->close();
}
else { echo " veuillez vous reco";}


?>

</body>


</html>