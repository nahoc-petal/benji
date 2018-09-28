<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

  
  <section class="banner-header hero is-large has-text-centered">
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
            <a href="#">
              <span class="icon has-text-primary">
                <i class="fas fa-home"></i>
              </span>
            </a>
            <a class="has-text-white navbar-item is-uppercase has-text-weight-bold" href="https://bulma.io/">
              Soins visuels
            </a>
            <a class="has-text-white navbar-item is-uppercase has-text-weight-bold" href="https://bulma.io/">
              Produits
            </a>
            <a class="has-text-white navbar-item is-uppercase has-text-weight-bold" href="https://bulma.io/">
              Blogue
            </a>
            <a class="has-text-white navbar-item is-uppercase has-text-weight-bold" href="https://bulma.io/">
              Contact
            </a>
            <a href="#" class="has-text-weight-bold is-uppercase button is-primary is-rounded">Demande d'admission</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-uppercase has-text-weight-bold has-text-white">
          <?php echo get_field("titre"); ?>
        </h1>
        <h2 class="subtitle is-uppercase has-text-weight-bold has-text-white">
          <?php echo get_field("sous-titre"); ?>
        </h2>
        <a class="button is-white is-uppercase has-text-accent has-text-weight-bold is-rounded" href="#">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Découvrir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </a>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <div class="columns is-variable is-8">
        <div class="column is-one-third">
          <h2 class="has-text-weight-bold subtitle is-uppercase has-text-accent"><?php echo get_field("titre_colonne_1"); ?></h2>
          <img src="images/rendez_vous.jpg"   />
          <br /> <br />
          <h3 class="subtitle has-text-weight-bold"><?php echo get_field("sous-titre_colonne_1"); ?></h3>
          <p><?php echo get_field("description_colonne_1"); ?></p>
          <br />
          <a href="#" class="button is-primary"> &nbsp;&nbsp;&nbsp;&nbsp;
            <span class="icon has-text-white">
              <i class="fas fa-arrow-right"></i>
            </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
          </a>
        </div>
        <div class="column is-one-third">
          <h2 class="has-text-weight-bold subtitle is-uppercase has-text-accent"><?php echo get_field("titre_colonne_2"); ?></h2>
          <img src="images/rendez_vous.jpg"   />
          <br /> <br />
          <h3 class="subtitle has-text-weight-bold"><?php echo get_field("sous-titre_colonne_2"); ?></h3>
          <p><?php echo get_field("description_colonne_2"); ?></p>
          <br />
          <a href="#" class="button is-primary"> &nbsp;&nbsp;&nbsp;&nbsp;
            <span class="icon has-text-white">
              <i class="fas fa-arrow-right"></i>
            </span>
            &nbsp;&nbsp;&nbsp;&nbsp;
          </a>
        </div>
        <div class="column is-one-third">
          <h2 class="has-text-weight-bold subtitle is-uppercase has-text-accent"><?php echo get_field("titre_colonne_3"); ?></h2>
          <img src="images/rendez_vous.jpg"   />
          <br /> <br />
          <h3 class="subtitle has-text-weight-bold"><?php echo get_field("sous-titre_colonne_3"); ?></h3>
          <p><?php echo get_field("description_colonne_3"); ?></p>
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
            <h1 class="title is-uppercase">
              <?php echo get_field("titre_banner_centre_formation"); ?>
            </h1>
            <h2 class="subtitle">
              <?php echo get_field("sous-titre_banner_centre_formation"); ?>
            </h2>
            <a class="button is-uppercase has-text-weight-bold is-link is-outlined is-rounded" href="#">
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
            <h1 class="title is-uppercase has-text-white">
              <?php echo get_field("titre_banner_employeur"); ?>
            </h1>
            <h2 class="subtitle has-text-white">
              <?php echo get_field("sous-titre_banner_employeur"); ?>
            </h2>
            <a class="button is-primary is-uppercase has-text-weight-bold is-rounded" href="#">
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