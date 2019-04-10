<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />

    <meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>

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
	<!-- Examen Estilos -->
	<link rel="stylesheet" href="css/examen.css">
</head>

	<header>
		<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
			<h1> Administrador <h1>
		</div>
	</header>

    <body>
    <form data-toggle="validator" role="form"> 
    <div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading">
        <div class="sesion">
        <input id="usuario" type="text" placeholder="Usuario" required><br><br>
        <input id="pass" type="password" placeholder="Contraseña" required><br><br>
        <button id="ingresar" class="btn-success">INGRESAR</button>
        </div>
</div>
</div>
</form>
        <footer id="qbootstrap-footer" role="contentinfo">
		
		
		<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
                    <small class="block">&copy; 2019</small> 
                    <small class="block"></small>
                </p>
			</div>
		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
    </body>

    <!--<script>
    function login(){
        var usuario= document.getElementById("Usuario").value;
        var pass= document.getElementById("Contraseña").value;
        console.log(usuario);
        $.ajax({
        type: "POST",
        success : function(){
                window.location.href = "validauser.php?user="+usuario+"&password="+pass;
        	}
        });
        
    }
    </script>-->
<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
<script  type="text/javascript" src="js/conecta.js"></script>
</html>