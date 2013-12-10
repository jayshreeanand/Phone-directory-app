<?php 
$staticContentUrl = base_url(); 
$this->load->view('view_header', array('pageTitle' => 'About','cssFiles' =>array())); 
$i = 0;
?>


<!--main contents area starts here -->




      <div class="container ">

<div class="row">
<div class="col-md-offset-3 col-md-4">



<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Create New Contact  <span class="glyphicon glyphicon-user pull-right"></span></h3>
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
              <label class=" control-label">First Name</label>
              
                <input type="text" class="form-control" name="first_name" placeholder="Enter your e-mail id here" required autofocus>
               
            </div>
           

           <div class="form-group">
              <label class=" control-label">Last Name</label>
              
                <input type="text" class="form-control"name ="last_name" placeholder="Enter your name here" required>
               
            </div>
           
            <div class="form-group">
              <label class=" control-label">Phone number</label>
              
                <input type="text" class="form-control"name ="phone_no" placeholder="Enter your name here" required>
               
            </div>
           

            <div class="form-group">
              <label class=" control-label">E-Mail ID</label>
              
                <input type="text" class="form-control"name ="email_id" placeholder="Enter your name here" required>
               
            </div>
           




           

           
              
                  
            </div>
<div class="form-signin">
           
    </div>
            <button class="btn  btn-success pull-right" type="submit">Create</button>
            <hr/>
            
          </div>



        </form>
          
        </div>
      </div>
   
</div>

</div>

 </div> <!-- /container -->


<!--main content area (except header,footer) ends -->
<?php $this->load->view('view_footer', array('jsFiles' => array('assets/js/modalopen.js')));?>
