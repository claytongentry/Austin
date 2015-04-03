<?php require('templates/header.php'); ?>

  <!--Big pretty fixed splash page here-->
  <div id="splash">
      <h1>Austin Curzon</h1>
      <p>Patience is a virtue.</p>
  </div>

  <!--Nav bar w/ About, CV, Contact - would suggest having it start below the splash page, then maybe stick to the top of the screen on scroll-->
  <ul id="nav">
      <li><a href="#">About</a></li>
      <li><a href="#">Resume</a></li>
      <li><a href="#">Contact</a></li>
  </ul>

  <!--"Skills" grid goes here - directing, editing, cinematography, motion graphics, whatever else-->
  <table>
      <tr>
          <td>Directing</td>
          <td>Cinematograpy</td>
      </tr>
      <tr>
          <td>Motion Graphics</td>
          <td>Editing</td>
      </tr>
  </table>

  <!--Footer - copyright, date, Facebook, email link perhaps-->
  <div id="footer">
      <p>Site Production &copy; Clayton Gentry 2015</p>
      <ul>
        <li><a target="_blank" href="https://www.facebook.com/austin.curzon">Facebook</a></li>
        <li><a href="mailto:awcurzon@gmail.com">Email</a></li>
      </ul>
  </div>

<?php require('templates/footer.php'); ?>