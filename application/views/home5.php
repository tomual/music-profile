<!DOCTYPE html>
<html>
<head>
	<title>
		test
	</title>
	<link rel="stylesheet" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<style type="text/css">
		img {
		    width: 300px;
		    position: absolute;
		    left: 260px;
   			top: 210px;
		    z-index: -1;
		    opacity: 0.9;
		}

		body {
		    padding: 4rem;
			text-shadow: 5px 5px 1px #b5375870;
    		background: #e3a8a124;
		}

		.title {
		    position: absolute;
		    font-size: 4rem;
		    left: 180px;
    		top: 170px;
			font-weight: 600;
		}

		a {
			color: inherit;
		}

		.fa {
			font-size: 2.5rem;
			margin: 20px;
		}

		.icons {
			position: absolute;
			left: 280px;
    		top: 430px;
		}

		.thing2 {
			width: 400px;
			opacity: 0.3;
		}

		.fa:hover {
		    position: relative;
		    top: 1px;
		    left: 1px;
		    text-shadow: none;
		    text-shadow: 3px 3px 1px #ac00ff52;
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
		<img class="thing" src="<?php echo $image ?>">
		<img class="thing2" src="<?php echo $image ?>">
	</div>

</body>
</html>