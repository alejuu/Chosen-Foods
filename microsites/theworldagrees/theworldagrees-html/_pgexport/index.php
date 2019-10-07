<?php get_header(); ?>

<section class="main-hero">
    <div class="main-container">
        <div class="slide-1">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/avocado.png" class="avocado"/>
            <div class="poll">
                <?php echo do_shortcode('[totalpoll id="5"]'); ?>
            </div>
            <h1 class="text"><?php _e( 'The world can seem a pretty divided place. But we\'re thankful the avocado can bring us all together...', 'avocado' ); ?></h1>
        </div>
    </div>
    <div class="pg-empty-placeholder newsletter-form">
        <!-- Begin Mailchimp Signup Form -->
        <div id="mc_embed_signup">
            <form action="https://chosenfoods.us6.list-manage.com/subscribe/post?u=5f43c610ddae81c4a559feb07&amp;id=9bc42764ca" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <h2><?php _e( 'Sign up to receive an abocado gift', 'avocado' ); ?></h2>
                    <div class="mc-field-group">
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter you email">
                    </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>                             
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_5f43c610ddae81c4a559feb07_9bc42764ca" tabindex="-1" value="">
                    </div>
                    <div class="clear">
                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                    </div>
                </div>
            </form>
        </div>
        <!--End mc_embed_signup-->
    </div>
</section>        

<?php get_footer(); ?>