<?php ?>
<div class="container container-student-records">

    <div class="row update-header"><h2>Update Student Record</h2></div>

<!-- Start of Update form-->

    <?php echo form_open('update_record'); ?>

    <form> 
    <div class="row personal-info">

        <h3>Student Personal Information</h3>

            <input type="hidden" name="Record_ID" class="form-control" value="<?php echo $student['Record_ID']; ?>">

            <fieldset class="form-group">
                <label for="Student_ID">SJA Student ID</label>
                <input name="Student_ID" class="form-control" value="<?php echo $student['Student_ID']; ?>">
                <span style="color:red "><?php echo form_error('First_Name'); ?></span>
            </fieldset>

            <fieldset class="form-group">
                <label for="First_Name">First Name</label>
                <input type="text" class="form-control" id="firstname" placeholder="First Name" name="First_Name" value="<?php echo $student['First_Name']; ?>">
                <span style="color:red "><?php echo form_error('First_Name'); ?></span>
            </fieldset>

            <fieldset class="form-group">
                <label for="Last_Name">Second Name</label>
                <input type="text" class="form-control" id="second_name" placeholder="Last Name" name="Last_Name" value="<?php echo $student['Last_Name']; ?>">
                <span style="color:red "><?php echo form_error('lastname'); ?></span>
            </fieldset>

            <fieldset class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="Email" value="<?php echo $student['Email']; ?>">
                <span style="color:red "><?php echo form_error('Email'); ?></span>
            </fieldset>

            <fieldset class="form-group">
                <label for="Phone_Number">Phone Number</label>
                <input type="tel" class="form-control" id="phone_number" placeholder="Phone Number" name="Phone_Number" value="<?php echo $student['Phone_Number']; ?>">
                <span style="color:red "><?php echo form_error('Phone_Number'); ?></span>
            </fieldset>

            <fieldset class="form-group">
                <label for="Last_School_Attended">Last School Attended</label>
                <input type="text" class="form-control" id="school_attended" placeholder="Last School Attended" name="Last_School_Attended" value="<?php echo $student['Last_School_Attended']; ?>">
                <span style="color:red "><?php echo form_error('Last_School_Attended'); ?></span>
    <br><br>
            </fieldset>

            <fieldset class="form-group">
                <label for="Course_Last_School">Course of Study in Last School Attended</label>
                <input type="text" class="form-control" id="second_name" placeholder="Course of Study" name="Course_Last_School" value="<?php  echo $student['Course_Last_School'];?>">
                <span style="color:red "><?php echo form_error('Course_Last_School'); ?></span>
            </fieldset>
    </div>

    <div class="row enroll-info">

        <h3>Sleekjob Academy Enrollment Information</h3>
        
            <fieldset class="form-group">
                <label for="Payment_Status">Payment Status</label>

                <select class="form-control" id="payment_status" name="Payment_Status">

                    <option  selected="selected" value="No Payment Made" <?php echo  set_select('Payment_Status', 'No Payment Made'); ?>>No Payment Made</option>

                    <option value="Part Payment" <?php echo  set_select('Payment_Status', 'Part Payment'); ?>>Part Payment Made</option>

                    <option value="Full Payment" <?php echo  set_select('Payment_Status', 'Full Payment'); ?>>Full Payment Made</option>
                    
                </select>
                <span style="color:red "><?php echo form_error('Payment_Status'); ?></span>
            </fieldset>

            <fieldset class="form-group">
                <label for="Amount_Paid">Amount Paid</label>
                <input type="text" class="form-control" id="amount_paid" placeholder="Amount Paid" name="Amount_Paid" value="<?php  echo $student['Amount_Paid'];?>">
                <span style="color:red "><?php echo form_error('Amount_Paid'); ?></span>
            </fieldset>

            <fieldset class="form-group">
                <label for="Admission_Status">Admission Status</label>
                <select class="form-control" id="admission_status" name="Admission_Status">
                    <option value="none">Admission being Processed</option>
                    <option value="Not Started">Not Started</option>
                    <option value="Started">Started</option>
                </select>
                <span style="color:red "><?php echo form_error('Admission_Status'); ?></span>
            </fieldset>

            <fieldset class="form-group">
                <label for="Course_of_Study">Program of Interest</label>
                <select class="form-control" id="program_interest" name="Course_of_Study">
                        <option value="none" selected="selected">Select Program of Interest</option>

                        <option value="Web Development(Coding and Backend)" <?php echo  set_select('course', 'Web Development(Coding and Backend)'); ?>>Web Development(Coding and Backend)</option>

                        <option value="Web Development(User Interface Design)" <?php echo  set_select('Course_of_Study', 'Web Development(User Interface Design)'); ?>>Web Development(User Interface Design)</option>

                        <option value="Android Development" <?php echo  set_select('Course_of_Study', 'Android Development'); ?>>Android Development</option>

                        <option value="App Mockup Design" <?php echo  set_select('Course_of_Study', 'App Mockup Design)'); ?>>App Mockup Design (You need to know Photoshop)</option>

                        <option value="Wordpress Development" <?php echo  set_select('Course_of_Study', 'Wordpress Development'); ?>>Wordpress Development</option>

                        <option value="Ecommerce" <?php echo  set_select('Course_of_Study', 'Ecommerce'); ?>>Ecommerce</option>

                        <option value="I want Sleekwork to help me choose" <?php echo  set_select('Course_of_Study', 'I want Sleekwork to help me choose'); ?>>I want Sleekwork to help me choose</option>
                </select>
                <span style="color:red "><?php echo form_error('Course_of_Study'); ?></span>
            </fieldset>

            <fieldset class="form-group">
                <label for="Date_of_Admission">Date Student Started Lessons with SJA</label>
                <input type="date" class="form-control" id="date_started" placeholder="Date Lessons Started" name="Date_of_Admission" value="<?php echo $student['Date_of_Admission']; ?>">
    <span style="color:red "><?php echo form_error('Date_of_Admission'); ?></span>
            </fieldset>        
    </div>

    <div class="row btn-row">

        <button class="btn btn-primary" type="submit">
            Update Student Record
        </button>
    </div>
    </form>

    <?php echo form_open('admin'); ?>
    <form>
        <div class="row btn-row">
        <button class="btn btn-danger">
            Cancel
        </button>  
        </div>
    </form>
    
</div>

