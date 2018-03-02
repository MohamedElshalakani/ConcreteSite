<?php
    get_header(); ?>
<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse">
      <button
        class="navbar-toggler navbar-toggler-right hidden-md-up"
        type="button"
        data-toggle="collapse"
        data-target="#navbarResponsive"
        aria-controls="navbarResponsive"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="#" id="Symbol1">
        <span class="icon icon-leaf navbar-brand-icon" ></span>
        ELSHALAKANI
      </a>

      <div class="collapse navbar-collapse mr-auto" id="navbarResponsive">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_home_url(); ?>">Home</a>
          </li>
          <li class="nav-item <?php if(is_page("profile")) echo active; ?>">
            <a class="nav-link" href=<?php echo get_permalink(26); ?>>Profile</a>
          </li>
          <li class="nav-item <?php if(is_page("Sectors")) echo active; ?>">
            <a class="nav-link" href=<?php echo get_permalink(29); ?>>Sectors</a>
          </li>
          <li class="nav-item <?php if(is_page("Contact")) echo active; ?>">
            <a class="nav-link" href=<?php echo get_permalink(31); ?>>Contact</a>
          </li>
        </ul>

        <form class="form-inline hidden-sm-down ml-auto">
          <input class="form-control" type="text" data-action="grow" placeholder="Search">
        </form>
      </div>
  </nav>
<?php
    while(have_posts())
    {
        the_post();?>
<div class="container divPadding">
    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
    <div> <?php the_content(); ?></div>
    </div>
    <?php
    }
    get_footer();
?>