<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('includes/head.php');?>
</head>
<body>
	<?php
		include 'includes/db_connection.php';
		$connect = OpenConnect();
		// echo "Connected Successfully";
		CloseConnect($connect);
	?>
	<section class="clearfix header">
		<div class="container">
			<!-- HEADER -->
		</div>
	</section>
	<section class="clearfix">
		<div class="container">
			<?php include('includes/content.php');?>
		</div>
	</section>

	<section class="clearfix footer">
		<div class="container">
			<!-- FOOTER -->
		</div>
	</section>
	<!-- Scripts -->
    <?php include('includes/footer.php');?>
</body>
</html>

