<?php require('templates/header.php'); ?>

  <!--Big pretty fixed splash page here-->
  <div id="splash">
      <h1>Austin Curzon</h1>
      <p>Filmmaker &bull; After Effects Pro &bull; Damn Good Pal</p>
      <a href="#"> <!--Vimeo link-->
          <div class = "btn" id="reel">
              <p>Reel</p>
          </div>
      </a>
      <!--http://stackoverflow.com/questions/15158937/jquery-jump-or-scroll-to-certain-position-div-or-target-on-the-page-from-button-->
      <a class = "jumper" href = "#skills"><i class="fa fa-chevron-down fa-5x"></i></a>
  </div>

  <div class = "divider"></div>

  <!-- "Skills" grid goes here - directing, editing, cinematography, motion graphics, whatever else -->
  <div class = "section" id="skills">
      <!-- <h2>My Skills</h2> -->
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
                  <figure class = "tint" onclick = "playVideo('motion_graphics')">
                      <img src = "images/MotionG_PHeader_bw.png"/>
                      <figcaption>Motion Graphics</figcaption>
                  </figure>
              </td>
          </tr>
          <tr>
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
              <td>
                  <figure class = "tint" onclick = "playVideo('gaffing')">
                      <img src = "images/Gaff_PHeader_bw.png"/>
                      <figcaption>Gaffing</figcaption>
                  </figure>
              </td>
          </tr>
      </table>

      <div id = "video">
      </div>

  </div>

  <div class = "divider"></div>
  <div class = "section" id = "contact">
      <h2>Contact me</h2>
      <form id = "contact" method = "post" action = <?php echo htmlspecialchars('mail.php')?>>
          <input type = "text" name = "name" id = "name" placeholder = "Name"></input>
          <input type = "text" name = "email" id = "email" placeholder = "Email"></input><br/>
          <textarea id = "msg" rows = "6" cols = "60" placeholder = "Your message here..."></textarea><br/>
          <input id = "submit_btn" type = "submit" class = "btn" value = "Send"></input>
      </form>
  </div>
<?php require('templates/footer.php'); ?>
