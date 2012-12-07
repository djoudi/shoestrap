<?php

/*
 * Echoes the social network links
 */
function shoestrap_social_links( $network = '' ) {
  
  $facebook_link  = get_theme_mod( 'shoestrap_facebook_link' );
  $twitter_link   = get_theme_mod( 'shoestrap_twitter_link' );
  $gplus_link     = get_theme_mod( 'shoestrap_google_plus_link' );
  $pinterest_link = get_theme_mod( 'shoestrap_pinterest_link' );
  
  
  // Sanitizing twitter links and making them compatible with @username
  
  if( strpos ( $twitter_link, 'twitter.'  ) !== false ) {
    $newvalue = esc_url( $twitter_link );
  } else {
    $twitter_link = ltrim( $twitter_link, '@');
    $twitter_link = 'http://twitter.com/' . $twitter_link;
  }
  
  // Sanitizing Facebook links
  $facebook_link = esc_url( $facebook_link );

  // Sanitizing Google+ links
  $gplus_link = esc_url( $gplus_link );

  // Sanitizing Pinterest links
  $pinterest_link = esc_url( $pinterest_link );

  // Echoing the links
  if ( $network == 'fb' ){ ?>
    <li class="social-networks"><a href="<?php echo $facebook_link; ?>" target="_blank"><i class="icon-facebook-sign"></i></a></li>
  <?php }
  elseif ( $network == 'tw' ) { ?>
    <li class="social-networks"><a href="<?php echo $twitter_link; ?>" target="_blank"><i class="icon-twitter-sign"></i></a></li>
  <?php }
  elseif ( $network == 'gp' ) { ?>
    <li class="social-networks"><a href="<?php echo $gplus_link; ?>" target="_blank"><i class="icon-google-plus-sign"></i></a></li>
  <?php }
  elseif ( $network == 'pi' ) { ?>
    <li class="social-networks"><a href="<?php echo $pinterest_link; ?>" target="_blank"><i class="icon-pinterest-sign"></i></a></li>
  <?php }
}

