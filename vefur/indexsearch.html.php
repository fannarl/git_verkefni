<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
      session_start();
      #include "eventShow.php";
      include "php/Header_postlogin.php";
      #include "search.php";
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
        $searchthing = $_GET['search'];
          
          $KHAAAAN;

            try {
            $sql = "SELECT event.Name, event.ID, Date, Location, Description, Category, users_has_event.id_Users
                FROM event
                INNER JOIN users_has_event
                ON event.ID = users_has_event.id_Event
                INNER JOIN users
                ON users_has_event.id_Users = users.ID
                WHERE event.name LIKE '%$searchthing%' OR users.name LIKE '%$searchthing%' OR Category LIKE '%$searchthing%' OR Description LIKE '%$searchthing%'
                ORDER BY Date";
            $result = $pdo->query($sql);
            } catch (PDOException $ex) {
            echo 'Error fetching scores: '.$ex->getMassage();
            }
            while ($row = $result->fetch()) {
              $KHAAAAN[] = array('ID' => $row['ID'],
                        'Name' => $row['Name'],
                        'Date' => $row['Date'],
                        'Location' => $row['Location'],
                        'Description' => $row['Description'],
                        'Category' => $row['Category'],
                        'ID_users' => $row['id_Users']
                        );
            }
            if (empty($KHAAAAN)) {
              echo "Your search returned nothing";
            }else{
          #echo "Today is: ". date("Y-m-d H") . "<br>";
          $today = date("Y-m-d H").":00:00";
          for ($i=0, $size = count($KHAAAAN); $i < $size; $i++) {
            if($today <= $KHAAAAN[$i]["Date"]){ 
              echo '<div class="cd-timeline-block">
                      <div class="cd-timeline-img cd-picture">
                        <div class="image"><a href='."profile.html.php?ID=".$KHAAAAN[$i]["ID_users"].'><img src="img/AvatarNoImg.jpg" alt="Picture"></a></div>
                      </div> 

                      <div class="cd-timeline-content">
                        <form action="eventProfile.html.php">
                          <h2>'.$KHAAAAN[$i]["Name"].'</h2>
                          <p>'.$KHAAAAN[$i]["Description"].'</p>
                          <!--input type="button" onClick="window.location='.'http://tsuts/hopar/GRU_H8/vefur/eventProfile.html.php?var='.$KHAAAAN[$i]["ID"].'"-->
                          <a href="eventProfile.html.php?eventID='.$KHAAAAN[$i]["ID"].'" class="cd-read-more" id="'.$KHAAAAN[$i]["ID"].'">Read more</a>
                          <span class="cd-date">'.$KHAAAAN[$i]["Date"].'</span>
                        </form>
                      </div> 
                    </div>';
            };
          } 
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
