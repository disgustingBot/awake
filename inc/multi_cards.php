
<?php function sqare_card () {
    if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
    if(!isset($args['link']   )){ $args['link']    = get_the_permalink(); }
    if(!isset($args['image']  )){ $args['image']   = get_the_post_thumbnail_url(); }
    if(!isset($args['excerpt'])){ $args['excerpt'] = get_the_excerpt(); }
    if(!isset($args['color']  )){ $args['color']   = get_post_meta(get_the_ID(), 'color', true); }
    ?>

    <div class="sqare">
        <?php if($args['image'] != false){ ?>
            <a class="sqare_amg" href="<?php echo $args['link']; ?>">
                <img class="sqare_img" loading="lazy" src="<?php echo $args['image']; ?>" alt="">
            </a>
        <?php } ?>
        <h4 class="sqare_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p class="sqare_author">by <?php the_author(); ?></p>
        <div class="sqare_deco" style="color:<?php echo get_post_meta(get_the_ID(), 'color', true); ?>"></div>
        <p class="sqare_date" style="color:<?php echo get_post_meta(get_the_ID(), 'color', true); ?>"><?php the_time( 'F Y' ); ?></p>
        <p class="sqare_exerpt"><?php echo excerpt(90); ?></p>
        <a class="sqare_link" href="<?php the_permalink(); ?>">Leer más</a>
    </div>

<?php } ?>






<?php function simpla_card ($args = array()) {
    if(!isset($args['title']  )){ $args['title']   = get_the_title(); }
    if(!isset($args['link']   )){ $args['link']    = get_the_permalink(); }
    if(!isset($args['image']  )){ $args['image']   = get_the_post_thumbnail_url(); }
    if(!isset($args['excerpt'])){ $args['excerpt'] = get_the_excerpt(); }
    if(!isset($args['color']  )){ $args['color']   = get_post_meta(get_the_ID(), 'color', true); }
    ?>

    <div class="simpla">
        <?php if($args['image'] != false){ ?>
            <a class="simpla_amg" href="<?php echo $args['link']; ?>">
                <img class="simpla_img" loading="lazy" src="<?php echo $args['image']; ?>" alt="">
            </a>
        <?php } ?>
        <?php if($args['title'] != false){ ?>
            <h6 class="simpla_title font_size_6 row2col1"><?php echo $args['title']; ?></h6>
        <?php } ?>
        <?php if($args['color'] != false){ ?>
            <div class="simpla_deco" style="color:<?php echo $args['color']; ?>"></div>
        <?php } ?>
        <?php if($args['excerpt'] != false){ ?>
            <div class="simpla_txt font_size_7"><?php echo $args['excerpt']; ?></div>
        <?php } ?>
    </div>

<?php } ?>
