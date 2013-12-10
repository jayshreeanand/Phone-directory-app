<?php 
$staticContentUrl = base_url(); 
$this->load->view('view_header', array('pageTitle' => 'About','cssFiles' =>array())); 
$i = 0;
?>


<!--main contents area starts here -->



<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

      <div class="container">
<form class="form-inline pull-right" role="form">
  
  <button type="submit" class="btn btn-success">Log out</button>
</form>

    <div class="header">
        
        <h3 class="text-muted">Phone Directory App</h3>

      </div>



<div class="row">
  <div class="col-lg-9">


<div class="panel well">
  
  <div class="panel-body">


    <div class="col-lg-10 col-lg-offset-1">
    <div class="input-group input-group-lg " id="searchbox">
      <input type="text" placeholder ="Search by name /phone number/ email id/ or other keywords.."  id ="searchkey " data-provide="typeahead" data-source ="abc" autocomplete="off" class="form-control ">
      <span class="input-group-btn">
       
        <button class="btn btn-success" type="button"  onclick =" cv_search()">Go!</button> 
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

    </div>
  </div>



 <div class="row ">
 
      <div class ="col-md-12  ">
<ul class="media-list">


<?php foreach($user as $ph){
$i++;

if(($i%2)!=0) 
{?>

 <div class="row ">
 <div class =" col-md-6  phonedetail"  >
 <li class="media well "  style="cursor: pointer;" id ="<?php echo $ph['userid'] ;?>" >
    <a class="pull-left" >
      <img class="media-object" data-src="holder.js/50x50" alt="" >
    </a>
    <div class="media-body">
      <h4 class="media-heading"><strong><?php echo $ph['first_name']. ' ' .  $ph['last_name'].''.$i ;?><strong></h4>
      <h4 class="media-heading"><?php echo $ph['phone_no'] ;?></h4>
      <h4 class="media-heading"><?php echo $ph['email_id'] ;?></h4>
      
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
    
    </div>

  </li>

   </div>
<?php }   else {?>

<div class ="col-md-6  phonedetail" >
<li class="media well " onclick="location.href='home1';" style="cursor: pointer;" id ="<?php echo $ph['userid'] ;?>">
    <a class="pull-left" >
      <img class="media-object" data-src="holder.js/50x50" alt="" >
    </a>
    <div class="media-body">
      <h4 class="media-heading"><strong><?php echo $ph['first_name']. ' ' .  $ph['last_name'].''.$i  ;?><strong></h4>
      <h4 class="media-heading"><?php echo $ph['phone_no'] ;?></h4>
      <h4 class="media-heading"><?php echo $ph['email_id'] ;?></h4>
    
    </div>
  </li>
</div>
</div>

<?php }}?>

</ul>
 





</div>
</div>

   



 

  <button type="button" class="btn btn-success btn-lg btn-block " id="browse-shop">Browse all my contacts</button>

  <div class="row " id="grocery-detailed">
    <div class="container">
  <div class ="col-lg-12 panel panel-primary">
    <div class="media">
  <a class="pull-left grocery-list-1" >
    <img class="media-object pull-left " data-src="holder.js/397x50"   alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>

   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>


   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>


   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>

   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>

   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>

   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>

   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>

   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>

   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>

   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>

   <div class="media">
  <a class="pull-left">
    <img class="media-object pull-left " data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  
  <a class="pull-left">
    <img class="media-object pull-right" data-src="holder.js/397x50"  id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  </div>
<button type="button" class="btn btn-success btn-lg btn-block " id="browse-shop-hide">Hide this!</button>
</div>
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
    <img class="media-object" src="<?php echo $staticContentUrl;?>assets/img/skype.png" alt="skype">
  </a>
  <div class="media">
    <button type="button" class="btn btn-success col-xs-offset-2  " >Import</button>
    
  </div>
</div>


 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="<?php echo $staticContentUrl;?>assets/img/csv.jpg" alt="skype">
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
    <button type="button" class="btn btn-success col-xs-offset-2  " id="browse-shop-hide">Bulk Export</button>
    
  </div>
</div>
 </div>




          
        </div>
      </div>
   




 </div> <!-- /container -->





<!--main content area (except header,footer) ends -->
<?php $this->load->view('view_footer', array('jsFiles' => array('assets/js/modalopen.js')));?>
