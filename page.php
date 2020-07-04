<?php get_header();?>
<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-lg-3">
                <?php if( is_active_sidebar('page-sidebar') ):?>
                        
                        <?php dynamic_sidebar('page-sidebar');?>

                <?php endif;?>
            </div>

            <div class="col-lg-9">
                <h1><?php the_title();?></h1>

                <div class="row">
                    <div class="col-lg-6">
                        This is where the contact form goes
                    </div>
                </div>

                <?php get_template_part('includes/section', 'content')?>
            </div>
        </section>

    </div>
</section>
<?php get_footer();?>