<html><head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script type="text/javascript" src="./js/main.js"></script>
 </head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Inventory System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="login.php"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
      </li>
      
                    <li class="nav-item active">
              <a class="nav-link" href="logout.php"><i class="fa fa-user">&nbsp;</i>Logout</a>
            </li>
                    
    </ul>
  </div>
</nav>	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto">
				  <img class="card-img-top mx-auto" style="width:60%;" src="./image/rich.png" alt="Card image cap">
				  <div class="card-body">
				    <h4 class="card-title">Profile Info</h4>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Rey Quimbo</p>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>Admin</p>
				    <p class="card-text">Last Login : xxxx-xx-xx</p>
				    <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="jumbotron" style="width:100%;height:100%;">
					<h1>Welcome Admin,</h1>
					<div class="row">
						<div class="col-sm-6">
							<!--<iframe src="http://free.timeanddate.com/clock/i616j2aa/n1993/szw160/szh160/cf100/hnce1ead6" frameborder="0" width="160" height="160"></iframe>-->

						</div>
						<!--<div class="col-sm-6">
							<div class="card">
						      <div class="card-body">
						        <h4 class="card-title">New Orders</h4>
						        <p class="card-text">Here you can make invoices and create new orders</p>
						        <a href="new_order.php" class="btn btn-primary">New Orders</a>
						      </div>
						    </div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<p></p>
	<p></p>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">User</h4>
						<p class="card-text">Here you can manage your categories and you add new parent and sub categories</p>
					<a href="Registration.php" data-toggle="" data-target="#" class="btn btn-primary">Add</a>
						<a href="#" class="btn btn-primary">View</a>
					</div>
				</div>
			</div>
			<!--<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Brands</h4>
						<p class="card-text">Here you can manage your brand and you add new brand</p>
						<a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
						<a href="manage_brand.php" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>-->
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Products</h4>
						<p class="card-text">Here you can manage your prpducts and you add new products</p>
						<a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
						<a href="manage_product.php" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	
	<!-- Modal -->
<div class="modal fade" id="form_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="category_form" onsubmit="return false">
          <div class="form-group">
            <label>Category Name</label>
            <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="cat_error" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Parent Category</label>
            <select class="form-control" id="parent_cat" name="parent_cat"><option value="0">Root</option><option value="15">Desktop PC</option><option value="16">Cellphone</option><option value="17">TV</option><option value="18">Air conditioner</option><option value="19">Software</option><option value="20">UTP Cable</option><option value="21">Table Chair</option><option value="22">Water Despencer</option><option value="23">Office supplies</option><option value="24">Mini computers</option><option value="25">Printer</option></select>
            
           
            
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	 <!-- Modal -->
<div class="modal fade" id="form_brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Brand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="brand_form" onsubmit="return false">
          <div class="form-group">
            <label>Brand Name</label>
            <input type="text" class="form-control" name="brand_name" id="brand_name" placeholder="Enter Brand Name">
            <small id="brand_error" class="form-text text-muted"></small>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>	 <!-- Modal -->
