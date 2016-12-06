<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Make an Event</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/dropdown-menu.css">
    
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <?php
      include "usersShow.php";
    ?>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index2.php">Eventr</a>
        </div>
        <form class="navbar-form navbar-right" action="" method="post">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
            <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span>
          </button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="index2.php">Home</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href=<?php echo "profile.html.php?ID=".$_SESSION['ID'] ?>>My Page</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="createEvent.html.php">Create Event</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="settings.html.php">Settings</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Logout</a></li>
        </ul>
          <?php
              echo $_SESSION["Username"]."<br>";
          ?>
        </div>
        </form>
        <div id="navbar" class="navbar-collapse collapse">
        <form action="search.php" method="post">
          <div class="navbar-form navbar-right">
            <input id="submit" type="submit" class="btn btn-success navbar-right" value="Search">
          </div>
          <div class="navbar-form navbar-right">
            <input id="search" type="text" class="form-control" placeholder="Type here" name="search">
          </div>
        </form>
        </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>