<!DOCTYPE html>
<html lang="en">
<?php
    $title = 'Contact Us';
    $contact = 'active';
    require_once '../include/head.php';
?>
<body>
    <?php
        require_once '../include/header-user.php';
    ?>

    <div class="container main">
        <h1>Contact Us</h1>
        <div class="contact-form">
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <?php
    require_once('../include/user-footer.php')
    ?>
</body>
</html>