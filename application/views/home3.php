<!DOCTYPE html>
<html>
<head>
	<title><?php echo $name ?></title>
	<link rel="stylesheet" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">

	<style type="text/css">
		.title {
			font-size: 2rem;
			font-weight: bold;
		}
		.fa {
			padding: 5px 3px;
			margin: 5px 0;
			font-size: 2rem;
			border-bottom: 1px solid #FFF;
		}
		a {
			color: blue;
		}
		.fa:hover {
			border-bottom: 1px solid blue;
		}
	</style>
</head>
<body>

	<img src="<?php echo $image ?>">
	<div class="outer">
		<div class="title"><?php echo $name ?></div>
		<div class="sub"><?php echo $subtitle ?></div>
		<div class="email"><?php echo $description ?></div><br>
		<div class="icons">
			<a target="_blank" href="<?php echo $twitter ?>"><i style="margin-left: 0px" class="fa fa-twitter" aria-hidden="true"></i></a><br>
			<a target="_blank" href="<?php echo $instagram ?>"><i style="margin-left: 33px" class="fa fa-instagram" aria-hidden="true"></i></a><br>
			<a target="_blank" href="<?php echo $spotify ?>"><i style="margin-left: 80px" class="fa fa-spotify" aria-hidden="true"></i></a><br>
			<a target="_blank" href="<?php echo $soundcloud ?>"><i style="margin-left: 120px" class="fa fa-soundcloud" aria-hidden="true"></i></a><br>
		</div>
	</div>

</body>
</html>