<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      session_start();
      include "dbcon.php";
      include "php/Header_postlogin.php";           
    ?>
    <title>Settings</title>
    <link rel="stylesheet" href="css/createEvent.css">
  </head>

  <body>

    <div class="InsertEvent">
      <form action="updateUser.php" method="post">
        <div><label>Full Name:</label><br>
          <input type="text" name="name" value="<?php echo $_SESSION['Name']; ?>" required pattern="{1,}"><span title="Change Your Full Name">  ?</span></div><br>
        <div><label>Social Security Number:</label><br>
          <input type="text" name="social_security_number" value="<?php echo $_SESSION['SSN']; ?>" required pattern="[0-9]{10}"><span title="Change Your Social Security Number">  ?</span></div><br>
        <div><label>Email:</label><br>
          <input type="text" name="email" value="<?php echo $_SESSION['Email']; ?>" required><span title="Change Your Email">  ?</span></div><br>
        <div><label>Phone:</label><br>
          <input type="text" name="phone" value="<?php echo $_SESSION['Phone']; ?>" required><span title="Change Your Phone">  ?</span></div><br>
        <div><label>Password:</label><br>
          <input type="password" name="password" value="<?php echo $_SESSION['Password']; ?>" required><span title="Change The Password That You Want To Use">  ?</span></div><br>
          <form class="navbar-form navbar-right" action="settings.html.php" method="post">
            <button type="submit" class="btn btn-success" name="createevent">Update User</button>
          </form>
      </form>
    </div>
    <?php
      include "php/Footer.php";  

    ?>
  </body>
</html>