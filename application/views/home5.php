<!DOCTYPE html>
<html>
<head>
	<title>
		test
	</title>
	<link rel="stylesheet" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">


	<style type="text/css">
		body {
			background: #FFF;
			font-family: 'Noto Sans JP', sans-serif;
			color: #000;
		}

		.background {
			background: url('https://distrokid.imgix.net/http%3A//distrokid.com/hyperfollow/art/p0hk/comfort-in-water/%3F5567307CD203330E6998F8439E4D77C4?w=800&s=20ce371501ae741067d9ecb5298c99c6');
			background-size: cover;
			position: absolute;
			top: -10%;
			left: -10%;
			width: 110%;
			min-height: 110%;
			opacity: 0.2;
			z-index: -1;
			filter: hue-rotate(130deg);
		}
		img {
		    border: 15px solid #000;
		    float: left;
    		width: 320px;
		}
		.outer {
		    width: 900px;
		    height: 200px;
			margin: auto;
			margin-top: 200px;
			position: relative;
		}
		.title {
			letter-spacing: 1px;
		    border: 15px solid #000;
		    width: 350px;
		    height: 350px;
		    box-sizing: border-box;
		    font-size: 3rem;
		    font-weight: bold;
		    padding: 20px;
		    float: left;
		    margin-left: 10px;
    		background: #ffffff4a;
		}

		.icons {
		    border: 15px solid #000;
		    width: 120px;
		    float: left;
		    margin-left: 10px;
		    height: 350px;
		    box-sizing: border-box;
		    padding: 20px;
		    font-size: 2rem;
		    text-align: center;
		    padding-top: 25px;
    		background: #ffffff4a;
		}

		.line {
		    border: 15px solid #000;
		    width: 810px;
		    height: 1px;
		    float: left;
		    background: #000;
		    position: absolute;
		    top: -10;
		    top: -40px;
		}

		a {
			color: #000;
		}
		.fa {
			padding: 5px;
			margin-bottom: 25px;
			color: #000;
		}
		.fa:hover {
		    color: #3c6f89;
		}
	</style>
</head>
<body>
	<div class="outer">
		<img src="https://puu.sh/DzOnp/69ee8f4f6e.png">
		<!-- <img src="https://instagram.fper2-1.fna.fbcdn.net/vp/189eeffa462c1185d93d01f0e6de181a/5D7BE42F/t51.2885-19/s320x320/47585202_2163233760381520_5573901156796596224_n.jpg?_nc_ht=instagram.fper2-1.fna.fbcdn.net"> -->
		<div class="title">p0h_k</div>
		<div class="icons">
			<a target="_blank" href="<?php echo $spotify ?>"><i class="fa fa-spotify" aria-hidden="true"></i></a><br>
			<a target="_blank" href="<?php echo $soundcloud ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><br>
			<a target="_blank" href="<?php echo $instagram ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><br>
			<a target="_blank" href="<?php echo $apple ?>"><i class="fa fa-apple" aria-hidden="true"></i></a><br>
		</div>
		<div class="line"></div>
	</div>

	<div class="background"></div>
</body>
</html>