<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      session_start();
      include "dbcon.php";
      include "php/Header_prelogin.php";            
    ?>
    <link rel="stylesheet" href="css/createUsers.css">

    <div class="Insertusers">
      <form action="createUsers.php" method="post">
        <div><label>Full Name:</label><br>
          <input type="text" name="name"><span title="Write Your Full Name">  ?</span></div><br>
        <div><label>Social Security Number:</label><br>
          <input type="text" name="social_security_number"><span title="Ride Your Social Security Number">  ?</span></div><br>
        <div><label>Email:</label><br>
          <input type="text" name="email"><span title="Write Your Email">  ?</span></div><br>
        <div><label>Phone:</label><br>
          <input type="text" name="phone"><span title="Write Your Phone">  ?</span></div><br>
        <div><label>Username:</label><br>
          <input type="text" name="username"><span title="Write The Username That You Wanna yous">  ?</span></div><br>
        <div><label>Password:</label><br>
          <input type="password" name="password"><span title="Write The Password That You Wanna Yous">  ?</span></div><br>
          <form class="navbar-form navbar-right" action="createUsers.php" method="post">
            <button type="submit" class="btn btn-success" name="createevent">Create User</button>
          </form>
      </form>
    </div>
    <?php
      include "php/Footer.php";
    ?>
  </body>
</html>