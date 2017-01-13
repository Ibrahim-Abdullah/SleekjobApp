<?php ?>

<!-- Displays a panel where user enters valid credentials to login -->
<div class="container admi-login">

    <div class="row admi-header">
        <h2>Sleekjob Academy Administrator Login</h2>
    </div>

    <div class="row admi-form">

        <?php echo form_open('admin/login'); ?>
        <form>
            <div class="form-group row">
                <label for="user_name" class="col-sm-2 form-control-label">Username</label>
                <div class="col-sm-10">
                    <input type="username" class="form-control" id="user_name" placeholder="Username" name="username">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 form-control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
            </div>
            <div class="row admi-header">
                <p style="text_align:center;color:red;">
                    <?php 
                    if(isset($_SESSION)) {

                    echo $this->session->flashdata('flash_data');
                    } 
                    ?>
                </p>
            </div>
            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" id="submit" onclick="validate()">Log in</button>
                </div>
            </div>

        </form>

    </div>
</div>



<script type="text/javascript">
  
    var attempt = 3; //Variable to count number of attempts
    ............
    attempt --; //Decrementing by one
    .............
    document.getElementById("username").disabled = true;
    document.getElementById("password").disabled = true;
    document.getElementById("submit").disabled = true;
    return false;
    }
   }
  }

</script>