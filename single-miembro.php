<?php get_header(); ?>


<?php while(have_posts()){the_post(); ?>

    <section class="hero">
        <img class="hero_img" loading="lazy" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <div class="redDot header_activator"></div>
        <svg class="mega_arrow_down rowcol1" aria-hidden="true" focusable="false" role="img" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 74 100">
          <use xlink:href="#arrow_down"></use>
        </svg>
    </section>

    <section class="tory tory_1">
        <h1 class="tory_title"><?php the_title(); ?></h1>
        <h3 class="tory_highlight">Co-fundador de VIVIR DESPIERTO<br>Es fácil... ¡si sabes cómo!<br><br>Profesor y ponenete de meditacion, mindfulness y resiliencia emocional. Responsable tambien de los programas para dejar de fumar, vivir sin alcohol y otras drogas</h3>
        <p class="tory_root">
            Goefry es de raíces malayo-irlandesas. Nació en 1957. Pasó su niñez en Singapur, Chipre y en el Reino Unido. Tiene 5 hijos, 5 nietos.
        </p>
        <img class="tory_img tory_img_1" src="https://picsum.photos/200/300" alt="">
        <h5 class="tory_subtitle tory_subtitle_1">Historia</h5>
        <p class="tory_text tory_text_1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non egestas felis, vel malesuada nisl. Integer lobortis pretium urna, at aliquam ex mollis vitae. Vivamus quis ex tempus, commodo tortor id, dapibus magna. Sed ullamcorper purus quis risus cursus sodales. Nulla eget diam hendrerit, lacinia nulla sed, accumsan risus. Vivamus vitae felis congue, commodo diam eu, blandit lacus. Vivamus ac metus congue, convallis leo ut, suscipit nunc. Suspendisse dapibus lectus vitae eros placerat fermentum. In pretium vestibulum leo feugiat aliquet. Nunc lectus ante, laoreet eget ligula ut, auctor interdum nibh. Duis quis purus enim. Nunc metus urna, feugiat at magna eu, tristique dictum ligula. Cras suscipit laoreet pretium. Sed et diam mattis, cursus urna et, tincidunt ex. Aenean a tristique purus.
            <br><br>
            Fusce fermentum tempor efficitur. Phasellus iaculis purus ac sapien mattis, malesuada tristique ipsum egestas. Donec ex ipsum, fringilla ut enim ut, efficitur vehicula justo. Phasellus vel viverra justo. Nulla condimentum sed eros quis pretium. Nulla ullamcorper rutrum nunc, et tempus magna pharetra ac. Nunc maximus et augue vitae porta. Curabitur ac egestas nulla. Ut ultricies urna sed pharetra hendrerit.
        </p>
    </section>

<section class="tory tory_2">
    <img class="tory_img" src="https://picsum.photos/200/301" alt="">
    <h5 class="tory_subtitle">Historia</h5>
    <p class="tory_text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non egestas felis, vel malesuada nisl. Integer lobortis pretium urna, at aliquam ex mollis vitae. Vivamus quis ex tempus, commodo tortor id, dapibus magna. Sed ullamcorper purus quis risus cursus sodales. Nulla eget diam hendrerit, lacinia nulla sed, accumsan risus. Vivamus vitae felis congue, commodo diam eu, blandit lacus. Vivamus ac metus congue, convallis leo ut, suscipit nunc. Suspendisse dapibus lectus vitae eros placerat fermentum. In pretium vestibulum leo feugiat aliquet. Nunc lectus ante, laoreet eget ligula ut, auctor interdum nibh. Duis quis purus enim. Nunc metus urna, feugiat at magna eu, tristique dictum ligula. Cras suscipit laoreet pretium. Sed et diam mattis, cursus urna et, tincidunt ex. Aenean a tristique purus.
        <br><br>
        Fusce fermentum tempor efficitur. Phasellus iaculis purus ac sapien mattis, malesuada tristique ipsum egestas. Donec ex ipsum, fringilla ut enim ut, efficitur vehicula justo. Phasellus vel viverra justo. Nulla condimentum sed eros quis pretium. Nulla ullamcorper rutrum nunc, et tempus magna pharetra ac. Nunc maximus et augue vitae porta. Curabitur ac egestas nulla. Ut ultricies urna sed pharetra hendrerit.
        <br><br>
        Curabitur nisl ipsum, congue eu tempus vel, auctor quis tortor. Maecenas elementum ullamcorper convallis. Suspendisse neque sem, semper eu ultricies vel, efficitur et enim. Phasellus aliquam consectetur lacus, nec interdum nisl. Curabitur ac erat non libero scelerisque porttitor. Donec ullamcorper arcu eu risus egestas suscipit. Duis tincidunt felis ut tempus placerat.
    </p>
</section>

<section class="tory tory_3">
    <img class="tory_img" src="https://picsum.photos/200/301" alt="">
    <h5 class="tory_subtitle">Historia</h5>
    <p class="tory_text">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam non egestas felis, vel malesuada nisl. Integer lobortis pretium urna, at aliquam ex mollis vitae. Vivamus quis ex tempus, commodo tortor id, dapibus magna. Sed ullamcorper purus quis risus cursus sodales. Nulla eget diam hendrerit, lacinia nulla sed, accumsan risus. Vivamus vitae felis congue, commodo diam eu, blandit lacus. Vivamus ac metus congue, convallis leo ut, suscipit nunc. Suspendisse dapibus lectus vitae eros placerat fermentum. In pretium vestibulum leo feugiat aliquet. Nunc lectus ante, laoreet eget ligula ut, auctor interdum nibh. Duis quis purus enim. Nunc metus urna, feugiat at magna eu, tristique dictum ligula. Cras suscipit laoreet pretium. Sed et diam mattis, cursus urna et, tincidunt ex. Aenean a tristique purus.
        <br><br>
        Fusce fermentum tempor efficitur. Phasellus iaculis purus ac sapien mattis, malesuada tristique ipsum egestas. Donec ex ipsum, fringilla ut enim ut, efficitur vehicula justo. Phasellus vel viverra justo. Nulla condimentum sed eros quis pretium. Nulla ullamcorper rutrum nunc, et tempus magna pharetra ac. Nunc maximus et augue vitae porta. Curabitur ac egestas nulla. Ut ultricies urna sed pharetra hendrerit.
        <br><br>
        Curabitur nisl ipsum, congue eu tempus vel, auctor quis tortor. Maecenas elementum ullamcorper convallis. Suspendisse neque sem, semper eu ultricies vel, efficitur et enim. Phasellus aliquam consectetur lacus, nec interdum nisl. Curabitur ac erat non libero scelerisque porttitor. Donec ullamcorper arcu eu risus egestas suscipit. Duis tincidunt felis ut tempus placerat.
    </p>
</section>

    <section class="main">
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>