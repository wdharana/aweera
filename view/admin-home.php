<?php session_start() ?>

<?php require_once ('../model/database.php'); 
    $db = new Database();
    $db->connect();
?>

<?php 
    // checking if an user is logged in
    if(!isset($_SESSION['user_id'])){
        header ('Location: ../index.php');
    }
 ?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="AWEERA - Hair and Beauty">
    <meta name="author" content="TeamScorp">

    <title>AWEERA - Hair and Beauty</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../css/mystyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<div class="my-content">
<body>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top my-navbar" role="navigation">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile dis`play -->
            <div class="navbar-header link-1">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">AWEERA</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class= "collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right my-primary-menu">
                    <li class="link-1">
                        <a href="#">Appointments</a>
                    </li>
                    <li class="link-1">
                        <a href="#">Gallery</a>
                    </li>
                    <li class="link-1">
                        <a href="about.html">About</a>
                    </li>
                    <li class="link-1">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="dropdown link-1">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href="portfolio-item.html">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu link-1" id="logout">
                        <a href="#" class="loggedin" ><i class="fa fa-unlock-alt"></i>Welcome 
                        <?php echo $_SESSION['first_name'] ?></a>
                      
                    </li>
                </ul>

                <div class="arrow-up"></div>
                <div class="login-form" >
                    <form>
                        <div>
                            <input class="my-login-button" type="submit" value="Edit Profile" formaction="../model/users.php">
                        </div>
                        <div>
                            <input class="my-login-button" type="submit" value="Log Out" formaction="../controller/logout.php">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Admin Home
                    <small><?php echo $_SESSION['first_name']." ".$_SESSION['last_name'] ?></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <nav class="my-sidebar">
                    <ul class="nav">
                        <li><a href="../view/manage-users.php" class="my-sidebar-menu-item">Manage Users</a></li>
                        <li><a href="../view/view-stock.php" class="my-sidebar-menu-item">Stock</a></li>
                        <li><a href="../view/view-supplier.php" class="my-sidebar-menu-item">Supplier</a></li>

                        <li><a href="#" id="btnStaff" data-toggle="collapse" data-target="#submenuStaff" aria-expanded="false">Staff</a>
                            <ul class="nav collapse my-sidebar-submenu" id="submenuStaff" role="menu" aria-labelledby="btnStaff">
                                <li><a href="../view/add-staff.php" class="my-sidebar-submenu-item">Add Staff</a></li>
                                <li><a href="#">Update Staff</a></li>
                                <li><a href="#">Delete Staff</a></li>
                            </ul>
                        </li>

                        <li><a href="#" id="btnReports" data-toggle="collapse" data-target="#submenuReports" aria-expanded="false">Reports</a>
                            <ul class="nav collapse my-sidebar-submenu" id="submenuReports" role="menu" aria-labelledby="btnReports">
                                <li><a href="#" class="my-sidebar-submenu-item">Daily Collection</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

            <!-- Content Column -->
            <div id="content" class="col-md-9 loaded-content">
                <h2>Section Heading</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; TeamScorp 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/loader.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Script to display and hide login form -->
    <script type="text/javascript">
        $(document).ready(function(){
            var arrow = $(".arrow-up");
            var form = $(".login-form");
            var status = false;
            $("#logout").click(function(event){
                event.preventDefault();
                if(status==false){
                    arrow.fadeIn();
                    form.fadeIn();
                    status = true;
                }
                else{
                    arrow.fadeOut();
                    form.fadeOut();
                    status = false;
                }
            })
        })
    </script>

</body>
</div>
</html>
