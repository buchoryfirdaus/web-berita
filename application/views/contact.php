<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/header.php'); ?>
</head>
<body>
<?php $this->load->view('_partials/navbar.php'); ?>

    <div class="container">
        <h1>Contact Us</h1>
        <p>Hubungi kami melalui form berikut </p>
        <form action="" method="post" style="max-width: 600px;">
            <input type="hidden" name="id">
            <div>
                <label for="name">Name <span style="color: red;">*</span></label>
                <input type="text" name="name" class="<?= form_error('name') ? 'invalid' : '' ?>" placeholder="Your name.." required  maxlength="32" value="<?= set_value('name') ?>">
                <div class="invalid-feedback"><?= form_error('name') ?></div>
            </div>
            <div>
                <label for="name">Email <span style="color: red;">*</span></label>
                <input type="email" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>" placeholder="Your email address.." required value="<?= set_value('email') ?>">
                <div class="invalid-feedback"><?= form_error('email') ?></div>
            </div>
            <div>
                <label for="message">Message <span style="color: red;">*</span></label>
                <textarea name="message" cols="30" class="<?= form_error('message') ? 'invalid' : '' ?>" rows="5" placeholder="write your message" required><?= set_value('message') ?></textarea>
                <div class="invalid-feedback"><?= form_error('message') ?></div>
            </div>
            <div style="display: flex; gap: 1rem">
                <input type="submit" class="button button-primary" value="Send">
                <input type="reset"  class="button" value="Reset">
            </div>
        </form>
    </div>
    <?php $this->load->view('_partials/footer.php'); ?>
</body>
</html>