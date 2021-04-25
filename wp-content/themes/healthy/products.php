<?php
/*
Template Name: Products
*/
?>

<?php get_header(); ?>

<section class="s-pannel">
    <div class="s-pannel__container">
        <a class="s-pannel__link" href="<?php echo bloginfo('url')?>">
            <svg class="el-icon s-pannel__link-svg">
                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                    xlink:href="<?php bloginfo( 'template_url' ); ?>/builder/public/images/svg_sprite_inline/sprite_inline.svg#ic-arrow">
                </use>
            </svg>
        </a>

        <a class="s-pannel__link" href="<?php the_field('pannel-link') ?>">Read more</a>
    </div>
</section>

<section class="s-hero" id="information">
    <div class="s-hero__container">
        <div class="s-hero__content">
            <h1 class="el-title">
                <?php the_field('hero-title') ?>
            </h1>
            <p class="s-hero__content-description">
                <?php the_field('hero-description') ?>
            </p>
        </div>
        <figure class="s-hero__media">
            <img src="<?php the_field('hero-image')?>" alt="">
        </figure>
    </div>
</section>

<section class="s-accordeon js-accordeon">
    <div class="s-accordeon__container">
        <ul class="s-accordeon__list">
            <?php		
                    $accordeon = get_field('accordeon');	
                    if( $accordeon && $accordeon['title']): ?>
            <li class="s-accordeon__item">
                <button class="s-accordeon__item-btn">
                    <?php echo $accordeon['title']; ?>
                </button>
                <p class="s-accordeon__item-description">
                    <?php echo $accordeon['description']; ?>
                </p>
            </li>
            <?php endif; ?>



            <?php		
                    $accordeon1 = get_field('accordeon-1');	
                    if( $accordeon1 && $accordeon1['title-1']): ?>
            <li class="s-accordeon__item">
                <button class="s-accordeon__item-btn">
                    <?php echo $accordeon1['title-1']; ?>
                </button>
                <p class="s-accordeon__item-description">
                    <?php echo $accordeon1['description-1']; ?>
                </p>
            </li>
            <?php endif; ?>



            <?php		
                    $accordeon2 = get_field('accordeon-2');	
                    if( $accordeon2 && $accordeon2['title-2']): ?>
                <li class="s-accordeon__item">
                    <button class="s-accordeon__item-btn">
                        <?php echo $accordeon2['title-2']; ?>
                    </button>
                    <p class="s-accordeon__item-description">
                        <?php echo $accordeon2['description-2']; ?>
                    </p>
                </li>
            <?php endif; ?>
      

           
                <?php		
                    $accordeon3 = get_field('accordeon-3');	
                    if( $accordeon3 && $accordeon3['title-3']): ?>
                    <li class="s-accordeon__item">
                        <button class="s-accordeon__item-btn">
                            <?php echo $accordeon3['title-3']; ?>
                        </button>
                        <p class="s-accordeon__item-description">
                            <?php echo $accordeon3['description-3']; ?>
                        </p>
                    </li>
                <?php endif; ?>
           

                <?php		
                    $accordeon4 = get_field('accordeon-4');	
                    if( $accordeon4 && $accordeon4['title-4']): ?>
                    <li class="s-accordeon__item">
                        <button class="s-accordeon__item-btn">
                            <?php echo $accordeon4['title-4']; ?>
                        </button>
                        <p class="s-accordeon__item-description">
                            <?php echo $accordeon4['description-4']; ?>
                        </p>
                    </li>
                <?php endif; ?>
            

           
                <?php		
                    $accordeon5 = get_field('accordeon-5');	
                    if( $accordeon5 && $accordeon5['title-5']): ?>
                    <li class="s-accordeon__item">
                        <button class="s-accordeon__item-btn">
                            <?php echo $accordeon5['title-5']; ?>
                        </button>
                        <p class="s-accordeon__item-description">
                            <?php echo $accordeon5['description-5']; ?>
                        </p>
                    </li>
                <?php endif; ?>
           

           
                <?php		
                    $accordeon6 = get_field('accordeon-6');	
                    if( $accordeon6 && $accordeon6['title-6']): ?>
                     <li class="s-accordeon__item">
                        <button class="s-accordeon__item-btn">
                            <?php echo $accordeon6['title-6']; ?>
                        </button>
                        <p class="s-accordeon__item-description">
                            <?php echo $accordeon6['description-6']; ?>
                        </p>
                    </li>
                <?php endif; ?>
          

          
                <?php		
                    $accordeon7 = get_field('accordeon-7');	
                    if( $accordeon7 && $accordeon7['title-7']): ?>
                    <li class="s-accordeon__item">
                        <button class="s-accordeon__item-btn">
                            <?php echo $accordeon7['title-7']; ?>
                        </button>
                        <p class="s-accordeon__item-description">
                            <?php echo $accordeon7['description-7']; ?>
                        </p>
                    </li>
                <?php endif; ?>
           

                <?php		
                    $accordeon8 = get_field('accordeon-8');	
                    if( $accordeon8 && $accordeon8['title-8']): ?>
                    <li class="s-accordeon__item">
                        <button class="s-accordeon__item-btn">
                            <?php echo $accordeon8['title-8']; ?>
                        </button>
                        <p class="s-accordeon__item-description">
                            <?php echo $accordeon8['description-8']; ?>
                        </p>
                    </li>
                <?php endif; ?>
            
                <?php		
                    $accordeon9 = get_field('accordeon-9');	
                    if( $accordeon9 && $accordeon9['title-9']): ?>
                     <li class="s-accordeon__item">
                        <button class="s-accordeon__item-btn">
                            <?php echo $accordeon9['title-9']; ?>
                        </button>
                        <p class="s-accordeon__item-description">
                            <?php echo $accordeon9['description-9']; ?>
                        </p>
                    </li>
                <?php endif; ?>
         
                <?php		
                    $accordeon10 = get_field('accordeon-10');	
                    if( $accordeon10 && $accordeon10['title-10']): ?>
                    <li class="s-accordeon__item">
                        <button class="s-accordeon__item-btn">
                            <?php echo $accordeon10['title-10']; ?>
                        </button>
                        <p class="s-accordeon__item-description">
                            <?php echo $accordeon10['description-10']; ?>
                        </p>
                    </li>
                <?php endif; ?>

        </ul>
    </div>
</section>
</main>

<?php get_footer(); ?>