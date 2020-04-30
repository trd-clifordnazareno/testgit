<html><head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script type="text/javascript" src="./js/manage.js"></script>


   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
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
        <a class="nav-link" href="dashboard.php"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
      </li>
      
                    <li class="nav-item active">
              <a class="nav-link" href="logout.php"><i class="fa fa-user">&nbsp;</i>Logout</a>
            </li>
                    
    </ul>
  </div>
</nav>	<br><br>
	<div class="container">
		<table class="table table-hover table-bordered" id="myTable">
		    <thead>
		      <tr>
		        <!--<th>#</th>
		        <th>Product</th>
		        <th>Category</th>
		        <th>Brand</th>
		        <th>Price</th>
		        <th>Stock</th>
		        <th>Added Date</th>
		        <th>Status</th>-->
            <th>#</th>
            <th>Description</th>
		        <th>Brands</th>
            <th>Asset Classification</th>
            <th>Supplier</th>
            <th>Qty</th>
            <th>Work Station</th>
            <th>Status</th>
            <th>On hand by</th>
            <th>Acquisition date</th>
            <th>Amount</th>
            <th>Station</th>
            <th>Actions</th>
		      </tr>
		    </thead>
		    <tbody id="get_product"><br>



        <?php
        $servername = "ftp.richmedia.com.ph";
        $username = "richmed_rmni_admin";
        $password = "rmni_admin";
        $dbname = "richmed_inventory";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM office_work_supplies";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["serial_no"]. "</td>";
                echo "<td>" . $row["Description"]. "</td>";
                echo "<td>" . $row["brand"]. "</td>";
                echo "<td>" . $row["ass_class"]. "</td>";
                echo "<td>" . $row["supplier"]. "</td>";
                echo "<td>" . $row["qty"]. "</td>";
                echo "<td>" . $row["work_station"]. "</td>";
                echo "<td>" . $row["status"]. "</td>";
                echo "<td>" . $row["on_hand_by"]. "</td>";
                echo "<td>" . $row["acquisition_date"]. "</td>";
                echo "<td>" . $row["amount"]. "</td>";
                echo "<td>" . $row["station"]. "</td>";
                ?>
                <td>
			        	<a href="#" did="29" onclick='delete_supply_function(<?php echo $row["serial_no"]; ?>, <?php echo $row["owsid"]; ?>)' class="btn btn-danger btn-sm del_product">Delete</a>
			        	<a href="#" eid="29" data-toggle="modal" data-target="#form_products<?php echo $row["serial_no"]; ?>" class="btn btn-info btn-sm edit_product">Edit</a>
			        </td>




              <!-- Modal -->
                      <div class="modal fade" id="form_products<?php echo $row["serial_no"]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                            <div id="update_successfully<?php echo $row["serial_no"]; ?>"></div>
                              <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form id="update_product_form" onsubmit="return false"></form>
                                <div class="form-row">
                                  <!--<div class="form-group col-md-6">
                                    <input type="hidden" name="pid" id="pid" value="">
                                    <label>Date</label>
                                    <input type="text" class="form-control" name="added_date" id="added_date" value="<?php echo $row["acquisition_date"];    ?>" required="">
                                  </div>-->
                                  
                                </div>
                                
                                
                                <div class="form-group">
                                  <label>serial_no</label>
                                  <input type="text" class="form-control" id="serial_no<?php echo $row["serial_no"];    ?>" value="<?php echo $row["serial_no"];    ?>" name="product_price" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                  <label>Description</label>
                                  <input type="text" class="form-control" id="Descriptions<?php echo $row["serial_no"]; ?>" value="<?php echo $row["Description"];    ?>" name="product_qty" placeholder="" required="">
                                </div>

                                  <div class="form-group">
                                              <label>brand</label>
                                              <input type="text" class="form-control" id="brand<?php echo $row["serial_no"]; ?>" value="<?php echo $row["brand"];    ?>" name="product_station" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                              <label>ass_class</label>
                                              <input type="text" class="form-control" id="ass_class<?php echo $row["serial_no"]; ?>" value="<?php echo $row["ass_class"];    ?>" name="product_onhand" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                              <label>supplier</label>
                                              <input type="text" class="form-control" id="supplier<?php echo $row["serial_no"]; ?>" value="<?php echo $row["supplier"];    ?>" name="product_Location" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                              <label>qty</label>
                                              <input type="text" class="form-control" id="qty<?php echo $row["serial_no"]; ?>" value="<?php echo $row["qty"];    ?>" name="qty" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                              <label>work_station</label>
                                              <input type="text" class="form-control" id="work_station<?php echo $row["serial_no"]; ?>" value="<?php echo $row["work_station"];    ?>" name="product_Location" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                              <label>status</label>
                                              <input type="text" class="form-control" id="status<?php echo $row["serial_no"]; ?>" value="<?php echo $row["status"];    ?>" name="product_Location" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                              <label>on_hand_by</label>
                                              <input type="text" class="form-control" id="on_hand_by<?php echo $row["serial_no"]; ?>" value="<?php echo $row["on_hand_by"];    ?>" name="product_Location" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                              <label>acquisition_date</label>
                                              <input type="text" class="form-control" id="acquisition_date<?php echo $row["serial_no"]; ?>" value="<?php echo $row["acquisition_date"];    ?>" name="product_Location" placeholder="" required="">
                                            </div>
                                            <div class="form-group">
                                              <label>amount</label>
                                              <input type="text" class="form-control" id="amount<?php echo $row["serial_no"]; ?>" value="<?php echo $row["amount"];    ?>" name="product_Location" placeholder="" required="">
                                            </div>



                                            <button type="submit" class="btn btn-success" onclick='myFunction(
                                              document.getElementById("serial_no<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("Descriptions<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("brand<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("ass_class<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("supplier<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("qty<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("work_station<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("status<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("on_hand_by<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("acquisition_date<?php echo $row["serial_no"]; ?>").value,
                                              document.getElementById("amount<?php echo $row["serial_no"]; ?>").value
                                              )'>Update Now</button>
                                            <script>
                                          /*document.getElementById("update<?php echo $row["serial_no"]; ?>").onclick = function(){
                                            call_update_function()
                                            //alert(document.getElementById("Descriptions<?php //echo $row["serial_no"]; ?>").value)
                                            };

                                            call_update_function = function(){

                                              $(document).ready(function(){
                                                  var var_data = $("#Descriptions<?php echo $row["serial_no"]; ?>").val();
                                                  
                                                    $.ajax({
                                                    type: "GET",
                                                    url: "http://localhost/AgilaDS/time_con.php",
                                                    data: var_data,
                                                    cache: false,
                                                    success: function(data){
                                                      alert(var_data);
                                                    }
                                                });
                                              }); 
                                            }*/
                                        </script>




                                        <script>
                                        function myFunction(serial_no, Descriptions, brand, ass_class, supplier, qty, work_station, status, on_hand_by, acquisition_date, amount) {
                                          $(document).ready(function(){
                                                                                          var var_data = {
                                                                                            serial_no : serial_no,
                                                                                            Descriptions : Descriptions,
                                                                                            brand : brand,
                                                                                            ass_class : ass_class,
                                                                                            supplier : supplier,
                                                                                            qty : qty,
                                                                                            work_station : work_station,
                                                                                            status : status,
                                                                                            on_hand_by : on_hand_by,
                                                                                            acquisition_date : acquisition_date,
                                                                                            amount : amount
                                                                                          };
                                                                                          
                                                                                            $.ajax({
                                                                                            type: "GET",
                                                                                            url: "scripts/update_office_supplies.php",
                                                                                            data: var_data,
                                                                                            cache: false,
                                                                                            success: function(data){
                                                                                              $("#update_successfully"+serial_no).html(data);
                                                                                            }
                                                                                        });
                                                                                      });
                                        }
                                        function delete_supply_function(serial_no, owsid){
                                          $(document).ready(function(){
                                                                                          var var_data = {
                                                                                            serial_no : serial_no,
                                                                                            owsid : owsid
                                                                                          };
                                                                                          
                                                                                            $.ajax({
                                                                                            type: "GET",
                                                                                            url: "scripts/delete_supply_function.php",
                                                                                            data: var_data,
                                                                                            cache: false,
                                                                                            success: function(data){
                                                                                              if(data = true){location.reload();}
                                                                                            }
                                                                                        });
                                                                                      });
                                        }
                                        </script>
                                        <script>
                                        $(document).ready( function () {
                                          $('#myTable').DataTable();
                                        } );
                                        </script>
                                          
                                        </div>
                                        

                      
                          </div>
                        </div>
                      </div>
                <?php
                echo "</tr>";
                
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

				
						<!--<tr><td colspan="5"><ul class="pagination"><li class="page-item"><a class="page-link" pn="1" href="#" style="color:#333;"> 1 </a></li></ul></td></tr>-->
		</tbody>
		  </table>
	</div>


		
	

</body></html>
