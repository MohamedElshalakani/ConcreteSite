<?php
    get_header(); ?>
<div class="block block-inverse block-fill-height app-header"
             style="background-image: url(<?php echo get_theme_file_uri('assets/img/background31.jpg')?>);">
          <div class="container py-4 fixed-top app-navbar">
          <nav class="navbar navbar-transparent navbar-padded navbar-toggleable-sm">
            <button
              class="navbar-toggler navbar-toggler-right hidden-md-up"
              type="button"
              data-target="#stage"
              data-toggle="stage"
              data-distance="-250">
              <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand mr-auto" href=<?php echo get_home_url(); ?>>
              <span style="background-color:rgba(255,255,255,0.4); padding: 12px; border-radius: 4px; color: #28669F;font-weight: bold;">Home</span>
            </a>

            <div class="hidden-sm-down text-uppercase">
              <ul class="navbar-nav">
                <li class="nav-item px-1 ">
                  <a class="nav-link" href="<?php echo get_permalink(26); ?>">Profile</a>
                </li>
                <li class="nav-item px-1 ">
                  <a class="nav-link" href="<?php echo get_permalink(29); ?>">Sectors</a>
                </li>
                <li class="nav-item px-1 ">
                  <a class="nav-link" href="<?php echo get_permalink(31); ?>">Contact</a>
                </li>
                <li class="nav-item px-1 ">
                  <a class="nav-link" href="<?php echo get_permalink(23); ?>">Register</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
           <!-- <img class="app-graph"  src= "<?php// echo get_theme_file_uri('assets/img/startup-0.svg')?>"> -->

              <div class="block-xs-middle pb-5">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-10 col-lg-6">
                      <h1 class="block-titleData frequency"><?php echo get_bloginfo("name"); ?></h1>
                      <p class="lead mb-4 text-muted">Cras ut ipsum laoreet, hendrerit ligula non, rhoncus leo. In euismod nibh non metus viverra, at pharetra arcu bibendum. Praesent bibendum sem quis neque facilisis. </p>
                      <button class="btn btn-primary btn-lg">Submit your inquiry</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
<div class="container divPadding">
<?php
    while(have_posts())
    {
        the_post();?>

    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
    <div> <?php the_content(); ?></div>

    <?php
    }
    ?>
    </div>
<?php
    get_footer();
?>
    