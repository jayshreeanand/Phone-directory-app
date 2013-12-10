<?php 
$staticContentUrl = base_url(); 
$this->load->view('view_header', array('pageTitle' => 'About','cssFiles' =>array())); 
?>


<!--main contents area starts here -->
  <div class="container">

<div class="alert alert-success">Thanks for using PhoneKeep. Please login to use your phone directory again</div>

    

      
             <div class=" well col-md-offset-4 col-md-4 row ">
              <div class="col-md-7 col-md-offset-2"><h4>Login Here</h4></div>
<div class="col-md-3">
             <a href="<?php echo site_url('login');?>"><button class="btn  btn-success pull-right"  >Sign In</button></a>
           </div>
            </div>
    </div> <!-- /container -->




<!--main content area (except header,footer) ends -->
<?php $this->load->view('view_footer', array('jsFiles' => array('assets/js/login/login.js')));?>


