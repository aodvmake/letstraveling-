<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="lib/css/style.css">	
  <title>´LET´S TRAVEL</title>
</head>
<body>

<div class="container">
	<header  id="navbar">
		<a href="" class="logo">LET´S<span>TRAVEL</span></a>
		<ul>
		  <li><a href="index2.php">Guia</a></li>
		  <li><a href="registro.php">Turista</a></li>
		</ul>
		<span class="menuIcon" onclick="menuToggle();"></span>
	</header>
	<div class="content">
		<div class="bannerText" id="slideshowText">
			<div class="active">
				<h2>Bienvenido<br>Vamos a Viajar!</h2>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
				<a href="login.php">Comenzar</a>
			</div>
		</div>

		<div class="bannerImg" id="slideshow">
			<img src="img/img1.jpg">
		</div>		
	</div>

		<div class="icons">
			<ul class="scs">
				<li><a href=""><img src="img/facebook.png"></a></li>
				<li><a href=""><img src="img/gorjeo.png"></a></li>
				<li><a href=""><img src="img/instagram.png"></a></li>
			</ul>
			

		</div>
</div>

<script type="text/javascript">
	var slideshow = document.getElementById('slideshow');
	var slideshow = slideshow.getElementsByTagName('img');
	var index=0;
	function nextSlide(){
		slides[index].classList.remove('active');
		index = (index + 1) % slides.length;
		slides[index].classList.add('active');
	}
	function prevSlide(){
		slides[index].classList.remove('active');
		index = (index - 1 + slides.length) % slides.length;
		slides[index].classList.add('active');
	}

	var slideshowText = document.getElementById('slideshowText');
	var slideshowText = slideshowText.getElementsByTagName('div');
	var i=0;
	function nextSlideText(){
		slidesText[i].classList.remove('active');
		i = (i + 1) % slidesText.length;
		slidesText[i].classList.add('active');
	}
	function prevSlideText(){
		slidesText[i].classList.remove('active');
		i= (i - 1 + slidesText.length) % slidesText.length;
		slidesText[i].classList.add('active');
	}
	function menuToggle(){
		var nav= document.getElementById('navbar')
		nav.classList.toggle('active')
	}
</script>
</body>
</html>
