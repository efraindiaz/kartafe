<?php 


	
	/*
	$url = 'http://d7440f26.ngrok.io/api/commerce/1/product';
	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$curl_response = curl_exec($curl);

	curl_close($curl);*/

	//print $curl_response;//json_decode($curl_response, true);



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Karta</title>

 	<link rel="stylesheet" href="public/css/bootstrap.min.css">
 	<link rel="stylesheet" href="public/css/jquery.fullPage.css">
 	<link rel="stylesheet" href="public/css/main.css">
	
	<script src="public/js/jquery-3.2.1.min.js"></script>
 	<script src="public/js/bootstrap.min.js"></script> 	
 	<script src="public/js/jquery.fullPage.min.js"></script>
 </head>
 <body>
	
	<nav class="navbar navbar-default" id="index-navbar">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Karta</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="#">Link 1</a></li>
		        <li><a href="#">Link 2</a></li>
		        <li><a href="#">Link 3</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Link</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	

 	<div id="fullpage">
		

 		<div class="section section1">
 			
 			<div class="row">
 				
 				<div class="col-md-10 col-md-offset-1">
 					
 					<div class="col-md-4 logo-img-div">
 						
 					</div>
 					<div class="col-md-8 info-div">
 						<p>Hola mundo</p>
 					</div>

 				</div>

 			</div>

 		</div>

 		<!-- Section to show the prices of subscription -->
 		<div class="section section2">
				
			<div class="row">
				
				<div class="col-md-10 col-md-offset-1">
					
					<!-- item 1 -->
					<div class="col-md-4 price-div">
						<div class="intern-item">
							<p>Item 1</p>
						</div>
					</div>
					
					<!-- item 2 -->
					<div class="col-md-4 price-div">
						<div class="intern-item">
							<p>Item 1</p>
						</div>
					</div>
					
					<!-- item 3 -->
					<div class="col-md-4 price-div">
						<div class="intern-item">
							<p>Item 1</p>
						</div>
					</div>

					

					

				</div>

			</div>
			
 		</div>

 		<!-- Section to send the info about commerce -->
 		<div class="section section3">
 			
 			<div class="row">
 				
 				<div class="col-md-10 col-md-offset-1 ">
 					
 					<h3 class="txt-title-sec3">¡Envia tus datos!</h3>
					<!--Commerce manager-->

					<div class="col-md-4 form-div">
						<p>info del rep</p>
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nombre</label>
									<input type="text" class="form-control" placeholder="Nombre">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Apellido</label>
									<input type="text" class="form-control" placeholder="Apellido">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Telefono</label>
									<input type="text" class="form-control" placeholder="Telefono">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Correo</label>
									<input type="text" class="form-control" placeholder="Correo">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">RFC</label>
									<input type="text" class="form-control" placeholder="RFC">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Contraseña</label>
									<input type="text" class="form-control" placeholder="Contraseña">
								</div>
							</div>
						</div>
					</div>					

 					<!-- Commerce info -->
					<div class="col-md-8 form-div">
						<p>info del comercio</p>
						
						<!-- row 1 -->

						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Nombre</label>
									<input type="text" class="form-control" placeholder="Nombre">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Telefono</label>
									<input type="text" class="form-control" placeholder="Telefono">
								</div>
							</div>
						</div>

						<!-- row 2 -->

						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Estado</label>
									<input type="text" class="form-control" placeholder="Estado">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Ciudad</label>
									<input type="text" class="form-control" placeholder="Ciudad">
								</div>
							</div>
						</div>

						<!-- row 3 -->

						<div class="col-md-12">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Codigo Postal</label>
									<input type="text" class="form-control" placeholder="Codigo Postal">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Dirección</label>
									<input type="text" class="form-control" placeholder="Dirección">
								</div>
							</div>
						</div>

						<div class="col-md-12">
							
							<div class="col-md-2 col-md-offset-10">
								<div class="form-group">
									<a class="btn btn-danger" id="btn-send-form" href="#" role="button">Enviar</a>
								</div>
							</div>

						</div>

					</div>

 				</div>

 			</div> 			

 		</div>
 	</div>

 	<script>

 		$(document).ready(function() {
			$('#fullpage').fullpage();
		});

 	</script>
 	
 </body>
 </html>