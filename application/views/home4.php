<!DOCTYPE html>
<html>
<head>
	<title>p0h_k</title>
	<link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
	<style type="text/css">
		.background {
			background-image: url('<?php echo $background ?? null ?>');
		}

		.img {
			background-image: url('<?php echo $image ?? null ?>');
		}
	</style>
</head>
<body>
	<div class="outer">
		<div class="img"></div>
		<div class="title">
			<h1>p0h_k</h1>
			<p></p>
		</div>
		<div class="icons">
			<a target="_blank" href="<?php echo $spotify ?>"><i class="fa fa-spotify" aria-hidden="true"></i></a>
			<a target="_blank" href="<?php echo $soundcloud ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>
			<a target="_blank" href="<?php echo $instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a target="_blank" href="<?php echo $apple ?>"><i class="fa fa-apple" aria-hidden="true"></i></a>
		</div>
		<div class="line"></div>
	</div>

	<div class="background"></div>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112437071-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-112437071-1');
	</script>
</body>
</html>