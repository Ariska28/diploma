<?php get_header(); ?>

<header class="c-header js-header">
        <div class="c-header-wrapper">
            <a href="#" class="c-header__logo">
                <svg class="el-icon c-header__logo-svg">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink"
                        xlink:href="<?php bloginfo( 'template_url' ); ?>/builder/public/images/svg_sprite_inline/sprite_inline.svg#ic-logo"></use>
                </svg>

            </a>
            <button class="c-header__menu js-menu">
                <span class="visually-hidden">
                    Burger menu for mobile
                </span>
            </button>
            <nav class="c-header-nav js-nav ">
                <button class="c-header-nav__btn js-btn">
                    <span class="visually-hidden">
                        button for close mobile menu
                    </span>
                </button>
                <ul class="c-header-nav__list">
                    <li class="c-header-nav__item">
                        <a class="c-header-nav__link isActive" data-nav-item href="#information">Кто мы</a>
                    </li>
                    <li class="c-header-nav__item">
                        <a class="c-header-nav__link" data-nav-item href="#categories">Продукты</a>
                    </li>
                    <li class="c-header-nav__item">
                        <a class="c-header-nav__link" data-nav-item href="#bot">Бот</a>
                    </li>
                    <li class="c-header-nav__item">
                        <a class="c-header-nav__link" data-nav-item href="#contacts">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

<main class="t-base">
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
                <img src="<?php the_field('hero-image') ?>" alt="">
            </figure>
        </div>
    </section>
    <section class="s-text">
        <div class="s-text__container">
            <div class="s-text__content">
                <h2 class="el-title">
                <?php the_field('text-title') ?>
                </h2>

                <a class="btn" target="_blank" href="<?php the_field('text-button-link') ?>">
                    <?php the_field('text-button') ?>
                </a>
            </div>
        </div>

    </section>

    <section class="s-categories" id='categories'>
        <div class="s-categories__container">
            <h2 class="s-categories__title el-title"> <?php the_field('categories-title') ?> </h2>
            <nav class="s-categories__nav js-tags">
                <ul class="s-categories__nav-list">

                    <li class="s-categories__nav-item">
                        <button class="s-categories__nav-btn" data-tag="carbohydrates">
                            <?php the_field('categories-button-1') ?>
                        </button>
                    </li>
                    <li class="s-categories__nav-item">
                        <button class="s-categories__nav-btn" data-tag='proteins'>
                            <?php the_field('categories-button-2') ?>
                        </button>
                    </li>

                    <li class="s-categories__nav-item">
                        <button class="s-categories__nav-btn" data-tag='fats'>
                            <?php the_field('categories-button-3') ?>
                        </button>
                    </li>

                </ul>
            </nav>

            <ul class="s-categories-list" id="carbohydrates" data-target>
                <li class="s-categories-item">
                    <a href="<?php echo bloginfo('url')?>/sample-page/products-vegetables">
                        <?php 
                            $image1 = get_field('categories-image-1');
                            if( !empty($image1) ): 
                                $url = $image1['url'];
                                $title = $image1['title'];
                                $alt = $image1['alt'];
                                $caption = $image1['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>  
                </li>
                <li class="s-categories-item">
                    <a href="<?php echo bloginfo('url')?>/sample-page/products-driedfruits">
                        <?php 
                            $image2 = get_field('categories-image-2');
                            if( !empty($image2) ): 
                                $url = $image2['url'];
                                $title = $image2['title'];
                                $alt = $image2['alt'];
                                $caption = $image2['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="s-categories-item">
                    <a href="#">
                         <?php 
                            $image3 = get_field('categories-image-3');
                            if( !empty($image3) ): 
                                $url = $image3['url'];
                                $title = $image3['title'];
                                $alt = $image3['alt'];
                                $caption = $image3['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image4 = get_field('categories-image-4');
                            if( !empty($image4) ): 
                                $url = $image4['url'];
                                $title = $image4['title'];
                                $alt = $image4['alt'];
                                $caption = $image4['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image5 = get_field('categories-image-5');
                            if( !empty($image5) ): 
                                $url = $image5['url'];
                                $title = $image5['title'];
                                $alt = $image5['alt'];
                                $caption = $image5['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>
            </ul>

            <ul class="s-categories-list" id="proteins" data-target>

                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image6 = get_field('categories-image-6');
                            if( !empty($image6) ): 
                                $url = $image6['url'];
                                $title = $image6['title'];
                                $alt = $image6['alt'];
                                $caption = $image6['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>


                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image7 = get_field('categories-image-7');
                            if( !empty($image7) ): 
                                $url = $image7['url'];
                                $title = $image7['title'];
                                $alt = $image7['alt'];
                                $caption = $image7['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>


                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image8 = get_field('categories-image-8');
                            if( !empty($image8) ): 
                                $url = $image8['url'];
                                $title = $image8['title'];
                                $alt = $image8['alt'];
                                $caption = $image8['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image9 = get_field('categories-image-9');
                            if( !empty($image9) ): 
                                $url = $image9['url'];
                                $title = $image9['title'];
                                $alt = $image9['alt'];
                                $caption = $image9['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image10 = get_field('categories-image-10');
                            if( !empty($image10) ): 
                                $url = $image10['url'];
                                $title = $image10['title'];
                                $alt = $image10['alt'];
                                $caption = $image10['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>


            </ul>

            <ul class="s-categories-list" id="fats" data-target>
                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image11 = get_field('categories-image-11');
                            if( !empty($image11) ): 
                                $url = $image11['url'];
                                $title = $image11['title'];
                                $alt = $image11['alt'];
                                $caption = $image11['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image12 = get_field('categories-image-12');
                            if( !empty($image12) ): 
                                $url = $image12['url'];
                                $title = $image12['title'];
                                $alt = $image12['alt'];
                                $caption = $image12['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image13 = get_field('categories-image-13');
                            if( !empty($image13) ): 
                                $url = $image13['url'];
                                $title = $image13['title'];
                                $alt = $image13['alt'];
                                $caption = $image13['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image14 = get_field('categories-image-14');
                            if( !empty($image14) ): 
                                $url = $image14['url'];
                                $title = $image14['title'];
                                $alt = $image14['alt'];
                                $caption = $image14['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>

                <li class="s-categories-item">
                    <a href="#">
                        <?php 
                            $image15 = get_field('categories-image-15');
                            if( !empty($image15) ): 
                                $url = $image15['url'];
                                $title = $image15['title'];
                                $alt = $image15['alt'];
                                $caption = $image15['caption'];

    
                                if( $caption ): ?>
                                    <figure class="s-categories-item__media">
                                        <?php endif; ?>
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
                                        <?php if( $caption ): ?>

                                        <p class="s-categories-item__description"><?php echo $caption; ?>
                                        </p>
                                    </figure>
                                <?php endif; ?>
                        <?php endif; ?>
                    </a>
                </li>
            </ul>

        </div>
    </section>
    <section class="s-bot" id="bot">
        <div class="s-bot__container">
            <h2 class="el-title s-bot__title">
                <?php the_field('bot-title') ?>
            </h2>

            <div class="s-bot__content">
                <?php the_field('bot-content') ?>
            </div>

            <a href="<?php the_field('bot-link') ?>" target="_blank" class="s-bot__btn btn">
                <?php the_field('bot-button') ?>
            </a>
        </div>

    </section>

    <section class="s-small-bot">
        <div class="s-small-bot__container">
            <a href="<?php the_field('bot-link') ?>" target="_blank" class="s-small-bot__btn btn">
                <?php the_field('bot-button') ?>
            </a>
        </div>
    </section>
</main>


<?php get_footer(); ?>