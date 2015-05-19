<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Regent's Park Hotel</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery CDN -->
    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>

    <!-- Zabuto Calendar -->
    <script src="<?php echo base_url(); ?>js/calendar/zabuto_calendar.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/calendar/zabuto_calendar.min.css">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>menu">Malang Regent's Park Hotel <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url(); ?>penyewa"><i class="fa fa-users"></i>&nbsp;&nbsp;Penyewa</a>
                    </li>
                    <!-- <li class="page-scroll">
                        <a href="<?php echo base_url(); ?>booking"><i class="fa fa-book"></i>&nbsp;&nbsp;Booking</a>
                    </li> -->
                    <li class="page-scroll">
                        <a href="<?php echo base_url(); ?>transaksi"><i class="fa fa-dollar"></i>&nbsp;&nbsp;Transaksi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="<?php echo base_url(); ?>home"><i class="fa fa-user"></i>&nbsp;&nbsp;Logout</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    

    <!-- Contact Section -->
    <section id="login">
       <?php $this->load->view($main_view); ?>
    </section>

    <!-- Footer -->
    <footer class="text-center" id="contact">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy;2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <!--<script src="<?php echo base_url(); ?>js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>js/classie.js"></script>
    <script src="<?php echo base_url(); ?>js/cbpAnimatedHeader.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>js/freelancer.js"></script>

</body>

</html>
