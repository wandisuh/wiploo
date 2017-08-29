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
              <a class="add-new-btn btn" href="#"><i class="ion-compose"></i> Add New Article</a>
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
            	<label class="ion-bookmark"> Check the list that you want to redeem below</label>
			  	<div class="panel panel-primary">
			  		
				  <!-- Default panel contents -->
				  <div class="panel-heading">All Post / Video Points</div>
				  

				  <!-- Table -->
				  <div class="table-responsive">
					  <form id="redeem-point">
					  	
					  	<table class="table">
						  	<thead> 
						  		<tr> <th>No.</th> 
						  		<th>Title</th> 
						  		<th>Points</th> 
						  		<th>Action</th>
						  		</tr> 
						  	</thead>

						  	<tbody> 
							  	<tr> 
							  		<th scope="row">1</th> 
							  		<td> Lorem ipsum dolor sit amte, dummy title goes here  </td> 
							  		<td>10000</td> 
							  		<td> <input type="checkbox" name="redeem" value="by Title" checked="checked"></td> 
							  		
							  	</tr> 
							  	<tr> 
							  		<th scope="row">2</th> 
							  		<td> Lorem ipsum dolor sit amte, dummy title goes here  </td> 
							  		<td>50000</td> 
							  		<td> <input type="checkbox" name="redeem" value="by Title" ></td> 
							  								  		
							  	</tr> 
							  	<tr> 
							  		<th scope="row">3</th> 
							  		<td> Lorem ipsum dolor sit amte, dummy title goes here  </td> 
							  		<td>10000</td> 
							  		<td> <input type="checkbox" name="redeem" value="by Title"></td> 							  		
							  	</tr> 
							 
						  	</tbody>
						  	 	<tfoot>
							  		<tr>
							  			<td>&nbsp;</td>
							  			<td>&nbsp;</td>
							  			<td>&nbsp;</td>

										<td class="text-right">
											<label>Enter Your Pssword</label>&nbsp;
										<input type="password" name="password"/>&nbsp;
										<button class="blue-btn btn" name="submit" value="Redeem">Redeem</button>
										</td>
									</tr>
										
							  	</tfoot>
						  </table>
						
					  </form>
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

