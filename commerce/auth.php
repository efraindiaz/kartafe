<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/sb-admin.css" rel="stylesheet">
    <link href="public/css/auth.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="public/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="public/js/jquery.js"></script>
</head>
<body>
	<div id="">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
        </nav>

        <div id="parent-container-auth">

            <div class="container-auth col-md-4 col-md-offset-4">

                <!-- Page Heading -->
                <div class="row panel-header">
                    <div class="col-lg-12 text-center">
                        <h3 class="">
                            Acceso
                        </h3>
                    </div>
                    
                </div>
				
                <div class="row row-inputs">
            	     <div class="col-md-8 col-md-offset-2">
            	     	<form id="auth-form" action="">
                    	
						<div class="col-md-12">
							<div class="form-group">
                                <label for="">Correo</label>
								<input id="email" type="email" class="form-control">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
                                <label for="">Contraseña</label>
								<input id="password" type="password" class="form-control">
							</div>
						</div>

						<div class="col-md-12">
							<div class="form-group">
								<a id="btn-login" href="" class="btn btn-danger">Acceder</a>
							</div>
						</div>


                    </form>
            	     </div>        
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>


    $(document).ready(function(){

        $('#btn-login').click(function(e){
            e.preventDefault();

            var email = $('#email').val();
            var password = $('#password').val();
            //var data = $('#auth-fomr').serialize();

            $.ajax({
                type: 'POST',
                url: 'controller/auth-handler.php',
                data: {email:email, password:password},
                success: function (resp) {
                    if(resp){
                        
                        var id_user = <?php print $_SESSION['id_info_user_commerce'];?>;

                        var id_commerce = <?php print $_SESSION['id_commerce'];?>;

                        var token = '<?php print $_SESSION['token'];?>';

                        localStorage.setItem("id_user", id_user);
                        localStorage.setItem("id_commerce", id_commerce);
                        localStorage.setItem("token", token);

                        window.location.replace('index.php');
                    }
                    else{
                        alert("Usuario y/o contraseña incorrecta");
                    }
                }

            });

        });

    });

        


    </script>
</body>
</html>