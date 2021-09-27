<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nameErr = $emailErr = $prenomErr = $numberErr = $messageErr = "";
$user_name = $user_email = $user_prenom = $user_message = $number = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["user_name"])) {
        $nameErr = "First name is required";
    } else {
        $user_name = test_input($_POST["user_name"]);
    }  
    
    if (empty($_POST["user_email"])) {
        $emailErr = "Email is required";
    } else {
        $user_email = test_input($_POST["user_email"]);
        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    if (empty($_POST["number"])) {
        $sumberErr = "Number is required";
    } else {
        $number = test_input($_POST["number"]);
    }
    
    if (empty($_POST["user_message"])) {
        $messageErr = "Message is required";
    } else {
        $user_message = test_input($_POST["user_message"]);
    }
    
    if (empty($_POST["user_prenom"])) {
        $prenomErr = "First name is required";
    } else {
        $user_prenom = test_input($_POST["user_prenom"]); 
    }
}
    
if ($nameErr or $prenomErr or $emailErr or $numberErr or $messageErr) {
    echo "$nameErr $prenomErr $emailErr  $numberErr $messageErr";
} else {
    echo "Merci " . $_POST['user_name'] . " de nous avoir contacté à propos de " . $_POST['user_topic'] . "Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_email'] . " ou par téléphone au " . $_POST['user_phone'] . " dans les plus brefs délais pour traiter votre demande : " . $_POST["user_message"];
}