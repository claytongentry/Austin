<?php require('templates/header.php'); ?>

          <h2>Contact me!</h2>
          <form id = "contact" method = "post" action = <?php echo htmlspecialchars('mail.php')?>>
              <input type = "text" name = "name" placeholder = "Name"></input>
              <input type = "text" name = "email" placeholder = "Email"></input><br/>
              <textarea id = "msg"></textarea><br/>
              <input type = "submit"></input>
          </form>

<?php require('templates/footer.php'); ?>
