<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/header.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/navbar.php') ?>

		<div class="content">
			<h1>Upload Avatar</h1>

			<form action="" method="POST" enctype="multipart/form-data">
				<div>
					<label for="avatar">Choose Avatar</label>
					<input type="file" name="avatar" id="avatar" accept="image/png, image/jpeg, image/jpg, image/gif">
				</div>

				<?php if (isset($error)) : ?>
					<div class="invalid-feedback"><?= $error ?></div>
				<?php endif; ?>

				<div>
					<button type="submit" name="save" class="button button-primary">Upload</button>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>