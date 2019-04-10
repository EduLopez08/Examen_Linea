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
									<div id="qbootstrap-logo"><h1><a href="index.php"></i>UNIVERSIDAD POLITECNICA DE JUVENTINO ROSAS.</span></a><h1></div>
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
				    <div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">Lee con atención cada una de las preguntas y escoge la opción que consideres adecuada. Para resolver el examen tienes un tiempo máximo de 50 minutos. No se requiere ningún instrumento (formulario, calculadora o tabla periódica).</div>
					
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
					            setTimeout("redireccionar()",3000000); //

					        }
					      
					        if (!minutos && !segundos)
					            clearInterval(intervalo);
					  
					        salida.innerHTML = minutos + ":" + (segundos < 10 ? "0" + segundos : segundos);
					    }, 1000);
    					</script>
				</div>
				
				<!-- Examen-->
<form data-toggle="validator" role="form" method="post" name="formu" id="formu">
				<div class="Preguntas" id="">
				<h4>1.- Es una sustancia que no se puede separar en otras más sencillas por medios químicos:</h4>
				<div class="Primerpregunta" id="respuesta1" value="hola" name="hola">
					<label class="checkbox-inline">
				    <input type="checkbox" name="optionsRadios" id="optionsRadios1" value=“option1”  onclick="respuesta()" required>
				    	a) Compuesto.
				    </label>
				    	<label class="checkbox-inline">
			  		<input type="checkbox" name="optionsRadios" id="optionsRadios2" value=“option2” onclick="respuesta()" required>
			  			b) Elemento.
			  		</label>
			  		<label class="checkbox-inline">
			  		<input type="checkbox" name="optionsRadios" id="optionsRadios2" value=“option3” onclick="respuesta()" required>
			  			c) Materia.
			  		</label>
				</div>
				
				<script type="text/javascript">
				function respuesta(){
				var respuesta1=document.getElementById("respuesta1").value;
				var respuesta2=document.getElementById("respuesta2".value);
				var datos="hola";
				datos=respuesta1;
				console.log(datos);
					}
					
				</script>
				<!-- -->
				<h4>2.- ¿Cuál de las siguientes afirmaciones es incorrecta considerando el número atómico de un elemento?</h4>
				<div class="Segundapregunta" id="respuesta2">
				    <input type="checkbox" name="optionsRadios" id="optionsRadios1" onclick="respuesta()"  value=“option1” required>
				    	a) Número de protones en el núcleo
				    	<br>
			  		<input type="checkbox" name="optionsRadios" id="optionsRadios2" onclick="respuesta()"  value=“option2” required>
			  			b) Número de protones en las órbitas.
			  			<br>
			  			<input type="checkbox" name="optionsRadios" id="optionsRadios2" onclick="respuesta()"  value=“option3” required>
			  			c) Se utiliza para la configuración electrónica de los elementos.
				</div>
				<!-- -->
				<h4>3.- El nombre de los siguientes elementos químicos Mn, P, K, S, Ba, Cs, Fe, Nd, Ca y Al es:</h4>
				<div class="Tercerpregunta" id="respuesta3">
				    <input type="checkbox" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Magnesio, Potasio, Kriptón, Azufre, Bario, Escandio, Flúor, Neodimio, Calcio y Aluminio.
				  	<br>
			  		<input type="checkbox" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Manganeso, Potasio, Kriptón, Azufre, Bario, Cesio, Fierro, Neodimio, Calcio y Aluminio.
			  			<br>
			  		<input type="checkbox" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Manganeso, Fosforo, Potasio, Azufre, Bario, Cesio, Fierro, Neodimio, Calcio y Aluminio.
				</div>
				<!-- -->
				<h4>4.- Selecciona de las siguientes afirmaciones relacionadas con el níquel (Ni), cual no es verdadera.</h4>
				<div class="Cuartapregunta">
					<label class="checkbox-inline">
				    <input type="checkbox" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Es un aislante.
				  		</label>
				  		<label class="checkbox-inline">
			  		<input type="checkbox" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Es maleable.
			  		</label>
			  		<label class="checkbox-inline">
			  			<input type="checkbox" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Es dúctil.
			  		</label>
				</div>
				<!-- -->
				<h4>5.- Su principal característica es que son considerados gases inertes:</h4>
				<div class="Quintaregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Halógenos.
				    </label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Metales de transición.
			  		</label>
			  		<label class="radio-inline">
			  			<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Gases nobles
			  		</label>
				</div>
				<!-- -->
				<h4>6.- El Radio atómico se define como:</h4>
				<div class="Sextapregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Mitad de la distancia entre dos núcleos de dos moléculas adyacentes.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Mitad de la distancia entre dos núcleos de dos átomos adyacentes.
			  			<br>
			  			<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			b) Mitad de la distancia entre dos núcleos de un átomo y una molécula adyacentes.
				</div>
				<!-- -->
				<h4>7.- Se define como la energía mínima necesaria para separar un electrón de un átomo en estado
