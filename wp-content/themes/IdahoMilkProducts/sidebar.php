
<?php
       //get parent id
       if ($post->post_parent) {
           $parentID = ($post->post_parent);
        }
?>

<div id="sidebar1" class="sidebar" role="complementary">

<?php 
if (  is_active_sidebar( 'sidebar1' ) && ($parentID == '24' || is_page('24'))) : 
                dynamic_sidebar( 'sidebar1' ); 
elseif(  is_active_sidebar( 'sidebar1' ) && ($parentID == '390' || is_page('390'))) : 
            	dynamic_sidebar( 'sidebar1' );
elseif(  is_active_sidebar( 'sidebar2' ) && ($parentID == '10' || is_page('10') || is_page('12') || is_page('426') || is_page('452'))) : 
            	dynamic_sidebar( 'sidebar2' );

elseif(  is_active_sidebar( 'sidebar6' ) && ( is_page('48'))) : 
            	dynamic_sidebar( 'sidebar6' );

elseif(  is_active_sidebar( 'sidebar3' ) && ($parentID == '42' || is_page('42'))) : 
            	dynamic_sidebar( 'sidebar3' );
elseif(  is_active_sidebar( 'sidebar4' ) && ($parentID == '36' || is_page('36'))) : 
            	dynamic_sidebar( 'sidebar4' );
elseif(  is_active_sidebar( 'sidebar6' ) && ($parentID == '48' || is_page('48'))) : 
            	dynamic_sidebar( 'sidebar6' );
elseif(  is_active_sidebar( 'sidebar5' ) && ( is_page('66'))) : 
            	dynamic_sidebar( 'sidebar5' );
elseif(  is_active_sidebar( 'sidebar5' )): 
              dynamic_sidebar( 'sidebar5' );
endif;
?>

</div>