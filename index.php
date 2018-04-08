<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>

	<div class="linea">
		<p class="puntos">SEGUROS</p>
		<p class="puntos">AUTOS</p>
		<p class="puntos">VIDA</p>
		<p class="puntos">MEDICO</p>
		<p class="puntos">HOGAR</p>
		<p class="puntos">PENSION</p>
		<p class="puntos">ACCIDENTES</p>
	</div>

	<header>
		<figure class="logo pull-left">
			<img src="img/gumer.png" alt="GUMER" class="img-responsive">
		</figure>
		<div class="menu pull-right">
			<nav>
				<ul>
					<a class="selector" id="select" href="index.php">INICIO</a>
					<a class="selector" href="vistas/nosotros.php">NOSOTROS</a>
					<a class="selector" href="vistas/servicios.php">SERVICIOS</a>
					<a class="selector" href="vistas/contacto.php">CONTACTO</a>
				</ul>
			</nav>
       <div class="openclose">
          <i class="fa fa-bars open" aria-hidden="true"></i>
        </div>			
		</div>
	</header>

<div class="banner">
	<div class="fondo">
		<p>PUEDES VIVIR TRANQUILAMENTE, COMO SIEMPRE HAS QUERIDO</p>
		<div class="boton">
           <a href="vistas/contacto.php" class="btn btn-outlined btn-theme btn-lg" data-wow-delay="0.7s">CONTACTANOS</a>
        </div>
	</div>
</div>

<div class="section" style="padding: 5% 0%; background: #62C1C3;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          	<p class="texto">Promotoría de Ventas autorizada de Seguros y Fianzas, nos avala una experiencia amplia en el sector asegurador. Nuestro objetivo principal es la selección, contratación y capacitación de nuevos Asesores de Seguros para consolidar una cartera de clientes en los diferentes ramos Seguros. <br><br>

          	Nuestros Seguros de Vida están orientados a proteger la economía familiar  y a garantizar su bienestar a lo largo de los años. Nuestros Seguros han sido diseñados pensando en salvaguardar tu futuro y el de tus seres queridos a través de productos que te ayudarán a ahorrar, a afrontar alguna muerte inesperada, a poder costear la educación de tus hijos, a luchar contra una enfermedad, a disfrutar de tu retiro, etc. </p>

          	<div class="boton oculta">
           <a href="vistas/contacto.php" class="btn btn-outlined btn-theme btn-lg" data-wow-delay="0.7s">HAS UNA CITA CON UN ASESOR</a>
        </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" style="padding: 5% 0%;">
      <div class="container">
        <div class="row">
          	<div class="figura">
          		<figure class="imagen"></figure>
          	</div>
          	<div class="formulario" >
          		<div class="contenform">
          			<h4 class="tit-qaes" style="color: #fff;">Queremos ayudarte a encontrar tu seguro personalizado.</h4>
          			<div class="col-md-12 formu" style="margin-top: 3%;">
    					<form action="form.php" class="contact-form" method="post">
					        <div class="form-group">
					          <input type="text" class="form-control" id="name" name="nm" placeholder="Nombre Completo" required="" >
					        </div>
					        <div class="form-group form_left">
					          <input type="email" class="form-control" id="email" name="em" placeholder="Correo" required="">
					        </div>
					      	<div class="form-group">
					           <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Teléfono" required="">
					      	</div>
					        <div class="form-group cont-btnsend">
					        <textarea class="form-control textarea-contact" rows="2" id="comment" name="FB" placeholder="Escribe lo de necesites" required=""></textarea>
					        <br>
				      	    <button class="btn2 btn-default btn-send"> <span class="far fa-share-square"></span> Enviar </button>
					        </div>
     					</form>
    				</div>
          		</div>
          	</div>
        </div>
      </div>
    </div>


<!-- <div class="container-fluid padding-50">
	<div class="row">
    	<div class="col-lg-12">
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-6 col-lg-offset-3">
                    	
                        <p>
                            <a href="#" class="btn btn-outlined btn-theme btn-lg" data-wow-delay="0.7s">Purchase Now</a>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<?php include 'vistas/pie.php' ?>

<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/arriba.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>