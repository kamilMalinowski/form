<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Pupila</title>
    <link href="assets/normalize.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <meta
      name="description"
      content="Kocia baza danych stworzona w ramach szkolenia ...WTF: Co ten Frontend..."
    />
    <meta property="og:image" content="#" />
    <!--work in progress-->
    <meta property="og:image:secure_url" content="#" />
    <!--work in progress-->
    <link rel="icon" type="image/png" sizes="96x96" href="#" />
    <!--work in progress-->
  </head>

  <body>
    <!--navigation-->
    <nav class="nav">
      <a class="nav__link" href="index.html">Powrót</a>
    </nav>

    <!--Profile from form-->
    <main class="profile">
      <div class="profile-box">
        <img class="profile-box__image" src="https://kamilMalinowski.github.io/ghicon.svg" alt="" />
        <?php echo $_POST['firstName'] .' '. $_POST['lastName'];?>
        <div class="profile-box__item">(<?php echo $_POST['age'] .' '. $_POST['gender'];?>)
      </div>
        <div class="profile-box__item"><?php echo $_POST['phoneNumber'];?></div>
        <div class="profile-box__item"><?php echo $_POST['email'];?></div>
      </div>

      <div class="profile-box">
        Miejsce zamieszkania:
        <div class="profile-box__item"><?php echo $_POST['street'];?></div>
        <div class="profile-box__item"><?php echo $_POST['locality'];?></div>
        <div class="profile-box__item"><?php echo $_POST['postalCode'];?></div>
      </div>

      <div class="profile-box">
        Opis pupila:
        <div class="profile-box__item"><?php echo $_POST['text-cat'];?></div>
      </div>
    </main> 

    <!--JAVASCRIPT-->
    <script src="index.js"></script>
  </body>
</html>

<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$street = $_POST['street'];
$locality = $_POST['locality'];
$postalCode = $_POST['postalCode'];
$textCat = $_POST['text-cat'];
?>



