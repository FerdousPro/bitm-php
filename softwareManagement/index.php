<?php
include_once 'vendor/autoload.php';
use App\Soft;

$obj = new Soft();
$courseData = $obj->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BITM Lab Management</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="views/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="views/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="views/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
    <link href="views/assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="views/assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="views/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="views/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="views/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="views/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="views/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="views/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="views/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="views/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="views/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="views/assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="views/assets/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="views/assets/js/core/app.js"></script>
    <script type="text/javascript" src="views/assets/js/pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Lab Management Software</a>
        <!--        <a class="navbar-brand" href="../index.php"><img src="assets/images/logo_light.png" alt=""></a>-->


        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="views/assets/images/placeholder.jpg" alt="">
                    <span>CodePlayer</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="views/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">BITM</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Karwan Bazar
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Code Player</span> <i class="icon-menu" title="Main pages"></i></li>
                            <li>
                                <a href="#"><i class="icon-stack2"></i> <span>User Management</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-copy"></i> <span>Trainer Management</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-droplet2"></i> <span>Course Information</span></a>

                            </li>
                            <li>
                                <a href="#"><i class="icon-list-unordered"></i> <span>Lab Information</span></a>
                            </li>
                            <li class="active"><a href="index.php"><i class="icon-list-unordered"></i> <span>Software Management</span></a></li>
                            <li><a href="../courseManagement/views/index.php"><i class="icon-list-unordered"></i> <span>Course Management</span></a></li>


                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
<!--                        <button type="button" class="btn btn-primary">All Installed Software</button>-->
                    </div>
                    <!-- Colored button -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-body border-top-primary text-center">
                                <h6 class="no-margin text-semibold">View</h6>
                                <p class="text-muted content-group-sm">Installed software in labs</p>
                                <a type="button" href="views/show.php" class="btn btn-primary">All Installed Software</a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="panel panel-body border-top-primary text-center">
                                <h6 class="no-margin text-semibold">Add</h6>
                                <p class="text-muted content-group-sm">Add a new Software</p>
                                <a type="button" href="views/add.php" class="btn btn-primary">Add New Software</a>
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="panel panel-body border-top-primary text-center">

                                <form class="navbar-form" role="search" action="views/search.php">
                                    <select class="col-xs-3" name="lab_search">
                                        <option value="">select lab</option>
                                        <?php foreach ($courseData as $item){?>
                                            <option value="<?php print $item['lab_no'] ?>"><?php echo $item['lab_no'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search by software" name="soft_search">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">




                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2016.  <a href="#" target="_blank">WebApps Develop-PHP(Batch 26)</a> by Group-2: <a href="#">CodePlayer</a> | Mentor:<a href="#">Md. AbuTaleb</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
