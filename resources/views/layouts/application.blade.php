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
        {{ HTML::style('css/style.css'); }}
        {{ HTML::style('css/bootstrap.css'); }}
        {{ HTML::style('css/bootstrap-responsive.css'); }}

    </head>
    <!--start: Header -->
    <body>
        <header>
          <!--start: Container -->
          <div class="container">
            <!--start: Navigation -->
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </a>
                      <a class="brand" href="index.html"><img src="img/logo@2x.png"> clear</a>
                      <div class="nav-collapse collapse">
                        <ul class="nav">
                    <li ><a href="index.html">Home<span>start here</span></a></li>
                            <li ><a href="about.html">About<span>our team</span></a></li>
                    <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b><span>bonus stuff</span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="social-icons.html">Social Icons</a></li>
                        <li><a href="icons.html">Glyphicons Halflings</a></li>
                        <li><a href="icons-pro.html">Glyphicons PRO</a></li>
                        <li><a href="icons_set2.html">Font Awesome Icons</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="list-styles.html">List Styles</a></li>
                        <li><a href="charts.html">Charts</a></li>
                        <li><a href="sliders.html">Sliders</a></li>
                              </ul>
                            </li>
                    <li ><a href="portfolio.html">Portfolio<span>our works</span></a></li>
                    <li ><a href="pricing.html">Pricing<span>price & plans</span></a></li>
                    <li ><a href="blog.html">Blog<span>our stories</span></a></li>
                            <li ><a href="contact.html">Contact<span>stay in touch</span></a></li>
                    <li ><a href="login.html">Login<span>sign in</span></a></li>
                    <li class="active"><a href="register.html">Register<span>sign up</span></a></li>
                        </ul>
                      </div>
                  </div>
                </div>
            <!--end: Navigation -->
          </div>
          <!--end: Container-->
        </header>
        @yield('content')
        {{HTML::script('js/bootstrap.js')}}
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
      				<div class="span2">
      					<div id="under-footer-back-to-top">
      						<a href="#"></a>
      					</div>
      				</div>
      				<!-- end: Under Footer Back To Top -->
      			</div>
      			<!-- end: Row -->
      		</div>
      		<!-- end: Container  -->
      	</div>
      	<!-- end: Under Footer -->
    </body>
</html>
