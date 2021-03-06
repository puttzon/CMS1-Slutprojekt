<?php
  get_header();
?>

<div class="container">
    <main>
      <h1 class="n1">
      Category: <?php foreach((get_the_category()) as $category) {
        echo $category->name."<br>";
        }	?> <!-- Foreach-loop jag hittade på internet. Visar namnet på kategorin. Skriver man the_category(); får man en länk. //David -->
      </h1>

      <section class="news">
        <?php
          while (have_posts()) {
            the_post();
        ?>
        <a href="<?php echo get_permalink(); ?>">
        <div class="item">
          <h3><?php echo get_the_title(); ?></h3>
          <img src="<?php the_post_thumbnail_url(); ?>" alt="" width="450px">
        </div>
        </a>
        <div class="item-text">
          <br><br>
          <p><?php echo get_the_excerpt(); ?></p>
          <ul class="archives">
            <li>
              <i class="fa fa-calendar"></i> <a href="<?php echo get_month_link(get_post_time('Y'), get_post_time('m')); ?>"><?php echo get_the_date(); ?></a>
            </li>
            <li>
              <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
            </li>
            <li>
              <i class="fa fa-tag"></i> <?php the_category(', '); ?> <!-- Med fnuttarna så kan man visa flera kategorier. //David -->
            </li>
          </ul>
          <hr>
          </hr>
        </div>
        <?php } ?>
      </div>




      </section>
    </main>
  </div>

<?php
  get_footer();
?>