<!DOCTYPE html>
<!--
Sleekwork one page website
-->
<html>

<head>
    <title>SJA Admin Records</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/styles.css"); ?>">

    <link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon.png"); ?>"/>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,900' rel='stylesheet'
          type='text/css'>
          
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>">
</head>

<body>
	<h3 style="color:red"><?php echo "You must provide Student ID"; ?></h3>

	<div class="row btn-row">


        <?php echo form_open('admin/index'); ?>

        <form>
            <button class="btn btn-success btn-spacing" id="updateRecords">
            Return To Dashboard
            </button>
        </form>

</div>
</body>
</html>