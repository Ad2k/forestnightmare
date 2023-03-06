<?php
$email = $_POST['email'];
$tytul = $_POST['tytul'];
$tresc = $_POST['tresc'];

$connecto = mysqli_connect("localhost","root","","forestnightmare");

    $ask = "INSERT INTO dane (email, tytul, tresc) VALUES ('".$email."', '".$tytul."', '".$tresc."')";
    if(empty($email) || empty($tytul) || empty($tresc))
    {
        header('location:contact.php?error');
    }
    mysqli_query($connecto, $ask);

mysqli_close($connecto);
header("Location: contact.php");
?>