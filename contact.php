<?php require('templates/header.php'); ?>

    <form id = "contact" method = "post" action = <?php echo htmlspecialchars('includes/mail.php')?>>
        <input type = "text" name = "name" placeholder = "email"/>
        <input type = "text" name = "email" placeholder = "email"/>
        <textarea id = "msg"></textarea>
    </form>

<?php require('templates/footer.php'); ?>
