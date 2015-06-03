<!doctype html>
<html>

<!-- Mirrored from eakroko.de/flat/layouts-sidebar-hidden.html by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 23 Feb 2014 18:11:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <title>PARASDHAM -WELCOME</title>
    
   

    <!--Bootstrap--> 
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
     <!--Bootstrap responsive--> 
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-responsive.min.css">
     <!--jQuery UI--> 
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/plugins/jquery-ui/smoothness/jquery-ui.css">
    <link rel="stylesheet" href=".<?php echo base_url()?>assets/css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
     <!--Theme CSS--> 
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
     <!--Color CSS--> 
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/themes.css">
     <!--Datepicker--> 
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/plugins/datepicker/datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/plugins/datepicker/datepicker.css">

      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/plugins/datatable/TableTools.css">
	<!-- chosen -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/plugins/chosen/chosen.css">
     <!--jQuery--> 
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>

     <!--Nice Scroll--> 
    <script src="<?php echo base_url()?>assets/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
     <!--imagesLoaded--> 
    <script src="<?php echo base_url()?>assets/js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
     <!--jQuery UI--> 
    <script src="<?php echo base_url()?>assets/js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
     <!--slimScroll--> 
    <script src="<?php echo base_url()?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
     <!--Bootstrap--> 
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
     <!--Bootbox--> 
    <script src="<?php echo base_url()?>assets/js/plugins/bootbox/jquery.bootbox.js"></script>
     <!--Bootbox--> 
    <script src="<?php echo base_url()?>assets/js/plugins/form/jquery.form.min.js"></script>
     <!--Validation--> 
    <script src="<?php echo base_url()?>assets/js/plugins/validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/validation/additional-methods.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/datepicker/bootstrap-datepicker.js"></script>
     <!--Daterangepicker--> 
    <script src="<?php echo base_url()?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
     <!--Theme framework--> 
    <script src="<?php echo base_url()?>assets/js/eakroko.min.js"></script>
     <!--Theme scripts--> 
    <script src="<?php echo base_url()?>assets/js/application.min.js"></script>
     <!--Just for demonstration--> 
    <script src="<?php echo base_url()?>assets/js/demonstration.min.js"></script>

<!--    [if lte IE 9]>
    <script src="<?php echo base_url()?>assets/js/plugins/placeholder/jquery.placeholder.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input, textarea').placeholder();
        });
    </script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <!-- Apple devices Homescreen icon -->
    <link rel="apple-touch-icon-precomposed" href="assets/img/apple-touch-icon-precomposed.png" />

</head>

<body data-layout="fixed">
<div id="navigation">
    <div class="container-fluid">
        <a href="<?php echo site_url('dashboard')?>" id="brand">PARASDHAM</a>

        <ul class='main-nav'>
<!--            <li>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Mission</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo site_url('mission') ?>">Add Mission</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('mission/displayall') ?>">Manage/View Mission</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('submission') ?>">Add Sub-Mission</a>
                    </li>
                    <li>
                        <a href=".php">Manage/View Sub-Mission</a>
                    </li>
                </ul>


            <li>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Events</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="forms-basic.html">Add Events</a>
                    </li>
                    <li>
                        <a href="forms-validation.php">Manage Events</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Catagory</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="forms-basic.html">Add catagory</a>
                    </li>
                    <li>
                        <a href="forms-extended.html">Add Sub-Catagory</a>
                    </li>
                    <li>
                        <a href="forms-validation.php">Manage Catagory</a>
                    </li>
                </ul>
            </li>



            <li>
                <a href="#" data-toggle="dropdown" class='dropdown-toggle'>
                    <span>Users</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo site_url('users')?>">Add Users</a>
                    </li>
                    <li>
                        <a href="forms-extended.html">Add Family</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('users/displayall')?>">Manage Users</a>
                    </li>
                </ul>
            </li>-->


        </ul> <!-- navigation ends here !-->



        <div class="user">
            <ul class="icon-nav">
                <li class='dropdown'>
                    <a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-envelope"></i><span class="label label-lightred">4</span></a>
                    <ul class="dropdown-menu pull-right message-ul">
                        <li>
                            <a href="#">
                                <img src="img/demo/user-1.jpg" alt="">
                                <div class="details">
                                    <div class="name">Jane Doe</div>
                                    <div class="message">
                                        Lorem ipsum Commodo quis nisi ...
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/demo/user-2.jpg" alt="">
                                <div class="details">
                                    <div class="name">John Doedoe</div>
                                    <div class="message">
                                        Ut ad laboris est anim ut ...
                                    </div>
                                </div>
                                <div class="count">
                                    <i class="icon-comment"></i>
                                    <span>3</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="img/demo/user-3.jpg" alt="">
                                <div class="details">
                                    <div class="name">Bob Doe</div>
                                    <div class="message">
                                        Excepteur Duis magna dolor!
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="components-messages.html" class='more-messages'>Go to Message center <i class="icon-arrow-right"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="dropdown">
                <a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe <img src="img/demo/user-avatar.jpg" alt=""></a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="more-userprofile.html">Edit profile</a>
                    </li>
                    <li>
                        <a href="#">Account settings</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('welcome/logout') ?>">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>






