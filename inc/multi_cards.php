
<style>
/* ---------------------------------------------------------------------------
6.4.5) =sqare:
--------------------------------------------------------------------------- */
.sqare:hover .sqare_deco{width:100%;background:red}
.sqare{
  display:grid;
  grid-gap:.5rem;
}
.sqare_amg{
  display:flex;
  height:calc((100vw - 16px - var(--lateral) * 2 - (var(--num_1_2_4) - 1) * .5rem) / var(--num_1_2_4));
}
.sqare_img{
  display:flex;
  height:inherit;
}
.sqare_deco{
  width:1rem;
  height:3px;
  background:var(--grey6);
  transition:.3s;
}
.sqare_date{
  margin-top:auto;
}
</style>
<?php function sqare_card () { ?>

  <div class="sqare">
    <a class="sqare_amg" href="<?php the_permalink(); ?>">
      <img class="sqare_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
    </a>
    <h4 class="sqare_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <p class="sqare_author">by <?php the_author(); ?></p>
    <div class="sqare_deco"></div>
    <p class="sqare_date"><?php the_time( 'F Y' ); ?></p>
    <p class="sqare_exerpt"><?php echo excerpt(90); ?></p>
    <a class="sqare_link" href="<?php the_permalink(); ?>">Leer más</a>
  </div>

<?php } ?>









<style>
/* ---------------------------------------------------------------------------
------------------------------------------------------------------------------
                          6.4.3) =simpla:
------------------------------------------------------------------------------
--------------------------------------------------------------------------- */
.simpla{
  display: grid;
  grid-gap:.75rem;
  text-align: center;
  margin-bottom:auto;
}
.simpla_img{
  /* height:calc((100vw - 16px - var(--lateral) * 2 - 4rem) / 5); */
  height:calc((100vw - 16px - var(--lateral) * 2 - (var(--num_1_2_4) - 1) * .5rem) / var(--num_1_2_4));
}
.simpla_title{
  margin-top:1rem;
  text-transform: uppercase;
  color: var(--grey5);
}
.simpla_deco{
  width:50%;
  margin:auto;
  margin-bottom:0;
  position:relative;
  bottom:-10px;
  height:3px;
  background:red;
}
.simpla_txt{
  color: var(--grey7);
}
</style>
<?php function simpla_card () { ?>

  <div class="simpla">
    <img class="simpla_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h6 class="simpla_title font_size_6 row2col1"><?php the_title(); ?></h6>
    <div class="simpla_deco row2col1"></div>
    <div class="simpla_txt font_size_7"><?php the_excerpt(); ?></div>
  </div>

<?php } ?>
