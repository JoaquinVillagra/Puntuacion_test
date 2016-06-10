<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PuntuaciónUsuario|GitHub|Aphix</title>
        <!-- start: CSS -->
      	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
      	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
      	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
      	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
      	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900'>
        <link href="{!! asset('css/bootstrap-responsive.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link href="{!! asset('css/bootstrap.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />

    </head>
    <!--start: Header -->
    <body>
        <header>
          <!--start: Container -->
          <div class="container">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </a>
                      <a class="brand" href="/"><image src="{{ asset('images/logo.png')}}"> Puntuación-Test</a>
                      <div class="nav-collapse collapse">
                        <ul class="nav">
                    <li ><a href="index.html">Inicio<span>Comienza aquí</span></a></li>
                    <li class="active"><a href="register.html">Consutla<span>Puntuación</span></a></li>
                        </ul>
                      </div>
                  </div>
            </div>
          </div>
        </header>

        @yield('content')

        <!-- start: Under Footer -->
      	<div id="under-footer">
      		<!-- start: Container -->
      		<div class="container">
      			<!-- start: Row -->
      			<div class="row-fluid">
      				<!-- start: Under Footer Logo -->
      				<div class="span2">

      				</div>
      				<!-- end: Under Footer Logo -->
      				<!-- start: Under Footer Copyright -->
      				<div class="span8">
      					<div id="under-footer-copyright">
      						&copy; 2016, <a href="aphix.cl">Con la cooperación de Aphix Chile</a>. Creado por JoaqunV
      					</div>
      				</div>
      				<!-- end: Under Footer Copyright -->
      				<!-- start: Under Footer Back To Top -->
      				<!--<div class="span2">
      				    <div id="under-footer-back-to-top">
      						<a href="#"></a>
      					</div>
      				</div>-->
      				<!-- end: Under Footer Back To Top -->
      			</div>
      			<!-- end: Row -->
      		</div>
      		<!-- end: Container  -->
      	</div>
        <!-- Import Scripts-->
        <script type="text/javascript" src="{!! asset('js/bootstrap.js') !!}"></script>
    </body>
</html>
