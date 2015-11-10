<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prototipo</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="../../complementos/css/blog-post.css">
    <link rel="stylesheet" type="text/css" href="../../complementos/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../complementos/css/bootstrap.min.css">

    <!-- Custom CSS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(-3.99313, -79.20422),
    zoom:10,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <div id="header" class="col-md-12">

                <ul id="uno" class="nav navbar-nav">


                    <li>
                       <img id="logo" src="../../complementos/img/logo.jpeg" width="70" heigth="70">
                    </li>
                    <li>
                        <a  href="#">Editar Perfil</a>
                    </li>
                    <li>
                        <a href="#">Salir</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <hr>


            <!-- Blog Sidebar Widgets Column -->
            <div id="menu"  class="col-md-3">

                <!-- Blog Search Well -->
                <div class="well">

                      <center><a href="index.html"><img src="../../complementos/img/usuario.jpeg" width="200" heigth="150"></a></center>
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>INICIO</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Crear Local</a>
                                </li>
                                <li><a href="#">Mis Locales</a>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>



            </div>

            <div id="formulario" class="col-lg-7">

                <form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Sector</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Ubicacion">
    </div>
  </div>




  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Categoria</label>
    <div class="col-sm-10">
    <select class="form-control">
        <option>Categoria 1</option>
        <option>Categoria 2</option>
        <option>Categoria 3</option>
      </select>
    </div>
  </div>
</form>

<div id="googleMap" style="width:500px;height:380px;"></div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
              <p>FARMACIAS NACIONALES</p>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
