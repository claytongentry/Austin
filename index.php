<?php require('templates/header.php'); ?>

  <!--Nav bar w/ About, CV, Contact - would suggest having it start below the splash page, then maybe stick to the top of the screen on scroll-->
  <ul id="nav">
      <!-- <div class = "left">
          <p>AC</p>
      </div> -->
      <li><a href="#">About</a></li>
      <li><a href="#">Resume</a></li>
      <li><a href="#">Contact</a></li>
  </ul>

  <!--Big pretty fixed splash page here-->
  <div id="splash">
      <h1>Austin Curzon</h1>
      <p>Filmmaker &bull; After Effects Pro &bull; Damn Good Pal</p>
      <a href="#">
          <div id="reel">
              <p>Reel</p>
          </div>
      </a>
      <i class="fa fa-chevron-down fa-5x"></i>
  </div>

  <!-- "Skills" grid goes here - directing, editing, cinematography, motion graphics, whatever else -->
  <div id="skills">
      <h2>My Skills</h2>
      <table border="0" cellpadding="0" cellspacing = "0">
          <tr>
              <td>
                  <figure class = "tint">
                      <img src = "images/Dir_PHeader_bw.png"/>
                      <figcaption>Directing</figcaption>
                  </figure>
              </td>
              <td>
                  <figure class = "tint">
                      <img src = "images/Cine_PHeader_bw.png"/>
                      <figcaption>Cinematography</figcaption>
                  </figure>
              </td>
              <td>
                  <figure class = "tint">
                      <img src = "images/MotionG_PHeader_bw.png"/>
                      <figcaption>Motion Graphics</figcaption>
                  </figure>
              </td>
          </tr>
          <tr>
              <td>
                  <figure class = "tint">
                      <img src = "images/Edit_PHolder.png"/>
                      <figcaption>Editing</figcaption>
                  </figure>
              </td>
              <td>
                  <figure class = "tint">
                      <img src = "images/VFX_PHeader.png"/>
                      <figcaption>VFX</figcaption>
                  </figure>
              </td>
              <td>
                  <figure class = "tint">
                      <img src = "images/Gaff_PHeader.png"/>
                      <figcaption>Gaffing</figcaption>
                  </figure>
              </td>
          </tr>
      </table>
  </div>

  <!--Footer - copyright, date, Facebook, email link perhaps-->
  <div id="footer">
      <ul>
        <li><a target="_blank" href="https://www.facebook.com/austin.curzon"><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href="mailto:awcurzon@gmail.com"><i class="fa fa-envelope fa-2x"></i></a></li>
      </ul>
      <p>Site Production &copy; Clayton Gentry 2015</p>
  </div>

<?php require('templates/footer.php'); ?>
