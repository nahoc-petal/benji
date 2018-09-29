<?php /* Template Name: Homepage */ ?>

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

  
  <section class="banner-header hero is-large has-text-centered">
    <nav class="navbar montserrat second-menu is-transparent">
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
          <div class="logo"></div>
          </div>

          <div class="navbar-end">
            <a href="#">
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
    <div class="hero-body main-hero">
      <div class="container">
        <h1 class="title is-uppercase has-text-weight-bold has-text-white proxima">
          <?php echo get_field("titre"); ?>
        </h1>
        <h2 class="subtitle is-uppercase has-text-weight-bold has-text-white montserrat">
          <?php echo get_field("sous-titre"); ?>
        </h2>
        <a class="montserrat button is-white is-uppercase has-text-accent has-text-weight-bold is-rounded" href="#">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Découvrir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="columns is-variable is-8">
        <div class="column is-one-third">
          <h2 class="montserrat has-text-weight-bold subtitle is-uppercase has-text-accent"><?php echo get_field("titre_colonne_1"); ?></h2>
          <img src="images/rendez_vous.jpg"   />
          <br /> <br />
          <h3 class="montserrat subtitle has-text-weight-bold"><?php echo get_field("sous-titre_colonne_1"); ?></h3>
          <p class="source-sans-pro"><?php echo get_field("description_colonne_1"); ?></p>
          <br />
          <a href="#" class="button is-primary"> &nbsp;&nbsp;&nbsp;&nbsp;
            <span class="icon has-text-white">
              <i class="fas fa-arrow-right"></i>
            </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
          </a>
        </div>
        <div class="column is-one-third">
          <h2 class="montserrat has-text-weight-bold subtitle is-uppercase has-text-accent"><?php echo get_field("titre_colonne_2"); ?></h2>
          <img src="images/rendez_vous.jpg"   />
          <br /> <br />
          <h3 class="montserrat subtitle has-text-weight-bold"><?php echo get_field("sous-titre_colonne_2"); ?></h3>
          <p class="source-sans-pro"><?php echo get_field("description_colonne_2"); ?></p>
          <br />
          <a href="#" class="button is-primary"> &nbsp;&nbsp;&nbsp;&nbsp;
            <span class="icon has-text-white">
              <i class="fas fa-arrow-right"></i>
            </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
          </a>
        </div>
        <div class="column is-one-third">
          <h2 class="montserrat has-text-weight-bold subtitle is-uppercase has-text-accent"><?php echo get_field("titre_colonne_3"); ?></h2>
          <img src="images/rendez_vous.jpg"   />
          <br /> <br />
          <h3 class="montserrat subtitle has-text-weight-bold"><?php echo get_field("sous-titre_colonne_3"); ?></h3>
          <p class="source-sans-pro"><?php echo get_field("description_colonne_3"); ?></p>
          <br />
          <a href="#" class="button is-primary"> &nbsp;&nbsp;&nbsp;&nbsp;
            <span class="icon has-text-white">
              <i class="fas fa-arrow-right"></i>
            </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <section class="banner-centre-formation hero is-medium has-text-centered">
        <div class="hero-body">
          <div class="container">
            <h2 class="montserrat title is-uppercase">
              <?php echo get_field("titre_banner_centre_formation"); ?>
            </h2>
            <br/>
            <h2 class="source-sans-pro subtitle">
              <?php echo get_field("sous-titre_banner_centre_formation"); ?>
            </h2>
            <br/>
            <a class="montserrat button is-uppercase has-text-weight-bold is-link is-outlined is-rounded" href="#">
              &nbsp;&nbsp;&nbsp;En savoir plus&nbsp;&nbsp;&nbsp;
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <section class="banner-employeur hero is-medium has-text-centered">
        <div class="hero-body">
          <div class="container">
            <h2 class="montserrat title is-uppercase has-text-white">
              <?php echo get_field("titre_banner_employeur"); ?>
            </h2>
            <br/>
            <h2 class="source-sans-pro subtitle has-text-white">
              <?php echo get_field("sous-titre_banner_employeur"); ?>
            </h2>
            <br/>
            <a class="montserrat button is-primary is-uppercase has-text-weight-bold is-rounded" href="#">
              &nbsp;&nbsp;&nbsp;Découvrez notre CFPMR-EMPLOI&nbsp;&nbsp;&nbsp;
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>
  <br />
  <br />
  <?php get_footer(); ?>