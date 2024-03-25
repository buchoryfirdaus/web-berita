<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/header.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/navbar.php') ?>

		<div class="content">
			<h1>Article is Empty</h1>
			<p>No Article to show. Please create new article.</p>

			<div>
				<a href="<?= site_url('admin/post/new') ?>" class="button button-primary">+ Create New Article</a>
			</div>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>