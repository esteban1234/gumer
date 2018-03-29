<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

	<header>
  <article class="encabezado">
    <article class="encabezadouno">
      <div class="dentro">
        <li>Contsrución</li>
        <li>Arquitectura</li>
        <li>Diseño</li>
        <li>Remodelación</li>
        <li>Planos</li>
        <li>Ingenieria</li>
      </div>
    </article>
  
    
  </article>
  
  <figure class="logo2">
    <img src="../img/adzhair.png" alt="ADZHAIR" class="img-responsive">
  </figure>

  <div class="op-menu">
    <i class="fa fa-bars fa-1x i-menu" aria-hidden="true"></i>
  </div>
  
  <div class="menu menu-pages">
    <ul>
      <a class="selector" href="../index.php">INICIO</a>
      <a class="selector" href="nosotros.php">NOSOTROS</a>
      <a class="selector" href="servicios.php">SERVICIOS</a>
      <a class="selector" id="select" href="contacto.php">CONTACTO</a>
    </ul>
  </div>

  <div class="banner2">
    <div class="fondo">
      <p>Expertos en Construciones</p>
    </div>
  </div>
</header>

<section id="contact">
			<div class="section-content">
				<h1 class="section-header">Contáctanos</h1>
				<h3 class="subtit">Gracias por ser su primera opción. Muy pronto estaremos respondiendo su correo. Escribanos cualquier comentario por este medio.</h3>
			</div>
			<div class="contact-section">
			<div class="container">
				<form>
					<div class="col-xs-12- col-sm-12 col-md-6 form-line div-cont">
			  			<div class="form-group">
			  				<label for="exampleInputUsername">Nombre</label>
					    	<input type="text" class="form-control" id="txtNOMBRE" placeholder=" Escribe tu nombre completo">
				  		</div>
				  		<div class="form-group">
					    	<label for="exampleInputEmail">Correo</label>
					    	<input type="email" class="form-control" id="txtCORREO" placeholder=" Escribe tu correo electrónico">
					  	</div>	
					  	<div class="form-group">
					    	<label for="telephone">Teléfono</label>
					    	<input type="tel" class="form-control" id="txtTELEFONO" placeholder=" Escribe tu número teléfonico">
			  			</div>
			  		</div>
			  		<div class="col-xs-12- col-sm-12 col-md-6 div-cont">
			  			<div class="form-group">
			  				<label for ="description"> Comentario</label>
			  			 	<textarea  class="form-control" id="txtCOMENTARIO" placeholder="Escribe tu comentario"></textarea>
			  			</div>
			  			<div>
              <div id="_AJAX_PRE_"></div><br>

			  				<button type="button" class="btn btn-default submit" onclick="sendCORREO()"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Enviar Mensaje</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
		</section>
	<div class="section cont-info" style="padding: 5% 0%;">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-3 col-md-offset-2">
            <div class="iconos">
            	<i class=" fas fa-clock fa-4x"></i>
            </div>
            <h2 class="text-center">Horario</h2>
            <p class="text-center">Lunes a Viernes de 9 am a 6 pm</p>
          </div>
          <div class="col-sm-4 col-md-3">
            <div class="iconos">
            	<i class="fas fa-phone-volume fa-4x"></i>
            </div>
            <h2 class="text-center">Teléfono</h2>
            <p class="text-center">PENDIENTE</p>
          </div>
          <div class="col-sm-4 col-md-3">
            <div class="iconos">
            	<i class="far fa-envelope fa-4x"></i>
            </div>
            <h2 class="text-center">Correo</h2>
            <p class="text-center">info@adzhair.com</p>
          </div>
        </div>
      </div>
    </div>

  
<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<!-- <script src="../js/funciondthc.js"></script> -->
<script src="../js/menu.js"></script>
</body>
</html>