<div class="modal fade" id="form_products" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="product_form" onsubmit="return false">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Acquisition Date</label>
              <input type="text" class="form-control" name="added_date" id="acquisition_date" value="2020-03-30">
            </div>
            <div class="form-group col-md-6">
              <label>Description</label>
              <input type="text" class="form-control" name="product_name" id="description" placeholder="Enter Product Name" required="">
            </div>
          </div>
          <div class="form-group">
            <label>Asset Classification</label>
            <select type="text"  class="form-control" id="ass_class" required=""><option value="">Choose Category</option><option value="Desktop PC">Desktop PC</option><option value="Cellphone">Cellphone</option><option value="TV">TV</option><option value="Air conditioner">Air conditioner</option><option value="Software">Software</option><option value="UTP Cable">UTP Cable</option><option value="Table Chair">Table Chair</option><option value="Water Despencer">Water Despencer</option><option value="Office supplies">Office supplies</option><option value="Mini computers">Mini computers</option><option value="Printer">Printer</option></select>
          </div>
          <div class="form-group">
            <label>Brand</label>
            <select class="form-control" id="brand" name="select_brand" required=""><option value="">Choose Brand</option><option value="Devant">Devant</option><option value="Samsung">Samsung</option><option value="HP">HP</option><option value="Carrie">Carrier</option><option value="Microsoft Office">Microsoft Office</option><option value="RG 45 Lan Cable">RG 45 Lan Cable</option></select>
          </div>
          <div class="form-group">
            <label>Supplier</label>
            <input type="text" class="form-control" id="supplier" name="product_price" placeholder="Enter Price of Product" required="">
          </div>
          <div class="form-group">
            <label>Amount</label>
            <input type="text" class="form-control" id="amount" name="product_price" placeholder="Enter Price of Product" required="">
          </div>
          <div class="form-group">
            <label>Quantity</label>
            <input type="text" class="form-control" id="qty" name="product_qty" placeholder="Enter Quantity" required="">
          </div>
          
          
          <div class="form-group">
            <label>Status</label>
            <select type="text"  class="form-control" id="status" required=""><option value="">Choose Category</option><option value="Good">Good</option><option value="Repaired">Repaired</option><option value="Not Good">Not Good</option><option value="Unusable">Unusable</option></select>
          </div>
          <div class="form-group">
            <label>Onhand</label>
            <input type="text" class="form-control" id="on_hand_by" name="product_onhand" placeholder="On Hand By" required="">
          </div>
          <div class="form-group">
            <label>Station</label>
            <input type="text" class="form-control" id="station" name="product_onhand" placeholder="On Hand By" required="">
          </div>
          <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" id="work_station" name="product_Location" placeholder="Enter Location" required="">
          </div>
          <div class="form-group">
            <label>Serial No.</label>
            <input type="text" class="form-control" id="serial_no" name="product_Location" placeholder="Enter Location" required="">
          </div>
          


         <!-- Wala pay function ni-->
         <!--   <div class="form-group">
            <label>Workstation</label>
            <input type="text" class="form-control" id="product_station" name="product_station" placeholder="Enter Whom Workstation" required/>

          <!--  <select class="form-control" id="Product_workstation" name="Product_workstation" placeholder= "Enter Which Department" required/>
                   <option id="Product_workstation" name="Product_workstation">Jeremy Huang</option>
                          <option>IT Department</option>
                          <option>HR Department</option>
                          <option>Sales Department</option>
                          <option>Accounting Department</option>
           </select>-->
         <!-- </div>



          <!-- Wala pay function ni-->
        <!--  <div class="form-group">
            <label>On Hand By</label>

            <input type="text" class="form-control" id="product_onhand" name="product_onhand" placeholder="Enter Name" required/>
           <select class="form-control" id="On_Hand" name="On_Hand" placeholder= "Enter on hand Name" required/>
                   <option id="On_Hand" name="On_Hand"> Jeremy Huang</option>
                          <option>Rey</option>
                          <option>Clifford</option>
                          <option>Elmer</option>
                          <option>Marvin</option>
                          <option>Nick</option>
                          <option>Allen</option>
                          <option>Bas</option>
                          <option>Ivy</option>
                          <option>Holly</option>
                          <option>Rolyn</option>
                          <option>Aileen</option>
              </select> 
          </div>-->






          <button type="submit" class="btn btn-success" id="reg">Add Product</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</body></html>
<script>
document.getElementById("reg").onclick = function(){
  regester();
}
regester = function(){
  $(document).ready(function(){
                                                                                          var var_data = {
                                                                                            serial_no : $("#serial_no").val(),
                                                                                            description : $("#description").val(),
                                                                                            brand : $("#brand").val(),
                                                                                            ass_class : $("#ass_class").val(),
                                                                                            supplier : $("#supplier").val(),
                                                                                            qty : $("#qty").val(),
                                                                                            work_station :$("#work_station").val(),
                                                                                            station : $("#station").val(),
                                                                                            status : $("#status").val(),
                                                                                            on_hand_by : $("#on_hand_by").val(),
                                                                                            acquisition_date : $("#acquisition_date").val(),
                                                                                            amount : $("#amount").val(),
                                                                                          };
                                                                                          
                                                                                            $.ajax({
                                                                                            type: "GET",
                                                                                            url: "scripts/reg_office_supplies.php",
                                                                                            data: var_data,
                                                                                            cache: false,
                                                                                            success: function(data){
                                                                                              alert(data);
                                                                                            }
                                                                                        });
                                                                                      });
}
</script>