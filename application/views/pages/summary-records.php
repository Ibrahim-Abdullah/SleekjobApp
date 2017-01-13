<?php ?>

<!-- Displays the summary of all students records -->
<div class="container summary-page">

    <div class="row summary-records">

        <h2>Summary of Student Records</h2><br>

        <ul class="list-group">

          <li class="list-group-item"><span class="badge" id="fullyPpaid"><?php echo $records['fully_paid']; ?></span>Number of fully paid students</li>

          <li class="list-group-item"><span class="badge" id="partiallyPaid"><?php echo $records['partially_paid']; ?></span>Number of partially paid students</li>

          <li class="list-group-item"><span class="badge" id="started"><?php echo $records['started']; ?></span>Number of students who have started lessons</li>

          <li class="list-group-item"><span class="badge" id="notStarted"><?php echo $records['not_started']; ?></span>Number of students who have NOT started lessons</li>

          <li class="list-group-item"><span class="badge" id="fullyPaid_started"><?php echo $records['fully_paid_started']; ?></span>Number who have paid fully for the Bootcamp and have started lessons</li>

          <li class="list-group-item"><span class="badge" id="partiallyPaid_started"><?php echo $records['partially_paid_started'];  ?></span>Number of student who have partially paid and have
           started lessons</li>

          <li class="list-group-item"><span class="badge" id="partiallyPaid_notStarted"><?php echo $records['paid_not_started']; ?></span>Number who have paid some amount and
           have NOT started lessons</li>

          <li class="list-group-item"><span class="badge" id="partiallyPaid_notStarted"><?php echo $records['registered_student']; ?></span>Total Number of Registered People</li>

        </ul>

    </div>

<div class="row search-student">

        <h2>Search for Student</h2><br>

        <?php echo form_open('retrieve_student_info'); ?>
        <form>
        <div class="form-group row col-xs-12">

            <label for="Student_ID" class="col-xs-2 form-control-label">Enter Student ID</label>
            
            <div class="col-xs-10">
                <input type="text" class="form-control" id="studentID" placeholder="Student ID" name="Student_ID">
            </div>

        </div>

        <div class="form-group btn-row">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>   
        </form>
    </div>

   <div class="row sort-student">

        <h2>Sort Student</h2><br>

        <?php echo form_open('sort_param'); ?>
        <form>
        <fieldset class="form-group">
            <select class="form-control" id="program_interest" name="param">

			<option value="none" selected="selected">-----Select Criteria for Sorting Student------</option>

			<option value="all_student">All Registered Student</option>
			<option value="Started">Started Lessons</option>

			<option value="Not Started">Not Started Lessons</option>

			<option value="fully_paid_started">Fully Paid and Has Started Lessons</option>

			<option value="partially_paid_started">Partially Paid and Has Started Lessons</option>

			<option value="Full Payment"> Fully Paid Student</option>

			<option value="Part Payment">Partially Paid Student</option>
            </select>
        </fieldset>
        <div class="form-group btn-sort">
            <div>
                <button type="submit" class="btn btn-primary" id="sort">Sort Student</button>
            </div>
        </div>
        </form>

    </div>

</div>