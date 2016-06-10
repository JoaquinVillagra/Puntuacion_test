@extends('layouts.app')

@section('content')
<div class="container">
  <!-- start: Page Title -->
	<div class="row-fluid">
	<div id="page-title" class="span4 offset4">

		<h2>Consulta la puntuación tuya y de otros usuarios de Github</h2>

	</div>
	</div>
	<!-- end: Page Title -->
  <!--start: Row-->
  <div class="row-fluid">
  	<div class="lr-page span4 offset4">
  		<!--start: Register Box-->
  		<div id="register-box">
  			<!-- start: Row -->
  			<div class="row-fluid">
  				<div id="login-form" class="span12">
            <form method="post" action="/consulta">
  						<div class="row-fluid">
                <h3> La puntuacion del usuario es: {{ $puntaje }}</h3>
  							<!--<input class="span12" id="user" name="user" type="text" value="" placeholder="Usuario github"/>
  							<input class="span12" id="pass" name="pass" type="text" value="" placeholder="password"/>
  							<input class="span12" id="confpass" name="confpass" type="text" value="" placeholder="confirm password"/>-->
  						</div>
  					</form>
  				</div>
  			</div>
  			<!-- end: Row -->
  		</div>
  		<!--end: Register Box-->
  	</div>
  </div>
  <!--end: Row -->
</div>
<!--end: Container-->


@endsection
