<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript">
    
    
    var ac1 = <?php include '../t1.php' ?>;
    var ac2 = <?php include '../t2.php' ?>;
    var ac3 = <?php include '../t3.php' ?>;
    var ac4 = <?php include '../t4.php' ?>;
    var ac5 = <?php include '../t5.php' ?>;
    var ac6 = <?php include '../t6.php' ?>;
    var ac7 = <?php include '../t7.php' ?>;

</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student tracker Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <div class="iiita-logo nav navbar-header">
                        <img width="40px" height="40px" src="images/logo-iiita.jpeg" />
                </div>
                <a class="navbar-brand" href="index.php">Student Tracking Admin  </a>
                
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="messages.html">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>IIT2013069</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>STUDENT MISSING !!!</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="messages.html">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>IIT2013169</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>ILLEGAL log</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="messages.html">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>IIT2013014</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>In the hostel for more than 48 hours !</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="messages.html">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#"><span class="label label-default">Normal Log</span></a>
                        </li>
<!--
                        <li>
                            <a href="#"><span class="label label-primary"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="label label-success"></span></a>
                        </li>
-->
                        <li>
                            <a href="#"><span class="label label-info">Student sleeping!</span></a>
                        </li>
                        <li>
                            <a href="#"><span class="label label-warning">invalid log</span></a>
                        </li>
                        <li>
                            <a href="#"> <span class="label label-danger">Student Missing</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
<!--
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
-->
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- side menu -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li class="active">
                        <a href="day.php"><i class="fa fa-fw fa-edit"></i> Day wise analysis</a>
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
                            Charts
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Day wise Charts
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> CC1</h3>
                            </div>
                            <div class="panel-body">
                                <div id="CC1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> CC2</h3>
                            </div>
                            <div class="panel-body">
                                <div id="CC2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> CC3</h3>
                            </div>
                            <div class="panel-body">
                                <div id="CC3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Library</h3>
                            </div>
                            <div class="panel-body">
                                <div id="library"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Admin</h3>
                            </div>
                            <div class="panel-body">
                                <div id="admin"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Lecture theatre</h3>
                            </div>
                            <div class="panel-body">
                                <div id="lt"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Boys Hostel</h3>
                            </div>
                            <div class="panel-body">
                                <div id="bh"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Girls Hostel</h3>
                            </div>
                            <div class="panel-body">
                                <div id="gh"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Swimming pool</h3>
                            </div>
                            <div class="panel-body">
                                <div id="sp"></div>
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data2.js"></script>

</body>

</html>
