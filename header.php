<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Finance Ideas a Corporate Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
        <style>
/* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --black: #3a3a3a;
  --white: #fff;
  --green: #49b293;
}

* {
  margin: 0;
  padding: 0;
}

img {
  display: block;
  max-width: 100%;
  height: auto;
}

ol {
  list-style: none;
}

a {
  text-decoration: none;
  color: inherit;
}

body {
  margin: 50px 0;
  color: var(--black);
  font: 1rem/1.3 sans-serif;
}

.author-archive {
  padding: 1.5rem;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
  text-align: center;
  margin-bottom: 2rem;
}

h1 a {
  transition: all 0.1s;
}

h1 a:hover {
  background: var(--green);
  color: var(--white);
}

input[type="radio"] {
  position: absolute;
  left: -9999px;
}


/* FILTERS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.filters {
  text-align: center;
  margin-bottom: 2rem;
}

.filters * {
  display: inline-block;
}

.filters label {
  padding: 0.5rem 1rem;
  margin-bottom: 0.25rem;
  border-radius: 2rem;
  min-width: 50px;
  line-height: normal;
  cursor: pointer;
  transition: all 0.1s;
}

.filters label:hover {
  background: var(--green);
  color: var(--white);
}


/* FILTERED ELEMENTS (POSTS)
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.posts {
  display: grid;
  grid-gap: 1.5rem;
  grid-template-columns: repeat(4, 1fr);
}

.posts .post {
  background: #fafafa;
  border: 1px solid rgba(0, 0, 0, 0.1);
}

.posts .post-title {
  font-size: 1.3rem;
}

.posts .post-title:hover {
  text-decoration: underline;
}

.posts figcaption {
  padding: 1rem;
}

.posts .post-categories {
  margin-bottom: 0.75rem;
  font-size: 0.75rem;
}

.posts .post-categories * {
  display: inline-block;
}

.posts .post-categories li {
  margin-bottom: 0.2rem;
}

.posts .post-categories a {
  padding: 0.2rem 0.5rem;
  border-radius: 1rem;
  border: 1px solid;
  line-height: normal;
  transition: all 0.1s;
}

.posts .post-categories a:hover {
  background: var(--green);
  color: var(--white);
}


/* FILTERING RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
[value="All"]:checked ~ .filters [for="All"],
[value="mts"]:checked ~ .filters [for="mts"],
[value="Beeline"]:checked ~ .filters [for="Beeline"],
[value="megaphone"]:checked ~ .filters [for="megaphone"],
[value="tele2"]:checked ~ .filters [for="tele2"],
[value="yota"]:checked ~ .filters [for="yota"],
[value="bezlimit"]:checked ~ .filters [for="bezlimit"] {
  background: var(--green);
  color: var(--white);
}

[value="All"]:checked ~ .posts [data-category] {
  display: block;
}

[value="mts"]:checked ~ .posts .post:not([data-category~="mts"]),
[value="Beeline"]:checked ~ .posts .post:not([data-category~="Beeline"]),
[value="megaphone"]:checked ~ .posts .post:not([data-category~="megaphone"]),
[value="tele2"]:checked ~ .posts .post:not([data-category~="tele2"]),
[value="yota"]:checked ~ .posts .post:not([data-category~="yota"]),
[value="bezlimit"]:checked ~ .posts .post:not([data-category~="bezlimit"]) {
  display: none;
}


/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
footer {
  font-size: 1rem;
  padding: 0 1.5rem;
  text-align: right;
}

footer span {
  color: #e31b23;
}


/* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 900px) {
  .posts {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media screen and (max-width: 650px) {
  html {
    font-size: 14px;
  }

  .posts {
    grid-template-columns: repeat(2, 1fr);
  }
}
    </style>
  </head>
  <body>

<!--w3l-header-->

<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="index.php">НЕ<span>ПУБЛИЧКА</span></a>
			<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto pl-lg-5">
					<li class="nav-item @@home__active"><a class="nav-link" href="index.php">Главная</a></li>
					<li class="nav-item @@home__active"><a class="nav-link" href="tarif.php">Тарифы</a></li>
					<li class="nav-item @@home__active"><a class="nav-link" href="mega.php">Оборудование</a></li>
					<li class="nav-item @@about__active"><a class="nav-link" href="about.php">О нас</a></li>
					<li class="nav-item @@services__active"><a class="nav-link" href="https://vk.com/topic-218404449_49191879" target="_blank">Отзывы</a></li>
					<li class="nav-item @@contact__active"><a class="nav-link" href="contact.php">Обратная связь</a></li>
				</ul>
				
                <!--/search-right-->
				<div class="search-right">
					<a href="#search" title="search"><span class="fa fa-phone" aria-hidden="true"></span></a>
					<!-- search popup -->
					<div id="search" class="pop-overlay">
						<div class="popup">

							<div class="uCalc_424201"></div><script> var widgetOptions424201 = { bg_color: "transparent" }; (function() { var a = document.createElement("script"), h = "head"; a.async = true; a.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//ucalc.pro/api/widget.js?id=424201&t="+Math.floor(new Date()/18e5); document.getElementsByTagName(h)[0].appendChild(a) })();</script>

						</div>
						<a class="close" href="#close">×</a>
					</div>
            <div id="modem" class="pop-overlay">
            <div class="popup">
              <div class="uCalc_424802"></div><script> var widgetOptions424802 = { bg_color: "transparent" }; (function() { var a = document.createElement("script"), h = "head"; a.async = true; a.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//ucalc.pro/api/widget.js?id=424802&t="+Math.floor(new Date()/18e5); document.getElementsByTagName(h)[0].appendChild(a) })();</script>
            </div>
            <a class="close" href="#close">×</a>
          </div>
          <div id="wifimodem" class="pop-overlay">
            <div class="popup">
              <div class="uCalc_424806"></div><script> var widgetOptions424806 = { bg_color: "transparent" }; (function() { var a = document.createElement("script"), h = "head"; a.async = true; a.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//ucalc.pro/api/widget.js?id=424806&t="+Math.floor(new Date()/18e5); document.getElementsByTagName(h)[0].appendChild(a) })();</script>
            </div>
            <a class="close" href="#close">×</a>
          </div>
          <div id="router" class="pop-overlay">
            <div class="popup">
              <div class="uCalc_424805"></div><script> var widgetOptions424805 = { bg_color: "transparent" }; (function() { var a = document.createElement("script"), h = "head"; a.async = true; a.src = (document.location.protocol == "https:" ? "https:" : "http:") + "//ucalc.pro/api/widget.js?id=424805&t="+Math.floor(new Date()/18e5); document.getElementsByTagName(h)[0].appendChild(a) })();</script>
            </div>
            <a class="close" href="#close">×</a>
          </div>
					<!-- /search popup -->
				</div>
				<!--//search-right-->
				
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
<!-- //w3l-header -->