<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name ?></title>
	<link rel="stylesheet" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">

	<style type="text/css">
		body {
			padding: 0;
			margin: 0;
		}
		.title {
			font-family: 'VT323', monospace;
    		font-size: 6rem;
		}
		.background {
			background: url('<?php echo $background ?>');
			background-size: cover;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			min-height: 100%;
			opacity: 0.2;
			z-index: -1;
			filter: hue-rotate(130deg);
		}
		.outer {
		    border: 15px solid #000;
		    padding: 3rem 4rem;
		    width: 520px;
		    height: 300px;
		    margin: 0 auto;
		    background: #feeeed;
		    margin-top: 200px;
    		box-shadow: 15px 15px 0 #9957ad3d;
		    border-top-right-radius: 120px;

		}
		i.fa {
		    font-size: 2rem;
		    margin: 8px;
		    padding: 10px;
    		transition: all 0.1s linear;
		}
		a {
			color: #000;
		}
		.icons {
		    width: 100px;
		    float: right;
		    margin-top: -60px;
			text-align: center;
		}
		img {
		    width: 210px;
		    margin-top: 56px;
		    filter: hue-rotate(130deg);
		    opacity: 0.9;
		}
		.fa:hover {
    		transform: rotate(40deg);
		    position: relative;
		    opacity: 0.7;
		}
	</style>
</head>
<body>

	<div class="outer">
		<div class="title"><?php echo $name ?></div>
		<div class="icons">
			<a target="_blank" href="<?php echo $twitter ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a target="_blank" href="<?php echo $instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			<a target="_blank" href="<?php echo $spotify ?>"><i class="fa fa-spotify" aria-hidden="true"></i></a>
			<a target="_blank" href="<?php echo $soundcloud ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>
		</div>
		<img src="<?php echo $image ?>">
	</div>

	<div class="background"></div>
</body>
</html>