gaseoso: </h4>
				<div class="Septimapregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Afinidad electrónica.
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Electronegatividad.
			  		</label>
			  		<label class="radio-inline">
			  			<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Energía de ionización.
			  		</label>
				</div>
				<!-- -->
				<h4>8.- Un enlace covalente se caracteriza por:</h4>
				<div class="Octavapregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Fuerzas electrostáticas entre los elementos.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Por compartir electrones entre los elementos.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Por ceder el par de electrones de un elemento a otro.
				</div>
				<!-- -->
				<h4>9.- Compuesto que presenta un enlace covalente polar</h4>
				<div class="Novenapregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) NaCl.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) CCl<sub>4</sub>.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) HF.
				</div>
				<!-- -->
				<h4>10.- Una propiedad para diferenciar un enlace covalente polar y un enlace covalente no polar es:</h4>
				<div class="Decimapregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Electronegatividad.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Radio atómico.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Longitud de enlace.
				</div>
				<!-- -->
				<h4>11.- El estado de oxidación del Azufre (S) en el compuesto ácido sulfúrico (H<sub>2</sub> SO<sub>4</sub> ) es:</h4>
				<div class="Onceavapregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) +2.
				    </label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) +6
			  		</label>
			  		<label class="radio-inline">
			  			<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			c) -6
			  		</label>
				</div>
				<!-- -->
				<h4>12.- La reacción química donde se unen dos elementos o dos compuestos para generar un solo producto se llama:</h4>
				<div class="Doceavapregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Reacción de sustitución.
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Reacción de síntesis.
			  		</label>
			  		<label class="radio-inline">
			  			<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			c) Reacción de metátesis.
			  		</label>
				</div>
				<!-- -->
				<h4>13.- En una reacción de combustión:</h4>
				<div class="Treceavapregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Implica perdida de oxígeno.
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Implica la necesidad de oxígeno.
			  		</label>
			  		<label class="radio-inline">
			  			<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			c) Las dos anteriores.
			  		</label>
				</div>
				<!-- -->
				<h4>14.- Si lo pesos atómicos del Carbono y del Hidrógeno son 12 y 1 respectivamente, la masa molar
