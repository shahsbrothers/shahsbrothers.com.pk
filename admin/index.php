<?php
session_name('AUTH_TOKEN');
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"])){
    header("location: login.php");
    exit;
}

include('core/dashboard_values.php');

$userId = (isset($_SESSION['id']))?$_SESSION['id']:'';
?>
<script type="text/javascript">
    var userId='<?php echo $userId;?>';
</script>
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
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard_cards.css">
    <link rel="stylesheet" href="css/loader.css">
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

<?php include_once('models/user.php') ?>
<?php include_once('models/product.php') ?>
<?php include_once('models/category.php') ?>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="index.php">
            <Strong> </span>Shah's Brothers</Strong>
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link logout" href="#"> <span data-feather="power" style="color: red;"></span> </a>
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
                                <span data-feather="user-plus"></span> Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="render_products();" id="products_link">
                                <span data-feather="shopping-cart"></span> Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="brochure_clients();" id="brochure_link">
                                <span data-feather="file"></span> Brochure
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="Render_Settings();" id="settings_link">
                                <span data-feather="settings"></span> Settings
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
                            <span class="count-numbers"><?php echo $categories_count; ?></span>
                            <span class="count-name">Brochures</span>
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

            </main>
            <!-- END Dashboard -->

            <!-- USERS -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="display: none;" id="users">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5"> Dashboard / Users</h1>
                    <?php
                        if(isset($_SESSION["id"])){
                            if ($_SESSION["id"] == 1)
                            {
                            ?>
                                <a href="#" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#add_user" data-backdrop="static" data-keyboard="false"> <i class="fas fa-user-plus"> </i> </a>
                            <?php    
                            }
                        }
                    ?>

                    <!-- <a href="#" class="float-right" data-toggle="modal" data-target="#add_user" data-backdrop="static" data-keyboard="false"> Add User</a> -->
                </div>
                <div>
                    <!-- <h2>Users <a href="" class="float-right"> + </a></h2> -->

                </div>
                <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody align='center' id="users_data">

                    </tbody>
                    </table>                   
                </div>
            </main>
            <!-- END USERS -->

            <!-- Products -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="display: none;" id="products">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5"> Dashboard / Products</h1>
                    <a href="#" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#add_product" data-backdrop="static" data-keyboard="false"> <i class="fas fa-plus"> </i> </a>
                </div>
                <div>

                <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Date Created</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody align='center' id="products_data">

                    </tbody>
                    </table>                   
                </div>

            </main>
            <!-- END Products -->

            <!-- Brochures -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="display: none;" id="brochure">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5"> Dashboard / Brochures</h1>
                    <a href="#" class="btn btn-dark btn-sm add_ca_model_btn" data-toggle="modal" data-target="#add_ca_model" data-backdrop="static" data-keyboard="false"> <i class="fas fa-plus"> </i> </a>
                </div>
                
                <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Total Items</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody align='center' id="cat_data">

                    </tbody>
                    </table>                   
                </div>
            </main>
            <!-- END Clients -->

            <!-- Settings -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4" style="display: none;" id="settings">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h5"> Dashboard / Settings</h1>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                            <div class="card-header">
                                Social Media
                            </div>
                            <div class="card-body">
                                <form id="update_social_icons">
                                        <!-- Twitter -->
                                        <div class="form-row align-items-center">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="bx bxl-twitter"></i> </div>
                                                </div>
                                                <input type="text" class="form-control" name="twitter" id="twitter" placeholder="">
                                            </div>
                                        </div>

                                        <!-- Facebook -->
                                        <div class="form-row align-items-center">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="bx bxl-facebook"></i> </div>
                                                </div>
                                                <input type="text" class="form-control" name="facebook" id="facebook" placeholder="">
                                            </div>
                                        </div>   
                                          
                                        <!-- Insta -->
                                        <div class="form-row align-items-center">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="bx bxl-instagram"></i> </div>
                                                </div>
                                                <input type="text" class="form-control" name="instagram" id="instagram" placeholder="">
                                            </div>
                                        </div>    

                                        <!-- Skype -->
                                        <div class="form-row align-items-center">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="bx bxl-skype"></i> </div>
                                                </div>
                                                <input type="text" class="form-control" name="skype" id="skype" placeholder="">
                                            </div>
                                        </div>   

                                        <!-- Linkdin -->
                                        <div class="form-row align-items-center">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                <div class="input-group-text"> <i class="bx bxl-linkedin"></i> </div>
                                                </div>
                                                <input type="text" class="form-control" name="linkdin" id="linkdin" placeholder="">
                                            </div>
                                        </div>                                                                                                                                                      
                                        <div class="col-auto">
                                        <button type="submit" class="btn btn-success  float-right">Update</button>
                                        </div>                                     
                                    </form> 
                            </div>
                            </div>
                        </div>

                        <div class="col-md-6" >
                                <div class="card">
                                <div class="card-header">
                                    Slider
                                </div>
                                <div class="card-body">
                                        <form id="update_slider">
                                            <div class="form-group">
                                                <label for="slider1">Slider 1</label>
                                                <input type="file" class="form-control-file" name="slider1" id="slider1">
                                            </div>

                                            <div class="form-group">
                                                <label for="slider2">Slider 2</label>
                                                <input type="file" class="form-control-file" name="slider2" id="slider2">
                                            </div>

                                            <div class="form-group">
                                                <label for="slider3">Slider 3</label>
                                                <input type="file" class="form-control-file" name="slider3" id="slider3">
                                            </div>                                            
                                            
                                            <button type="submit" class="btn btn-primary  float-right">Update</button>
                                                                                                                                
                                        </form>                                    
                                </div>
                                </div>
                        </div>
                    </div>                
                </div>
            </main>
            <!-- END Clients -->
        </div>
    </div>

    <div class="loading" style="display:none" id="loader">
        <div class="loader"></div>
    </div>
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
    <script src="js/feather.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>  -->
    <script src="js/dashboard.js"></script>
    <script type="text/javascript" src="../assets/vendor/DataTables/datatables.min.js"></script>
    <script src="js/render_pages.js"></script>
    <script src="js/users.js"></script>
    <script src="js/products.js"></script>
    <script src="js/catagories.js"></script>
    <script src="js/logout.js"></script>
    <script src="js/settings.js"></script>
</body>

</html>