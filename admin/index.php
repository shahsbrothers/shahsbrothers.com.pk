<?php
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"])){
    header("location: login.php");
    exit;
}

include('core/dashboard_values.php');


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Admin</title>

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard_cards.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/DataTables/datatables.min.css" />


    <style>
.table th {
  text-align: center;
}
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<!-- ADD USER  Model-->
<div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add User </h4>                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!--/.modal-header-->
    
                <div class="modal-body">
                    <form id="add_user_form" >
                        <div class="form-group" id="currentPass-group">
                            <label for="current_pass"> Email :</label>
                            <input class="form-control" type="text" name="email_c" id="email_c" >
                        </div>
    
                        <div class="form-group">
                            <label for="new_pass"> Username :</label>
                            <input class="form-control" type="text" name="username_c" id="username_c" >
                        </div>
                       
                        <div class="form-group">
                            <label for="confirm_pass">Passwrod :</label>
                            <input class="form-control" type="password" name="password_c" id="password_c" >
                        </div>

                        <div class="form-group">
                            <label for="confirm_pass"> Confirm Password :</label>
                            <input class="form-control" type="password" name="confirm_pass_c" id="confirm_pass_c" >
                        </div>

                        <div class="resp1" style="font-size: 14px; color: red;"></div>

                        <div class="modal-footer">
                            <!-- <input type="submit" name="submit" class="btn btn-block btn-warning" value="Save changes" /> -->
                            <input type="submit" name="submit123" class="btn btn-success" id="submit123" value="Save changes" value="Save Changes">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
    
            </div>
        </div>
    </div>
<!-- END Model -->


<!-- ADD PRODUCT  Model-->
<div class="modal fade" id="add_product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Add Product </h4>                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <!--/.modal-header-->
    
                <div class="modal-body">
                    <form id="add_product_form" enctype="multipart/form-data" >
                        <div class="form-group" id="currentPass-group">
                            <label for="current_pass"> Title :</label>
                            <input class="form-control" type="text" name="prod_title" id="prod_title" >
                        </div>
    
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="prod_desc" name="prod_desc" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Thumbnail</label>
                            <input type="file" class="form-control-file" id="prod_thumb" name="prod_thumb">
                        </div>
                        <div class="resp2" style="font-size: 14px; color: red;"></div>

                        <div class="modal-footer">
                            <!-- <input type="submit" name="submit" class="btn btn-block btn-warning" value="Save changes" /> -->
                            <input type="submit" name="submit_prod" class="btn btn-success" id="submit123" value="Save changes" value="Save Changes">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>

                    </form>
                </div>
    
            </div>
        </div>
    </div>
<!-- END Model -->


<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="index.php">
            <Strong> </span>Shah's Brothers </Strong>
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="core/logout.php"> <span data-feather="power" style="color: red;"></span> </a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" onclick="render_dashboard();" id="dashboard_link">
                                <span data-feather="home"></span> Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="render_users();" id="users_link">
                                <span data-feather="file"></span> Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="render_products();" id="products_link">
                                <span data-feather="shopping-cart"></span> Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="render_clients();" id="clients_link">
                                <span data-feather="users"></span> Clients
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="render_reports();" id="reports_link">
                                <span data-feather="bar-chart-2"></span> Reports
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!--  Dashboard -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" id="dashboard" style="display: block;">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                    
                        <div class="col-md-3">
                        <div class="card-counter info">
                            <i class="fa fa-users"></i>
                            <span class="count-numbers"> <?php echo $users_count; ?></span>
                            <span class="count-name">Users</span>
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="card-counter success">
                            <i class="fa fa-database"></i>
                            <span class="count-numbers"><?php echo $product_count; ?></span>
                            <span class="count-name">Products</span>
                        </div>
                        </div>
                        
                        <div class="col-md-3">
                        <div class="card-counter primary">
                            <i class="fa fa-user-shield"></i>
                            <span class="count-numbers">12</span>
                            <span class="count-name">Visitors</span>
                        </div>
                        </div>

                        <div class="col-md-3">
                        <div class="card-counter danger">
                            <i class="fa fa-user-tie"></i>
                            <span class="count-numbers">0</span>
                            <span class="count-name">Clients</span>
                        </div>
                    </div>


                </div>
                </div>
            </main>
            <!-- END Dashboard -->

            <!-- USERS -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="display: none;" id="users">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5"> Dashboard / Users</h1>
                    <a href="#" class="float-right" data-toggle="modal" data-target="#add_user" data-backdrop="static" data-keyboard="false"> Add User</a>
                </div>
                <div>
                    <!-- <h2>Users <a href="" class="float-right"> + </a></h2> -->

                </div>
                <div class="table-responsive">
                    <table id="users_table" class="display" width="100%"></table>

                </div>
            </main>
            <!-- END USERS -->

            <!-- Products -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="display: none;" id="products">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5"> Dashboard / Products</h1>
                    
                    <div class="float-right" style="font-size:18px">
                        <a href="#" data-toggle="modal" data-target="#add_product" data-backdrop="static" data-keyboard="false">
                        <i class="fas fa-plus"></i> Add Product
                        </a>
                    </div>

                </div>
                <div>
                <div class="table-responsive">
                    <table id="products_table" class="display" width="100%"></table>

                </div>

                </div>
            </main>
            <!-- END Products -->

            <!-- Clients -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="display: none;" id="clients">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5"> Dashboard / Clients</h1>

                </div>
                <div>
                    <h2>Clients </h2>

                </div>
            </main>
            <!-- END Clients -->

            <!-- Reports -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="display: none;" id="reports">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5"> Dashboard / Clients</h1>

                </div>
                <div>
                    <h2>Clients </h2>

                </div>
            </main>
            <!-- END Reports -->

        </div>
    </div>


    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="js/dashboard.js"></script>
    <script type="text/javascript" src="../assets/vendor/DataTables/datatables.min.js"></script>
    <script src="js/render_pages.js"></script>
    <script src="js/users.js"></script>
    <script src="js/products.js"></script>

</body>

</html>