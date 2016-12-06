<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php
      session_start();
      include "php/Header_postlogin.php";
      $userID = $_GET['ID'];
    ?>

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/c01.css">
    <link rel="stylesheet" href="css/profile.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <div class="container">
        <div class="fb-profile">
            <img align="left" class="fb-image-lg" src="img/partymynd.jpg" alt="Profile image example"/>
            <img align="left" class="fb-image-profile thumbnail" src="img/AvatarNoImg.jpg" alt="Profile image example"/>
            <div class="fb-profile-text">
            <?php
              #for ($i=0, $size = count($users); $i < $size; $i++) { 
              #  if (condition) {
                  # code...
              #  }
              #}
              //$_SESSION["Name"] = $row['Name'];
              /*
              echo $_SESSION["Username"]."<br>";
              echo $_SESSION['Name']."<br>";
              echo $_SESSION['Email']."<br>";
              echo $_SESSION['Phone']."<br>";
              */
              for ($i=0, $size = count($users); $i < $size; $i++) { 
                if ($users[$i]['ID'] == $userID) {
                  echo $users[$i]['Username']."<br>";
                  echo $users[$i]['Name']."<br>";
                  echo $users[$i]['Email']."<br>";
                  echo $users[$i]['Phone']."<br>";
                }
              }
            ?>
            </div>      
        </div>
    </div> 
    <?php
      include "php/Footer.php";
    ?>
  </body>
</html>