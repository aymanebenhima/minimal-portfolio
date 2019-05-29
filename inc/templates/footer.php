            <!--------------- footer starts here --------------->
            <div class="footer">
                  <div class="container">
                        <br><br>

                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <p class="wow fadeInUp"><?=$lang['message-project']?></p>
                                    </div>
                              </div>
                        </div>

                        <br>

                        <div class="hr">
                              <div class="row"></div>
                        </div>

                        <br><br>

                        <div class="info">
                              <div class="row">
                                    <div class="col-lg-4" id="personal">
                                          <p class="wow fadeInUp"><?=$lang['text-footer1']?></p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">Aymane BENHIMA</h4>
                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="media">
                                          <p class="wow fadeInUp" data-wow-delay="0s"><?=$lang['follow']?></p>

                                          <ul>
                                                <li id="git" class="wow fadeInUp" data-wow-delay="0.4s"><a href="https://github.com/aymanebenhima/" target="_blank"><i class="fab fa-github"></i></a></li>
                                                <li id="ig" class="wow fadeInUp" data-wow-delay="0.6s"><a href="https://instagram.com/aymanebenhima/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li id="tw" class="wow fadeInUp" data-wow-delay="0.8s"><a href="https://twitter.com/aymanebenhima/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li id="fb" class="wow fadeInUp" data-wow-delay="1s"><a href="https://facebook.com/aymanebenhima1/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="address">
                                          <p class="wow fadeInUp" data-wow-delay="0s">say hello</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">aymanebenhima@gmail.com</h4>
                                          <br><br>
                                    </div>
                              </div>
                        </div>
                        <div class="language text-center">
                              <form id="language">
                              <input type="hidden" name="lang" id="lang">
                              <button id="chooseLang" type="submit" style="display:none;"></button>
                              </form>
                              <a onclick="getElementById('lang').value = 'en'; getElementById('chooseLang').click();"><img src="<?php echo $img;?>uka.png" id="img1" alt="" width="28px" height="15px"></a>
                              <a onclick="getElementById('lang').value = 'fr'; getElementById('chooseLang').click();"><img src="<?php echo $img;?>france.jpg" id="img2" alt="" width="28px" height="15px"></a>
                        </div>
                  </div>
            </div>
            <!--------------- footer ends here --------------->

            <br><br><br><br>

      </div>
      
      <!-- greensock cdn -->
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
      <script src="<?php echo $js;?>main.js"></script>
</body>
</html>
