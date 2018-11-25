<!DOCTYPE html>
<html lang="es">
	<head> 
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Empresas NVO</title>
		<link rel="shortcut icon" href="imagenes/favicon-32x32.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="Style.css">
		<script src="jquery331.js"></script>
		<script src="minewScript.js"></script>
		<script>
			
			$(document).ready(Principal);
     
     		function Principal(){
       			$("#CAT").change(Traer);

       		function Traer(){
       			$(document).ajaxStart(function(){
       				$("#wait").css("display", "block");
    			});
    			$(document).ajaxComplete(function(){
			        $("#wait").css("display", "none");
    			});
   				$.ajax({
   				type: 'POST',
        		url:"traeJuegos.php?Categoria="+this.value,
        		success: function(datos){
                    $("#ficha").html(datos);
               	},
               	error: function(){
               		alert("No se ha logrado establecer una conexión con el servidor, por favor, reintente.");
               	}
         		});
   			}
     		}
		</script>
		
	</head>
	<body id="cuerpo">
		<!-- .......................BARRA  BANNER..................... -->
		<header class="h-p-bar1">
					<img src="imagenes/nvo.png" alt="logo" id="img-logo1">
					<div id="welcome">BIENVENIDO A EMPRESAS NVO - TEMUCO</div>
		</header>
		<!-- .....................FIN  BARRA  BANNER.................. -->

		<!-- .....................BARRA  NAVEGACION................... -->
		<nav class="h-p-bar2">
			<div id="menu" style="text-align: center; font-size: 10pt; width: 820px; margin: 0px;">
				<ul>
  					<li class="nivel1">
  						<a href="#" class="nivel1">INICIO</a>
 	 				</li>

					<li class="nivel1"><a href="#" class="nivel1">EMPRESA</a>
						<ul>
							<li><a href="#">NOSOTROS</a></li>
							<li><a href="#">CONTACTO</a></li>
						</ul>
					</li>

  					<li class="nivel1"><a href="#" class="nivel1">JUEGOS INFANTILES</a>
						<ul>
							<li><a href="#">METALICOS</a></li>
							<li><a href="#">MADERA</a></li>
							<li><a href="#">MULTIPLES</a></li>
						</ul>
					</li>

  					<li class="nivel1"><a href="#" class="nivel1">CONSTRUCCIÓN</a>
						<ul>
							<li><a href="#">VENTA MATERIAL</a></li>
							<li><a href="#">ARRIENDO EQUIPOS</a></li>
						</ul>
					</li>

					<li class="nivel1"><a href="#" class="nivel1">OTROS</a>
						<ul>
							<li><a href="#">ACCESORIOS JUEGOS</a></li>
							<li><a href="#">ELEMENTOS DEPORTIVOS</a></li>
						</ul>
					</li>
				</ul>
			</div>
			
		</nav>
		<!-- .................FIN  BARRA  NAVEGACION.................. -->
		
		<br>

		<h1>Bienvenido</h1>

		
		<br>
		<?php

        header('Content-Type: text/html; charset=UTF-8');
        //Conectarse
        include("conex.inc");

        $Server   = "db.inf.uct.cl";
        $User     = "allanquiman";
        $Password = "allanquiman7101";
        $BBDD     = "allanquiman";
        $db = mysqli_connect($Server,$User,$Password,$BBDD);

   
        $sql = "SELECT Categoria FROM catalogo GROUP BY Categoria";
        ?>

        <br>

        <p style="text-align: center;"><select name="CAT" id="CAT">
        	<option>--Seleccione una opción--</option>
        <?php
        $respuesta = mysqli_query($db, $sql);
        while($fila=mysqli_fetch_object($respuesta)) {
              echo"<option value='$fila->Categoria'>$fila->Categoria</option>\n";
        }
        ?>
        </select></p>

   <br>

   <div id="wait" style="text-align: center; display:none;"><img src='imagenes/carga.gif' width="110" height="64"></div>

   <div id="ficha" style="width:1200px; height:200px; padding: 20px; position:relative; margin: auto;">
   </div>
		<br>

		<!-- .........................PARRAFOS.......................... -->
		<p>
			Empresas NVO surte de juegos infantiles a municipalidades y colegios del sur de Chile.<br>
			Además agregamos a nuestros productos elementos de mobiliario urbano, para deporte, construcción, estructuras metálicas y materiales de construcción.
		</p>
		<p>
			Todo esto con el fin de complementar nuestros servicios con el directo beneficio de nuestros clientes.<br>

			Fabricamos elementos de acuerdo a sus necesidades incluyendo sus pequeños y grandes proyectos. No dude en contactarnos y nosotros le daremos la mejor solución del mercado.
		</p>		

		<!-- .....................FIN  PARRAFOS......................... -->
		
		<br>

		<!-- ................INTERACION  CON  IMAGENES.................. -->

		<div style="text-align: center;" id="inst">... CLICK SOBRE IMAGEN PARA AUMENTAR TAMAÑO ...<br>(Click Sobre Mi Para Ocultar)</div>
		
		<div style="text-align: center;"><button id="limpiador">Cerrar Aumento de Imagen</button></div>

		<br>

		<div id="divimg">
			<button id="btnA"><img id="im1" alt="juegoMetal" src="imagenes/juego.png" width="150" height="150"></button>
			<button id="btnB"><img id="im2" alt="juegoMadera" src="imagenes/juego2.png" width="150" height="150"></button>
			<button id="btnC"><img id="im3" alt="juegoMultiple" src="imagenes/juego3.png" width="150" height="150"></button>
			<button id="btnD"><img id="im4" alt="mobiliarioUrbano" src="imagenes/juego4.png" width="150" height="150"></button>
		</div>

		<br>
		
		<div id="divimg1" style="text-align: center;">...</div><br><br>
		<!-- ...............FIN  INTERACION  CON  IMAGENES................. -->		

		<br>

		<footer id="pie">Fono: +56 - 45 - 2748395 - 2246210 - B. O’Higgins # 0794 - Temuco - IX Region - Chile</footer>
	</body>
</html>