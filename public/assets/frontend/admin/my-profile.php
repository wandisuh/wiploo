<?php include"header.php"; ?>
<?php include"header-admin.php"; ?>
<?php include 'side-menu.php'; ?>
      <section id="dashboard-header">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <h1 class="header-font"><i class="ion-home"></i> My Profile</h1>
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
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-4">
                      <div class="profile-picture">
                        <img class="img-circle" src="assets/images/teja.jpg" height="200">
                      </div>
                  </div>
                  
                  <div class="col-md-8 col-sm-8">
                    <div class="profile-wrapper well">
                      <h3 class="header-font">Profile Details</h3>
                      <span style="float:right; padding: 0 5px;"><a href="edit.php"><i class="ion-edit"></i>  Edit</a></span>
                      <hr/>
                      <p>Full name : Suteja Indrayana</p>
                      <p>Email : indrayanasoetedja@gmail.com</p>
                      <p>Phone : +6285695142426</p>
                      <p>Password : ********** </p>
                      <p>Address : Jl. Kp Ciakar, RT 03/RW 04, Panongan. Tangerang 15710</p>

                    </div>
                    <div class="profile-wrapper well">
                      <h3 class="header-font">Payment Details</h3>
                      <span style="float:right; padding: 0 5px;"><a href="#"><i class="ion-edit"></i>  Edit</a></span>
                      <hr/>
                      <p>Bank Name : Bank Central Asia</p>
                      <p>Account Name : Suteja Indrayana</p>
                      <p>Account Number : 8820578474</p>
                      <p>Phone : +6285695142426</p>

                    </div>
                  </div>
              </div>
          </div>
      </section>
<?php include"footer.php"; ?>