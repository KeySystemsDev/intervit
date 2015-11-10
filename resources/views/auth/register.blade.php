@extends('base-cliente')


@section('css')
	<link href="{{ asset('/css/img-login/style.css') }}" rel="stylesheet">
@endsection


<body class="pace-top login-body">
	
	<!--<div class="login-cover">
	    <div class="login-cover-image"><img src="{{ asset('/thema/assets/img/login-bg/bg-1.jpg') }}" data-id="login-cover-image" alt="" /></div>
	    <div class="login-cover-bg"></div>
	</div>-->
	
	<ul class="cb-slideshow ul-login">
        <li class="li-login"><span></span></li>
        <li class="li-login"><span></span></li>
        <li class="li-login"><span></span></li>
        <li class="li-login"><span></span></li>
        <li class="li-login"><span></span></li>
        <li class="li-login"><span></span></li>
    </ul>

	<div>
		@section('content')
			<div id="page-container" class="fade">
		        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
		            <div class="login-header">
		                <div class="brand">
		                    <span class="logo"></span> Intervit
		                    <small>Copyright Intervit.net 2012</small>
		                </div>
		                <div class="icon">
		                    <i class="fa fa-pencil-square-o"></i>
		                </div>
		            </div>
		            <div class="login-content">
		                <form id="form" class="form-horizontal" role="form" method="POST"  name="formulario">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<input type="email" class="form-control" name="email" value="" ng-class="{'error':error_email && submit_email}" 
										ng-model="email" ng-blur="validar_email()" required placeholder="@ Correo Electrónico">
								<div class="col-lg-12" ng-show="error_email && submit_email" ng-cloak>
			        				<br><p class="help-block text-gris" ng-cloak>Verifique el formato del correo: Ejemplo: ejample@dominio.com</p>
			      				</div>
							</div>

							<div class="form-group">
								<input type="password" class="form-control" name="password" ng-model="pw" ng-blur="validar_pass1()"
										name="pw" id="pw" ng-class="{'error':error_pass1 && submit_pass1}" required placeholder="Contraseña">
								<div class="col-lg-12" ng-show="error_pass1 && submit_pass1" ng-cloak>
		        					<br><p class="help-block" ng-cloak>[[msj_error_pass1]]</p>
		      					</div>	
							</div>

							<div class="form-group">
								<input type="password" class="form-control" name="password" ng-model="pw2" ng-blur="validar_pass2()"
										 name="pw2" id="pw2" ng-class="{'error':error_pass2 && submit_pass2}" required placeholder="Repetir Contraseña">
								<br><center><ul id="strength" check-strength="pw"></ul></center>
								<div class="col-lg-12" ng-show="error_pass2 && submit_pass2" ng-cloak>
		        					<br><p class="help-block" ng-cloak>[[msj_error_pass2]]</p>
		      					</div>					
							</div>

							<div class="login-buttons">
								<button type="button" class="btn btn-danger btn-block btn-lg" ng-click="checkMe()" ng-disabled="formulario.$invalid || error_email || error_pass2 || error_pass1">
									Registrar <i class="fa fa-pencil-square-o"></i>
								</button>
							</div>

							<br><br>
							<p class="text-center blanco">
		                        © Copyright Key Systems C.A 2015
		                    </p>

						</form>
		            </div>
		        </div>

		
		
	</div>
	@endsection
</body>

