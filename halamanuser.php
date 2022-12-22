<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    /* background-image: linear-gradient(to right, #405DE6, #5851DB, #833AB4, #C13584, #E1306C, #FD1D1D); */
    background-size: cover; 
    height: 100vh;
    overflow: hidden;
    font-family: 'comic sans ms';
}
h1{
    color: white;
    text-align: center;

}
.slides{
	position: relative;
	/* height: 200px; */
	/* padding: 0px; */
	/* margin: 0px; */
	/* list-style-type: none; */
}
 
.slide{
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: 1;
 
	-webkit-transition: opacity 1s;
	-moz-transition: opacity 1s;
	-o-transition: opacity 1s;
	transition: opacity 1s;
}
 
.showing{
	opacity: 1;
	z-index: 2;
}
 
.slide{
	font-size: 40px;
	padding: 40px;
	box-sizing: border-box;
	background: #333;
	color: #fff;
	text-align: center;
	line-height: 120px;
}
 .slide img{
	width: 350px;
 }
.slide:nth-of-type(1){
	background-color: aqua;
}
.slide:nth-of-type(2){
	background: orange;
}
.slide:nth-of-type(3){
	background: green;
}
.slide:nth-of-type(4){
	background: blue;
}
.slide:nth-of-type(5){
	background: purple;
}
    </style>
</head>
<body>
<ul id="slides">
		<li class="slide showing"><h1>Selamat Datang Di halaman User</h1>
        <a href="logout.php">Log-Out</a>
        </li>
        <li class="slide"><h1>Selamat Datang Di halaman User</h1>
        <a href="logout.php">Log-Out</a>
        </li>
		<li class="slide"><h1>Selamat Datang Di halaman User</h1>
        <a href="logout.php">Log-Out</a>
        </li>
		<li class="slide"><h1>Selamat Datang Di halaman User</h1>
        <a href="logout.php">Log-Out</a>
        </li>
		<li class="slide"><h1>Selamat Datang Di halaman User</h1>
        <a href="logout.php">Log-Out</a>
        </li>
		</ul>
    <script type="text/javascript">
            var slides = document.querySelectorAll('#slides .slide');
            var currentSlide = 0;
            var slideInterval = setInterval(nextSlide,300);
     
            function nextSlide(){
                slides[currentSlide].className = 'slide';
                currentSlide = (currentSlide+1)%slides.length;
                slides[currentSlide].className = 'slide showing';
            }
    </script>
</body>
</html>