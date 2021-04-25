<?php
/*
Template Name: Information
*/
?>


<?php get_header(); ?>

<?php 
$info2 = get_field('info-2');
$info3 = get_field('info-3');
$info4 = get_field('info-4');
$info5 = get_field('info-5');
$info6 = get_field('info-6');
$info7 = get_field('info-7');
$info8 = get_field('info-8');
$info9 = get_field('info-9');
 ?>

<main class="t-base"> 
<section class="s-info">

    <div class="s-info__line">
    </div>

    <div class="s-info__text">
        <h2><?php the_field('info-title') ?></h2>
        <p><?php the_field('info-description') ?></p>
    </div>

</section>




<?php if( $info2['info-title-2']): ?>

    <section class="s-info">

        <div class="s-info__text">
        
            <?php if( $info2['info-title-2']): ?>
                <h2> <?php echo $info2['info-title-2']; ?> </h2>
            <?php endif; ?>

            <?php if( $info2['info-description-2']): ?>
                <p> <?php echo $info2['info-description-2']; ?></p>
            <?php endif; ?>

        </div>

    </section>

<?php endif; ?>


<?php if( $info3['info-title-3']): ?>

    <section class="s-info">

        <div class="s-info__text">
        
            <?php if( $info3['info-title-3']): ?>
                <h2> <?php echo $info3['info-title-3']; ?> </h2>
            <?php endif; ?>

            <?php if( $info3['info-description-3']): ?>
                <p> <?php echo $info3['info-description-3']; ?></p>
            <?php endif; ?>

        </div>

    </section>

<?php endif; ?>

<?php if( $info4['info-title-4']): ?>

    <section class="s-info">

        <div class="s-info__text">
        
            <?php if( $info4['info-title-4']): ?>
                <h2> <?php echo $info4['info-title-4']; ?> </h2>
            <?php endif; ?>

            <?php if( $info4['info-description-4']): ?>
                <p> <?php echo $info4['info-description-4']; ?></p>
            <?php endif; ?>

        </div>

    </section>

<?php endif; ?>


<?php if( $info5['info-title-5']): ?>

    <section class="s-info">

        <div class="s-info__text">
        
            <?php if( $info5['info-title-5']): ?>
                <h2> <?php echo $info5['info-title-5']; ?> </h2>
            <?php endif; ?>

            <?php if( $info5['info-description-5']): ?>
                <p> <?php echo $info5['info-description-5']; ?></p>
            <?php endif; ?>

        </div>

    </section>

<?php endif; ?>


<?php if( $info6['info-description-6']): ?>

    <section class="s-info">

        <div class="s-info__text">
        
            <?php if( $info6['info-title-6']): ?>
                <h2> <?php echo $info6['info-title-6']; ?> </h2>
            <?php endif; ?>

            <?php if( $info6['info-description-6']): ?>
                <p> <?php echo $info6['info-description-6']; ?></p>
            <?php endif; ?>

        </div>

    </section>

<?php endif; ?>

<?php if( $info7['info-title-7']): ?>

    <section class="s-info">

        <div class="s-info__text">
        
            <?php if( $info7['info-title-7']): ?>
                <h2> <?php echo $info7['info-title-7']; ?> </h2>
            <?php endif; ?>

            <?php if( $info7['info-description-7']): ?>
                <p> <?php echo $info7['info-description-7']; ?></p>
            <?php endif; ?>

        </div>

    </section>

<?php endif; ?>

<?php if( $info8['info-title-8']): ?>

<section class="s-info">

    <div class="s-info__text">
    
        <?php if( $info8['info-title-8']): ?>
            <h2> <?php echo $info8['info-title-8']; ?> </h2>
        <?php endif; ?>

        <?php if( $info8['info-description-8']): ?>
            <p> <?php echo $info8['info-description-8']; ?></p>
        <?php endif; ?>

    </div>

</section>

<?php endif; ?>

<?php if( $info9['info-title-9']): ?>

<section class="s-info">

    <div class="s-info__text">
    
        <?php if( $info9['info-title-9']): ?>
            <h2> <?php echo $info9['info-title-9']; ?> </h2>
        <?php endif; ?>

        <?php if( $info9['info-description-9']): ?>
            <p> <?php echo $info9['info-description-9']; ?></p>
        <?php endif; ?>

    </div>

</section>

<?php endif; ?>


<section class="s-info">
    <div class="s-info__text s-info__text--white">
        <p><?php the_field('info-descr-end') ?></p>
    </div>
</section>
</main>

<?php get_footer(); ?>