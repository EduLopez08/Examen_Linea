<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exámen de Exploración.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="qbootstrap-loader"></div>
	
		<div id="page">
	<nav class="qbootstrap-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-4 col-md-push-4 text-center">
									<div id="qbootstrap-logo"><h1><a href="index.html"></i>UNIVERSIDAD POLITECNICA DE JUVENTINO ROSAS.</span></a><h1></div>
								</div>
								<div class="col-md-4 col-md-pull-4">
									<div class="num">
										<span class="icon"><i class="icon-phone"></i></span>
										<p><a href="#"><em>C.P:38240</em></a><br><a href="#">01 (412) 157 8000 </a></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="loc">
										<span class="icon"><i class="icon-location"></i></span>
										<p><a href="#">Hidalgo 102, Comunidad de Valencia Santa Cruz de Juventino Rosas, Gto. </a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 text-center">
						<div class="menu-1">
							<ul>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div id="qbootstrap-services">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
					<h2>Exámen de exploración.</h2>
				    </div>	
				    <!-- -->
				    <div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">Encierre en un círculo la opción "a" o "b" para indicar su respuesta a cada pregunta. Por favor seleccione solamente una respuesta para cada pregunta. Si tanto "a" y "b" parecen aplicarse a usted, seleccione aquella que se aplique más frecuentemente. </div>
					
					<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading"><h2><label id = "tiempo">50:00</label></h4></div>
						<!--Contador-->
						<script type="text/javascript">
							function redireccionar(){
							  window.location.href="Segundoexamen.html";
							  alert("Haz llegado al tiempo límite.");
							}

							var salida = document.getElementById("tiempo"),
						    minutos = 50,
						    segundos = 0,
						    intervalo = setInterval(function(){
					        if (--segundos < 0){
					            segundos = 59;
					            minutos--;
					            setTimeout("redireccionar()",180001000); //180,001,000 milisegundos, 1000 para que llegue a cero.

					        }
					      
					        if (!minutos && !segundos)
					            clearInterval(intervalo);
					  
					        salida.innerHTML = minutos + ":" + (segundos < 10 ? "0" + segundos : segundos);
					    }, 1000);
    					</script>
				</div>
				
				<!-- Examen-->
