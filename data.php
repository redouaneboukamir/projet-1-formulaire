<?php

ini_set('display_errrors',1);
session_start();
if(isset($_POST['first_name']) &&
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
        'pays'          =>  FILTER_SANITIZE_STRING, 
        'email' 		=> FILTER_VALIDATE_EMAIL
    );
    // $options += filter_var_array($_POST['sujets'], FILTER_SANITIZE_STRING);
    foreach($_POST['sujets'] as $value){
        $options[$value] = FILTER_SANITIZE_STRING;
    };
}
$result = filter_input_array(INPUT_POST, $options);
 if ($result != null AND $result != FALSE) {
    $_POST['first_name'] = "";
    $_POST['last_name'] = "";
    $_POST['email'] = "";
    $_POST['genre'] = "";
    $_POST['pays']= "";
    $_POST['sujets']="";
    echo "Merci pour votre inscription";
    foreach ($result as $key => $value) {
        var_dump($key. " - " .$result[$key]."<br>");
    };

} else {

    echo "Un champ est vide ou n'est pas correct!";

}

?>