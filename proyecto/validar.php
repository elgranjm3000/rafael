<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Registro de afiliados
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
         Registro de afiliados </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="servicios.php">
              <i class="material-icons">grade</i> Quiero un servicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">https</i> Ingresar (soy afiliado)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.php">
              <i class="material-icons">supervisor_account</i> Quiero afiliarme
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sugerencias.php">
              <i class="material-icons">notes</i> Quejas y sugerencias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="car.php">
              <i class="material-icons">comment</i> Que es ¿Car Trip?
            </a>
          </li>
          <!-- <li class="dropdown nav-item">

            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Components
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">cloud_download</i> Download
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>-->
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/profile_city.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Registrate aqui.</h1>
          
          
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
     
      <div class="section section-signup page-header section-download" style="background-image: url('../assets/img/city.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form id="form_registro" class="form" method="post" action="form_registro.php">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Registrarse</h4>
                  
                </div>
                
                <div class="card-body">
                 
                  
                  <span class="bmd-form-group"><div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input  type="password" name="codigo" class="form-control" placeholder="Ingrese el codigo enviado a su correo"  minlength="4" maxlength="4">
                  </div></span>
                </div>
                <div class="footer">
                  <div class="text-center">
                      <button type="submit"  class="btn btn-danger btn-lg continuar" >Aceptar</button>
                  </div>
                  <p style="margin-left:20px">Al crear una cuenta, acepto los <a href="#">Terminos de la pagina web</a>, la <a href="#">politica de privacidad</a> y los de <a hre="#">Car Trip</a></p>
                  <hr>
                  <p style="margin-left:20px">¿Ya tienes una cuenta? <a href="">Iniciar sesión</a></p>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

</body>
<script type="text/javascript">

    
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    

    $(function() {
    //hang on event of form with id=myform
    $("#form_registro").submit(function(e) {
        e.preventDefault();
        var actionurl = e.currentTarget.action;
        console.log(actionurl);
         $( ".continuar" ).prop( "disabled", true);
        //do your own request an handle the results
        $.ajax({
                url: actionurl,
                type: 'post',
                dataType: "json",
                data: $("#form_registro").serialize(),
                success: function(data) {
                	let obj = data;
                	console.log(obj);

                      console.log(data);
                      if(obj.error == true){
                        Swal.fire(
                          'Registro',
                          'Registrado con exito.',
                          'success'
                        )
                      }else if (obj.error == false){
                        Swal.fire({
                          type: 'error',
                          title: 'Oops...',
                          text: 'Este registro ya existe',
                        })
                      }else{
                      	 Swal.fire({
                          type: 'error',
                          title: 'Oops...',
                          text: 'El codigo ingresado no es correcto',
                        })
                      }
                      $( ".continuar" ).prop( "disabled", false );
                }
        }); 

    });

});

  </script>
</html>