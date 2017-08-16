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

    <!-- Custom CSS -->
    <link href="public/css/sb-admin.css" rel="stylesheet">

    <link rel="stylesheet" href="public/css/commerce.css" rel="stylesheet">

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
                    <li>
                        <a href="commerce.php"><i class="fa fa-fw fa-bar-chart-o"></i> Comercio</a>
                    </li>
                    <li  class="active">
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
                    <div class="col-lg-12 page-header">
                        <h1 class="">Productos</h1>
                        <a id="test" data-toggle="modal" data-target="#modal-new-product" class="btn btn-success" href="#">Nuevo Producto</a>
                    </div>
                </div>
                <!-- /.row -->

                <!--content -->

                <div id="main">

                    
                    
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- MODAL NEW PRODUCT -->

    <div class="modal fade" tabindex="-1" role="dialog" id="modal-new-product">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 id="product-title" class="modal-title">Nuevo Producto</h4>
          </div>
          <div class="modal-body">
            <form id="form-new-product" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="">Nombre</label>
                    <input id="new-name" name="name" class="form-control" type="text">                 
                </div>
                <div class="col-md-12 form-group">
                        <label for="">Descripción</label>
                        <textarea id="new-desc" name="description" class="form-control" rows="3"></textarea>
                    </div>
                <div class="col-md-12 form-group">
                    <div class="col-md-6">
                        <label for="">Precio</label>
                        <input id="new-price" name="price" class="form-control" type="number">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Categoria</label>
                        <select id="new-cat" name="id_product_type" class="form-control">
                            <option value="1">Platillo</option>
                            <option value="2">Complemento</option>
                            <option value="3">Postre</option>
                            <option value="4">Bebida</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Imagen del producto: </label>
                    <input id="image" name="image" class="form-control" type="file">
                </div>
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button id="btn-save-product" type="submit" class="btn btn-primary">Guardar</button>
          </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!--------- MODAL DETAIL ------------>

    <div class="modal fade" tabindex="-1" role="dialog" id="modal-detail-product">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 id="product-title" class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <input id="id_product" type="text">
            <form id="form-update-product" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="">Nombre</label>
                    <input id="detail-name" name="name" class="form-control" type="text">                 
                </div>
                <div class="col-md-12 form-group">
                        <label for="">Descripción</label>
                        <textarea id="detail-desc" name="description" class="form-control" rows="3"></textarea>
                    </div>
                <div class="col-md-12 form-group">
                    <div class="col-md-6">
                        <label for="">Precio</label>
                        <input id="detail-price" name="price" class="form-control" type="text">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Categoria</label>
                        <select id="detail-cat" name="id_product_type" class="form-control">
                            <option value="1">Platillo</option>
                            <option value="2">Complemento</option>
                            <option value="3">Postre</option>
                            <option value="4">Bebida</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="">Imagen del producto: </label>
                    <input id="update-image" name="image" class="form-control" type="file">
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
            listProducts();
         });

    
    </script>

</body>

</html>
