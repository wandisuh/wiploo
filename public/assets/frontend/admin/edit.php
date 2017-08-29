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

      <section id="dashboard-wrapper" class="vertical-padding page-wrapper white-bg">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 col-sm-4">
                      <div class="profile-picture">
                        <img class="img-circle" src="assets/images/teja.jpg" height="200">
                      </div>
                  </div>
                  
                  <div class="col-md-8 col-sm-8">
                    <div class="profile-wrapper well">
                      <h3 class="header-font">Edit Profile Details</h3>
                      <hr/>
                      <form class="edit-profile-form">
                        <div class="row">
                              <div class="col-md-6 edit-form-input"><input type="text" placeholder="Your Full Name" /></div>
                              <div class="col-md-6 edit-form-input"><input type="email" placeholder="Your Email" /></div>
                              <div class="col-md-6 edit-form-input"><input type="phone" placeholder="Your Phone Number" /></div>
                              <div class="col-md-6 edit-form-input"><input type="password" placeholder="Your Old Password" /></div>
                              <div class="col-md-6 edit-form-input"><input type="password" placeholder="Your New Password" /></div>
                              <div class="col-md-6 edit-form-input"> <input type="password" placeholder="Confirm Your New Password" /></div>
                              <div class="col-md-6 edit-form-input"><input type="password" placeholder="Your Old Password" /></div>
                              <div class="col-md-6 edit-form-input"><textarea rows="5" placeholder="Your Address"></textarea></div>
                              <div class="col-md-12">
                                <button class="publish">Publish</button>
                              </div>
                        </div>
                     </form>
                    </div>
                    <div class="profile-wrapper well">
                      <h3 class="header-font">Edit Payment Details</h3>
                      <hr/>
                      <form class="edit-profile-form">
                        <div class="row">
                             <div class="col-md-6 edit-form-input"><input type="text" placeholder="Bank Name" /></div>
                              <div class="col-md-6 edit-form-input"><input type="email" placeholder="Account Name" /></div>
                              <div class="col-md-6 edit-form-input"><input type="text" placeholder="Account Number" /></div>
                              <div class="col-md-6 edit-form-input"><input type="phone" placeholder="Your Phone Number" /></div>
                              <div class="col-md-12">
                                <button class="publish">Publish</button>
                              </div>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
          </div>
      </section>
<?php include"footer.php"; ?>