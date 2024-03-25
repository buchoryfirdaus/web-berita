<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/header.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/navbar.php') ?>

		<div class="content">
			<h1>Reset Password</h1>

			<form action="" method="POST">
				<div>
					<label for="password">New Password</label>
					<input type="password" name="password" class="<?= form_error('password') ? 'invalid' : '' ?>"
					value="<?= set_value("password") ?>" required/>
					<div class="invalid-feedback">
						<?= form_error('password') ?>
					</div>
				</div>
				<div>
					<label for="password_confirm">Confirm Password</label>
					<input type="password" name="password_confirm" class="<?= form_error('password_confirm') ? 'invalid' : '' ?>"
					value="<?= set_value("password_confirm") ?>" required/>
					<div class="invalid-feedback">
						<?= form_error('password_confirm') ?>
					</div>
				</div>

				<div>
					<button type="submit" name="save" class="button button-primary">Save Password</button>
				</div>
			</form>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>