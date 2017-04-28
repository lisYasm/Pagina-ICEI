
</head>
<body class="todo">
<!--PARA EL MENU PRINCIPAL-->
<div class="menuSlider"> 
	<div class="filaSlider">
    	<div class="logoSlider">
       	<!-- <img src="imagenes/logo_icei.png" class="logoImg2">-->
        <!-- <font class="tituloIcei"> ICEI <img src="imagenes/aros.png" class="logoImg"></font> -->
       	<a href="index.php"><img src="imagenes/logos/logo_iceiBlanco.png" class="logoImg2"></a>
		</div>             		
        <div class="menuSlider1">   <!--hijo de MENU-->
        	<nav >              <!--contenedor de opciones-->
            	<ul class="menuSliderN"> 
                   <li><a href="iniciosesion.php#iniciarSesion" class="enlaceM">INICIAR SESI&Oacute;N</a></li>
                   <li><a href="suscribete.php#suscribete" class="enlaceM">RESERVAS</a></li>
                   <li><a href="seminarios.php#seminarios" class="enlaceM">SEMINARIOS</a></li>
                   <li><a href="talleres.php#talleres" class="enlaceM">TALLERES</a></li>
                   <li><a href="cursos.php#cursos" class="enlaceM">CURSOS</a></li>    
				</ul>    
         	</nav>            
        </div>
	</div>
