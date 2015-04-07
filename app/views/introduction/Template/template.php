<?php
function printMainPage($output_data)
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
	Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $output_data['page_title'] ?></title>
	<meta name="description" content="">
	<meta name="author" content="PhuWork">

	<meta name="viewport" content="width=device-width; initial-scale=1.0">

	<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<?php echo HTML::style('CSS/introduction.css') ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="page_wraper">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top_navigation_bar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="top_navigation_bar">
				<ul class="nav navbar-nav">
					<li <?php highlightCurrentPage('/') ?>>
						<a href="<?php echo URL::to('/') ?>">Home</a>
					</li>
					<li <?php highlightCurrentPage('website_developing_service') ?>>
						<a href="<?php echo URL::to('website_developing_service') ?>">Website developing service</a>
					</li>
					<li <?php highlightCurrentPage('developers_for_hire') ?>>
						<a href="<?php echo URL::to('developers_for_hire') ?>">Developer for hire</a>
					</li>
					<li <?php highlightCurrentPage('contact') ?>>
						<a href="<?php echo URL::to('contact') ?>">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
		<header>
			<h1></h1>
		</header>

		<div>
			<?php printContentRegion1() ?>
		</div>

		<footer class="site-footer">
			<p>
				&copy; Copyright  by PhuWork
			</p>
		</footer>
	</div>
</body>
</html>
<?php
}

function highlightCurrentPage($page_name)
{
	if (URL::full() == URL::to($page_name))
		echo 'class="active"';
}
?>