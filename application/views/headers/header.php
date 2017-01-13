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
    <script src="<?php echo base_url("assets/bootstrap/js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap/js/bootstrap.js") ?>"></script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" style="overflow-x: hidden;">

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
            <ul class="nav navbar-nav navb">
                
                <!--<li><a href="http://www.sleekjob.com">Sleekjob Website</a></li>-->
                <li class="active"><a href="#section6">Sleekjob Academy</a></li>
                <li><a href="https://docs.google.com/forms/d/1yBQ9CqTh_P-qeXUBWmz1jM_8JMktsZXU4KjBEhu1iVE/edit?usp=drive_web">Join Sleekjob Academy</a></li>
                <li><a href="https://docs.google.com/forms/d/1n-r7Jsw__zpLy4c7L5KFSZWlrIHF3FDthtnRYdnt2B4/edit?usp=drive_web">Volunteer to Teach</a></li>
                <!--<li><a href="#">Contact Us</a></li>-->
                

            </ul>
            <ul class="nav navbar-nav navbar-right social-media-nav">
                <li>
                    <a href="https://www.facebook.com/sleekjob" target="_blank"><span
                            class="fa fa-facebook-square"></span></a>
                </li>
                <li>

                    <a href="https://twitter.com/sleekwork" target="_blank"><span
                            class="fa fa-twitter-square"></span></a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    <br>
</nav>
