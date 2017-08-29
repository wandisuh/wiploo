<?php include"header.php"; ?>
<?php include"header-admin.php"; ?>
<?php include 'side-menu.php'; ?>
      <section id="dashboard-header">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <h1 class="header-font"><i class="ion-home"></i> Dashboard</h1>
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

      <section id="dashboard-wrapper" class="vertical-padding white-bg page-wrapper">
          <?php include"dashboard-button.php"; ?>
          <div class="container vertical-padding">
              <div class="row">
                  <div class="col-md-4 col-sm-4">
                      <div id="latest-panel" class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">Your Latest Post</h3>
                        </div>
                        <div class="panel-body">
                          <p><a class="header-font" href="#">Article 1</a><br/>
                          Lorem ipsum dolor sit amte, dummy content goes here ... <a href="#"><i class="ion-edit"></i>  Edit</a>
                          </p>
                        
                           <p><a class="header-font" href="#">Article 2</a><br/>
                          Lorem ipsum dolor sit amte, dummy content goes here ... <a href="#"><i class="ion-edit"></i>  Edit</a>
                          </p>
                          <p>
                           <p><a class="header-font" href="#">Article 3</a><br/>
                          Lorem ipsum dolor sit amte, dummy content goes here ... <a href="#"><i class="ion-edit"></i>  Edit</a>
                          </p>
                          <p>
                           <p><a class="header-font" href="#">Video</a><br/>
                          Lorem ipsum dolor sit amte, dummy content goes here ... <a href="#"><i class="ion-edit"></i>  Edit</a>
                          </p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-4">
                      <div id="stats-panel" class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">You point Status</h3>
                          <span>Redeem your point when the bar is on 100%</span>
                        </div>
                        <div class="panel-body">
                          <div class="progress">
                             
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width:70%">
                              70%  Article Post
                            </div>
                          </div>
                          <div class="progress">
                             
                            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 30%;">
                              30% Video Post
                            </div>
                          </div>
                           <p class="text-center"><a class="blue-btn btn" href="#">Redeem Your Point</a></p>
                        </div>

                      </div>
                  </div>
                   <div class="col-md-4 col-sm-4">
                      <div id="stats-panel" class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">You post/video Status</h3>
                        </div>
                         <div class="panel-body">
                          <p><a class="header-font" href="#">Article 1</a><br/>
                          Lorem ipsum dolor sit amte, dummy content goes here ... <a href="#"><i class="ion-edit"></i>  Edit</a> | Status : <span class="label label-success">Published</span></p>
                           <p><a class="header-font" href="#">Video</a><br/>
                          Lorem ipsum dolor sit amte, dummy content goes here ... <a href="#"><i class="ion-edit"></i>  Edit</a> | Status : <span class="label label-success">Published</span></p>
                        
                           <p><a class="header-font" href="#">Article 3</a><br/>
                          Lorem ipsum dolor sit amte, dummy content goes here ... <a href="#"><i class="ion-edit"></i>  Edit</a>  | Status : <span class="label label-warning">Pending review</span>
                          </p>
                    
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
<?php include"footer.php"; ?>