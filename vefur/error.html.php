<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php 
    session_start();
    include "php/Header_prelogin.php";
    ?>
    <link href="css/error2.css" rel="stylesheet">

    <div class="jumbotron">
        <div>
        <h1>Problem ?</h1>
        <p>Sorry there was some problem with your account. <br>If you forgot your password please Enter you Email in.</p>
      <form action="UpdatePassword.php" method="post">
        <br>
          <input type="text" name="gEmail" size="27"></div><br>
          <!--?php
          $Email = Post_['gEmail']
          if(){

          }
          ?-->
          <form class="navbar-form navbar-right" action="UpdatePassword.php" method="post">
            <div class="button"><button type="submit" class="btn btn-success" name="UpdatePassword">Update User</button></div>
          </form>
      </form>
    </div>
    <?php
      include "php/Footer.php";
    ?>
  </body>
</html>