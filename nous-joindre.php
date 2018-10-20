<?php /* Template Name: Nous joindre */ ?>

<?php get_header(); ?>

<?php 
  $menu_name = 'main_menu';
  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      $menu_list = '';
      $count = 0;
      $submenu = false;$cpi=get_the_id();
      foreach( $menu_items as $current ) {
          if($cpi == $current->object_id ){if ( !$current->menu_item_parent ) {$cpi=$current->ID;}else{$cpi=$current->menu_item_parent;}$cai=$current->ID;break;}
      }
      foreach( $menu_items as $menu_item ) {
          $link = $menu_item->url;
          $title = $menu_item->title;
          $menu_item->ID==$cai ? $ac2=' current_menu' : $ac2='';
          if ( !$menu_item->menu_item_parent ) {
              $parent_id = $menu_item->ID;$parent_id==$cpi ? $ac=' current_item' : $ac='';
              if(!empty($menu_items[$count + 1]) && $menu_items[ $count + 1 ]->menu_item_parent == $parent_id ){//Checking has child
                  $menu_list .= '<div class="navbar-item has-dropdown is-hoverable"><a href="'.$link.'" class="navbar-link has-text-white is-uppercase has-text-weight-bold"><small>'.$title.'</small></a>';
              }else{
                  $menu_list .= '<div><a href="'.$link.'" class="has-text-white navbar-item is-uppercase has-text-weight-bold"><small>'.$title.'</small></a>';
              }
          }
          if ( $parent_id == $menu_item->menu_item_parent ) {
              if ( !$submenu ) {
                  $submenu = true;
                  $menu_list .= '<div class="navbar-dropdown is-boxed">';
              }
              $menu_list .= '';
              $menu_list .= '<a href="'.$link.'" class="navbar-item">'.$title.'</a>' ."\n";
              $menu_list .= '' ."\n";
              if(empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu){
                  $menu_list .= '</div>';
                  $submenu = false;
              }
          }
          if (empty($menu_items[$count + 1]) || $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) { 
              $menu_list .= '</div>';      
              $submenu = false;
          }
          $count++;
      }
  }

  ?>

  
  <section class="banner-header-contact hero is-medium has-text-centered" style="background: linear-gradient(rgba(1, 16, 43, 0.75), rgba(255, 255, 255, 0)),url(<?php echo get_the_post_thumbnail_url(); ?>">
    <nav class="navbar second-menu is-transparent">
      <div class="container">
        <div class="navbar-brand">
          <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
          <div class="navbar-start">
          </div>

          <div class="navbar-end">
            <a href="/">
              <span class="icon has-text-primary">
                <i class="fas fa-home"></i>
              </span>
            </a>
            <?php echo $menu_list; ?>
            <a href="#" class="has-text-weight-bold is-uppercase button is-primary is-rounded"><small>&nbsp;Demande d'admission&nbsp;</small></a>
          </div>
        </div>
      </div>
    </nav>
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-uppercase has-text-weight-bold has-text-white">
          <?php echo get_the_title(); ?>
        </h1>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
    <br/>
    <br/>
    <iframe style="border: 0px currentColor;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2732.868447258327!2d-71.29815384855338!3d46.76748945345337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb8912c73ad77d9%3A0xe2568758dfcc1068!2sCentre+de+formation+professionnelle+Marie-Rollet!5e0!3m2!1sfr!2sca!4v1464621514677" width="100%" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
      <br/>
      <br/>
      <br/>
      <br/>
      <div class="columns">
        <div class="column content">
          <?php echo the_content(); ?>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <section class="banner-social-links hero is-medium has-text-centered">
        <div class="hero-body">
          <div class="container">
            <h2 class="title is-uppercase">
             Partagez !
            </h2>
            <p>Le centre de formation professionnelle Marie-Rollet est toute une communauté.<br/>Aidez-nous à l'agrandir.
            </p>
            <a target="_blank" class="button is-link is-medium is-outlined is-rounded" href="#">
            <span class="icon has-text-accent">
              <i class="fab fa-lg fa-youtube"></i>
            </span>
          </a>
          &nbsp;
          <a target="_blank" class="button is-link is-medium is-outlined is-rounded" href="#">
            <span class="icon has-text-accent">
              <i class="fab fa-lg fa-twitter"></i>
            </span>
          </a>
          &nbsp;
          <a target="_blank" class="button is-link is-medium is-outlined is-rounded" href="#">
            <span class="icon has-text-accent">
              <i class="fab fa-lg fa-facebook-f"></i>
            </span>
          </a>
          &nbsp;
          <a target="_blank" class="button is-link is-medium is-outlined is-rounded" href="#">
            <span class="icon has-text-accent">
              <i class="fab fa-lg fa-instagram"></i>
            </span>
          </a>
          </div>
        </div>
      </section>
    </div>
  </section>
  <br />
  <br />
  <?php get_footer(); ?>