<?php 

      $no_intro = '';
      include_once "includes/functions.php";
      include_once "includes/connection.php";
      include 'init.php';
      if(!isset($_GET['id'])){
            header("Location: work.php?geterr");
      }else{
            $id = mysqli_real_escape_string($conn, $_GET['id']);
            if(!is_numeric($id)){
                  header("Location: work.php?numerror");
                  exit();
            }else if(is_numeric($id)){
                  $sql = "SELECT * FROM post WHERE post_id='$id'";
                  $result = mysqli_query($conn, $sql);
                  //Check if posts exits
                  if(mysqli_num_rows($result)<=0){
                        //no posts
                        header("Location: work.php?noresult");
                  }else if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                              $post_title = $row['post_title'];
                              $post_content = $row['post_content'];
                              $post_date = $row['post_date'];
                              $post_image = $row['post_image'];
                              $post_keywords = $row['post_keywords'];
                              $post_category = $row['post_category'];
                              ?>

            <div class="whitespace"></div>

            <!--------------- hero section starts here --------------->
            <div class="container">
                  <div class="hero-content">
                        <br><br>
                        <div class="row">
                              <div class="col-lg-12">
                                    <br>

                                    <h1 class="wow fadeInUp" data-wow-delay="1s"><?php echo $post_title; ?></h1><br><br>

                                    <div class="row">
                                          <div class="col-lg-4">
                                                <p class="wow fadeInUp" data-wow-delay="1.2s">service :</p>
                                                <h6 class="wow fadeInUp" data-wow-delay="1.3s"><?php echo $post_category; ?><?php getCategoryName($post_category); ?></h6>
                                          </div>

                                          <div class="col-lg-4">
                                                <p class="wow fadeInUp" data-wow-delay="1.4s">started :</p>
                                                <h6 class="wow fadeInUp" data-wow-delay="1.5s">8 March 2019</h6>
                                          </div>

                                          <div class="col-lg-4">
                                                <p class="wow fadeInUp" data-wow-delay="1.6s">completed :</p>
                                                <h6 class="wow fadeInUp" data-wow-delay="1.7s">15 May 2019</h6>
                                          </div>
                                    </div>
                                    <br>
                                    <p class="wow fadeInUp" data-wow-delay="1.8s"><?php echo $post_content; ?></p>
                              </div>
                        </div>
                  </div>
            </div>
            <!--------------- hero section ends here --------------->


            <!--------------- project image section starts here --------------->

            <div class="project-img">
                  <div class="container">
                        <br><br>
                        <div class="row">
                              <div class="col-md-8">
                                    <div class="project image wow fadeInUp" data-wow-delay="0.8s"></div>
                              </div>
                              <div class="col-md-4">
                                    <div class="project image wow fadeInUp" data-wow-delay="0.8s"></div>
                              </div>
                        </div>
                  </div>
            </div>

            <!--------------- project image section ends here --------------->

            <br><br>

            <!--------------- project nav starts here --------------->

            <div class="project-nav">
                  <div class="container">
                        <div class="row">
                              <div class="col-lg-6 prev">
                                    <p><ion-icon name="arrow-back"></ion-icon>previous</p>
                              </div>
                              <div class="col-lg-6 next">
                                    <p>next<ion-icon name="arrow-forward"></ion-icon></p>
                              </div>
                        </div>
                  </div>
            </div>

            <!--------------- project nav starts here --------------->

            <div class="whitespace"></div>


<?php include $tpl .'footer.php';
			}
		}
	}
}
?>