<!DOCTYPE html>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<link rel="stylesheet" href="./style.css">
</head>
<body>  
    <div class ='save'>
        <p>
D'après les données du formulaire: <br><br>
Votre nom est: <?php echo $_POST['name']?><br>
Votre mail est: <?php echo $_POST['email']?><br>
Votre commentaire est : <?php echo $_POST['message']?><br>

        </p>
<?php
// on inclue le fichier qui contient nos fonctions
// require __DIR__ . '/../lib/functions.php';

        encodeJson();

?>
    </div>

    <div class="save2">
    
    <a href="./?admin">Aller vers la page admin</a><br><br>
    
    </div>
    

</body>
<link rel="stylesheet" href="./app.js">

</html>