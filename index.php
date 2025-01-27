</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide-Covoiturage</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

  
<body>


    <!--header-->
    <?php
    include("template/header.html");
    ?>
        

    <!--main-->
    
    <?php
    
    $uri = $_SERVER["REQUEST_URI"];

    if ($uri == "/"){
    include("pages/accueil.php");
    }
    else if ($uri == "/inscription"){
    include("pages/inscription.php");
    }
    else if ($uri == "/connexion"){
    include("pages/connexion.php");
    }
    else if ($uri == "/contact"){
    include("pages/contact.php");
    }
    else if ($uri == "/covoiturages"){
    include("pages/selection-covoiturages.php");
    }
    else if ($uri == "/resume"){
    include("pages/resume-covoiturage.php");
    }
    ?>
        

        
    <!--footer-->
    <?php
    include("template/footer.html");
    ?>

</body>
</html>