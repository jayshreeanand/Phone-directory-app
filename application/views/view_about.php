<?php 
$staticContentUrl = base_url(); 
$this->load->view('view_header', array('pageTitle' => 'About','cssFiles' =>array())); 
?>


<!--main contents area starts here -->



      <div class="container">
<form class="form-inline pull-right" role="form">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-success">Sign in</button>
</form>

    <div class="header">
        
        <h3 class="text-muted">ClickGrocer.com</h3>

      </div>

<ol class="breadcrumb">
  <li><a href="#">Chennai</a></li>
  <li><a href="#">Anna Nagar</a></li>
  <li class="active">Murugan Stores</li>


</ol>


<div class="row">
  <div class="col-lg-9">
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Murugan stores <span class="label label-success">New!</span></h3>
  </div>
  <div class="panel-body">
    
    <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" data-src="holder.js/200x150" alt="Murugan Stores, Anna Nagar">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Chennai's Best online Grocery store</h4>
    Store location: No.10, Nelson Manikam road </br>
    Delivery Timings: 9.00 am to 9.00 pm

  </div>
</div>
  </div>
</div>

<div class="panel panel-default">
  
  <div class="panel-body">


    <div class="col-lg-10 col-lg-offset-1">
    <div class="input-group input-group-lg " id="searchbox">
      <input type="text" placeholder ="Search by store or area.."  id ="searchkey " data-provide="typeahead" data-source ="abc" autocomplete="off" class="form-control ">
      <span class="input-group-btn">
       
        <button class="btn btn-success" type="button"  onclick =" cv_search()">Go!</button> 
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

    </div>
  </div>

<div class="row">
<div class="panel panel-primary col-lg-6">
  
  <div class="panel-body">
    
    <div class="media">
  <a class="pull-left" data-toggle="tooltip" title data-original-title="Grains" data-placement="top" >
    <img class="media-object " data-src="holder.js/100x100"   id ="grocery" alt="Murugan Stores, Anna Nagar">
  </a>
  <a class="pull-left" data-toggle="tooltip" title data-original-title="Fruits and Vegetables" data-placement="top"  >
    <img class="media-object " data-src="holder.js/100x100"  alt="Murugan Stores, Anna Nagar">
  </a>
  <a class="pull-left"  data-toggle="tooltip" title data-original-title="Processed Foods" data-placement="top"  >
    <img class="media-object " data-src="holder.js/100x100"  alt="Murugan Stores, Anna Nagar">
  </a>
  
  

</div>
  <div class="media" >
  <a class="pull-left data-toggle="tooltip" title data-original-title="Breakfast foods" data-placement="top" " >
    <img class="media-object" data-src="holder.js/100x100"  alt="Murugan Stores, Anna Nagar">
  </a>
  <a class="pull-left" data-toggle="tooltip" title data-original-title="Soaps and detergents" data-placement="top" >
    <img class="media-object" data-src="holder.js/100x100" alt="Murugan Stores, Anna Nagar">
  </a>
  <a class="pull-left" data-toggle="tooltip" title data-original-title="Spices" data-placement="top"  >
    <img class="media-object" data-src="holder.js/100x100"  alt="Murugan Stores, Anna Nagar">
  </a>
  
  

</div>

<div class="media"  >
  <a class="pull-left" data-toggle="tooltip" title data-original-title="Canned Food" data-placement="top" >
    <img class="media-object" data-src="holder.js/100x100" alt="Murugan Stores, Anna Nagar">
  </a>
  <a class="pull-left" data-toggle="tooltip" title data-original-title="Grocery Essentials" data-placement="top"  >
    <img class="media-object" data-src="holder.js/100x100" alt="Murugan Stores, Anna Nagar">
  </a>
  <a class="pull-left" data-toggle="tooltip" title data-original-title="Soaps and Detergents" data-placement="top" >
    <img class="media-object" data-src="holder.js/100x100" alt="Murugan Stores, Anna Nagar">
  </a>
  
  
</div>
</div>




</div>


<div class=" col-lg-3">
  
   <a class="pull-left" href="#">
    <img class="media-object" id="grocery-main"  data-src="holder.js/410x360" alt="Murugan Stores, Anna Nagar">
    <span class="glyphicon glyphicon-shopping-cart pull-right"></span>
  </a>
  </div>




    
  </div>
  <button type="button" class="btn btn-success btn-lg btn-block " id="browse-shop">Browse and Shop</button>

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
    <h3 class="panel-title">Cart Section  <span class="glyphicon glyphicon-shopping-cart pull-right"></span></h3>
  </div>
  <div class="panel-body">
    
    <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" data-src="holder.js/100x100" alt="Murugan Stores, Anna Nagar">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Details</h4>
    ...
  </div>
</div>
 </div>




<ul class="list-group">
  <li class="list-group-item">
    <span class="badge">5</span>
   Total items in Cart
  </li>
</ul>



<div class="list-group">

 <div class="media">
  <a class=" list-group-item" href="#">
<span>
    <img class="media-object" data-src="holder.js/50x50" alt="Murugan Stores, Anna Nagar">
   </span>


  </a>
   <a class=" list-group-item" href="#">
    <img class="media-object" data-src="holder.js/50x50" alt="Murugan Stores, Anna Nagar">
  
  </a>
   <a class=" list-group-item" href="#">
    <img class="media-object" data-src="holder.js/50x50" alt="Murugan Stores, Anna Nagar">
  
  </a>
   <a class=" list-group-item" href="#">
    <img class="media-object" data-src="holder.js/50x50" alt="Murugan Stores, Anna Nagar">
  
  </a>
   <a class=" list-group-item pull-left" href="#">
    <img class="media-object" data-src="holder.js/50x50" alt="Murugan Stores, Anna Nagar">
  
  
  </a>


</div>

</div>





</div> <!--row ends here-->

        





<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Billing Details  <span class="glyphicon glyphicon-user pull-right"></span></h3>
  </div>
  <div class="panel-body">
    
    


            <div class="form-group">
              
            <div class="form-group">
              <label class=" control-label">Billing Address</label>
              
                <input type="text" class="form-control" placeholder="12, Park Street">
                <input type="text" class="form-control input-top-fix" placeholder="Mylapore">
            </div>
           
                <div class="form-group">
            
            
                <input type="text" class="form-control" placeholder="600012">               
            </div>
           
            <div class="form-group">
              
             
                <select class="form-control">
                  <option>Chennai</option>
                  <option>Bangalore</option>
                </select>
            </div>
           
            <div class="form-group">
              
                           
                <input type="text" class="form-control" placeholder="India">
              </div>
           
            <hr/>
            <div class="form-group">
              
                <input type="checkbox" checked/>
              
              
                Use Billing Address as Shipping Address.
            
            </div>
          </div>
          
        </div>
      </div>
   




 </div> <!-- /container -->





<!--main content area (except header,footer) ends -->
<?php $this->load->view('view_footer', array('jsFiles' => array()));?>
