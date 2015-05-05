<?php require('templates/header.php'); ?>

  <!-- <div class = "divider"></div> -->

  <!--Big pretty fixed splash page here-->
  <div id="splash">
      <h1>Austin Curzon</h1>
      <p>Fuck Bitches &bull; Get Money &bull; Make Films</p>
      <a href="images/Resume_Austin_Curzon.pdf" target = "_blank"> <!--Vimeo link-->
          <div class = "btn" id = "resume_download">
            <p><i class="fa fa-file-pdf-o fa-1x"></i>  Download Resume</p>
          </div>
      </a>
      <!--http://stackoverflow.com/questions/15158937/jquery-jump-or-scroll-to-certain-position-div-or-target-on-the-page-from-button-->
      <a class = "jumper" href = "#about"><i class="fa fa-chevron-down fa-5x"></i></a>
  </div>

  <div class = "divider"></div>

  <div id = "about">

      <h2>About Me</h2>
      <img id = "profile" src = "images/Profile.png"/>
      <div id = "about_text">
          <p>Hi, I'm Austin. Blergen shmergen dingle dirgen Blergen shmergen dingle dirgen Blergen shmergen dingle dirgen Blergen shmergen dingle dirgen Blergen shmergen dingle dirgen.</p>
      </div>

  </div>

  <!-- <div class = "divider"></div> -->

  <!-- <div id = "reels">

      <div id = "tabs_container">
          <ul id = "reel_tabs">
            <li class = "hvr-rectangle-out" onclick = "playVideo('directing')">Directing</li>
            <li class = "hvr-rectangle-out" onclick = "playVideo('editing')">Editing</li>
            <li class = "hvr-rectangle-out" onclick = "playVideo('cinematography')">Cinematography</li>
            <li class = "hvr-rectangle-out" onclick = "playVideo('vfx')">VFX</li>
          </ul>
      </div>

      <div id = "video">
        <div id = "video_player">
        </div>
        <p id = "video_instructions">
          <i class="fa fa-arrow-left fa-5x"></i>
          <br/>
          Select a reel to play
        </p>
      </div>

  </div> -->



  <!--"Skills" grid goes here - directing, editing, cinematography, motion graphics, whatever else -->
  <!-- <div class = "section" id="skills">
      <h2>My Skills</h2>
      <table id = "grid" border="0" cellpadding="0" cellspacing = "0">
          <tr>
              <td>
                  <figure class = "tint" onclick = "playVideo('directing')" >
                      <img src = "images/Dir_PHeader_bw.png"/>
                      <figcaption>Directing</figcaption>
                  </figure>
              </td>
              <td>
                  <figure class = "tint" onclick = "playVideo('cinematography')">
                      <img src = "images/Cine_PHeader_bw.png"/>
                      <figcaption>Cinematography</figcaption>
                  </figure>
              </td>
              <td>
                  <figure class = "tint" onclick = "playVideo('editing')">
                      <img src = "images/Edit_PHolder_bw.png"/>
                      <figcaption>Editing</figcaption>
                  </figure>
              </td>
              <td>
                  <figure class = "tint" onclick = "playVideo('vfx')">
                      <img src = "images/VFX_PHeader_bw.png"/>
                      <figcaption>VFX</figcaption>
                  </figure>
              </td>
          </tr>
      </table> -->

  <div class = "divider"></div>
  <div class = "section" id = "contact">
      <h2>Contact me</h2>
      <form id = "contact" method = "post" action = <?php echo htmlspecialchars('mail.php')?>>
          <input type = "text" name = "name" id = "name" placeholder = "Name"></input>
          <input type = "text" name = "email" id = "email" placeholder = "Email"></input><br/>
          <textarea name = "msg" id = "msg" rows = "6" cols = "60" placeholder = "Your message here..."></textarea><br/>
          <input id = "submit_btn" type = "submit" class = "btn" value = "Send"></input>
      </form>
  </div>
<?php require('templates/footer.php'); ?>
