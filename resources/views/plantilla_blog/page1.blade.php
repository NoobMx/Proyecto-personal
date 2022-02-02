<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/main.css" />
	<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	<title>Page1</title>
</head>
<body class="is-preload">
	<div id="wrapper" class="divided">
	<section class="wrapper style1 align-center">
						<div class="inner">
							<h2>Nombre: {{$claseMia->nombre}}</h2>
							<h2>Y mi edad es de: {{$claseMia->edad}}</h2>
							<p>Habilidad 1: {{$claseMia->habilidadUno}}</p>
							<br>
							<p>Habilidad 2: {{$claseMia->habilidadDos}}</p>
						</div> 

						<!-- Gallery -->
							<div class="gallery style2 medium lightbox onscroll-fade-in">
								<article>
									<a href="images/gallery/fulls/uno.jpg" class="image">
										<img src="images/gallery/thumbs/uno.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Programar</h3>
										<p>Arte del proceso por el cual se limpia, codifica, traza y protege el código fuente de programas computacionales, en otras palabras, es indicarle a la computadora lo que tiene que hacer...</p>
										<ul class="actions fixed">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/dos.jpg" class="image">
										<img src="images/gallery/thumbs/dos.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>HTML</h3>
										<p>HTML, siglas en inglés de HyperText Markup Language, hace referencia al lenguaje de marcado para la elaboración de páginas web.</p>
										<ul class="actions fixed">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/tres.jpg" class="image">
										<img src="images/gallery/thumbs/tres.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Habilidad</h3>
										<p>Capacidad de una persona para hacer una cosa correctamente y con facilidad.</p>
										<ul class="actions fixed">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/cuatro.jpg" class="image">
										<img src="images/gallery/thumbs/cuatro.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>UPT</h3>
										<p>Universidad Politecnica de Tecámac</p>
										<ul class="actions fixed">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/cinco.jpg" class="image">
										<img src="images/gallery/thumbs/cinco.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Software</h3>
										<p>Logicial o soporte lógico al sistema formal de un sistema informático, que comprende el conjunto de los componentes lógicos necesarios que hace posible la realización de tareas específicas, en contraposición a los componentes físicos que son llamados hardware. </p>
										<ul class="actions fixed">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
							</div>

					</section>
			<!-- Footer -->
			<footer class="wrapper style1 align-center" > 
				<div class="inner">
				    <ul class="icons">
				    	<li><a href="https://twitter.com/skrill7771" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
				    	<li><a href="https://www.facebook.com/robert.mejiaosorio/" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
				    	<li><a href="https://www.instagram.com/robert_u_mejia/?hl=es-la" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
				    </ul>
				    <p>&copy; R.A.M.O: <a href="https://html5up.net">3522IS</a>.</p>
				</div>
			</footer>
	</div>
	<!-- Scripts -->
	<script src="/js/jquery.min.js"></script>
	<script src="/js/jquery.scrollex.min.js"></script>
	<script src="/js/jquery.scrolly.min.js"></script>
	<script src="/js/browser.min.js"></script>
	<script src="/js/breakpoints.min.js"></script>
	<script src="/js/util.js"></script>
	<script src="/js/main.js"></script>

</body>
</html>