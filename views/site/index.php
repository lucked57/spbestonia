
    <!--<div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>-->

    <div class="page">
      

 
      <section class="swiper-panel-wrap">
        <div class="swiper-container swiper-slider swiper-slider_fullheight swiper-slider_nav-responsive" data-simulate-touch="false" data-loop="true" data-autoplay="5500">
          <div class="swiper-wrapper">
            <div class="swiper-slide bg-accent-2" data-slide-bg="web/img/cd-bg/full_Depositphotos_19729713_original_copy.jpg">
              <div class="swiper-slide-caption text-center"> 
                <div class="container">
                  <div class="row justify-content-lg-center">
                    <div class="col-lg-10 col-xxl-8">
                      <?php if($admin): ?>
                    <i class="fas fa-pen update-text text-white" value="slide1_" data-toggle="modal" data-target="#update-modal"></i>
                <?php endif;?>
                    <?=$Home['slide1_'.$lang]?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide bg-accent-2" data-slide-bg="web/img/cd-bg/yurist-po-nasledstvennym-delam-v-moskve_copy.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-lg-center">
                    <div class="col-lg-10 col-xxl-8">
                      <?php if($admin): ?>
                    <i class="fas fa-pen update-text text-white" value="slide2_" data-toggle="modal" data-target="#update-modal"></i>
                <?php endif;?>
                    <?=$Home['slide2_'.$lang]?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide bg-accent-2" data-slide-bg="web/img/cd-bg/Lawyers-Background.jpg">
              <div class="swiper-slide-caption text-center">
                <div class="container">
                  <div class="row justify-content-lg-center">
                    <div class="col-lg-10 col-xxl-8">
                      <?php if($admin): ?>
                    <i class="fas fa-pen update-text text-white" value="slide3_" data-toggle="modal" data-target="#update-modal"></i>
                <?php endif;?>
                    <?=$Home['slide3_'.$lang]?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="swiper-pagination"></div>
     
          <div class="swiper-button-prev linear-icon-chevron-left"><i class="fas fa-angle-left"></i></div>
          <div class="swiper-button-next linear-icon-chevron-right"><i class="fas fa-angle-right"></i></div>
        </div>

      </section>


      <section class="section-md bg-default text-center">
       
       
       
       
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-10 col-xl-8">
              <article class="post-info">
                <!--<h3 class="heading-decorated">Добро пожаловать!</h3>
                <p class="text-justify">Юридическая компания SPB ESTONIA Õigusbüroo  была создана в 2016 году и за время своей деятельности приобрела репутацию квалифицированной консалтинговой компании среди эстонских и зарубежных клиентов, партнеров, коллег.
                </p>-->
                <?php if($admin): ?>
                    <i class="fas fa-pen update-text" value="welcome_" data-toggle="modal" data-target="#update-modal"></i>
                <?php endif;?>
                    <?=$Home['welcome_'.$lang]?>
                
              </article>
            </div>
          </div>
        </div>
      </section>

     <section class="section parallax-container bg-accent-2 text-center" data-parallax-img="web/img/cd-bg/At-Least-One-San-Antonio-Lawyer-Believe-That-Legal-Power-Demands-Legal-Background.jpg">
        <div class="parallax-content">
          <div class="section-md text-center">
            <div class="container">
              <?php if($admin): ?>
                    <i class="fas fa-pen update-text" value="principles_" data-toggle="modal" data-target="#update-modal"></i>
                <?php endif;?>
                    <?=$Home['principles_'.$lang]?>
            </div>
          </div>
        </div>
      </section>



<section class="section-md bg-accent text-center">
        <div class="container">
          <h3 class="heading-decorated">Are You a Senior at a Law School or a Post-graduate <br class="d-none d-md-block"> with at Least a Masters Degree in Law?</h3>
          <p class="heaing-6">If either of the answers is yes, than we've got a job opening waiting for you to apply!</p><a class="button button-black" href="contacts.html">Careers</a>
        </div>
      </section>


<?php if($admin): ?>
<?php endif;?>      