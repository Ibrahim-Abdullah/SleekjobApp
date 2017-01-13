<?php ?>

<!-- Displays a database of student records -->
<script src="<?php echo base_url("assets/bootstrap/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.js") ?>"></script>

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>SJA Database of Student Records</h4>
        <div class="table-responsive">

                
        <table id="mytable" class="table table-bordred table-striped">
                   
                <thead>
                   
                   <th><input type="checkbox" id="checkall" /></th>
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

                   <th>Edit</th>
                   <th>Delete</th>
                </thead>
    
            <tbody>
<?php foreach ($student as $stud): ?>
                <tr>
                    <th scope="row"><?php  echo $stud['Record_ID'];?></th>

                    <th><?php  echo $stud['Student_ID'];?></th>

                    <td><?php  echo $stud['First_Name'];?></td>

                    <td><?php  echo $stud['Last_Name'];?></td>

                    <td><?php  echo $stud['Course_of_Study'];?></td>

                    <td><?php  echo $stud['Phone_Number'];?></td>

                    <td><?php  echo $stud['Email'];?></td>

                    <td><?php  echo $stud['Last_School_Attended'];?></td>

                    <td><?php  echo $stud['Course_Last_School'];?></td>

                    <td><?php echo $stud['Date_of_Registration']; ?></td>

                    <td><?php echo $stud['Admission_Status']; ?></td>

                    <td><?php echo $stud['Date_of_Admission']; ?></td>

                    <td><?php echo $stud['Amount_Paid']; ?></td>

                    <td><?php echo $stud['Payment_Status']; ?></td>
                    <td>
                    <?php echo form_open('admin/retrieve_student_info_update/'.$stud['Record_ID']); ?>
                    <form>
                        <p data-placement="top" data-toggle="tooltip" title="Edit">
                          <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" type="submit" >
                            <span class="glyphicon glyphicon-pencil"></span></a>
                          </button>
                        </p>
                    </form>
                    </td>
                    <td>
                    <td>
                    <?php echo form_open('admin/delete_record/'.$stud['Record_ID']); ?>
                    <form>
                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                          <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" type="submit">
                          <span class="glyphicon glyphicon-trash"></span></a>
                          </button>
                        </p>
                    </form>
                    </td>
        <?php endforeach; ?>
            </tbody>
        
        </table>

        <div class="clearfix"></div>
            <ul class="pagination pull-right">
               <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
               <li class="active"><a href="#">1</a></li>
               <li><a href="#">2</a></li>
               <li><a href="#">3</a></li>
               <li><a href="#">4</a></li>
               <li><a href="#">5</a></li>
               <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>
                
        </div>
            
        </div>
	</div>
    <div class="row btn-row">
        <?php echo form_open('admin'); ?>
        <form>
            <button class="btn btn-default btn-spacing" id="ignore">
            Return to Dashboard
            </button>
        </form>
    </div>
</div>



<script type="text/javascript">

$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});

</script>
