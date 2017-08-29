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
            
            <div class="col-md-4 col-sm-4 ">	
            	<label class="ion-bookmark"> Latest Message</label>
			    <ul id="message-lists">
                    <li class="white-bg">
                        <p><b>Sender Name</b><br/>
                            <a href="#">Message Title Here</a>
                        </p>
                        <p><b>Subject Here</b><br/>Message Excerpt here. . .</p>
                       
                        <p class="text-right">
                            <a href="#" class="blue-btn btn">View Message</a>
                        </p>
                    </li>
                    <li class="white-bg">
                        <p><b>Sender Name</b><br/>
                            <a href="#">Message Title Here</a>
                        </p>
                        <p><b>Subject Here</b><br/>Message Excerpt here. . .</p>
                   
                        <p class="text-right">
                            <a href="#" class="blue-btn btn">View Message</a>
                        </p>
                    </li>
                    <li class="white-bg">
                        <p><b>Sender Name</b><br/>
                            <a href="#">Message Title Here</a>
                        </p>
                        <p><b>Subject Here</b><br/>Message Excerpt here. . .</p>
                       
                        <p class="text-right">
                            <a href="#" class="blue-btn btn">View Message</a>
                        </p>
                    </li>
                </ul>
			</div>	
			


            <div class="col-md-8 col-sm-8">
                <label class="ion-bookmark"> Add New Message</label>
                    <form id="category-form-wrapper">
                        <div class="input-group width-100">
                            <label>Add Subject</label><br/>
                            <input type="text" name="message-subject" class="width-100" placeholder="Subject" />
                        </div>
                        
                        <div class="input-group width-100">
                            <label>Your Message</label><br/>
                            <textarea name="category-description" class="width-100" rows="5" placeholder="Category Description" /></textarea> 
                        </div>
                        <div class="input-group">
                             <label class="ion-images"> Attach File</label>
                          <div class="featured-image-field">
                            <input type="file" id="fileInput" name="fileInput" />
                          </div>                      
                        </div>
                        <div class="input-group width-100 text-right">
                            <button class="blue-btn btn" value="Add New Category">Reply</button>
                        </div>
                    </form>

            </div>
          </div>
        </div>
    </section>

<?php include"footer.php"; ?>

