<?php 
$staticContentUrl = base_url(); 
$this->load->view('view_header', array('pageTitle' => 'About','cssFiles' =>array())); 
$i = 0;
?>


<!--main contents area starts here -->














      <div class="container">
        <a href="<?php echo site_url('logout');?>"><button  class="btn btn-success pull-right col-md-offset-1">Log out</button></a>
<h4 class="pull-right">Welcome <?php echo $this->session->userdata('email_id');?>   </h4>
  


    <div class="header">
        <a style="text-decoration:none" href="<?php echo site_url('home');?>">
        <h3 class="text-muted">Phone Directory App</h3></a>

      </div>



<div class="row">

  <div class="col-lg-9">


<div class="panel well">
  
  <div class="panel-body">



    <div class="col-lg-10 col-lg-offset-1">
    <div class="input-group input-group-lg " id="searchbox">
       
       <input type="text" placeholder ="Search by name / phone no /email etc.."  id ="searchkey"  class="form-control ">
      <span class="input-group-btn">
       
        <button class="btn btn-success" type="button"  onclick =" cv_search()">Go!</button> 
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

    </div>
  </div>

<a href="<?php echo site_url('home');?>"><button class="btn btn-success " >
  <span class="glyphicon glyphicon-arrow-left"></span>
</button></a>
<a href="<?php echo site_url('addcontact');?>"><button  class="btn btn-success ">Add new contact</button></a>
 













 <div class="row ">
 
      <div class ="col-md-12  ">
<ul class="media-list">


<?php foreach($phone as $ph){
$i++;

if($i<=100) {

if(($i%2)!=0 ) 
{?>
<!-- Modal -->
<div class= "form" method ="POST">
<div class="modal fade" id ="<?php echo $ph['id'] ;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $ph['id'] ;?>Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="<?php echo $ph['id'] ;?>Label"><h2><?php echo $ph['first_name']. ' ' .  $ph['last_name'].'' ;?></h2></h4>
      </div>
      <div class="modal-body">



           <div class="form-group">
              <label class=" control-label"> First Name</label>
               <input class="form-control" type="text" placeholder="<?php echo $ph['first_name'];?>">
               
               
            </div>
            <div class="form-group">
              <label class=" control-label"> Last Name</label>
               <input class="form-control" type="text" placeholder="<?php echo $ph['last_name'];?>">
               
               
            </div>

<div class="form-group">
              <label class=" control-label"> Phone</label>
                <input class="form-control" type="text" placeholder="<?php echo $ph['phone_no'];?>">
               
               
            </div>

<div class="form-group">
              <label class=" control-label"> E Mail id</label>
                 <input class="form-control" type="text" placeholder="<?php echo $ph['email_id'];?>">
               
               
            </div>

<div class="form-group">
              <label class=" control-label"> Facebook ID</label>
                <input class="form-control" type="text" placeholder="<?php echo $ph['fb_id'];?>">
               
            </div>

<div class="form-group">
              <label class=" control-label"> Twitter ID</label>
                <input class="form-control" type="text" placeholder="<?php echo $ph['twitter_id'];?>">
               
               
            </div>

<div class="form-group">
              <label class=" control-label"> Google ID</label>
                 <input class="form-control" type="text" placeholder="<?php echo $ph['google_id'];?>">
               
            </div>

 

<div class="form-group">
              <label class=" control-label"> Location</label>
                 <input class="form-control" type="text" placeholder="<?php echo $ph['location'];?>">
               
            </div>
       </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

 <div class="row " >
 <div class =" col-md-6  "  >
 <li class="media well "    >
    <a class="pull-left" >
      <img class="media-object" data-src="holder.js/100x100" alt="" >
    </a>
    <div class="media-body">
      <h4 class="media-heading"><strong><?php echo $ph['first_name']. ' ' .  $ph['last_name'].'' ;?><strong></h4>
      <h4 class="media-heading"><?php echo $ph['phone_no'] ;?></h4>
      <h4 class="media-heading"><?php echo $ph['email_id'] ;?></h4>
    <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#<?php echo $ph['id'] ;?>">
  <span class="glyphicon glyphicon-pencil"></span>
</button>
 <a href="<?php echo site_url('home/delete/');?>/<?php echo $ph['id'];?>"><button class="btn btn-default btn-xs" >

 


  <span class="glyphicon glyphicon-trash"></span>
</button></a>
    </div>

  </li>

   </div>
<?php }   else {?>
<!-- Modal -->
<div class="modal fade" id ="<?php echo $ph['id'] ;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $ph['id'] ;?>Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="<?php echo $ph['id'] ;?>Label"><h2><?php echo $ph['first_name']. ' ' .  $ph['last_name'].'' ;?></h2></h4>
      </div>
       <div class="modal-body">



           <div class="form-group">
              <label class=" control-label"> First Name</label>
               <input class="form-control" type="text" placeholder="<?php echo $ph['first_name'];?>">
               
               
            </div>
            <div class="form-group">
              <label class=" control-label"> Last Name</label>
               <input class="form-control" type="text" placeholder="<?php echo $ph['last_name'];?>">
               
               
            </div>

<div class="form-group">
              <label class=" control-label"> Phone</label>
                <input class="form-control" type="text" placeholder="<?php echo $ph['phone_no'];?>">
               
               
            </div>

<div class="form-group">
              <label class=" control-label"> E Mail id</label>
                 <input class="form-control" type="text" placeholder="<?php echo $ph['email_id'];?>">
               
               
            </div>

<div class="form-group">
              <label class=" control-label"> Facebook ID</label>
                <input class="form-control" type="text" placeholder="<?php echo $ph['fb_id'];?>">
               
            </div>

<div class="form-group">
              <label class=" control-label"> Twitter ID</label>
                <input class="form-control" type="text" placeholder="<?php echo $ph['twitter_id'];?>">
               
               
            </div>

<div class="form-group">
              <label class=" control-label"> Google ID</label>
                 <input class="form-control" type="text" placeholder="<?php echo $ph['google_id'];?>">
               
            </div>

 

<div class="form-group">
              <label class=" control-label"> Location</label>
                 <input class="form-control" type="text" placeholder="<?php echo $ph['location'];?>">
               
            </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class ="col-md-6  " >
<li class="media well "   >
    <a class="pull-left" >
      <img class="media-object" data-src="holder.js/100x100" alt="" >
    </a>
    <div class="media-body">
      <h4 class="media-heading"><strong><?php echo $ph['first_name']. ' ' .  $ph['last_name'].''  ;?><strong></h4>
      <h4 class="media-heading"><?php echo $ph['phone_no'] ;?></h4>
      <h4 class="media-heading"><?php echo $ph['email_id'] ;?></h4>
    <button class="btn btn-default btn-xs " data-toggle="modal" data-target="#<?php echo $ph['id'] ;?>">
   <span class="glyphicon glyphicon-pencil"></span>
</button>
<button class="btn btn-default btn-xs " >
  <span class="glyphicon glyphicon-trash"></span>
</button>
    </div>
  </li>
</div>
</div>

<?php }} }?>

 

