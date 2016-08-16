<?php
include_once '../vendor/autoload.php';
use App\Soft;

$obj = new Soft();

$allData = $obj->show();

//if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
//    echo $_SESSION['msg'];
//    unset($_SESSION['msg']);
//}
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
    <link href="../views/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="../views/assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../views/assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
    <link href="../views/assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
    <link href="../views/assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="../views/assets/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="../views/assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/pickers/daterangepicker.js"></script>

    <script type="text/javascript" src="../views/assets/js/core/app.js"></script>
    <script type="text/javascript" src="../views/assets/js/pages/dashboard.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="../index.php">Lab Management Software</a>
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
<!--            <li class="dropdown language-switch">-->
<!--                <a class="dropdown-toggle" data-toggle="dropdown">-->
<!--                    <img src="../views/assets/images/flags/gb.png" class="position-left" alt="">-->
<!--                    English-->
<!--                    <span class="caret"></span>-->
<!--                </a>-->
<!---->
<!--                <ul class="dropdown-menu">-->
<!--                    <li><a class="deutsch"><img src="../views/assets/images/flags/de.png" alt=""> Deutsch</a></li>-->
<!--                    <li><a class="ukrainian"><img src="../views/assets/images/flags/ua.png" alt=""> Українська</a></li>-->
<!--                    <li><a class="english"><img src="../views/assets/images/flags/gb.png" alt=""> English</a></li>-->
<!--                    <li><a class="espana"><img src="../views/assets/images/flags/es.png" alt=""> España</a></li>-->
<!--                    <li><a class="russian"><img src="../views/assets/images/flags/ru.png" alt=""> Русский</a></li>-->
<!--                </ul>-->
<!--            </li>-->

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../views/assets/images/placeholder.jpg" alt="">
                    <span>CodePlayer</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
<!--                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>-->
<!--                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>-->
<!--                    <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>-->
<!--                    <li class="divider"></li>-->
<!--                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>-->
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
                            <a href="#" class="media-left"><img src="../views/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">BITM</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Kawran Bazar
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
<!--                            <li ><a href="../index.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>-->
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
<!--                                <ul>-->
<!--                                    <li><a href="add-new-lab.php" id="layout2">Add new lab</a></li>-->
<!--                                    <li><a href="alllabinfo.php" id="layout3">All Lab Information</a></li>-->
<!---->
<!--                                </ul>-->

                            </li>
                            <li class="active"><a href="../index.php"><i class="icon-list-unordered"></i> <span>Software Management</span></a></li>
                            <li><a href="#"><i class="icon-list-unordered"></i> <span>Assign Course</span></a></li>


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
                        <?php if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        } ?>
                        <h4><a href="../index.php"><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home    | </a></span>
                            <a href="trash_list.php"><i class=" icon-bin"></i> <span class="text-semibold">Trash List</a></span></h4>
                        <?php if (isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                        }?>
                    </div>

<!--                    <div class="heading-elements">-->
<!--                        <div class="heading-btn-group">-->
<!--                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>-->
<!--                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>-->
<!--                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>

<!--                <div class="breadcrumb-line">-->
<!--                    <ul class="breadcrumb">-->
<!--                        <li><a href="../index.php"><i class="icon-home2 position-left"></i> Home</a></li>-->
<!--                        <li class="active">Dashboard</li>-->
<!---->
<!--                    </ul>-->
<!---->
<!--                    <ul class="breadcrumb-elements">-->
<!--                        <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>-->
<!--                        <li class="dropdown">-->
<!--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                                <i class="icon-gear position-left"></i>-->
<!--                                Settings-->
<!--                                <span class="caret"></span>-->
<!--                            </a>-->
<!---->
<!--                            <ul class="dropdown-menu dropdown-menu-right">-->
<!--                                <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>-->
<!--                                <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>-->
<!--                                <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>-->
<!--                                <li class="divider"></li>-->
<!--                                <li><a href="#"><i class="icon-gear"></i> All settings</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">
                <!-- Basic datatable -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title" style="color: #008fa1">List of softwares</h5>
                        <div class="heading-elements">
<!--                            <ul class="icons-list">-->
<!--                                <li><a data-action="collapse"></a></li>-->
<!--                                <li><a data-action="reload"></a></li>-->
<!--                                <li><a data-action="close"></a></li>-->
<!--                            </ul>-->
                        </div>
                    </div>

                    <div class="panel-body">
<!--                        The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>-->
                    </div>

                    <table class="table datatable-basic">
                        <thead>

                        <tr>
                            <th>Lab No</th>
                            <th>Software Name</th>
                            <th>Version</th>
                            <th>Software Type</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Deleted</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(!empty($allData)){
                            foreach ($allData as $item){
                                ?>
                                <tr>
                                    <td><?php echo $item['labinfo_id'] ?></td>
                                    <td><?php echo $item['software_title']?></td>
                                    <td><?php echo $item['version']?></td>
                                    <td><?php echo $item['software_type']?></td>
                                    <td><?php echo $item['created']?></td>
                                    <td><?php echo $item['updated']?></td>
                                    <td><?php echo $item['deleted']?></td>
                                    <td class="text-center">
                                        <ul class="icons-list">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="view.php?id=<?php echo $item['id'] ?>"><i class="icon-info22"></i>View</a></li>
                                                    <li><a href="edit.php?id=<?php echo $item['id'] ?>"><i class="icon-pencil4"></i>Edit</a></li>
                                                    <li><a href="trash.php?id=<?php echo $item['id']; ?>"><i class=" icon-x"></i>Delete</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <?php
                            }

                        }  else {
                            echo "No data";
                        }

                        ?>


                        </tbody>
                    </table>
                </div>
                <!-- /basic datatable -->






                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2016.  <a href="#" target="_blank">WebApps Develop-PHP(Batch 26)</a> by Group-2: <a href="#">CodePlayer</a>
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
