<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php
      session_start();
      include "eventShow.php";
      include "php/Header_postlogin.php";
      $counter = 0;
      $eventID = $_GET['eventID'];
    ?>

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/c01.css">
    <link rel="stylesheet" href="css/eventProfile.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="container">
        <div class="fb-profile">
            <img align="left" class="fb-image-lg" src="img/Reykjavik.PNG" alt="Profile image example"/>
              <div class="fb-profile-text">
                <?php 
                  for ($i=0, $size = count($vidburdur); $i < $size; $i++) { 
                    if ($vidburdur[$i]['ID'] == $eventID) {
                      echo '<div class="accordionItem">
                              <h2>Event Name</h2>
                                <div>
                                  <p>'.$vidburdur[$i]["Name"].'</p>
                                </div>
                            </div>
                            <div class="accordionItem">
                              <h2>Date</h2>
                                <div>
                                  <p>'.$vidburdur[$i]["Date"].'</p>
                                </div>
                            </div>
                            <div class="accordionItem">
                              <h2>Location</h2>
                                <div>
                                  <p>'.$vidburdur[$i]["Location"].'</p>
                                </div>
                            </div>
                            <div class="accordionItem">
                              <h2>Description</h2>
                                <div>
                                  <p>'.$vidburdur[$i]["Description"].'</p>
                                </div>
                            </div>
                            <div class="accordionItem">
                              <h2>Category</h2>
                                <div>
                                  <p>'.$vidburdur[$i]["Category"].'</p>
                                </div>
                            </div>';
                    }
                  } 
                ?>
                <!--div class="accordionItem">
                  <h2>Event Name</h2>
                    <div>
                      <p><?php echo $vidburdur[0]['Name']?></p>
                    </div>
                </div>
                <div class="accordionItem">
                  <h2>Location</h2>
                    <div>
                      <p><?php echo $vidburdur[0]['Location']?></p>
                    </div>
                </div>
                <div class="accordionItem">
                  <h2>Description</h2>
                    <div>
                      <p><?php echo $vidburdur[0]['Description']?></p>
                    </div>
                </div-->
            </div>      
        </div>
    </div> 
    <?php
      include "php/Footer.php";
    ?>
    <script src="js/eventProfile.js"></script>
  </body>
</html>