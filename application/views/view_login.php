<?php 
$staticContentUrl = base_url(); 
$this->load->view('view_header', array('pageTitle' => 'About','cssFiles' =>array())); 
?>


<!--main contents area starts here -->



      <div class="container">

      <form class="form-signin"  method="POST" >
        <h2 class="form-signin-heading">Please sign in</h2>
         <div id="invitation-message" 
            <?php if(isset($error) && (strlen($error) > 3)){ echo 'class="well alert alert-error"';} ?> >
            <?php if(isset($error) && (strlen($error) > 3)){ 
              echo '<button class="close" data-dismiss="alert">x</button>';
              echo  $error;
            } else { 
              echo '&nbsp;';
            }?>
           </div>
        <input type="text" class="form-control" placeholder="Email address" name="email_id"  required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="password"  required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        
        <button class="btn btn-lg btn-primary signin" type="submit" >Sign in</button>
             </form>
             <div class=" well col-md-offset-4 col-md-4 row ">
              <div class="col-md-7 col-md-offset-2"><h4>New user?</h4></div>
<div class="col-md-3">
             <a href="<?php echo site_url('register');?>"><button class="btn  btn-success pull-right"  >Sign Up</button></a>
           </div>
            </div>
    </div> <!-- /container -->




<!--main content area (except header,footer) ends -->
<?php $this->load->view('view_footer', array('jsFiles' => array('assets/js/login/login.js')));?>


