
<?php 
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
    session_start();

    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Karta Admin</title>

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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php print $_SESSION['name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="controller/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Pedidos</a>
                    </li>
                    <li>
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
                            Nombre del comercio <small>Seccion</small>
                        </h1>
                    </div>
                </div>

                <div id="main">

                    
                    
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!--------- MODAL DETAIL ------------>

    <div class="modal fade" tabindex="-1" role="dialog" id="modal-detail-order">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 id="product-title" class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">            
            <form id="form-update-product" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="">Datos del cliente</label>
                    <p id="client_name">Nombre</p>
                    <p id="client_address">Direccion</p>                                
                </div>
                <div class="col-md-12 form-group">
                        <label for="">Datos de compra</label>
                        <p>$<span id="client_total">Total</span> MXN</p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Productos</th> 
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                          
                           <tbody id="tbody_products">
                              
                           </tbody>
                          
                        </table>                        
                    </div>
                <div class="col-md-12 form-group">
                    <input id="id_product" type="text" hidden>
                    <div class="col-md-6">
                        <label for="">Status</label>
                        <select id="id_status_order" name="id_product_type" class="form-control">
                            <option value="1">Pendiente</option>
                            <option value="2">En Proceso</option>
                            <option value="3">Entregado</option>                            
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Repartidor</label>
                        <select id="detail-cat" name="id_product_type" class="form-control">
                            <option value="1">Platillo</option>
                            <option value="2">Complemento</option>
                            <option value="3">Postre</option>
                            <option value="4">Bebida</option>
                        </select>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    
    <script src="public/js/commerce.js"></script>

    <script type="text/javascript">

         $(document).ready(function(){
            listOrders();
         });

    
    </script>

</body>

</html>
<?php 
    
    }else{
        header('Location: auth.php');
    }

 ?>
