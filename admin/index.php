<!DOCTYPE html>
    <head>
    	<title>Humarikaksha - admin</title>
    </head>
    <?php include('../config/globals.php'); ?>
    <?php
        session_start();

        if(!isset($_SESSION['username'])) {
            header('Location: login.php');
        }

    ?>

    <body>
        <!-- header -->
        <div id="top-nav" class="navbar navbar-inverse navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin Dashboard</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                            	<i class="glyphicon glyphicon-user"></i>
                            	<?php echo($_SESSION['username']); ?>
                            	<span class="caret"></span>
                        	</a>
                            <ul id="g-account-menu" class="dropdown-menu" role="menu">
                                <li><a href="#">My Profile</a></li>
                            </ul>
                        </li>
                        <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /Header -->

        <!-- Main -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <!-- Left column -->
                    <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

                    <hr>

                    <ul class="nav nav-stacked">
                        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu"> Users
                            <i class="glyphicon glyphicon-chevron-down"></i></a>
                            <ul class="nav nav-stacked collapse in" id="userMenu">
                                <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i>Messages <span class="badge badge-info">4</span></a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-plus"></i>New Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">Reports<i class="glyphicon glyphicon-chevron-right"></i></a>

                            <ul class="nav nav-stacked collapse" id="menu2">
                                <li><a href="#">Information &amp; Stats</a></li>
                                <li><a href="#">Views</a></li>
                                <li><a href="#">Requests</a></li>
                                <li><a href="#">Timetable</a></li>
                                <li><a href="#">Alerts</a></li>
                            </ul>
                        </li>
                        <li class="nav-header">
                            <a href="#" data-toggle="collapse" data-target="#menu3">Social Media<i class="glyphicon glyphicon-chevron-right"></i></a>
                            <ul class="nav nav-stacked collapse" id="menu3">
                                <li><a href=""><i class="glyphicon glyphicon-circle"></i>Facebook</a></li>
                                <li><a href=""><i class="glyphicon glyphicon-circle"></i>Twitter</a></li>
                            </ul>
                        </li>
                    </ul>

                    <hr>
                        <a href="#"><strong><i class="glyphicon glyphicon-link"></i>Resources</strong></a>
                    <hr>

                    <ul class="nav nav-pills nav-stacked">
                        <li class="nav-header"></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list"></i>Layouts &amp; Templates</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i>Toolbox</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-link"></i>Widgets</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i>Reports</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-book"></i>Pages</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-star"></i>Social Media</a></li>
                    </ul>
                </div>
                <!-- /col-3 -->
                <div class="col-sm-9">
                    <form>
                        <div class="form-group">
                            <label for="page-title">Page Title</label>
                            <input type="text" class="form-control" id="page-title" placeholder="Page Title">
                        </div>
                        <div class="form-group">
                            <label for="page-header">Page Header</label>
                            <input type="text" class="form-control" id="page-header" placeholder="Page Header">
                        </div>
                        <div class="form-group">
                            <label for="page-body">Body</label>
                            <input type="text" class="form-control" id="page-body" placeholder="Page Body">
                        </div>
                        <button type="submit" class="btn btn-default">Save</button>
                    </form>
                </div>
                <!--/col-span-9-->
            </div>
        </div>
        <!-- /Main -->
        <footer class="text-center">This is humarikaksha admin<a href="http://www.humarikaksha.com"><strong>humarikaksha</strong></a></footer>

    </body>
</html>