</div>
<!-- PARA EL SLIDER -->
<header id="myCarousel" class="carousel slide">
	 	<!-- INDICADORES -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>
			<li data-target="#myCarousel" data-slide-to="8"></li>
		</ol>

	 <!-- SLIDES -->
	 <div class="carousel-inner">
		<div class="item active">
			<!-- PARA EL PRIMER SLIDE-->
			<div class="fill">
				<video src="imagenes/slider/22.mp4" autoplay loop muted preload="auto" width="100%">
					Video no soportado :(
				</video>
			</div>
			<div class="conveniosLetra">
				<h4>Convenios con:</h4>
			</div>
			<div class="convenios">        	
				<img class= "imagenSliderVideo" src="imagenes/slider/emi.png" width="20%">
				<img class= "imagenSliderVideo" src="imagenes/slider/industrial.png" width="10%">
				<img class= "imagenSliderVideo" src="imagenes/slider/salesiana.png" width="20%">
			</div>
		</div>
		<div class="item">
			<!--  PARA EL SEGUNDO SLIDE -->
			<div class="fill" style="background-image:url(imagenes/slider/1.jpg);"></div>  
			<div class="info">
				<h1>CARRERA: ARDUINO</h1>
				<h3><br/>MODULO I - ARDUINO BASICO <br/><br/>INICIA EL: 04/08/2017 <br/>HORARIO: 15:00-17:00<br/><br/></h3>
				El curso inicia en:
				<div class="contador">
					<script src="js/countdown.js" type="text/javascript"></script>
					<script type="application/javascript">
						var myCountdown1 = new Countdown({
							time: 86400 * 3, // 86400 segundos = 1 dia
							width:300, 
							height:60,  
							rangeHi:"day",
							style:"flip"    
						});
					</script> 
				</div>
			</div>
		</div>
		<div class="item">
			<!-- PARA EL TERCER SLIDE -->
			<div class="fill" style="background-image:url(imagenes/slider/2.jpg);"></div>
			<div class="info">
				<h1>CARRERA: REDES</h1>
				<h3><br/>MODULO I - ESTUDIO Y DISEÑO DE REDES<br/><br/>INICIA EL: 04/08/2017<br/>HORARIO: 15:00-17:00<br/><br/></h3>
				El curso inicia en:
				<div class="contador">
					<script src="js/countdown.js" type="text/javascript"></script>
					<script type="application/javascript">
						var myCountdown1 = new Countdown({
							time: 86400 * 3, // 86400 segundos = 1 dia
							width:300, 
							height:60,  
							rangeHi:"day",
							style:"flip"    
						});
					</script> 
				</div>        
			</div>      
		</div>
		<div class="item">
			<!-- PARA EL CUARTO SLIDE -->
			<div class="fill" style="background-image:url(imagenes/slider/3.jpg);"></div>
			<div class="info">
				<h1>CARRERA: LINUX</h1>
				<h3><br/>MODULO I - INTRODUCCION A LOS SISTEMAS OPEN SOURCE<br/><br/>INICIA EL: 04/08/2017<br/>HORARIO: 19:00-21:00<br/><br/></h3>
				El curso inicia en:
				<div class="contador">
					<script src="js/countdown.js" type="text/javascript"></script>
					<script type="application/javascript">
						var myCountdown1 = new Countdown({
							time: 86400 * 1, // 86400 segundos = 1 dia
							width:300, 
							height:60,  
							rangeHi:"day",
							style:"flip"    
						});
					</script> 
				</div>        
			</div>      
		</div>
		<div class="item">
			<!-- PARA EL QUINTO SLIDE -->
			<div class="fill" style="background-image:url(imagenes/slider/4.png);"></div>
			<div class="info">
				<h1>CARRERA: ETHICAL HACKING</h1>
				<h3><br/>MODULO I - ETHICAL HACKING FASES DE UN ATAQUE<br/><br/>INICIA EL: 04/08/2017<br/>HORARIO: 19:00-21:00<br/><br/></h3>
				El curso inicia en:
				<div class="contador">
					<script src="js/countdown.js" type="text/javascript"></script>
					<script type="application/javascript">
						var myCountdown1 = new Countdown({
							time: 8623, // 86400 segundos = 1 dia
							width:300, 
							height:60,  
							rangeHi:"day",
							style:"flip"    
						});
					</script> 
				</div>        
			</div>      
		</div>  
		<div class="item">
			<!-- PARA EL SEXTO SLIDE -->
			<div class="fill" style="background-image:url(imagenes/slider/5.jpg);"></div>
			<div class="info">
				<h1>CARRERA: TECNOLOGIA WEB</h1>
				<h3><br/>MODULO I - DISEÑO DE INTERFACES WEB<br/><br/>INICIA EL: 04/08/2017<br/>HORARIO: 15:00-17:00<br/><br/></h3>
				El curso inicia en:
				<div class="contador">
					<script src="js/countdown.js" type="text/javascript"></script>
					<script type="application/javascript">
						var myCountdown1 = new Countdown({
							time: 86400 * 9, // 86400 segundos = 1 dia
							width:300, 
							height:60,  
							rangeHi:"day",
							style:"flip"    
						});
					</script> 
				</div>        
			</div>      
		</div> 

		<div class="item">
			<!-- PARA EL SEPTIMO SLIDE -->
			<div class="fill" style="background-image:url(imagenes/slider/8.jpg);"></div>
			<div class="info">
				<h1>CARRERA: TECNOLOGIA JAVA</h1>
				<h3><br/>MODULO I - FUNDAMENTOS DE PROGRAMACION EN JAVA<br/><br/>INICIA EL: 04/08/2017<br/>HORARIO: 08:30-12:30<br/><br/></h3>
				El curso inicia en:
				<div class="contador">
					<script src="js/countdown.js" type="text/javascript"></script>
					<script type="application/javascript">
						var myCountdown1 = new Countdown({
							time: 864, // 86400 segundos = 1 dia
							width:300, 
							height:60,  
							rangeHi:"day",
							style:"flip"    
						});
					</script> 
				</div>        
			</div>      
		</div> 
		<div class="item">
			<!-- PARA EL OCTAVO SLIDE -->
			<div class="fill" style="background-image:url(imagenes/slider/6.png);"></div>
			<div class="info">
				<h1>CARRERA: ORACLE</h1>
				<h3><br/>MODULO I - SQL PROGRAMMING 11g<br/><br/>INICIA EL: 04/08/2017<br/>HORARIO: 08:00-10:00<br/><br/></h3>
				El curso inicia en:
				<div class="contador">
					<script src="js/countdown.js" type="text/javascript"></script>
					<script type="application/javascript">
						var myCountdown1 = new Countdown({
							time: 86400 * 3, // 86400 segundos = 1 dia
							width:300, 
							height:60,  
							rangeHi:"day",
							style:"flip"    
						});
					</script> 
				</div>        
			</div>      
		</div> 
		<div class="item">
			<!-- PARA EL OCTAVO SLIDE -->
			<div class="fill" style="background-image:url(imagenes/slider/7.png);"></div>
			<div class="info">
				<h1>CARRERA: VISUAL STUDIO</h1>
				<h3><br/>MODULO I - SQL PROGRAMMING 11g<br/><br/>INICIA EL: 04/08/2017<br/>HORARIO: 08:00-10:00<br/><br/></h3>
				El curso inicia en:
				<div class="contador">
					<script src="js/countdown.js" type="text/javascript"></script>
					<script type="application/javascript">
						var myCountdown1 = new Countdown({
							time: 86400 * 3, // 86400 segundos = 1 dia
							width:300, 
							height:60,  
							rangeHi:"day",
							style:"flip"    
						});
					</script> 
				</div>        
			</div>      
		</div> 
	</div>
		<!-- Controles -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		   <span id="flechaizq" class="icon-prev"></span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		   <span id="flechader" class="icon-next"></span>
		</a>
</header>
