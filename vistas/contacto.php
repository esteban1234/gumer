<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
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
      <img src="../img/gumer.png" alt="GUMER" class="img-responsive">
    </figure>
    <div class="menu pull-right">
      <nav>
        <ul>
          <a class="selector" href="../index.php">INICIO</a>
          <a class="selector" href="nosotros.php">NOSOTROS</a>
          <a class="selector" href="servicios.php">SERVICIOS</a>
          <a class="selector" id="select" href="contacto.php">CONTACTO</a>
        </ul>
      </nav>
      <div class="openclose">
          <i class="fa fa-bars open" aria-hidden="true"></i>
        </div>  
      
    </div>
  </header>
  
<!-- <div class="banner2">
  <div class="fondo2">
    <p>ESTAMOS CONTIGO EN LAS BUENAS Y LAS MALAS</p>
    <div class="boton">
           <a href="contacto.php" class="btn btn-outlined btn-theme btn-lg" data-wow-delay="0.7s">CONTACTANOS</a>
        </div>
  </div>
</div> -->

<div class="section" style="padding: 5% 0% 0% 0%;">
      <div class="container">
        <div class="row">
            <div class="figura">
              <figure class="imagen"></figure>
            </div>
            <div class="formulario" >
              <div class="contenform">
                <h4 class="tit-qaes" style="color: #fff;">Queremos ayudarte a encontrar tu seguro personalizado.</h4>
                <div class="col-md-12 formu" style="margin-top: 3%;">
              <form action="form.php" class="contact-form" method="post" onSubmit="return false">
                  <div class="form-group">
                    <input type="text" class="form-control" id="txtNOMBRE" name="nm" placeholder="Nombre Completo" required="" >
                  </div>
                  <div class="form-group form_left">
                    <input type="email" class="form-control" id="txtCORREO" name="em" placeholder="Correo" required="">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" id="txtTELEFONO" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Teléfono" required="">
                  </div>
                  <div class="form-group cont-btnsend">
                  <textarea class="form-control textarea-contact" rows="2" id="txtCOMENTARIO" name="FB" placeholder="Escribe lo de necesites" required=""></textarea><br>
                  <div id="_AJAX_PRE_"></div>
                  <br>
                    <button class="btn2 btn-default btn-send" onclick="sendCORREO()"> <span class="far fa-share-square"></span> Enviar </button>
                  </div>
              </form>
            </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="mapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.4082407950673!2d-93.17992328597843!3d16.7563528884596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd97d61159441%3A0x87b1aa47ca07d7ec!2sCalle+Roc%C3%ADo+359%2C+La+Herradura%2C+29054+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1522706052752" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="container" style="padding:5% 0%;">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fas fa-map-marker-alt fa-4x"></span>
                </div>
                <div class="info">
                    <h4 class="text-center tit-dtch">Dirección</h4>
                    <p class="subtit-d">Av. Rocio #359 Col. La herradura, Tuxtla Gutierrez, Chiapas. C.P 29038</p>
                    <!-- <a href="" class="btn">Link</a> -->
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fas fa-phone fa-4x"></span>
                </div>
                <div class="info">
                    <h4 class="text-center tit-dtch">Teléfono</h4>
                    <p class="subtit-tch">PENDIENTE</p>
                    <!-- <a href="" class="btn">Link</a> -->
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm visible-md"></div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fas fa-envelope fa-4x"></span>
                </div>
                <div class="info">
                    <h4 class="text-center tit-dtch">Correo</h4>
                    <p class="subtit-tch">info@segurosgumer.com</p>
                    <!-- <a href="" class="btn">Link</a> -->
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
            <div class="box">
                <div class="box-icon">
                    <span class="fas fa-clock fa-4x"></span>
                </div>
                <div class="info">
                    <h4 class="text-center tit-dtch">Horario</h4>
                    <p class="subtit-tch">Lunes a Viernes de 9am a 6pm</p>
                    <!-- <a href="" class="btn">Link</a> -->
                </div>
            </div>
        </div>
  </div>
</div>

<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<!-- <script src="../js/funciondthc.js"></script> -->
<script src="../js/menu.js"></script>
</body>
</html>