del propano C<sub>3</sub> H<sub>8</sub> es:</h4>
				<div class="Catorceavapregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 34 g.
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 54 g.
			  		</label>
			  		<label class="radio-inline">
			  			<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			c) 44 g.
			  		</label>
				</div>
				<!-- -->
				<h4>15.- Los factores que afectan la solubilidad son:</h4>
				<div class="Quinceavapregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Temperatura y presión.
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Calor y presión.
			  		</label>
			  		<label class="radio-inline">
			  			<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			c) Temperatura y calor.
			  		</label>
				</div>
				<!-- -->
				<h4>16.- Se puede medir y observar sin que se modifique la composición de la sustancia:</h4>
				<div class="Dieciavapregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Propiedad química.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Propiedad física.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Ninguna de las anteriores.
				</div>
				<!-- -->
				<h4>17.- Es el procedimiento que se sigue para preparar una disolución menos concentrada a partir de un más concentrada</h4>
				<div class="Diesietepregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Concentración.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Solvatación.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Dilución.
				</div>
				<!-- -->
				<h4>18.- El grupo funcional que representa un alcohol es:</h4>
				<div class="Dieciochopregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) R-COOH
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) R-CO-R
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) R-OH
			  			</label>
				</div>
				<!-- -->
				<h4>19.- Cuál de las siguientes moléculas es inorgánica:</h4>
				<div class="Diecinuevepregunta">
				    <label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) NaCl
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) C<sub>6</sub> H<sub>12</sub> O<sub>6</sub>
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) CH<sub>4</sub>
			  			</label>
				</div>
				<!-- -->
				<h4>20.- ¿Cuál de los siguientes compuestos es el principal componente del gas natural?</h4>
				<div class="Veintiavapregunta">
				    <label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) BH<sub>4</sub>
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) SH<sub>4</sub>
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) CH<sub>4</sub>
			  			</label>
				</div>
				<!-- -->
					<h4>21.- ¿Cuál es la fracción equivalente a -<div class="fraction">
																<span class="fup">18</span>
																<span class="bar">/</span>
																<span class="fdn">24</span>
																</div>?</h4>
				<div class="21pregunta">
				    <label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) -<div class="fraction">
							<span class="fup">6</span>
							<span class="bar">/</span>
							<span class="fdn">8</span>
							</div>
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) -<div class="fraction">
							<span class="fup">9</span>
							<span class="bar">/</span>
							<span class="fdn">6</span>
							</div>
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) -<div class="fraction">
							<span class="fup">6</span>
							<span class="bar">/</span>
							<span class="fdn">12</span>
							</div>
			  			</label>
				</div>
				<!-- -->
				<h4>22.- ¿Cuál es el resultado de   <div class="fraction">
													<span class="fup">5</span>
													<span class="bar">/</span>
													<span class="fdn">6</span>
													</div>+
													<div class="fraction">
													<span class="fup">2</span>
													<span class="bar">/</span>
													<span class="fdn">4</span>
													</div>+
													<div class="fraction">
													<span class="fup">9</span>
													<span class="bar">/</span>
													<span class="fdn">10</span>
													</div>?</h4>
				<div class="22pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) <div class="fraction">
							<span class="fup">67</span>
							<span class="bar">/</span>
							<span class="fdn">240</span>
							</div>
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) <div class="fraction">
							<span class="fup">67</span>
							<span class="bar">/</span>
							<span class="fdn">30</span>
							</div>
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) <div class="fraction">
							<span class="fup">4</span>
							<span class="bar">/</span>
							<span class="fdn">15</span>
							</div>
			  		</label>
				</div>
				<!-- -->
				<h4>23.- ¿Cuál es el resultado de la siguiente operación matemática (<div class="fraction">
																					<span class="fup">18</span>
																					<span class="bar">/</span>
																					<span class="fdn">10</span>
																					</div>)(
																				    <div class="fraction">
																					<span class="fup">8</span>
																					<span class="bar">/</span>
																					<span class="fdn">3</span>
																					</div>)?</h4>
				<div class="23pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) <div class="fraction">
							<span class="fup">24</span>
							<span class="bar">/</span>
							<span class="fdn">5</span>
							</div>
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) <div class="fraction">
							<span class="fup">27</span>
							<span class="bar">/</span>
							<span class="fdn">40</span>
							</div>
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) <div class="fraction">
							<span class="fup">5</span>
							<span class="bar">/</span>
							<span class="fdn">24</span>
							</div>
			  		</label>
				</div>
				<!-- -->
				<h4>24.- Identifique el resultado de la siguiente operación [<div class="fraction">
																		    <span class="fup">3+(6)(3)</span>
																			<span class="bar">/</span>
																			<span class="fdn">3</span>
																			</div>]+ 2(2-5)<sup>2</sup>?</h4>
				<div class="24pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) -25
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) -27
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 25
			  		</label>
				</div>
				<!-- -->
				<h4>25.- En la panadería San José hay tres panaderos, cada uno produce determinada cantidad de
						conchas. El primero produce 100 en media hora, el segundo 100 por hora y el tercero 150
						por hora. ¿Cuántas conchas producirán entre los tres en cuatro horas?</h4>
				<div class="25pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 900
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 1800
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 2250
			  		</label>
				</div>
				<!-- -->
				<h4>26.- ¿Cuál de los siguientes números se encuentra entre los valores -<div class="fraction">
																					    <span class="fup">1</span>
																						<span class="bar">/</span>
																						<span class="fdn">3</span>
																						</div> y 1.5?</h4>
				<div class="26pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) -0.34
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) <div class="fraction">
							<span class="fup">5</span>
							<span class="bar">/</span>
							<span class="fdn">4</span>
							</div>
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) <div class="fraction">
							<span class="fup">7</span>
							<span class="bar">/</span>
							<span class="fdn">4</span>
							</div>
			  		</label>
				</div>
				<!-- -->
				<h4>27.- En una tienda departamental, una computadora tenía marcado el precio de $10,000. Al momento de pagar, le informaron al cliente que la computadora estaba en oferta y su precio era de $8500. ¿Cuál es el descuento que recibió el cliente en el precio de la computadora?</h4>
				<div class="27pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 17 %
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 15 %
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 8.5 %
			  		</label>
				</div>
				<!-- -->
				<h4>28.- ¿Cuál es el resultado que se obtiene de la operación <div class="fraction">
																			  <span class="fup">7</span>
																       	   	  <span class="bar">/</span>
																	    	  <span class="fdn">2</span>
																			  </div> &#247; 
																			  <div class="fraction">
																			  <span class="fup">11</span>
																       	   	  <span class="bar">/</span>
																	    	  <span class="fdn">4</span>
																			  </div>?</h4>
				<div class="28pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) <div class="fraction">
						   <span class="fup">77</span>
			       	   	   <span class="bar">/</span>
				    	   <span class="fdn">8</span>
				    	   </div>
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) <div class="fraction">
						   <span class="fup">11</span>
			       	   	   <span class="bar">/</span>
				    	   <span class="fdn">14</span>
				    	   </div>
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) <div class="fraction">
						   <span class="fup">14</span>
			       	   	   <span class="bar">/</span>
				    	   <span class="fdn">11</span>
				    	   </div>
			  		</label>
				</div>
				<!-- -->
				<h4>29.- El volumen de un prisma rectangular, cuya base es un cuadrado que mide 2m de lado y tiene una altura de 4m es:</h4>
				<div class="29pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 8
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 10
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 16
			  		</label>
				</div>
				<!-- -->
				<h4>30.- Identifica la expresión algebraica que corresponde al enunciado: “La raíz cuadrada del
