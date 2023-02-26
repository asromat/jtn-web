<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>404 Page Not Found</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arvo">
	<style type="text/css">
		/*======================
    404 page
=======================*/


		.page_404 {
			padding: 40px 0;
			background: #fff;
			font-family: 'Arvo', serif;
		}

		.page_404 img {
			width: 100%;
		}

		.four_zero_four_bg {

			background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
			height: 400px;
			background-position: center;
		}


		.four_zero_four_bg h1 {
			font-size: 80px;
		}

		.four_zero_four_bg h3 {
			font-size: 80px;
		}

		.link_404 {
			color: #fff !important;
			padding: 10px 20px;
			background: #39ac31;
			margin: 20px 0;
			display: inline-block;
		}

		.contant_box_404 {
			margin-top: -50px;
		}
	</style>
</head>

<body>
	<section class="page_404">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 ">
					<div class="col-sm-10 col-sm-offset-1  text-center">
						<div class="four_zero_four_bg">
							<h1 class="text-center ">404</h1>


						</div>

						<div class="contant_box_404">
							<h3 class="h2">
							Mohon maaf alamat yang anda tuju tidak tersedia
							</h3>

							<p>Pastikan alamat yang anda inputkan sudah benar</p>

							<a href="https://<?= $_SERVER['HTTP_HOST']?>" class="link_404">Go to Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div hidden>
		<h4>An uncaught Exception was encountered</h4>

		<p>Type: <?php echo get_class($exception); ?></p>
		<p>Message: <?php echo $message; ?></p>
		<p>Filename: <?php echo $exception->getFile(); ?></p>
		<p>Line Number: <?php echo $exception->getLine(); ?></p>

		<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE) : ?>

			<p>Backtrace:</p>
			<?php foreach ($exception->getTrace() as $error) : ?>

				<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0) : ?>

					<p style="margin-left:10px">
						File: <?php echo $error['file']; ?><br />
						Line: <?php echo $error['line']; ?><br />
						Function: <?php echo $error['function']; ?>
					</p>
				<?php endif ?>

			<?php endforeach ?>

		<?php endif ?>
	</div>
</body>

</html>