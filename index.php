<?php require('templates/header.php'); ?>

  <!-- <div class = "divider"></div> -->

  <!--Big pretty fixed splash page here-->
  <div id="splash">
      <h1 style = "line-height: 85%;">Austin Curzon</h1>
      <p>VFX &bull; Post-Production &bull; Cinematography</p>
      <a href="images/Resume_Austin_Curzon.pdf" target = "_blank">
          <div class = "btn" id = "resume_download">
            <p><i class="fa fa-file-pdf-o fa-1x"></i>  Download Resume</p>
          </div>
      </a>
      <a class="jumper" href = "#about"><i class="fa fa-chevron-down fa-5x"></i></a>
  </div>

  <div class = "divider"></div>

  <div id = "about">
      <div id = "about_content">
          <h2>About Me</h2>
          <img id = "profile" src = "images/Profile.png"/>
          <div id = "about_text">
              <p>I am a filmmaker, story-teller, and an all-around creative mind. Arkansas is my home and although its filmmaking community is small, it has made a considerable impact on who I am as a filmmaker as well as a person. Cinematography, Editing, Motion Graphics, and Visual Effects are my strong suits, but I’m aiming to expand my area of expertise during my time as an undergrad. I enjoy working with others and feel that collaboration is an integral element of filmmaking.</p>
          </div>
      </div>
  </div>

  <div class = "divider" id = "divider1"></div>

  <div id = "videoWrapper">
    <iframe src="https://player.vimeo.com/video/127217007" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="https://vimeo.com/127217007">Demo Reel</a> from <a href="https://vimeo.com/austincurzon">Austin Curzon</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
  </div>

  <div class = "divider"></div>
  <div class = "section" id = "contact">
      <h2>Contact me</h2>
      <form id = "contact" method = "post" action = <?php echo htmlspecialchars('mail.php')?>>
          <input type = "text" name = "name" id = "name" placeholder = "Name"></input>
          <input type = "text" name = "email" id = "email" placeholder = "Email"></input><br/>
          <textarea name = "msg" id = "msg" placeholder = "Your message here..."></textarea><br/>
          <input id = "submit_btn" type = "submit" class = "btn" value = "Send"></input>
      </form>
  </div>
<?php require('templates/footer.php'); ?>