<form data-toggle="validator" role="form">
				<div class="Preguntas">
				<h4>1.- Entiendo mejor algo</h4>
				<div class="2pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) si lo practico.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) si pienso en ello.
			  		</label>
				</div>
				<!-- -->
				<h4>2.- Me considero </h4>
				<div class="2pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) realista. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) innovador
			  		</label>
				</div>
				
				<!-- -->
				<h4>3.- Cuando pienso acerca de lo que hice ayer, es más probable que lo haga sobre la base de </h4>
				<div class="3pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) una imagen. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) palabras.
			  		</label>
			  	</div>
				<!-- -->
				<h4>4.- Tengo tendencia a</h4>
				<div class="4pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) entender los detalles de un tema pero no ver claramente su estructura completa. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) entender la estructura completa pero no ver claramente los detalles. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>5.- Cuando estoy aprendiendo algo nuevo, me ayuda  </h4>
				<div class="5pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a)	hablar de ello.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b)	pensar en ello. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>6.- Si yo fuera profesor, yo preferiría dar un curso </h4>
				<div class="6pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) que trate sobre hechos y situaciones reales de la vida. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) que trate con ideas y teorías. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>7.- Prefiero obtener información nueva de</h4>
				<div class="7pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) imágenes, diagramas, gráficas o mapas. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
			  		b) instrucciones escritas o información verbal. 	
			  		</label>
			  	</div>
				<!-- -->
				<h4>8.- Una vez que entiendo </h4>
				<div class="8pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) todas las partes, entiendo el total.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) el total de algo, entiendo como encajan sus partes. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>9.- En un grupo de estudio que trabaja con un material difícil, es más probable que </h4>
				<div class="9pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) participe y contribuya con ideas.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) no participe y solo escuche. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>10.-Es más fácil para mí </h4>
				<div class="10pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) aprender hechos.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"  required>
					b) aprender conceptos. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>11.- En un libro con muchas imágenes y gráficas es más probable que </h4>
				<div class="11pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) revise cuidadosamente las imágenes y las gráficas.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) me concentre en el texto escrito. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>12.- Cuando resuelvo problemas de matemáticas  </h4>
				<div class="12pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					generalmente trabajo sobre las soluciones con un paso a la vez. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					frecuentemente sé cuáles son las soluciones, pero luego tengo dificultad para imaginarme los pasos para llegar a ellas. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>13.- En las clases a las que he asistido </h4>
				<div class="13pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) he llegado a saber cómo son muchos de los estudiantes.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) raramente he llegado a saber cómo son muchos estudiantes. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>14.- Cuando leo temas que no son de ficción, prefiero </h4>
				<div class="14pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) algo que me enseñe nuevos hechos o me diga cómo hacer algo. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) algo que me dé nuevas ideas en que pensar. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>15.- Me gustan los maestros </h4>
				<div class="15pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) que utilizan muchos esquemas en el pizarrón. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) que toman mucho tiempo para explicar. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>16.- Cuando estoy analizando un cuento o una novela </h4>
				<div class="16pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) pienso en los incidentes y trato de acomodarlos para configurar los temas. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) me doy cuenta de cuáles son los temas cuando termino de leer y luego tengo que regresar y encontrar los incidentes que los demuestran. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>17.- Cuando comienzo a resolver un problema de tarea, es más probable que  </h4>
				<div class="17pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) comience a trabajar en su solución inmediatamente
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) primero trate de entender completamente el problema. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>18.- Prefiero la idea de  </h4>
				<div class="18pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) certeza. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) teoría. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>19.- Recuerdo mejor </h4>
				<div class="19pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) lo que veo. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) lo que oigo. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>20.- Es más importante para mí que un profesor</h4>
				<div class="20pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) exponga el material en pasos secuenciales claros.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					b) me dé un panorama general y relacione el material con otros temas
			  		</label>
			  	</div>
				<!-- -->
				<h4>21.- Prefiero estudiar</h4>
				<div class="21pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) en un grupo de estudio. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) solo. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>22.- Me considero</h4>
				<div class="22pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) cuidadoso en los detalles de mi trabajo.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) creativo en la forma en la que hago mi trabajo. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>23.- Cuando alguien me da direcciones de nuevos lugares, prefiero </h4>
				<div class="23pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) un mapa
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) instrucciones escritas. 
			  		</label>
			  	</div>
				<!-- -->
				<h4>24.- Aprendo</h4>
				<div class="24pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) a un paso constante. Si estudio con ahínco consigo lo que deseo. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) en inicios y pausas. Me llego a confundir y súbitamente lo entiendo. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>25.- Prefiero primero</h4>
				<div class="25pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) hacer algo y ver qué sucede. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) pensar cómo voy a hacer algo. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>26.- Cuando leo por diversión, me gustan los escritores que </h4>
				<div class="26pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) dicen claramente los que desean dar a entender. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) dicen las cosas en forma creativa e interesante. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>27.- Cuando veo un esquema o bosquejo en clase, es más probable que recuerde </h4>
				<div class="27pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) la imagen.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) lo que el profesor dijo acerca de ella. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>28.- Cuando me enfrento a un cuerpo de información </h4>
				<div class="28pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) me concentro en los detalles y pierdo de vista el total de la misma. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) trato de entender el todo antes de ir a los detalles. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>29.- Recuerdo más fácilmente</h4>
				<div class="29pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) algo que he hecho.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) algo en lo que he pensado mucho. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>30.- Cuando tengo que hacer un trabajo, prefiero </h4>
				<div class="30pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) dominar una forma de hacerlo
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) intentar nuevas formas de hacerlo. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>31.- Cuando alguien me enseña datos, prefiero </h4>
				<div class="31pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) gráficas. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) resúmenes con texto. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>32.-  Cuando escribo un trabajo, es más probable que</h4>
				<div class="32pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) lo haga (piense o escriba) desde el principio y avance.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) lo haga (piense o escriba) en diferentes partes y luego las ordene. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>33.- Cuando tengo que trabajar en un proyecto de grupo, primero quiero </h4>
				<div class="33pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) realizar una "tormenta de ideas" donde cada uno contribuye con ideas. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) realizar la "tormenta de ideas" en forma personal y luego juntarme con el grupo para comparar las ideas. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>34.- Considero que es mejor elogio llamar a alguien </h4>
				<div class="34pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) sensible. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) imaginativo. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>35.- Cuando conozco gente en una fiesta, es más probable que recuerde  </h4>
				<div class="35pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) cómo es su apariencia.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) lo que dicen de sí mismos
			  		</label>
			  	</div>
								<!-- -->
				<h4>36.- Cuando estoy aprendiendo un tema, prefiero </h4>
				<div class="36pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) mantenerme concentrado en ese tema, aprendiendo lo más que pueda de él.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) hacer conexiones entre ese tema y temas relacionados. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>37.- Me considero </h4>
				<div class="37pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) abierto. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) reservado. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>38.- Prefiero cursos que dan más importancia a </h4>
				<div class="38pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) material concreto (hechos, datos).
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) material abstracto (conceptos, teorías). 
			  		</label>
			  	</div>				<!-- -->
				<h4>39.- Para divertirme, prefiero </h4>
				<div class="39pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) ver televisión.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) leer un libro. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>40.- Algunos profesores inician sus clases haciendo un bosquejo de lo que enseñarán. <br> Esos bosquejos son </h4>
				<div class="40pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) algo útiles para mí. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) muy útiles para mí. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>41.- La idea de hacer una tarea en grupo con una sola calificación para todos </h4>
				<div class="41pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) me parece bien.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) no me parece bien. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>42.- Cuando hago grandes cálculos</h4>
				<div class="42pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) tiendo a repetir todos mis pasos y revisar cuidadosamente mi trabajo. 
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) me cansa hacer su revisión y tengo que esforzarme para hacerlo. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>43.- Tiendo a recordar lugares en los que he estado </h4>
				<div class="43pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) fácilmente y con bastante exactitud.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) con dificultad y sin mucho detalle. 
			  		</label>
			  	</div>
								<!-- -->
				<h4>44.- Cuando resuelvo problemas en grupo, es más probable que yo</h4>
				<div class="44pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" required>
					a) piense en los pasos para la solución de los problemas.
				    </label>
				    	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" required>
					b) piense en las posibles consecuencias o aplicaciones de la solución en un amplio rango de campos. 
			  		</label>
			  	</div>
			  	</div>
				<!-- Cierre de ultima pregunta-->
				</div>
				<!--cierre de preguntas 
				<button type="submit" class="btn btn-primary">Submit</button>
				-->
				<br>
				<div class="form-group">
					<center><a href="Encuesta_Habilidades_Estudio.html"><button type="button" class="btn btn-success" id="btnIniciar">Siguiente exámen.</button></a></center>
				</div>	
						
			</div>
			</form>
			<div class="row animate-box">
				<div class="col-md-12">
				</div>
			</div>
	</div>
	
		</div>

		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block">&copy; 2019 ELC. Eduardo</small> 
                    <small class="block">Designed by <a href="https://qbootstrap.com/" target="_blank">Universidad Politecnica de Juventino Rosas.</a></small>
                </p>
			</div>
		</div>
	</footer>
	</div>


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>