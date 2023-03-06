<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Forest Nightmare</title>
        <meta name="author" content="Forest Nightmare">
        <meta keywords="forestnightmare, nightmareforest, forest game, horror game">
        <meta name="viewport" content="width=240, height=320, user-scalable=yes, initial-scale=1, maximum-scale=5.0, minimum-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="css/img/logokrt.png">
        <link rel="stylesheet" href="css/nav_style.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
<body>
    <nav id="nav">
      <div class="logo">Forest Nightmare</div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul>
        <li><a href="index.html">Strona Główna</a></li>
        <li><a href="news.html">Aktualności</a></li>
        <li><a href="gallery.html">Galeria</a></li>
        <li><a href="about.html">O Mnie</a></li>
        <li><a class="active" href="contact.php">Kontakt</a></li>
      </ul>
    </nav>
    <div class="content">
      <div id="contactmain">
        <form id="contactform" action="#" method="POST">
          <p>E-mail:</p>
          <input required type="text" name="email" placeholder="Wpisz e-mail"/><br/><br/>
          <p>Tytuł:</p>
          <input required type="text" name="tytul" placeholder="Tytuł wiadomości"/><br/><br/>
          <p>Treść:</p>
          <textarea required id ="textmess" name="tresc" cols="120" rows="15" placeholder="Treść wiadomości"></textarea><br/><br/>
          <button class="brick" type="sumbit" name="SubmitButton" onclick="ShowMessage()">Wyślij</button>            
          <button class="brick" type="reset">Wyczyść</button>  
          <p id="submitsucesstext">Wiadomość wysłana poprawnie, dziękujemy!</p>
        </form>
      </div>
    </div>
</body>
<script>
  let message = document.getElementById("submitsucesstext");

function ShowMessage() {
    message.style.display = "block";
    setTimeout(() => {
    message.style.display = "none";}, 1500);
}
</script>
</html>
<?php
$email = $_POST['email'];
$tytul = $_POST['tytul'];
$tresc = $_POST['tresc'];

$connecto = mysqli_connect("sql8.freemysqlhosting.net","sql8603276","Rs6DsliwDS","sql8603276");
    if(isset($_POST['SubmitButton']))
    {
      $ask = "INSERT INTO dane (email, tytul, tresc) VALUES ('".$email."', '".$tytul."', '".$tresc."')";
      mysqli_query($connecto, $ask);
    }

mysqli_close($connecto);
?>