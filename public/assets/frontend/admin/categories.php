<?php include"header.php"; ?>
<?php include"header-admin.php"; ?>
<?php include 'side-menu.php'; ?>
    
    <section id="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="header-font"><i class="ion-edit"></i> Howdy Suteja Indrayana!</h1>
                </div>
                <div class="col-md-4">
                    <h2 class="header-font text-right"><i class="ion-android-star"></i> My Point : 560</h2>
                </div>
                  <div class="col-md-4">
                    <h2 class="header-font text-right"><i class="ion-android-star"></i> Latest Activity : </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="vertical-padding form-container white-bg page-wrapper">
        <div class="container">
          <div class="row">
            
            <div class="col-md-6 col-sm-6 ">	
            	<label class="ion-bookmark"> Add New Category</label>
            	<form id="category-form-wrapper">
	            	<div class="input-group width-100">
	            		<label>Category Name</label><br/>
	            		<input type="text" name="category-name" class="width-100" placeholder="Category Name" />
	            	</div>
	            	<div class="input-group width-100">
	            		<label>Parent Category</label><br/>
	            		 <select id="parent-cat-list" class="width-100">
						    <option>Travelling</option>
						    <option>Love</option>
						    <option>Lifestyle</option>
						  </select>
	            	</div>
	            	<div class="input-group width-100">
	            		<label>Category Description</label><br/>
	            		<textarea name="category-description" class="width-100" rows="5" placeholder="Category Description" /></textarea> 
	            	</div>
	            	<div class="input-group width-100 text-right">
	            		<button class="publish" value="Add New Category">Add New Category</button>
	            	</div>
            	</form>
			    
			</div>	
			


            <div class="col-md-6 col-sm-6">

            	<label class="ion-bookmark"> All Category Lists</label>
            	<div class="input-group">
			      <span class="input-group-addon">
			        <i class="ion-search"></i>
			      </span>
			      <input type="text" class="form-control" placeholder="Search. . .">
			    </div>
			  	<div class="panel panel-primary">
				  <!-- Default panel contents -->
				  <div class="panel-heading">All Categories</div>
				  

				  <!-- Table -->
				  <div class="table-responsive">
					  <table class="table">
					  	<thead> 
					  		<tr> 
					  			<th>Category Name</th> 
					  			<th>Parent Category</th> 
					  			<th>Action</th> 
					  		</tr> 
					  	</thead>
					  	<tbody> 
						  	<tr> 
						  		
						  		<td> Category 1 </td> 
						  		<td>Travelling</td> 
						  		<td><a href="#"><i class="ion-edit"></i>  Edit</a> | <a href="#"><i class="ion-ios-trash"></i>  Trash</a></td>
						  		
						  	</tr> 
						  	<tr> 
						  		<td> Category 1 </td> 
						  		<td>Travelling</td> 
						  		<td><a href="#"><i class="ion-edit"></i>  Edit</a> | <a href="#"><i class="ion-ios-trash"></i>  Trash</a></td>
						  		
						  	</tr> 
						  	<tr> 
						  		<td> Category 1 </td> 
						  		<td>Travelling</td> 
						  		<td><a href="#"><i class="ion-edit"></i>  Edit</a> | <a href="#"><i class="ion-ios-trash"></i>  Trash</a></td>
						  		
						  	</tr> 
					  	</tbody>
					  </table>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 text-center">
					<nav aria-label="Page navigation">
					  <ul class="pagination">
					    <li>
					      <a href="#" aria-label="Previous">
					        <span aria-hidden="true">&laquo;</span>
					      </a>
					    </li>
					    <li><a href="#">1</a></li>
					    <li><a href="#">2</a></li>
					    <li><a href="#">3</a></li>
					    <li>
					      <a href="#" aria-label="Next">
					        <span aria-hidden="true">&raquo;</span>
					      </a>
					    </li>
					  </ul>
					</nav>
				</div>
             </div>
              	

            </div>
          </div>
        </div>
    </section>

<?php include"footer.php"; ?>

