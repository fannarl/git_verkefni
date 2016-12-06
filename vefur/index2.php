<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
      session_start();
      include "eventShow.php";
      include "php/Header_postlogin.php";
      #include "Gravatar.php"
  ?>
    <link href="css/index2image.css" rel="stylesheet">
      <!--div class="Category">
        <form action="" method="post">
            <div><label>networking</label>
          <input type="checkbox" name="networking" value="Yes" /></div>
            <div><label>education</label>
          <input type="checkbox" name="education" value="Yes" /></div>
            <div><label>fairs & festivals</label>
          <input type="checkbox" name="fairs&festivals" value="Yes" /></div>
            <div><label>sports</label>
          <input type="checkbox" name="sports" value="Yes" /></div>
            <div><label>art & music</label>
          <input type="checkbox" name="art&music" value="Yes" /></div>
            <div><label>dancing</label>
          <input type="checkbox" name="dancing" value="Yes" /></div>
            <div><label>eating</label>
          <input type="checkbox" name="eating" value="Yes" /></div>
            <div><label>nightlife & party</label>
          <input type="checkbox" name="nightlife&party" value="Yes" /></div>
        </form>
      </div-->
    <div class="container">
      
      <div class="row">
        
        <section id="cd-timeline" class="cd-container">
          
          <?php 
          #echo "Today is: ". date("Y-m-d H") . "<br>";
          $today = date("Y-m-d H").":00:00";
          for ($i=0, $size = count($vidburdur); $i < $size; $i++) {
            if($today <= $vidburdur[$i]["Date"]){ 
              echo '<div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <div class="image"><a href='."profile.html.php?ID=".$vidburdur[$i]["ID_users"].'><img src="img/AvatarNoImg.jpg" alt="Picture"></a></div>
                      </div> 

                      <div class="cd-timeline-content">
                        <form action="eventProfile.html.php">
                          <h2>'.$vidburdur[$i]["Name"].'</h2>
                          <p>'.$vidburdur[$i]["Description"].'</p>
                          <!--input type="button" onClick="window.location='.'http://tsuts/hopar/GRU_H8/vefur/eventProfile.html.php?var='.$vidburdur[$i]["ID"].'"-->
                          <a href="eventProfile.html.php?eventID='.$vidburdur[$i]["ID"].'" class="cd-read-more" id="'.$vidburdur[$i]["ID"].'">Read more</a>
                          <span class="cd-date">'.$vidburdur[$i]["Date"].'</span>
                        </form>
                      </div> 
                    </div>';
            };
          } 
          ?>
        </section> 
      </div>
    </div> 

    <?php
      include "php/Footer.php";
    ?>
  </body>
</html>
