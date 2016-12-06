<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      session_start();
      include "php/Header_postlogin.php";
    ?>
    <link rel="stylesheet" href="css/createEvent.css">

    <div class="InsertEvent">
      <form action="createEvent.php" method="post"><!--Hér-->
        <div><label>Name:</label><br>
          <input type="text" name="name"><span title="Write The Name Of Your Event">  ?</span></div><br>
        <div><label>Date:</label><br>
          <input type="text" name="date" maxlength="19"><span title="YYYY-MM-DD hh-mm-ss">  ?</span></div><br>
        <div><label>Location:</label><br>
          <input type="text" name="location"><span title="Where Is It Held">  ?</span></div><br>
          <div><label>Categories:</label><br>
            <select name="Category" size="1">
              <option value="networking">Networking</option>
              <option value="education">Education</option>
              <option value="fairs&festivals">Fairs & Festivals</option>
              <option value="sports">Sports</option>
              <option value="art&music">Art & Music</option>
              <option value="dancing">Dancing</option>
              <option value="eating">Eating</option>
              <option value="nightlife&party">Nightlife & Party</option>
            </select><span title="How Would You Describe Your Event">  ?</span><br><br>
          </div>
        <div><label>Description:</label><br>
          <textarea cols="19" rows="10" name="Description"></textarea><span title="Tell Me More About It">  ?</span></div><br>
        <form class="navbar-form navbar-right" action="createEvent.html.php" method="post"><!--Hér-->
          <button type="submit" class="btn btn-success" name="createevent">Create Event</button>
        </form>
      </form>
    </div>
    <?php
      include "php/Footer.php";
    ?>
  </body>
</html>
