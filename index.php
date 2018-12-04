<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- CSS FONT -->
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="assets/index.js"></script>
    <link rel="stylesheet" href="assets/style.css" charset="utf-8">
    <title>Contact</title>
</head>
<body>
<div class="contentAll container row">
    <div class="logo col 12 col xl6 col l4">
        <figure><img src="assets/hackers-poulette-logo.png" alt="LogoHackersPoulette" srcset=""></figure>
    </div>
    <div class="contentForm col 10 col xl6 col l8">
         <form action="data.php" method="post" class="formulaire row">

            <div class="row">
                <div class="input-field col s6">
                <input placeholder="First Name" required id="first_name" name="first_name" type="text" 
                class="validate" alt="Nom" value="<?php echo $_POST['first_name']?>">
                <label for="first_name">First Name  <i class="fas fa-user-alt"></i></label>
                </div>
                <div class="input-field col s6">
                <input placeholder="Last Name" required id="last_name" name='last_name' type="text" 
                class="validate" alt="Prenom" value="<?php echo $_POST['last_name']?>">
                <label for="last_name">Last Name  <i class="fas fa-user-alt"></i></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                <input id="email" type="email" required name="email" class="validate" alt="Email"
                value="<?php echo $_POST['email']?>">
                <label for="email">Email  <i class="fas fa-at"></i></label>
                </div>
            </div>
            <div class="genre">
                <label>
                    <input id="homme" name="genre" type="radio"  value="homme" alt="Homme"/>
                    <span>Homme</span>
                </label>
                <label>
                    <input id="femme" name='genre' type="radio" value="femme"  alt="Femme"/>
                    <span>Femme </span>
                </label>
            </div>
            <div class="input-field col s12">
                <select name='pays' >
                    <option value="pays" disabled selected>Choose your country</option>
                    <option value="Belgique" selected="selected">Belgique </option>
                    <option value="Afghanistan">Afghanistan </option>
                    <option value="Afrique_Centrale">Afrique_Centrale </option>
                    <option value="Afrique_du_sud">Afrique_du_Sud </option>
                    <option value="Albanie">Albanie </option>
                    <option value="Algerie">Algerie </option>
                    <option value="Allemagne">Allemagne </option>
                    <option value="Azerbaidjan">Azerbaidjan </option>
                    <option value="Bahamas">Bahamas </option>
                    <option value="Bangladesh">Bangladesh </option>
                    <option value="Barbade">Barbade </option>
                    <option value="Bahrein">Bahrein </option>
                    <option value="Belgique">Belgique </option>
                </select>
                <label>Pays  <i class="fas fa-globe-americas"></i></label>
            </div>
            <div class="input-field col s12">
                <select multiple name="sujets[]" alt="sujets" >
                    <option value="" disabled selected>Sujets</option>
                    <option value="probleme" alt="probleme technique">Problème technique</option>
                    <option value="nouvelle" alt="prendre des nouvelles">Prendre des nouvelles</option>
                    <option value="demande" alt="demande d'information">Demande d'informations</option> 
                    <option value="autres" alt="demande d'information">autres</option> 
                </select>
                <label>Sujets  <i class="fas fa-question-circle"></i></label>
            </div>
            
           <label class="label" alt="Votre message">Votre message : </label>
            <textarea name="message" id="message" cols="20" rows="15" class="materialize-textarea"></textarea>
            <input class="submit col s4 push-s4" id='submit' type="submit"  
            <?php     ?> >

        </form>
    </div> 
</div>


</body>
</html>