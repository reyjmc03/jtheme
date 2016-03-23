<?php 
// Programmer: Jose Mari Caballa Rey
// Date Published: 12 January 2016
// Description: To produce custom Drupal 7 theme from scratch with bootstrap 3 tools.
?>
<?php if ($is_front): ?>
<?php ########################################################################################################################################### ?>
<?php # BEGIN CUSTOMIZED PAGE                                                                                                                   # ?>
<?php ########################################################################################################################################### ?>
<?php # ***********************************************
      # ******************* loading ******************* # ?>
<div id="loading">
</div>
<?php # ****************** ./loading ****************** 
      # *********************************************** # ?>
<?php # ***********************************************
      # ******************* wrapper ******************* # ?>
<div class="wrapper">
  <div class="container">
    <?php # ====================
          # Section Out Side     # ?>
    <div class="section_out_side col-md-4">
      <div class="row">
        <!-- Out Side -->
        <section class="out_side">
          <div class="img-section" data-bg-img="{{ prof_img_path }}">
            <div class="inner_out_side">
              <!-- Start profile_date -->
              <div class="profile_date">
                <div class="profile_img">
                  <!-- <img src="<?php //print base_path() . drupal_get_path('theme', 'jtheme') . '/img/picc.jpg'; ?>" alt="" class="hz_image"> -->

                  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="item">
                        <img class="first-slide" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/img/picc-1.jpg'; ?>" alt="First slide">
                      </div>
                      <div class="item active">
                        <img class="second-slide" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/img/picc-2.jpg'; ?>" alt="Second slide">
                      </div>
                      <div class="item">
                        <img class="third-slide" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/img/picc-3.jpg'; ?>" alt="Third slide">
                      </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>

                <div class="name_and_job">
                  <h3 class="hz_name">
                    <span>
                      <script>
                      var message="<?php print theme_get_setting('pf_name') ?>"
                      var neonbasecolor="#FFFFFF"
                      var neontextcolor="green"
                      var neontextcolor2="gray"
                      var flashspeed=100            // speed of flashing in milliseconds
                      var flashingletters=3           // number of letters flashing in neontextcolor
                      var flashingletters2=1            // number of letters flashing in neontextcolor2 (0 to disable)
                      var flashpause=0            // the pause between flash-cycles in milliseconds

                      ///No need to edit below this line/////

                      var n=0
                      if (document.all||document.getElementById){
                      document.write('<font color="'+neonbasecolor+'">')
                      for (m=0;m<message.length;m++)
                      document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
                      document.write('</font>')
                      }
                      else
                      document.write(message)

                      function crossref(number){
                      var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
                      return crossobj
                      }


                      function neon(){

                      //Change all letters to base color
                      if (n==0){
                      for (m=0;m<message.length;m++)
                      crossref(m).style.color=neonbasecolor
                      }
                      //cycle through and change individual letters to neon color

                      crossref(n).style.color=neontextcolor

                      if (n>flashingletters-1) crossref(n-flashingletters).style.color=neontextcolor2 
                      if (n>(flashingletters+flashingletters2)-1) crossref(n-flashingletters-flashingletters2).style.color=neonbasecolor


                      if (n<message.length-1)
                      n++
                      else{
                      n=0
                      clearInterval(flashing)
                      setTimeout("beginneon()",flashpause)
                      return
                      }
                      }

                      function beginneon(){
                      if (document.all||document.getElementById)
                      flashing=setInterval("neon()",flashspeed)
                      }
                      beginneon()
                      </script>
                    </span>
                  </h3>
                  <div class="hz_job"><span><?php print theme_get_setting('pf_designation'); ?></span></div>
                  <!-- <span class="hz_freelance"><em>freelance available</em></span> -->
                </div>
              </div>
              <!-- End profile_date -->
            </div>
          </div>
        </section>
        <!-- // Out Side -->
      </div>
    </div>
    <?php # Section Out Side 
          # ==================== # ?>
    <?php # ====================
          # Sections Wrapper     # ?>
    <div class="sections_wrapper col-md-8">
      <div class="row">
        <!-- Header -->
        <header class="header">
          <ul class="nav">
            <li class="active"><a href="#welcome">Welcome</a></li>
            <li><a href="#profile">Profile</a></li>
            <li><a href="#resume">Resume</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <?php #<li><a href="#blog">Blog</a></li> ?>
            <li><a href="#contact">Contact</a></li>
          </ul>

          <ul class="nav_icon">
            <li class="active"><a href="#welcome"><i class="fa fa-home"></i></a></li>
            <li><a href="#profile"><i class="fa fa-user"></i></a></li>
            <li><a href="#resume"><i class="fa fa-file-text"></i></a></li>
            <li><a href="#portfolio"><i class="fa fa-briefcase"></i></a></li>
            <li><a href="#blog"><i class="fa fa-comment"></i></a></li>
            <li><a href="#contact"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </header>
        <!-- // Header -->

         <!-- Main Wrapper -->
        <div class="main_wrapper">
          <!-- All Content -->
          <div class="all_content">
            <!-- *********************** Start Welcome  Section *********************** -->
            <section id="welcome" class="active main">
              <!-- Inner Section - Welcome Section -->
              <div class="inner_section welcome_section">
                <!--  Message -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="vcard_block message">
                      <blockquote>
                        <?php if($page['welcome_intro']): print render($page['welcome_intro']); endif; ?>
                        <p class="cite">
                          <a href="#">
                            <img width="106" height="55" src="<?php print base_path() . drupal_get_path('theme', 'jtheme') . '/img/SIG.png'; ?>" alt="">
                          </a>
                        </p>
                      </blockquote>
                    </div>
                  </div>
                </div>
                <!-- // Message -->

                <!-- Contact Social -->
                <div class="contact_social">
                  <!-- hire_download -->
                  <?php if (theme_get_setting('chk_button')): ?>
                  <div class="hz_contact">
                    <?php if (theme_get_setting('chk_hireme_button')): ?>
                    <a href="#"><span class="btn vcard_btn"><i class="fa fa-paper-plane"></i> hire Me</span></a>
                    <?php endif; ?>
                    <?php if (theme_get_setting('chk_resume_button')): ?>
                    <a href="#"><span class="btn vcard_btn"><i class="fa fa-cloud-download"></i> download resume</span></a>
                    <?php endif; ?>
                  </div>
                   <?php endif; ?>
                  <!-- // hire_download -->

                  <!-- Start social_icon -->
                  <?php if (theme_get_setting('chk_sm')): ?>
                  <div class="social_icon">
                    <?php if (theme_get_setting('sm_fb')):?>
                      <span><a href="<?php print theme_get_setting('sm_fb_link'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></span>
                    <?php endif; ?>
                    <?php if (theme_get_setting('sm_twitter')):?>
                      <span><a href="<?php print theme_get_setting('sm_twitter_link'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></span>
                    <?php endif; ?>
                    <?php if (theme_get_setting('sm_gplus')): ?>
                      <span><a href="<?php print theme_get_setting('sm_gplus_link'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></span>
                    <?php endif; ?>
                    <?php if (theme_get_setting('sm_ytube')): ?>
                      <span><a href="<?php print theme_get_setting('sm_ytube_link'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></span>
                    <?php endif; ?>
                    <?php if (theme_get_setting('sm_igram')): ?>
                      <span><a href="<?php print theme_get_setting('sm_igram_link'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></span>
                    <?php endif; ?>
                    <?php if (theme_get_setting('sm_vimeo')): ?>
                      <span><a href="<?php print theme_get_setting('sm_vimeo_link'); ?>" target="_blank"><i class="fa fa-vimeo-square"></i></a></span>
                    <?php endif; ?>
                    <?php if (theme_get_setting('sm_linkedin')): ?>
                      <span><a href="<?php print theme_get_setting('sm_linkedin_link'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></span>
                    <?php endif; ?>
                    <?php if (theme_get_setting('sm_github')): ?>
                      <span><a href="<?php print theme_get_setting('sm_github_link'); ?>" target="_blank"><i class="fa fa-github"></i></a></span>
                    <?php endif; ?>
                  </div>
                  <?php endif; ?>
                  <!-- End social_icon -->
                </div>
                <!-- // Contact Social -->

                <!-- Contact Table Block -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="vcard_block contact_table_block">
                          <table>
                            <tbody>
                              <tr>
                                <td class="font_weight_m">E-mail:</td>
                                <td class="text_right"><?php print theme_get_setting('pf_email');?></td>
                                <td class="font_weight_m">Address:</td>
                                <td class="text_right"><?php print theme_get_setting('pf_address');?></td>
                              </tr>
                              <tr>
                                <td class="font_weight_m">Phone:</td>
                                <td class="text_right"><?php print theme_get_setting('pf_contact');?></td>
                                <td class="font_weight_m">Website:</td>
                                <td class="text_right"><a class="contact_Website" href="http://<?php print theme_get_setting('pf_website');?>"><?php print theme_get_setting('pf_website');?></a></td>
                              </tr>
                              <tr>
                                <td class="font_weight_m">Date of birth:</td>
                                <td class="text_right"><?php print theme_get_setting('pf_bdate');?></td>
                                <td class="font_weight_m">Languages:</td>
                                <td class="text_right"><?php print theme_get_setting('pf_language');?></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                  </div>
                </div>
                <!-- // Contact Table Block -->
                <!-- <div class="hz_br"></div> -->
                <!-- <div class="hz_br"></div> -->
              </div>
              <!-- // Inner Section -->
            </section>
            <!-- ************************* End Welcome Section *********************** --> 


             <!-- ************************* Start Profile Section ************************* -->
              <section id="profile">
                <div class="inner_section profile_section">
                  <?php if($page['profile_section']): print render($page['profile_section']); endif; ?>
                </div>
              </section>
              <!-- ************************** End Profile Section ************************* -->


              <!-- ************************* Start Resume Section ************************* -->
              <section id="resume">
                <div class="inner_section resume_section">
                  <?php if($page['resume_section']): print render($page['resume_section']); endif; ?>
                </div>
              </section>
              <!-- **************************** End Resume Section ************************* -->

              <!-- ************************* Start Portfolio Section ************************* -->
              <section id="portfolio">
                <div class="inner_section portfolio_section">
                  <div class="row">
                  <div class="col-md-12">
                  <div class="portfolio vcard_block">
                    <?php if($page['portfolio_section']): print render($page['portfolio_section']); endif; ?>
                  </div>
                  </div>
                  </div>
                </div>
              </section>
              <!-- *************************** End Portfolio Section ************************* -->


              <!-- ************************* Start Contact Section ************************* -->
              <section id="contact">
                <div class="inner_section contact_section">
                  <div class="post_header">
                  <h3>Contact</h3>
                  </div>

                  <div class="row">
                  <div class="col-md-12">
                  <div class="contact vcard_block">
                    <?php if($page['contact_section']): print render($page['contact_section']); endif; ?>

                    <div class="vcard_block contact_table_block">
                    <table>
                      <tbody>
                        <tr>
                          <td class="font_weight_m">E-mail:</td>
                          <td class="text_right"><?php print theme_get_setting('pf_email'); ?></td>
                          <td class="font_weight_m">Address:</td>
                          <td class="text_right"><?php print theme_get_setting('pf_address'); ?></td>
                        </tr>
                        <tr>
                          <td class="font_weight_m">Phone:</td>
                          <td class="text_right"><?php print theme_get_setting('pf_contact'); ?></td>
                          <td class="font_weight_m">Website:</td>
                          <td class="text_right"><a class="contact_Website" href="http://<?php print theme_get_setting('pf_website'); ?>"><?php print theme_get_setting('pf_website'); ?></a></td>
                        </tr>
                        <tr>
                          <td class="font_weight_m">Date of birth:</td>
                          <td class="text_right"><?php print theme_get_setting('pf_bdate'); ?></td>
                          <td class="font_weight_m">Languages:</td>
                          <td class="text_right"><?php print theme_get_setting('pf_language'); ?></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>

                    <?php if($page['contact_section_2']): print render($page['contact_section_2']); endif; ?>

                     <!-- <div class="contact_form">
                      <form method="post" class="" action="http://hamzh.info/demo/html/riche/your_action_page.php">
                      <div class="row">
                      <div class="col-md-5">
                      <div class="form_input">
                      <i class="fa fa-user"></i>
                      <input type="text" name="name" class="name" placeholder="Your Name">
                      </div>
                      <div class="form_input">
                      <i class="fa fa-envelope"></i>
                      <input type="email" name="mail" class="mail" placeholder="Email">
                      </div>
                      </div>
                      <div class="col-md-7">
                      <div class="form_input">
                      <i class="fa fa-comment"></i>
                      <textarea placeholder="Message" name="message" class="message"></textarea>
                      </div>
                      <input type="submit" class="button_contact vcard_btn " value="Send Message">
                      </div>
                      </div>
                      </form>
                      </div> -->
                  </div>
                  </div>
                  </div>
                </div>
              </section>
              <!-- *************************** End Contact Section ************************* -->
          </div>
        </div>
        <!-- // Main Wrapper -->
      </div>
    </div>
    <?php # Sections Wrapper     #
          # ==================== # ?>
