<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Datos Personales y de Contacto
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

<body class="profile-page sidebar-collapse">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
          Control de registro </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Components
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i> Datos Personales y de contacto
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.1/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Datos del Vehiculo
              </a>
            </div>
          </li>
           <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Nombre de usuario
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i> Cerrar session
              </a>
              
            </div>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/city-profile.jpg');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        
        <div class="description">
          <div class="col-lg-12 col-md-12">
              <form id="form_registro" class="form-horizontal" method="post" action="personales.php">
                
                
                <div class="card-body">
                    
                    <div class="form-group">  
                    <label>Ciudad</label>
                
                        <input id="ciudad" class="form-control" name="ciudad">

                    </div>                   
                                

                    <div class="form-group">
                    <label>Nombres</label>
                      <input type="text" class="form-control" placeholder="INGRESE SU NOMBRE" name="nombres" title="INGRESE SU NOMBRE">
                    </div>

                    <div class="form-group">
                    <label>Apellidos</label>
                      <input type="text" class="form-control" placeholder="INGRESE SU APELLIDO" name="apellidos" title="INGRESE SU APELLIDO">
                    </div>

                    <div class="form-group">
                    <label>Tipo de identificacion</label>
                      <input type="text" class="form-control" placeholder="INGRESE SU TIPO DE IDENTIFICACION" name="identificacion" title="TIPO DE IDENTIFICACION">
                    </div>

                    <div class="form-group">
                    <label>Nro de identificacion</label>
                      <input type="text" class="form-control" placeholder="NUMERO DE IDENTIFICACION" name="identificacion" title="NUMERO DE IDENTIFICACION">
                    </div>

                  <div class="form-group">  
                    <label>Nro movil</label>
                      <input type="text" class="form-control" placeholder="MOVIL" name="movil" title="NUMERO DE MOVIL">
                    </div>

                    
                </div>
                
              </form>
            
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->

  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6/js/select2.min.js"></script>
<script src=https://code.jquery.com/ui/1.12.0/jquery-ui.js></script>

</body>
  <script type="text/javascript">

    $(document).ready(function() {
           
       $( "#ciudad" ).autocomplete({
       autoFocus: true,

    
          source: function( request, response ) {
            console.log(request.term);
              $.ajax({
                  url : "ciudad.php",
                  dataType: "json",
                  data: {
                     busqueda: request.term,
                  },
                   success: function( data ) {
                    console.log(data);
                       response( $.map( data, function( item ) {
                        
                          var code = item.name;
                          return {
                              label: code,
                              value: code,
                              data : item
                          }
                      }));
                  }
              });
          },
          select: function( event, ui ) {
              console.log(ui.item.data.id);
          },
          change: function( event, ui ) {
            //console.log(ui.item.data.id);              
          },
          minLength: 1,
          delay: 10,

    });
    });
  </script>
</html>