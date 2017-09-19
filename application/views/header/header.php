<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

        <title>Explore</title>
	<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>
 <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="<?php echo base_url();?>" onclick=$("#menu-close").click();>EXPLORE</a>
            </li>
            <li>
                <a href="<?php echo base_url();?>" onclick=$("#menu-close").click();>HOME</a>
            </li>
            <li class="dropdown">
							<a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown" >
									Wisata
									<b class="caret"></b>
							</a>
								<ul class="dropdown-menu">
									<li>
			                <?php echo anchor('welcome/wisata','Alam')?>
			            </li>
									<li>
			                <?php echo anchor('welcome/bahari','Bahari')?>
			            </li>
									<li>
			                <?php echo anchor('welcome/budaya','Budaya')?>
			            </li>
									<li>
			                <?php echo anchor('welcome/sejarah','Sejarah')?>
			            </li>
								</ul>

            </li>


        </ul>
    </nav>
