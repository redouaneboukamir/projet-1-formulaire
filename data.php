<?php

ini_set('display_errrors',1);

if(isset($_POST['button'])){

if( isset($_POST['first_name']) &&
    isset($_POST['last_name']) && 
    isset($_POST['email']) &&
    !empty($_POST['email']) && 
    isset($_POST['genre']) && 
    ($_POST['genre'] == 'homme' || $_POST['genre'] =='femme')&&
    isset($_POST['pays']) && 
    isset($_POST['sujets'])){

    $options = array(
        'first_name' 	=> FILTER_SANITIZE_STRING,
        'last_name' 	=> FILTER_SANITIZE_STRING,
        'genre'         => FILTER_SANITIZE_STRING,  
        'email' 		=> FILTER_VALIDATE_EMAIL,
        'pays'          =>  FILTER_SANITIZE_STRING, 
        'message'       => FILTER_SANITIZE_STRING
    );
    }else {
        echo
            '<div class="contentErreur container">
                <h5 class="erreur">Un champ est vide ou n\'est pas correct!</h5>
            </div>';

    };
    $result = filter_input_array(INPUT_POST, $options);
    $result += filter_var_array($_POST['sujets'], FILTER_SANITIZE_STRING);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="assets/index.js"></script>
    <link rel="stylesheet" href="assets/style.css">
    <title>Information</title>
</head>
<body>
    
    <?php
         if ($result != null AND $result != FALSE) {
            $_POST['first_name'] = "";
            $_POST['last_name'] = "";
            $_POST['email'] = "";
            $_POST['genre'] = "";
            $_POST['pays']= "";
            $_POST['sujets']="";
            echo '
            <div class="content container">
            <div class="infos">
                <figure>
                <img src="assets/hackers-poulette-logo.png" 
                alt="LogoHackersPoulette" srcset="">
                </figure>
                <h5 class="correct">Merci pour votre inscription</h5>';
                foreach ($result as $key => $value) {
                    echo('<p>'.$result[$key].'</p>');
                };
                '</div>
                </div>';
            echo "<a href='index.php'>Retour vers le formulaire</a>";
        
        }
        
        ?>
        

</body>
</html>