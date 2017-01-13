<?php ?>

<!DOCTYPE html>
<!--
Sleekjob Academy
-->
<html>

<head>
    <title>Sleekjob</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css"); ?>"/>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon.png"); ?>"/>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,900' rel='stylesheet'
          type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

<body>
	<!-- Displays a navbar with logo and user-login name and a log-out link -->
<nav class="navbar navbar-default navigation navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/images/logo.png"); ?>" alt="Sleekjob"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right navb">
                
                <li><a>Logged in as <?= $this->session->userdata('username') ?></a></li>
                <li><a href="<?= site_url('admin/logout') ?>">Log out</a></li>
            </ul>             
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<br><br>
</body>
</html>