
<?php

include("includes/config.php");

// session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])){
  $userLoggedIn = $_SESSION['userLoggedIn'];
} else{
  header("Location: register.php");
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to Puppify</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div id="nowPlayingBarContainer">
      <div id="nowPlayingBar">
        <div id="nowPlayingLeft">
          <div class="content">
            <span class="albumLink">
              <img src="https://images.unsplash.com/photo-1518587671104-999f3dd2d340?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="albumArtwork">
            </span>
            <div class="trackInfo">
              <span class="trackName">
                <span>Happy Dog</span>
              </span>
              <span class="artistName">
                <span>The Boxers</span>
              </span>
            </div>
          </div>
        </div>
        <div id="nowPlayingCenter">

          <div class="content playerControls">

            <div class="buttons">

              <button class="controlButton shuffle" title="Shuffle button">
                <img src="assets/images/icons/shuffle.png" alt="shuffle">
              </button>
              <button class="controlButton previous" title="previous button">
                <img src="assets/images/icons/previous.png" alt="previous">
              </button>
              <button class="controlButton play" title="play button">
                <img src="assets/images/icons/play.png" alt="play">
              </button>
              <button class="controlButton pause" title="pause button" style="display: none;">
                <img src="assets/images/icons/pause.png" alt="pause">
              </button>
              <button class="controlButton next" title="next button">
                <img src="assets/images/icons/next.png" alt="next">
              </button>
              <button class="controlButton repeat" title="repeat button">
                <img src="assets/images/icons/repeat.png" alt="repeat">
              </button>
            </div>

            <div class="playbackBar">
              <span class="progressTime current">0.00</span>
              <div class="progressBar">
                <div class="progessBarBg">
                  <div class="progress"></div>
                </div>
              </div>
              <span class="progressTime remaining">0.00</span>
            </div>
          </div>
        </div>
        <div id="nowPlayingRight">
          <div class="volumebar">
            <button class="controlButton" title="Volume button">
              <img src="assets/images/icons/volume.png" alt="volume">
            </button>
            <div class="progressBar">
              <div class="progessBarBg">
                <div class="progress"></div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </body>
</html>
