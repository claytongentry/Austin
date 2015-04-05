<?php require('templates/header.php'); ?>

  <!--Nav bar w/ About, CV, Contact - would suggest having it start below the splash page, then maybe stick to the top of the screen on scroll-->
  <ul id="nav">
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
      <table>
          <tr>
              <td>
                  <h3>Directing</h3>
              </td>
              <td>
                  <h3>Cinematography</h3>
              </td>
          </tr>
          <tr>
              <td>
                  <h3>Motion Graphics</h3>
              </td>
              <td>
                  <h3>Editing</h3>
              </td>
          </tr>
      </table>
  </div>

  <!--Footer - copyright, date, Facebook, email link perhaps-->
  <div id="footer">
      <ul>
        <li><a target="_blank" href="https://www.facebook.com/austin.curzon">Facebook</a></li>
        <li><a href="mailto:awcurzon@gmail.com">Email</a></li>
      </ul>
      <p>Site Production &copy; Clayton Gentry 2015</p>
  </div>

<?php require('templates/footer.php'); ?>
