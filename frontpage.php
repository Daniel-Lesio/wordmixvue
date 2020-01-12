<?php
get_header();
?>
<section id='hero' class='mt-5'style=''>
        <div class="grid-hero">
            <div class="hero-box hero-box-1">
            <div class="hero-text">
                <h1 class='title'><?php   echo get_bloginfo( 'name' ,'display' ) ?></h1>
                <p class='subtitle'><?php   echo get_bloginfo( 'description', 'display' ); ?></p>
            </div>
            </div>
            <div class="hero-box hero-box-2">
                <!-- <img src="https://images.pexels.com/photos/3496994/pexels-photo-3496994.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">-->
            </div>
            <div class="hero-box hero-box-3">
                <div class="hero-scroll hero-scroll-1"> Projects ></div>
                <div class="hero-scroll hero-scroll-2">Oferty</div>
                <div class="hero-scroll hero-scroll-3">Galeria</div>
            </div>
            <!-- <div class="">
            <h1 class='text-right'> <?php   echo get_bloginfo( 'name' ,'display' ) ?> </h1>
            <p  class='text-right'><?php   echo get_bloginfo( 'description', 'display' ); ?></p>
            </div>
            <div class="">
                <img src="https://images.pexels.com/photos/3483786/pexels-photo-3483786.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">
            </div> -->
        </div>
</section>



<section class="section">
<div id='app' class="wrapper mx-auto ">
<div class="box">{{test}}</div>
<div class="box"></div>
<div class="box">box3</div>
</div>
</section>
<?php 
get_footer();
