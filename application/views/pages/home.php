
<!-- Hero Section Starts Here -->
<div class="section sw-academy" id="section6">
    <div class="container-fluid">

        <div class="row hero-header">
            <h1>Become an app or web developer</h1>
            <h3>We focus on practical skills training and offer jobs </h3>
        </div>

        <div class="row hero-elements">

            <div class="col-md-5 col-sm-5 hidden-xs">
               <img src="<?php echo base_url("assets/images/app.png"); ?>" class="img-responsive">
            </div>

            <div class="col-md-2 hidden-xs"></div>

            <div class="col-md-5 col-sm-5 col-margin">

                <?php echo form_open('student/register'); ?>

                <form class="form-horizontal" >

                   <div class="row form-heading">
                       <h4>Apply to join Sleekjob Academy!</h4>
                   </div>
                    
                    <div class="form-group">
                        <input type="text" name="First_Name" class="form-control" id="namefield" placeholder="First Name"
                        autofocus required pattern="^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$" title="Please enter a valid name: at least two letters required">  
                    </div>

                    <div class="form-group">
                        <input type="text" name="Last_Name" class="form-control" id="namefield" placeholder="Last Name"
                        autofocus required pattern="^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$" title="Please enter a valid name: at least two letters required">
                    </div>

                    <div class="form-group">
                        <input type="email" name="Email" class="form-control" id="emailfield" placeholder="Email"
                        autofocus required pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" title="Please enter a valid email address: example@example.com">  
                    </div>

                    <div class="form-group">
                        <input type="phone" name="Phone_Number" class="form-control" id="phonefield" placeholder="Phone" autofocus
                         required pattern="^(1\s*[-\/\.]?)?(\((\d{3})\)|(\d{3}))\s*[-\/\.]?\s*(\d{3})\s*[-\/\.]?\s*(\d{4})\s*(([xX]|[eE][xX][tT])\.?\s*(\d+))*$" title="Please enter in a valid phone number in this format: #### ### ###"> 
                    </div>

                    <div class="form-group" >
                        <select class="form-control" name="Course_of_Study">
                            <option value="none" selected="selected">Select Program of Interest</option>

                        <option value="Web Development(Coding and Backend)" >Web Development(Coding and Backend)</option>

                        <option value="Web Development(User Interface Design)" >Web Development(User Interface Design)</option>

                        <option value="Android Development" >Android Development</option>

                        <option value="App Mockup Design" >App Mockup Design (You need to know Photoshop)</option>

                        <option value="Wordpress Development" >Wordpress Development</option>

                        <option value="Ecommerce" >Ecommerce</option>

                        <option value="I want Sleekjob to help me choose" >I want Sleekjob to help me choose</option>
                        </select>
                        <span style="color:red "><?php echo form_error('course'); ?></span>
                    </div>
                    


                <div class="container">

                    <div class="row hero-btn">

                        <a href="#">
                          <button type="submit" class="btn btn-orange btn-register" id="apply">
                                Apply Now
                          </button>
                        </a>

                    </div>

                    <div class="row app-message">

                        <div class="alert-success" id="success">
                    <?php echo $message?>
                        </div>

                    </div>
                </div> 

        </form>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    
    window.setTimeout(function() {
    $("#success").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 5000);
</script>

<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<!-- Hero Section Ends Here -->