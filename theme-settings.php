<?php
/**
 * Implements hook_form_system_theme_settings_alter() function.
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
// function opc_theme_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {
function jtheme_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['jtheme'] = array(
    '#type' => 'fieldset',
    '#title' => t('<center><b style="color: #0074BD;">JOSE MARI REY THEME SETTINGS</b></center>'),
    '#open' => TRUE,
  );

  ##############################
  # BEGIN PERSONAL INFORMATION #
  ##############################
  $form['jtheme']['person_info'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Personal Information</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );

  $form['jtheme']['person_info']['pf_name'] = array(
    '#type' => 'textfield',
    '#title' => t('Complete Name'),
    '#default_value' => theme_get_setting('pf_name'), 
  ); # complete name

  $form['jtheme']['person_info']['pf_designation'] = array(
    '#type' => 'textfield',
    '#title' => t('Job Designation'),
    '#default_value' => theme_get_setting('pf_designation'),
  ); # job designation

  $form['jtheme']['person_info']['pf_email'] = array(
    '#type' => 'textfield',
    '#title' => t('Email Address'),
    '#default_value' => theme_get_setting('pf_email'), 
  ); # email address

  $form['jtheme']['person_info']['pf_contact'] = array(
    '#type' => 'textfield',
    '#title' => t('Contact Number'),
    '#default_value' => theme_get_setting('pf_contact'), 
  ); # contact number

  $form['jtheme']['person_info']['pf_bdate'] = array(
    '#type' => 'textfield',
    '#title' => t('Birthday'),
    '#default_value' => theme_get_setting('pf_bdate'), 
  ); # birthday

  $form['jtheme']['person_info']['pf_address'] = array(
    '#type' => 'textfield',
    '#title' => t('Home Address'),
    '#default_value' => theme_get_setting('pf_address'),
  ); # address

  $form['jtheme']['person_info']['pf_website'] = array(
    '#type' => 'textfield',
    '#title' => t('Website URL'),
    '#default_value' => theme_get_setting('pf_website'), 
  ); # website

  $form['jtheme']['person_info']['pf_language'] = array(
    '#type' => 'textfield',
    '#title' => t('Language'),
    '#default_value' => theme_get_setting('pf_language'), 
  ); # language

  $form['jtheme']['person_info']['pf_prof_pic'] = array(
   '#type' => 'managed_file',
   '#title' => t('Profile Picture'),
  ); # profile picture
  ##############################
  #   END PERSONAL INFORMATION # 
  ##############################

  ##########################################
  # BEGIN WELCOME BUTTONS AND SOCIAL MEDIA #
  ##########################################
  $form['jtheme']['social_media'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Buttons and Social Media</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );

  #
  # show buttons
  #
  $form['jtheme']['social_media']['chk_button'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Hire Me / Download Resume Buttons</b>'),
    '#default_value' => theme_get_setting('chk_button'),
  );
  # HIRE ME BUTTON
  $form['jtheme']['social_media']['hireme'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Hire Me Button</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['hireme']['chk_hireme_button'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Hire Me Button</b>'),
    '#default_value' => theme_get_setting('chk_hireme_button'),
  );
  
  # RESUME BUTTON
  $form['jtheme']['social_media']['resume'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Dowload Resume Button</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['resume']['chk_resume_button'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Resume Button</b>'),
    '#default_value' => theme_get_setting('chk_resume_button'),
  );

  #
  # show social media
  #
  $form['jtheme']['social_media']['chk_sm'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Social Media</b>'),
    '#default_value' => theme_get_setting('chk_sm'),
  ); // display social media checkbox

  # FACEBOOK
  $form['jtheme']['social_media']['facebook'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Facebook</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['facebook']['sm_fb'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Facebook Icon</b>'),
    '#default_value' => theme_get_setting('sm_fb'),
  ); // fb show icon
  $form['jtheme']['social_media']['facebook']['sm_fb_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook URL'),
    '#default_value' => theme_get_setting('sm_fb_link'),
  ); // fb link


  # TWITTER
  $form['jtheme']['social_media']['twitter'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Twitter</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['twitter']['sm_twitter'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Twitter Icon</b>'),
    '#default_value' => theme_get_setting('sm_twitter'),
  ); // twitter show icon
  $form['jtheme']['social_media']['twitter']['sm_twitter_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter URL'),
    '#default_value' => theme_get_setting('sm_twitter_link'),
  ); // twitter link


  # GOOGLE+
  $form['jtheme']['social_media']['googleplus'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Google Plus</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['googleplus']['sm_gplus'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Google+ Icon</b>'),
    '#default_value' => theme_get_setting('sm_gplus'),
  ); // gplus show icon
  $form['jtheme']['social_media']['googleplus']['sm_gplus_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Plus URL'),
    '#default_value' => theme_get_setting('sm_gplus_link'),
  ); // gplus link


  # YOUTUBE
  $form['jtheme']['social_media']['youtube'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Youtube</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['youtube']['sm_ytube'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Youtube Icon</b>'),
    '#default_value' => theme_get_setting('sm_ytube'),
  ); // youtube show icon
  $form['jtheme']['social_media']['youtube']['sm_ytube_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Youtube URL'),
    '#default_value' => theme_get_setting('sm_ytube_link'),
  ); // youtube link

  # DRIBBLE
  $form['jtheme']['social_media']['dribble'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Dribble</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['dribble']['sm_dribble'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Dribble Icon</b>'),
    '#default_value' => theme_get_setting('sm_dribble'),
  ); // dribble show icon
  $form['jtheme']['social_media']['dribble']['sm_dribble_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Dribble URL'),
    '#default_value' => theme_get_setting('sm_dribble_link'),
  ); // dribble link


  # INSTAGRAM
  $form['jtheme']['social_media']['instagram'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Instagram</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['instagram']['sm_igram'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Instagram Icon</b>'),
    '#default_value' => theme_get_setting('sm_igram'),
  ); // instagram show icon
  $form['jtheme']['social_media']['instagram']['sm_igram_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Instagram URL'),
    '#default_value' => theme_get_setting('sm_linkedin_link'),
  ); // instagram link


  # VIMEO
  $form['jtheme']['social_media']['vimeo'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Vimeo</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['vimeo']['sm_vimeo'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Vimeo Icon</b>'),
    '#default_value' => theme_get_setting('sm_vimeo'),
  ); // vimeo show icon
  $form['jtheme']['social_media']['vimeo']['sm_vimeo_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Vimeo URL'),
    '#default_value' => theme_get_setting('sm_vimeo_link'),
  ); // vimeo link

  # LINKEDIN
  $form['jtheme']['social_media']['linkedin'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Linkedin</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['linkedin']['sm_linkedin'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Linkedin Icon</b>'),
    '#default_value' => theme_get_setting('sm_linkedin'),
  ); // linkedin show icon
  $form['jtheme']['social_media']['linkedin']['sm_linkedin_link'] = array(
    '#type' => 'textfield',
    '#title' => t('linkedin URL'),
    '#default_value' => theme_get_setting('sm_linkedin_link'),
  ); // linkedin show link

  # GITHUB
  $form['jtheme']['social_media']['github'] = array(
    '#type' => 'fieldset',
    '#title' => t('<b style="color: #0074BD;">Github</b>'),
    '#collapsible' => TRUE, // BUTTON
    '#collapsed' => TRUE, // FORM
  );
  $form['jtheme']['social_media']['github']['sm_github'] = array(
    '#type' => 'checkbox',
    '#title' => t('<b>Show Github Icon</b>'),
    '#default_value' => theme_get_setting('sm_github'),
  ); // github show icon
  $form['jtheme']['social_media']['github']['sm_github_link'] = array(
    '#type' => 'textfield',
    '#title' => t('github URL'),
    '#default_value' => theme_get_setting('sm_github_link'),
  ); // github show link
  ######################################
  # END WELCOME BUTTONS SOCIAL MEDIA   #
  ######################################
}
