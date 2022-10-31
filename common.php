<?php
  //header
  function outputHeader($title){
    echo '<!doctype html>';
    echo '<html lang="ja">';

    echo '<head>';
    echo '<meta charset="UTF-8">';

    echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />';
    echo '<link rel="stylesheet" href="css/destyle.css">';
    echo '<link rel="stylesheet" href="https://use.typekit.net/ajq4umg.css">';
    echo '<link rel="stylesheet" href="css/style.css">';

    echo '<title>'.$title.'</title>';
    echo '</head>';
    echo '<body>';
  }

  //Navigation is displayed
  function outputBannerNavigation($pageName){
    $linkNames = array("game", "signup", "login", "rank");
    $linkAddresses = array("index.php", "signup.php", "login.php", "rank.php");
    $linkImages = array("images/Game_button.png", "images/signup_button.png", "images/Login_button.png", "images/Score_button.png");


    echo '<header>';
    echo '<div class="menu">';
    echo '<!-- logo -->';
    echo '<div class="left">';
    echo '<img src="images/Logo.png" alt="logo">';
    echo '</div>';
    echo '<div class="right">';
    echo '<!-- menu -->';
    echo '<ul>';

      for($x = 0; $x < count($linkNames); $x++){
        echo '<li><a href="' . $linkAddresses[$x] . '"><img src="'.$linkImages[$x].'" alt="' . $linkNames[$x] . '"></img></a></li>';
    }
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</header>';
  }

  //hooter is displayed
  function outputFooter(){

    echo '</body>';
    echo '</html>';
  }