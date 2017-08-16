<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/commerce.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="public/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

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
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Nombre de usuario <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Pedidos</a>
                    </li>
                    <li  class="active">
                        <a href="commerce.php"><i class="fa fa-fw fa-bar-chart-o"></i> Comercio</a>
                    </li>
                    <li>
                        <a href="products.php"><i class="fa fa-fw fa-table"></i> Productos</a>
                    </li>
                    <li>
                        <a href="staff.php"><i class="fa fa-fw fa-edit"></i> Colaboradores</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Comercio
                        </h1>
                    </div>
                </div>
                <!-- /.row -->


                <div id="main">

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="col-md-4">
                                <img id="img_comm" src="" alt="" style="width:100%;">
                            </div>
                            <div class="col-md-8">
                                <p id="comm_name">Nombre del comercio</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-md-offset-3">
                            <div class="col-md-6 form-group">
                                <label for="">Telefono</label>
                                <input id="phone_comm" class="form-control" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Estado</label>
                                <input id="state_comm" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <div class="col-md-6 form-group">
                                <label for="">Ciudad</label>
                                <input id="city_comm" class="form-control" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Colonia</label>
                                <input id="col_comm" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <div class="col-md-6 form-group">
                                <label for="">Codigo Postal</label>
                                <input id="cp_comm" class="form-control" type="text">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Direccion</label>
                                <input id="addss_comm" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group col-md-3 col-md-offset-9">
                                <input type="submit" class="btn btn-primary form-control pull-rigth">
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    
    <script src="public/js/commerce.js"></script>

    <script type="text/javascript">

         $(document).ready(function(){
            commerceInfo();
         });

    
    </script>

</body>

</html>
