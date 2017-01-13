

<!DOCTYPE html>
<!--
Sleekwork one page website
-->
<html>

<head>
    <title>SJA Admin Records</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="shortcut icon" href="img/favicon.png"/>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,900' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>

<body>

<div class="container">

    <div class="row table-header">
        <h3>SJA Records Table</h3>
    </div>

    <div class="row table-row">
        
        <table class="table table-striped table-bordered table-hover">

            <thead class="thead-default">
                <tr>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Course of Study</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Last School Attended</th>
                    <th>Course of Study In Last School Attended</th>
                    <th>Date Registered</th>
                    <th>Admission Status</th>
                    <th>Date Student Started Lessons</th>
                    <th>Amount Paid</th>
                    <th>Payment Status</th>
                </tr>
            </thead>
 
            <tbody>
                <tr>
                    <th scope="row"><?php  echo $student['id'];?></th>
                    <td><?php  echo $student['firstname'];?></td>
                    <td><?php  echo $student['lastname'];?></td>
                    <td><?php  echo $student['course'];?></td>
                    <td><?php  echo $student['phone_number'];?></td>
                    <td><?php  echo $student['email'];?></td>
                    <td><?php  echo $student['last_school_attended'];?></td>
                    <td><?php  echo $student['course_last_school'];?></td>
                    <td><?php echo $student['Date_registered']; ?></td>
                    <td><?php echo $student['admission_status']; ?></td>
                    <td><?php echo $student['Date_Started']; ?></td>
                    <td><?php echo $student['amount_paid']; ?></td>
                    <td><?php echo $student['payment_status']; ?></td>
                </tr>
            </tbody>

        </table>

    </div>

</div>



<script type="text/javascript">
    $('.SeeMore2').click(function () {
        var $this = $(this);
        $this.toggleClass('SeeMore2');
        if ($this.hasClass('SeeMore2')) {
            $this.text('Read More');
        } else {
            $this.text('Read Less');
        }
    });

   $('input[type="checkbox"]').checkbox();


</script>

