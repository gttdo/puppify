<?php
//select 10 random songs

$songQuery = mysqli_query($con, "SELECT id FROM songs ORDER BY RAND() LIMIT 10");

$resultArray = array();

while($row = mysqli_fetch_array($songQuery)){
  array_push($resultArray, $row['id']);
}

$jsonArray = json_encode($resultArray);
?>

<script>
  $(document).ready(function(){
    currentPlaylist = <?php echo $jsonArray; ?>;
    audioElement = new Audio();
    setTrack(currentPlaylist[0], currentPlaylist, false);
  });

  function setTrack(trackId, newPlaylist, play){
    audioElement.setTrack("assets/music/bensound-extremeaction.mp3");

    if(play){
      audioElement.audio.play();
    }

  }
</script>

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