</ul>
 





</div>
</div>

   



 

  <button type="button" class="btn btn-success btn-lg btn-block " id="browse-shop">Browse all my contacts</button>

  <div class="row " id="grocery-detailed1">
    <div class="container">
 
   </div>
 </div>
</div>


<div class="col-lg-3">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Import Contacts  <span class="glyphicon glyphicon-circle-arrow-down pull-right"></span></h3>
  </div>
  <div class="panel-body">
    
    <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="<?php echo $staticContentUrl;?>assets/img/facebook.png" alt="Facebook">
  </a>
  <div class="media">
    <button type="button" class="btn btn-success col-xs-offset-2  " >Import</button>
    
  </div>
</div>


 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="<?php echo $staticContentUrl;?>assets/img/google.png" alt="Google">
  </a>
  <div class="media">
    <button type="button" class="btn btn-success col-xs-offset-2  " >Import</button>
    
  </div>
</div>

 





 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="<?php echo $staticContentUrl;?>assets/img/csv.jpg" alt="csv">
  </a>
  <div class="media">
    <button type="button" class="btn btn-success col-xs-offset-2  " >Import</button>
    
  </div>
</div>

<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="<?php echo $staticContentUrl;?>assets/img/twitter.png" alt="twitter">
  </a>
  <div class="media">
    <button type="button" class="btn btn-success col-xs-offset-2  " >Import</button>
    
  </div>
</div>

 </div>
 </div>



<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Export Contacts  <span class="glyphicon glyphicon-circle-arrow-up pull-right"></span></h3>
  </div>
  <div class="panel-body">
    
    <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="<?php echo $staticContentUrl;?>assets/img/csv.jpg" alt="CSV">
  </a>
  <div class="media">
    <a href="<?php echo site_url('home/csvexport');?>"><button type="button" class="btn btn-success col-xs-offset-2  " id="browse-shop-hide">Bulk Export</button></a>
    
  </div>
</div>
 </div>




          
        </div>
      </div>
   




 </div> <!-- /container -->





<!--main content area (except header,footer) ends -->
<?php $this->load->view('view_footer', array('jsFiles' => array('assets/js/modalopen.js')));?>