producto del cuadrado de a menos b por la raíz cuadrada de a mas b”.</h4>
				<div class="30pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) <div class="eq-c">
							<span class="radical">&radic;</span>
							<span class="radicand">(<i>a</i><sup>2</sup> - b) 
							<span class="radical">&radic;</span> 
							<span class="radicand">a+b</span></span>
							</div>
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) <div class="eq-c">
							<span class="radical">&radic;</span>
							<span class="radicand">(a + b)<sup>2</sup> 
							<span class="radical">&radic;</span> 
							<span class="radicand">a-b</span></span>
							</div>
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) <div class="eq-c">
							<span class="radical">&radic;</span>
							<span class="radicand">(a - b)<sup>2</sup> 
							<span class="radical">&radic;</span> 
							<span class="radicand">a+b</span></span>
							</div>
			  		</label>
				</div>
				<!-- -->
				<h4>33.- Dada la función <i>&#402;(x)= 2x<sup>2</sup> - 3x + 8</i>, el valor de <i>&#402;(-1)-f(1)</i> está determinado por: </h4>
				<div class="31pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 2
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 6
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 16
			  		</label>
				</div>
				<!-- -->
				<h4>32.- La ecuación <i>y= x<sup>2</sup> - 1</i></h4>
				<div class="32pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) recta
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) parábola
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) circunferencia
			  		</label>
				</div>
				<!-- -->
				<h4>33.- El enunciado que representa a la expresión algebraica <div class="fraction">
																			   <span class="fup">x<sup>2</sup></span>
																       	   	   <span class="bar">/</span>
																	    	   <span class="fdn">2</span>
																			   </div> +
																			   <div class="fraction">
																			   <span class="fup">y</span>
																       	   	   <span class="bar">/</span>
																	    	   <span class="fdn">3</span>
																			   </div></h4>
				<div class="33pregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) La mitad de un número al cuadrado más la tercera parte de otro número.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) La mitad de un número más el cubo de otro número.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) El doble de un número más la mitad del triple de otro número.
				</div>
				<!-- -->
				<h4>34.- La ecuación - 4x<sup>2</sup> - 4x - 1 = 0 , está expresada en la forma general de las ecuaciones de segundo grado. ¿Cuáles son los valores de a, b y c respectivamente que corresponden a la fórmula general para resolver una ecuación cuadrática?</h4>
				<div class="34pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) (4, -4, 1)
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) (4, -4, -1)
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) (4, 4, 1)
			  		</label>
				</div>
				<!-- -->
				<h4>35.- La cantidad de dinero que tienen en conjunto Manuel (M) y Érika (E) suma $45. La diferencia de lo que tiene Manuel con el doble de lo que tiene Érika da 21 ¿Cuánto dinero tiene cada Uno?</h4>
				<div class="35pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) M = 35 y E = 10
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) M = 37 y E = 8
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) M = 33 y E = 12
			  		</label>
				</div>
				<!-- -->
				<h4>36.- ¿Cuál es la solución del siguiente sistema de ecuaciones {<div class="fraction">
																			       <span class="fup">x + y = 15</span>
																	    	       <span class="fdown">3x - 2y = 20</span></h4>
				<div class="36pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) x = 10, y = 5
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) x = 7, y = 8
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) x = 5, y = 10
			  		</label>
				</div>
				<!-- -->
				<h4>37.- ¿Cuál de las siguientes rectas es paralela a la recta 3x – 2y = 16?</h4>
				<div class="37pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 6x - 9y = 32
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 6x + 9y = 16
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 3x + 2y = 16
			  		</label>
				</div>
				<!-- -->
				<h4>38.- La circuferencia x<sup>2</sup> + (y + 3)<sup>2</sup> = 16 tiene centro en:</h4>
				<div class="38pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) C(3, 0)
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) C(0, 3)
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) C(0, -3)
			  		</label>
				</div>
				<!-- -->
				<h4>39.- La pendiente de la recta que pasa por los puntos P(4, -1) y Q(-2, 5) es:</h4>
				<div class="39pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) -1
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 1/2
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 1
			  		</label>
				</div>
				<!-- -->
				<h4>40.- Lee cada uno de los siguientes enunciados y determina cuál de ellos es incorrecto:</h4>
				<div class="40pregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Al multiplicar dos cantidades con la misma base, se suman los exponentes de estas cantidades.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) El producto de la diferencia de dos cantidades a y b, por la suma de las mismas cantidades, produce una diferencia de cuadrados.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) La diferencia del cubo de a más b menos el cubo de a menos b da como resultado dos veces el cubo de b.
				</div>
				<!-- -->
				<h4>41.- De las siguientes cantidades, ¿cuál de ellas es una cantidad vectorial?</h4>
				<div class="41pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Tiempo
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Rapidez
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Fuerza
			  		</label>
				</div>
				<!-- -->
				<h4>42.- De las siguientes cantidades, ¿cuál de ellas es una no es una cantidad vectorial?</h4>
				<div class="42pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Aceleración
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Temperatura
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Velocidad
			  		</label>
				</div>
				<!-- -->
				<h4>43.- ¿Cuánto tiempo le tomará a un automóvil con una aceleración constante de 50 <div class="fraction">
																								     <span class="fup">m</span>
																					       	   	     <span class="bar">/</span>
																						    	     <span class="fdn">s<sup>2</sup></span>
																								     </div> recorrer una distancia de 200 metros?</h4>
				<div class="43pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 2 segundos
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 20 segundos
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 4 segundos
			  		</label>
				</div>
				<!-- -->
				<h4>44.- Un bloque de 40 kg es empujado en línea recta sobre un piso horizontal con una fuerza de 80 Newtons. Si la fuerza de fricción actuando sobre el bloque tiene una magnitud de 60 Newtons, ¿cuál es la aceleración del bloque?</h4>
				<div class="4pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 0.25 m/s<sup>2</sup>
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 0.5 m/s<sup>2</sup>
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 1 m/s<sup>2</sup>
			  		</label>
				</div>
				<!-- -->
				<h4>45.- Una piedra de 1 kg se deja caer libremente desde un puente y tarda 3 segundos en llegar al suelo. ¿Cuánto tarda en llegar al suelo otra piedra más grande de 2 kg si se deja caer desde la misma altura?</h4>
				<div class="45pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 1.5 s
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 3 s
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 6 s
			  		</label>
				</div>
				<!-- -->
				<h4>46.- La ley que establece: “La aceleración de un cuerpo incrementará en forma proporcional y directa al incremento de la fuerza que se le aplique” y denotada por F= ma, se conoce como:</h4>
				<div class="46pregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Segunda Ley de Newton
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Primera Ley de Newton
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Primera Ley de Kepler
			  	</div>
				<!-- -->
				<h4>47.- La primera condición de equilibrio para un cuerpo establece que:</h4>
				<div class="47pregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) La suma de las componentes horizontales de las fuerzas que actúan sobre el cuerpo debe ser igual a cero.
						<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) La suma de las componentes verticales de las fuerzas que actúan sobre el cuerpo debe ser igual a cero.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) La suma de todas las fuerzas que actúan sobre el cuerpo debe ser igual a cero.
			  	</div>
				<!-- -->
				<h4>48.- La fuerza de atracción entre dos cargas eléctricas puntuales varía inversamente proporcional al cuadrado de su distancia. Si dicha fuerza es de 1000 N cuando se encuentran separadas 1 metro. ¿Cuál es el valor de la fuerza cuando las mismas cargas se separan 2 metros?</h4>
				<div class="48pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 250 N
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 500 N
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 4000 N 
			  		</label>
			  	</div>
				<!-- -->
				<h4>49.- La ley de Ohm establece que:</h4>
				<div class="49pregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Intensidad eléctrica es igual a voltaje sobre resistencia.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Fuerza es igual a masa por aceleración.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) La suma de todas las corrientes que llegan a un punto debe ser igual a la suma de todas las corrientes que salen de dicho punto.
			  	</div>
				<!-- -->
				<h4>50.- Es la cantidad de carga que pasa a través de un conductor en cualquier posición durante un intervalo de tiempo.</h4>
				<div class="50pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Resistencia eléctrica
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Corriente eléctrica
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Campo eléctrico
			  		</label>
			  	</div>
				<!-- -->
				<h4>51.- Tres resistencias de 2, 4, y 6 se conectan en serie a una pila de 9 volt. ¿Qué corriente circula or el circuito?</h4>
				<div class="51pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 0.75 ampers
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 1.5 ampers
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 3 ampers
			  		</label>
			  	</div>
				<!-- -->
				<h4>52.- Cuando un sistema está sujeto a un proceso isobárico, significa que:</h4>
				<div class="52pregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) La entropia del sistema permanece constante.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) La presión del sistema permanece constante.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) La energía interna del sistema permanece constante.
			  	</div>
				<!-- -->
				<h4>53.- La ley que establece: “La energía no se pierde, solamente se transforma” se conoce como:</h4>
				<div class="53pregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Segunda ley de la termodinámica.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Ley de Joule
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Primera ley de la termodinámica.
			  	</div>
				<!-- -->
				<h4>54.- El calor de fusión del agua es 334 kJ/kg. ¿cuánta energía térmica se requiere para derretir
