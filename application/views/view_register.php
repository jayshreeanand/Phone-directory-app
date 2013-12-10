<?php 
$staticContentUrl = base_url(); 
$this->load->view('view_header', array('pageTitle' => 'About','cssFiles' =>array())); 
?>


<!--main contents area starts here -->



      <div class="container ">

<div class="row">
<div class="col-md-offset-3 col-md-4">



<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Register Here  <span class="glyphicon glyphicon-user pull-right"></span></h3>
  </div>
  <div class="panel-body">
    
    
<form method="POST">


 <div id="invitation-message" 
            <?php if(isset($error) && (strlen($error) > 3)){ echo 'class="well alert alert-error"';} ?> >
            <?php if(isset($error) && (strlen($error) > 3)){ 
              echo '<button class="close" data-dismiss="alert">x</button>';
              echo  $error;
            } else { 
              echo '&nbsp;';
            }?>
           </div>





            <div class="form-group">
              
            <div class="form-group">
              <label class=" control-label">E-Mail</label>
              
                <input type="text" class="form-control" name="r_email_id" placeholder="Enter your e-mail id here" required autofocus>
               
            </div>
           

           <div class="form-group">
              <label class=" control-label">Name</label>
              
                <input type="text" class="form-control"name ="r_name " placeholder="Enter your name here" required>
               
            </div>
           


           <div class="form-group">
              <label class=" control-label">Password</label>
              
                <input class="form-control"  type="password" name="r_password" placeholder="Choose your password" required>
               
               
            </div>
           
           <div class="form-group">
              
              
                <input  class="form-control" type="password" name="r_rp_password"  placeholder="Re-enter your password " required>
              
               
            </div>
           

           
              
                	
            </div>
<div class="form-signin">
           <label class="checkbox ">
          <input type="checkbox" value="remember-me" > <em> I agree to the Terms and Conditions</em>
        </label>
    </div>
            <button class="btn  btn-success pull-right" type="submit">Sign Up</button>
            <hr/>
            
          </div>



        </form>
          
        </div>
      </div>
   
</div>

</div>

 </div> <!-- /container -->





<!--main content area (except header,footer) ends -->
<?php $this->load->view('view_footer', array('jsFiles' => array()));?>
