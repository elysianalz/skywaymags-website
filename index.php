<?php
  include_once("dbconnect.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <link rel="stylesheet" href="https://unpkg.com/98.css">
    <link rel="stylesheet" href="./src/main.css">
    <meta charset="utf-8">
    <title>SKYWAYMAGS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

  </head>
  <body>

    <div id="desktop">
      <!-- desktop items -->
      <div id="shortcuts">

        <article id="throw-aways" class="desktop-item">
          <img src="./assets/img/recycle_bin_full-4.png"/>
          <br>throw-aways
        </article>

        <article id="music" class="desktop-item">
          <img src="./assets/img/cd_drive_purple-0.png"/>
          <br>music
        </article>

        <article id="dates" class="desktop-item">
          <img src="./assets/img/template_world-1.png"/>
          <br>dates.txt
        </article>

        <article id="music-videos" class="desktop-item">
          <img src="./assets/img/camera3_vid-4.png"/>
          <br>music videos
        </article>

        <article id="cool-shit" class="desktop-item">
          <img src="./assets/img/directory_closed-4.png"/>
          <br>cool shit
        </article>

        <a href="mailto: matthew.beerens@gmail.com">
          <article class="desktop-item">
            <img src="./assets/img/modem-5.png"/>
            <br>contact me
          </article>
        </a>

      </div>

      <!-- WINDOWS MEDIA PLAYER -->
      <div id="media-player" class="ui-widget-content open-folder">

        <div class="window">
          <div class="title-bar">
            <div id="folder-title" class="title-bar-text">Windows Media Player</div>
            <div class="title-bar-controls">
              <button aria-label="Minimize"></button>
              <button aria-label="Maximize"></button>
              <button id="closeFolderThrowAways" aria-label="Close" ></button>
            </div>
          </div>

          <div id="media-player-ui">

            <div class="ui-toolbar">
              <ul>
                <li>File</li>
                <li>View</li>
                <li>Play</li>
                <li>Favorites</li>
                <li>Go</li>
                <li>Help</li>
              </ul>
            </div>

            <div class="video-window">
              <video src="" autoplay poster="./assets/img/camera3_vid-4.png">

              </video>
            </div>

          </div>

        </div> <!-- end window -->

      </div> <!-- end windows media player -->

      <!-- container for displaying open folders -->
      <div id="throwAwaysFolder" class="ui-widget-content open-folder">

        <div class="window">
          <div class="title-bar">
            <div id="folder-title" class="title-bar-text">throw-aways</div>
            <div class="title-bar-controls">
              <button aria-label="Minimize"></button>
              <button aria-label="Maximize"></button>
              <button id="closeFolderThrowAways" aria-label="Close" ></button>
            </div>
          </div>

          <!-- window items -->
          <div class="folder-items">

          </div>

        </div> <!-- end window -->

      </div> <!-- end open folder -->

      <!-- container for displaying open folders -->
      <div id="music-folder" class="ui-widget-content open-folder">

        <div class="window">
          <div class="title-bar">
            <div id="folder-title" class="title-bar-text">music</div>
            <div class="title-bar-controls">
              <button aria-label="Minimize"></button>
              <button aria-label="Maximize"></button>
              <button id="close-folder-music" aria-label="Close" ></button>
            </div>
          </div>

          <!-- window items -->

          <div class="folder-items">

            <?php
            if($albums->num_rows > 0)
            {
              while($row = $albums->fetch_assoc())
              {
            ?>
            <article class="folder-item">
              <img src="./assets/img/directory_closed-4.png"/>
              <br> <?php echo $row["name"] ?>
            </article>
            <?php
              }
            }
            ?>

            <?php
            if($songs->num_rows > 0)
            {
              while($row = $songs->fetch_assoc())
              {
            ?>
            <article class="folder-item">
              <img src="./assets/img/cd_audio_cd_a-4.png"/>
              <br> <?php echo $row["name"] ?>.mp3
            </article>
            <?php
              }
            }
            ?>

          </div>

        </div> <!-- end window -->

      </div> <!-- end open folder -->

      <!-- container for displaying open folders -->
      <div id="dates-text" class="ui-widget-content open-folder">

        <div class="window">
          <div class="title-bar">
            <div id="folder-title" class="title-bar-text">dates.txt</div>
            <div class="title-bar-controls">
              <button aria-label="Minimize"></button>
              <button aria-label="Maximize"></button>
              <button id="close-folder-dates" aria-label="Close" ></button>
            </div>
          </div>

          <!-- window items -->
          <div class="folder-items">
            <p>---------- dates and shit ----------</p>
            <?php
              if($notes->num_rows > 0)
              {
                while($row = $notes->fetch_assoc())
                {
            ?>
                <p><?php echo $row['text'] . " - " . $row['date']?></p>
            <?php
                }
              }
            ?>
          </div>

        </div> <!-- end window -->

      </div> <!-- end open folder -->

      <!-- container for displaying open folders -->
      <div id="musicVideosFolder" class="ui-widget-content open-folder">

        <div class="window">
          <div class="title-bar">
            <div id="folder-title" class="title-bar-text">music videos</div>
            <div class="title-bar-controls">
              <button aria-label="Minimize"></button>
              <button aria-label="Maximize"></button>
              <button id="closeFolderMusicVideos" aria-label="Close" ></button>
            </div>
          </div>

          <!-- window items -->
          <div class="folder-items">
            <?php
            if($videos->num_rows > 0)
            {
              while($row = $videos->fetch_assoc())
              {
            ?>
            <article class="folder-item">
              <img src="./assets/img/windows_movie-0.png"/>
              <br> <?php echo $row["name"] ?>.wmv
            </article>
            <?php
              }
            }
            ?>
          </div>

        </div> <!-- end window -->

      </div> <!-- end open folder -->

      <!-- container for displaying open folders -->
      <div id="cool-shit-folder" class="ui-widget-content open-folder">

        <div class="window">
          <div class="title-bar">
            <div id="folder-title" class="title-bar-text">cool shit</div>
            <div class="title-bar-controls">
              <button aria-label="Minimize"></button>
              <button aria-label="Maximize"></button>
              <button id="close-folder-cool-shit" aria-label="Close" ></button>
            </div>
          </div>

          <!-- window items -->
          <div class="folder-items">

          </div>

        </div> <!-- end window -->

      </div> <!-- end open folder -->

    </div> <!-- end desktop -->

    <!-- desktop task bar -->
    <nav id="task-bar">
      <button id="start-button"><img src="./assets/img/start-button.png"/></button>

      <div style="display: flex; align-items: center;">
        <div id="friend-statement" class="sunken-border">aren't you tired, friend?</div>
        <div id="clock" class="sunken-border">1:44 AM</div>
      </div>

    </nav>

<script type="text/javascript" src="./src/main.js" ></script>
  </body>
</html>