completamente 100 g de hielo?</h4>
				<div class="54pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) 33400 kJ
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) 3.34 kJ 
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) 33.4 kJ
			  		</label>
			  	</div>
				<!-- -->
				<h4>55.- De las siguientes afirmaciones, selecciona la afirmación falsa relacionada con la transmisión
de calor por convección:</h4>
				<div class="55pregunta">

				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) No requiere de un desplazamiento significativo de las moléculas.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) No puede ser un mecanismo de transferencia de calor efectivo en los sólidos.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Es el único mecanismo de transferencia de calor en una región del vacío.
			  	</div>
				<!-- -->
				<h4>56.- coloca en Si una mezcla de agua y de finísimas gotas de aceite (una emulsión de aceite en agua) se una centrífuga y se pone a girar a alta velocidad angular, entonces:</h4>
				<div class="56pregunta">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) El aceite se moverá rápidamente hacia adentro.
				  	<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) El aceite se moverá rápidamente hacia la periferia.
			  			<br>
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) El aceite se moverá hacia la periferia, pero más lentamente de lo que lo haría sin
centrifugar.
			  	</div>
				<!-- -->
				<h4>57.- Relaciona el aparente cambio de frecuencia de onda producido por el movimiento relativo
entre la fuente, el emisor y/o el medio.</h4>
				<div class="57pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Efecto Hall
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Efecto Doppler
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Efecto Compton
			  		</label>
			  	</div>
				<!-- -->
				<h4>58.- De las siguientes, selecciona la afirmación verdadera relacionada con la lente Bicóncava:</h4>
				<div class="58pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) No puede formar imágenes reales
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) No puede formar imágenes virtuales
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Ninguna de las anteriores
			  		</label>
			  	</div>
				<!-- -->
				<h4>59.- Si un objeto real se coloca exactamente dentro del foco de una lente convergente, la imagen
que produce es:</h4>
				<div class="59pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Virtual, derecha y reducida.
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Virtual, derecha y aumentada.
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Virtual, invertida y reducida.
			  		</label>
			  	</div>
				<!-- -->
				<h4>60.- De los siguientes tipos de ondas, la que viaja a mayor velocidad en el vacío es:</h4>
				<div class="60pregunta">
					<label class="radio-inline">
				    <input type="radio" name="optionsRadios" id="optionsRadios1" value=“option1” required>
				    	a) Rayos X
				  	</label>
				  	<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option2” required>
			  			b) Luz ultravioleta
			  			</label>
			  			<label class="radio-inline">
			  		<input type="radio" name="optionsRadios" id="optionsRadios2" value=“option3” required>
			  			c) Ninguna de ellas
			  		</label>
			  	</div>	
				<!-- Cierre de ultima pregunta-->
				</div>
				<!--cierre de preguntas  
				<button type="submit" class="btn btn-primary">Submit</button> 
				-->
								<br>
				<div class="form-group">
					<center><a href="Encuesta_Estilos_Aprendizaje.php"><button type="button" class="btn btn-success" id="btnIniciar">Siguiente exámen.</button></a></center>
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