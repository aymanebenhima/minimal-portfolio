<?php 

      $no_intro = '';
      include_once "includes/functions.php";
      include_once "includes/connection.php";
      include 'init.php'; ?>




<div class="whitespace"></div>
            <!--------------- hero section starts here --------------->
<div class="container">
      <div class="hero-content">
            <br><br>

            <div class="row">
                  <div class="col-12 col-sm-6 col-md-8">
                        <h3 class="wow fadeInUp" data-wow-delay="0.4s"><?=$lang['about-me']?>.</h3>

                        <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$lang['about-p1']?></p>

                        <p class="wow fadeInUp" data-wow-delay="0.8s"><?=$lang['about-p2']?></p>

                  </div>
                  <div class="col-6 col-md-4">
                        <!--------------- hero image starts here --------------->
                        <div class="about image wow fadeInUp" data-wow-delay="1s">
                              <img src="<?php echo $img;?>about-me.png" alt="me">
                        </div>
                        <!--------------- hero image ends here --------------->
                  </div>
            </div>
      <div class="row">
            <div class="col-lg-12">
                  <section class="colorlib-services" data-section="services">
                        <div class="colorlib-narrow-content">
                              <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 wow fadeInUp" data-animate-effect="fadeInLeft">
                                          <h3 class="wow fadeInUp" data-wow-delay="1.2s"><?=$lang['about-title1']?></h3><br>
                                          <h2 class="colorlib-heading"><?=$lang['about-title2']?></h2>
                                    </div>
                              </div>
                              <div class="row row-pt-md">
                                    <div class="col-md-6 text-center wow fadeInUp">
                                          <div class="services color-1">
                                                <span class="icon">
                                                      <i class="fas fa-lightbulb fa-pulse fa-2x"></i>
                                                </span>
                                                <div class="desc wow fadeInUp" data-wow-delay="0.2s">
                                                      <h3><?=$lang['about-ideas']?></h3>
                                                      <p><?=$lang['about-ideas-p']?></p>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-md-6 text-center wow fadeInUp">
                                          <div class="services color-2">
                                                <span class="icon">
                                                      <i class="fas fa-database fa-2x fa-pulse"></i>
                                                </span>
                                                <div class="desc wow fadeInUp" data-wow-delay="0.2s">
                                                      <h3><?=$lang['about-software']?></h3>
                                                      <p><?=$lang['about-software-p']?></p>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-md-6 text-center wow fadeInUp">
                                          <div class="services color-3">
                                                <span class="icon">
                                                      <i class="fas fa-mobile fa-2x fa-pulse"></i>
                                                </span>
                                                <div class="desc wow fadeInUp" data-wow-delay="0.2s">
                                                      <h3><?=$lang['about-app']?></h3>
                                                      <p><?=$lang['about-app-p']?></p>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="col-md-6 text-center wow fadeInUp">
                                          <div class="services color-4">
                                                <span class="icon">
                                                      <i class="fas fa-layer-group fa-2x fa-pulse"></i>
                                                </span>
                                                <div class="desc wow fadeInUp" data-wow-delay="0.2s">
                                                      <h3><?=$lang['about-design']?></h3>
                                                      <p><?=$lang['about-design-p']?></p>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </section>
                                    
                  <section class="colorlib-skills" data-section="skills">
                        <div class="colorlib-narrow-content">
                              <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 wow fadeInUp" data-animate-effect="fadeInLeft">
                                          <h2 class="colorlib-heading wow fadeInUp"><?=$lang['skills1']?></h2>
                                    </div>
                              </div>
                              <canvas class="wow fadeInUp" id="myChart"></canvas>
                        </div>
                  </section>
                  <section class="colorlib-education" data-section="education">
                        <div class="container">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"><?=$lang['about-edu']?></span>
							<h2 class="colorlib-heading animate-box"><?=$lang['about-edu']?></h2>
                                    </div>
                                    <button class="collapsible"><?=$lang['about-edu-sec1']?></button>
                                    <div class="content">
                                    <p><?=$lang['about-edu-sec1p']?></p>
                                    </div>
                                    <button class="collapsible"><?=$lang['about-edu-sec2']?></button>
                                    <div class="content">
                                    <p><?=$lang['about-edu-sec2p']?></p>
                                    </div>
                                    <button class="collapsible"><?=$lang['about-edu-sec3']?></button>
                                    <div class="content">
                                    <p><?=$lang['about-edu-sec3p']?></p>
                                    </div>
                              </div>
                        </div>
                        </div>
                  </section>
                  <section class="colorlib-experience" data-section="experience">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"><?=$lang['exp']?></span>
							<h2 class="colorlib-heading animate-box"><?=$lang['exp-pro']?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				                  <div class="timeline wow fadeInUp">
                                                <ul>
                                                      <li>
                                                            <div class="text-timeline wow fadeInUp"data-wow-delay="0.8s">
                                                                  <h3><?=$lang['exp1']?></h3>
                                                                  <p><?=$lang['exp1p']?></p>
                                                            </div>
                                                            <div class="time wow fadeInUp"data-wow-delay="0.8s">
                                                                  <h4>04-06 2018</h4>
                                                            </div>
                                                      </li>
                                                      <li>
                                                            <div class="text-timeline wow fadeInUp"data-wow-delay="0.8s">
                                                                  <h3><?=$lang['exp2']?></h3>
                                                                  <p><?=$lang['exp2p']?></p>
                                                            </div>
                                                            <div class="time wow fadeInUp"data-wow-delay="0.8s">
                                                                  <h4>10-12 2016</h4>
                                                            </div>
                                                      </li>
                                                      <li>
                                                            <div class="text-timeline wow fadeInUp"data-wow-delay="0.8s">
                                                                  <h3><?=$lang['exp3']?></h3>
                                                                  <p><?=$lang['exp3p']?></p>
                                                            </div>
                                                            <div class="time wow fadeInUp"data-wow-delay="0.8s">
                                                                  <h4>05-06 2016</h4>
                                                            </div>
                                                      </li>
                                                      <li>
                                                            <div class="text-timeline wow fadeInUp"data-wow-delay="0.8s">
                                                                  <h3><?=$lang['exp4']?></h3>
                                                                  <p><?=$lang['exp4p']?></p>
                                                            </div>
                                                            <div class="time wow fadeInUp"data-wow-delay="0.8s">
                                                                  <h4>07-08 2015</h4>
                                                            </div>
                                                      </li>
                                                      <div style="clear: both;"></div>
                                                </ul>
                                          </div>
                                    </div>   
                              </div>
                  </section>                  
                                                <!--------------- Section added ends here ---------------->
                                    
            </div>
      </div>
      </div>
</div>
            <!--------------- hero section ends here --------------->

            <!--------------- Section added starts here --------------->

            
            <div class="whitespace"></div>

<?php include $tpl .'footer.php'; ?>
