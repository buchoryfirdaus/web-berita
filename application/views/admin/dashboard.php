<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('admin/_partials/header.php') ?>
</head>
<body>
    <main class="main">
        <?php $this->load->view('admin/_partials/navbar.php') ?>
    
    <div class="content">
        <h1>Overview</h1>

        <div style="display:flex; gap: 1em">
        <div class="card text-center" style="width: 100px;">
        <h2><?= $article_count ?></h2>
        <p><a href="<?= site_url('admin/post') ?>">Article</a></p>
        </div>
        <div class="card text-center" style="width: 100px;">
        <h2><?= $feedback_count ?></h2>
        <p><a href="<?= site_url('admin/feedback') ?>">Feedback</a></p>
        </div>
        </div>
        <?php $this->load->view('admin/_partials/footer.php') ?>
    </div>
    </main>

</body>
</html>