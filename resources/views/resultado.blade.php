@extends('layouts.app')

@section('content')
<div class="container">
  <!-- start: Page Title -->
  <div class="row-fluid">
	<div id="page-title" class="span4 offset4">

		<h2>Consulta la puntuación tuya y de otros usuarios de Github</h2>

	</div>
  </div>
  <div class="row-fluid">
  	<div class="lr-page span4 offset4">
  		<div id="register-box">
  			<div class="row-fluid">
  				<div id="login-form" class="span12">
            		<form method="post" action="/consulta">
  						<div class="row-fluid">
                			<p> La puntuacion del usuario es de {{ $puntaje }} puntos<BR>
								Su número de seguidores es de {{ $seguidores }}<BR>
								Su número de estrellas es de {{ $estrellas }}
							</p>
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
