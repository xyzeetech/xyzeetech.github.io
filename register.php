<?php
   include("config.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE email = '$myusername' and password = '$mypassword'";
     $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        echo "You have loged in";
         
         header("location: welcome.php"); ?> <script type="text/javascript">
         	
         	 (function() {
    'use strict';
    var data = {message: 'You have successfully loged in '};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
  });
         </script>

      <?php }else{ echo "There is some problem"; ?>
      <script type="text/javascript">
      	(function() {
    'use strict';
    var data = {message: 'Invalid email or password '};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
  });
      </script>
     <?php } 
   } ?> 	

<!DOCTYPE html>
<html>
<head>
    <!-- Material Design Lite -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Android</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" type="image" href="images/logo12.png" sizes="16x16 24x24 32x32 48x48" />
<link rel="icon" type="image" href="images/logo12.png" sizes="16x16 24x24 32x32 48x48" />
<link rel="apple-touch-icon-precomposed" href="images/logo12.png" sizes="16x16 24x24 32x32 48x48" />

    <!-- Page styles -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <!-- Material Design icon font -->
    
    
     <link href="css/style.css" rel="stylesheet">

      
      
     
      
 
     
      <link rel="manifest" href="manifest.json">

      <!--Let browser know website is optimized for mobile-->
      


</head>
<body>
 <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">StartUp Guide</span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
             <a class="mdl-navigation__link" href="">Starup India</a>
          <a class="mdl-navigation__link" href="">Social Media</a>
          <a class="mdl-navigation__link" href="">Startup Stories</a>
          <a class="mdl-navigation__link" href="register.php">Register</a>
          </nav>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item">Events and Comptiton</li>
            <li class="mdl-menu__item">Knowledge Bank</li>
            <li class="mdl-menu__item">Government schemes</li>
            <li class="mdl-menu__item">Video Library</li>
          </ul>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Startup Guide</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="">Starup India</a>
          <a class="mdl-navigation__link" href="">Social Media</a>
          <a class="mdl-navigation__link" href="">Startup Stories</a>
          <a class="mdl-navigation__link" href="register.php>">Register</a> 
           <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="" style="font-weight: bold; color: black;">Whats new</span>
           <a class="mdl-navigation__link" href="">Events and Comptiton</a>
          <a class="mdl-navigation__link" href="">Knowledge Banks</a>
          <a class="mdl-navigation__link" href="">Government Schemes</a>
          <a class="mdl-navigation__link" href="">Video Library</a>
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content">
    

          <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--8-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Login Here</h2>
                    </div>
                    <div class="mdl-card__media">
                        <img class="article-image" src=" images/contact-image.jpg" border="0" alt="">
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>
                            Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
                        </p>
                        <p>
                            Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit. Velit anim eiusmod labore sit amet.
                        </p>
                        <form action="register.php" id="login" method="post" >
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="email" name="email">
                                <label class="mdl-textfield__label" for="Name">Email.</label>
                                
                            </div><br>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="password" name="password">
                                <label class="mdl-textfield__label" for="Email">Password</label>
                            </div><br>
                            
                            <p>
                                <button id="toast" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                                    Login
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
       </div>
       </main>
</body>
</html>