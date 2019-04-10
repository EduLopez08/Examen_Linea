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
	<!-- Examen Estilos 
	<link rel="stylesheet" href="css/examen.css">-->
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

    <script>
$(document).ready( function () {
	var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
	
	$("#ingresar").on('click', function(event) {
		event.preventDefault();
		//alert("Ingresa a Java Script");
		hacerOperaciones();
	});	

	
	function hacerOperaciones(){
		var user_i = $("#usuario").val();
		//var user_e=Base64.encode(user_i);
		//alert(user_e);
		var password_i = $("#pass").val();
		//var password_e=Base64.encode(password_i);
		//alert(password_e);
		$.ajax({
        type: "POST",
        success : function(){
                window.location.href = "validauser.php?user_e="+user_i+"&password_e="+password_i;
        	}
    	});
	};
});	
    </script>
<script  type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
<script  type="text/javascript" src="js/conecta.js"></script>
</html>