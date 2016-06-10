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
						{{csrf_field()}}
  						<div class="row-fluid">
  							<input class="span12" id="user" name="user" type="text" value="" placeholder="Usuario github"/>
  							<!--<input class="span12" id="pass" name="pass" type="text" value="" placeholder="password"/>
  							<input class="span12" id="confpass" name="confpass" type="text" value="" placeholder="confirm password"/>-->
  						</div>
  						<div class="actions">
  							<button type="submit" class="btn btn-primary span12">Consultar Puntuación</button>
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
