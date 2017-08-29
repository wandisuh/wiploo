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

    <section class="vertical-padding form-container vertical-padding white-bg page-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12 vertical-padding">
              <div class="post-form-wrapper">
                <form class="post-form">
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><i class="ion-compose"></i> Title</span>
                      <input type="text" class="form-control" placeholder="Post Title" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group width-100">
                      <textarea rows="10" name="post-content"  class="form-control tinymce"></textarea>
                    </div>
                    <!-- Split button -->
                      <div class="col-md-6 col-sm-6">
                        <div class="input-group">
                             <label class="ion-images"> Add your Featured Image</label>
                          <div class="input-group featured-image-field">
                           
                            <input type="file" id="fileInput" name="fileInput" />
                          </div>                      
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6">
                          <div class="input-group">
                            <p><label class="ion-bookmark"> Select Category</label></p>
                            <form action="#">
                              <input type="checkbox" name="live-tips" value="Live Tips"> Live Tips<br>
                              <input type="checkbox" name="Travelling" value="Car" checked> Travelling<br>
                            </form>
                            <div class="input-group width-100">
                              <input type="text" class="form-control" placeholder="Add new category" aria-describedby="basic-addon2">
                              <span class="input-group-btn">
                                <button class="btn btn-default ion-compose" type="button"> Add New</button>
                              </span>
                            </div>
                          </div>
                        </div>
                        <label class="ion-bookmark"> Add keywords</label>
                     <div class="input-group width-100">
                        <input type="text" class="form-control" placeholder="Your Keywords" />
                        <span class="input-group-btn">
                          <button class="btn btn-default ion-bookmark" type="button"> Add </button>
                        </span>
                      </div>

                      </div>
                    <div class="input-group width-100 text-right">
                      <button class="btn blue-btn">Save As Draft</button><button class="btn blue-btn">Publish</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>

<?php include"footer.php"; ?>