</div>
<?php # ****************** ./wrapper ****************** 
      # *********************************************** # ?>
<?php ########################################################################################################################################### ?>
<?php # END CUSTOMIZED PAGE                                                                                                                     # ?>
<?php ########################################################################################################################################### ?>
<?php else: ?>
<?php ########################################################################################################################################### ?>
<?php # BEGIN DYNAMIC PAGE                                                                                                                      # ?>
<?php ########################################################################################################################################### ?>
<div class="wrapper">
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="vcard_block contact_table_block">
        <?php
        # messages   #
        ############## ?>
        <?php if ($messages): ?>
        <div id="messages"><div class="section clearfix">
          <?php print $messages; ?>
        </div></div> <!-- /.section, /#messages -->
        <?php endif; ?>
        <?php
        ##############
        # ./messages #  ?>

        <?php //if ($page['highlighted']): ?><!-- <div id="highlighted"> --><?php //print render($page['highlighted']); ?><!-- </div> --><?php //endif; ?>
        <!-- <a id="main-content"></a> -->
        <?php //print render($title_prefix); ?>
        <?php if ($title): ?>
         <h3 class="section-title">
            <?php print $title; ?>
         </h3>
        <?php endif; ?>

         <?php print render($title_suffix); ?>
          <?php if ($tabs): ?>
            <div class="tabs">
              <?php print render($tabs); ?>
            </div>
          <?php endif; ?>

          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links">
              <?php print render($action_links); ?>
            </ul>
          <?php endif; ?>

          <?php print render($page['content']); ?>
          <?php print $feed_icons; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php ########################################################################################################################################### ?>
<?php # END DYNAMIC PAGE                                                                                                                        # ?>
<?php ########################################################################################################################################### ?>
<?php endif; ?>