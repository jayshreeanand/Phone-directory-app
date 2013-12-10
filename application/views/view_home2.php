<?php 
$staticContentUrl = base_url(); 
$this->load->view('view_header', array('pageTitle' => 'About','cssFiles' =>array())); 
?>


<!--main contents area starts here -->



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
    <img class="media-object" src="assets/img/facebook.png" alt="Facebook">
  </a>
  <div class="media">
    <button type="button" class="btn btn-success col-xs-offset-2  " >Import</button>
    
  </div>
</div>


 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="assets/img/google.png" alt="Google">
  </a>
  <div class="media">
    <button type="button" class="btn btn-success col-xs-offset-2  " >Import</button>
    
  </div>
</div>

 



 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="assets/img/skype.png" alt="skype">
  </a>
  <div class="media">
    <button type="button" class="btn btn-success col-xs-offset-2  " >Import</button>
    
  </div>
</div>


 <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="assets/img/csv.jpg" alt="skype">
  </a>
  <div class="media">
    <button type="button" class="btn btn-success col-xs-offset-2  " >Import</button>
    
  </div>
</div>

<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="assets/img/twitter.png" alt="twitter">
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
    <img class="media-object" src="assets/img/csv.jpg" alt="CSV">
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
<?php $this->load->view('view_footer', array('jsFiles' => array()));?>
