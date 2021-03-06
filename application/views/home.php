<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo $name ?>
	</title>
	<link rel="stylesheet" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
	<style type="text/css">
		body {
			padding: 0;
			margin: 0;
			background: #000;
			color: #fff;
			font-family: 'PT Serif', serif;
			text-align: center;
		}

		img {
		    width: 390px;
		    margin-bottom: 50px;
		}

		.title {
		    font-size: 3rem;
		    letter-spacing: 5px;
		}

		a {
			color: #FFF;
			font-size: 1.5rem;
		}

		.fa {
			padding: 12px;
			margin: 6px;
		}

		.sub {
		    margin-bottom: 1rem;
		    color: #777;
		}

		.email {
		    font-size: 12px;
		    letter-spacing: 1px;
		    margin-bottom: 40px;
		}

		.sub span {
		    color: #ff6e6e;
		    opacity: 1;
		    font-size: 53px;
		    position: relative;
		    top: 11px;
		}

		.fa-spotify:hover {
			color: lime;
		}

		.fa-soundcloud:hover {
			color: #ff6c00;
		}

		.fa-instagram:hover {
			color: #ff40d4;
		}

		.fa-apple:hover {
			color: grey;
		}
	</style>
</head>
<body>

	<img src="<?php echo $image ?>">
	<div class="outer">
		<div class="title"><?php echo $name ?></div>
		<div class="sub"><?php echo $subtitle ?></div>
		<div class="email"><?php echo $description ?></div>
		<div class="icons">
			<a target="_blank" href="<?php echo $twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a target="_blank" href="<?php echo $instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a target="_blank" href="<?php echo $spotify ?>"><i class="fa fa-spotify" aria-hidden="true"></i></a>
			<a target="_blank" href="<?php echo $soundcloud ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>
		</div>
	</div>

	<div class="background"></div>
</body>
</html>