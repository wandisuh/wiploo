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
            <div class="col-md-6 col-sm-6 vertical-padding">
              <a class="add-new-btn btn" href="#"><i class="ion-compose"></i> Add New</a>
            </div>
            <div class="col-md-6 col-sm-6 vertical-padding">
			    <div class="input-group">
			      <span class="input-group-addon">
			        <i class="ion-search"></i>
			      </span>
			      <input type="text" class="form-control" placeholder="Search. . .">
			    </div>
			</div>
			


            <div class="col-md-12 vertical-padding">
			  	<div class="panel panel-primary">
				  <!-- Default panel contents -->
				  <div class="panel-heading">All Post</div>
				  

				  <!-- Table -->
				  <div class="table-responsive">
					  <table class="table">
					  	<thead> 
					  		<tr> <th>No.</th> 
					  		<th>Title</th> 
					  		<th>Category</th> 
					  		<th>Status</th> 
					  		<th>Action</th> </tr> 
					  	</thead>
					  	<tbody> 
						  	<tr> 
						  		<th scope="row">1</th> 
						  		<td> Lorem ipsum dolor sit amte, dummy title goes here  </td> 
						  		<td>Love tips</td> 
						  		<td><span class="label label-success">Published</span></td> 
						  		<td><a href="#"><i class="ion-edit"></i>  Edit</a> | <a href="#"><i class="ion-ios-trash"></i>  Trash</a></td>
						  	</tr> 
						  	<tr> 
						  		<th scope="row">2</th> 
						  		<td> Lorem ipsum dolor sit amte, dummy title goes here  </td> 
						  		<td>Love tips</td> 
						  		<td><span class="label label-success">Published</span></td> 
						  		<td><a href="#"><i class="ion-edit"></i>  Edit</a> | <a href="#"><i class="ion-ios-trash"></i>  Trash</a></td>
						  	</tr> 
						  	<tr> 
						  		<th scope="row">3</th> 
						  		<td> Lorem ipsum dolor sit amte, dummy title goes here  </td> 
						  		<td>Love tips</td> 
						  		<td><span class="label label-success">Published</span></td> 
						  		<td><a href="#"><i class="ion-edit"></i>  Edit</a> | <a href="#"><i class="ion-ios-trash"></i>  Trash</a></td>
						  	</tr> 
					  	</tbody>
					  </table>
					</div>
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
    </section>

<?php include"footer.php"; ?>

