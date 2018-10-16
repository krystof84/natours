<?php get_header(); ?>
    
    <main>
        <section class="section-about" id="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    <?php echo get_theme_mod('about-heading-text', __('Exciting tours for advantures people', 'natours')); ?>
                </h2>
            </div>

            <div class="row">
                    <div class="col-1-of-2">
                        <?php echo get_theme_mod('about-content-text'); ?>

                        <?php if( ! get_theme_mod('about-button-hide') ): ?>

                            <a href="<?php echo get_theme_mod('about-button-url'); ?>" class="btn-text">
                                <?php echo get_theme_mod('about-button-text', __('Learn more', 'natours')); ?> &rarr;
                            </a> 

                        <?php endif; ?>

                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">

                            <?php if( get_theme_mod('about-image-1') ): ?>
                                <img srcset="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('about-image-1'))); ?> 300w, 
                                            <?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('about-image-1-retina'))); ?> 1000w" 
                                    sizes="(max-width: 56.35em) 20vw, (max-width: 37.5em) 30vw , 300px"
                                    alt="Photo 1"
                                    class="composition__photo composition__photo--p1"
                                    src="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('about-image-1-retina'))); ?>">
                            <?php endif; ?>

                            <?php if( get_theme_mod('about-image-2') ): ?>
                                <img srcset="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('about-image-2'))); ?> 300w, 
                                            <?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('about-image-2-retina'))); ?> 1000w" 
                                    sizes="(max-width: 56.35em) 20vw, (max-width: 37.5em) 30vw , 300px"
                                    alt="Photo 2"
                                    class="composition__photo composition__photo--p2"
                                    src="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('about-image-2-retina'))); ?>">
                            <?php endif; ?>

                            <?php if( get_theme_mod('about-image-3') ): ?>
                                <img srcset="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('about-image-3'))); ?> 300w, 
                                             <?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('about-image-3-retina'))); ?> 1000w" 
                                    sizes="(max-width: 56.35em) 20vw, (max-width: 37.5em) 30vw , 300px"
                                    alt="Photo 3"
                                    class="composition__photo composition__photo--p3"
                                    src="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('about-image-3-retina'))); ?>">
                            <?php endif; ?>    
                        </div>
                    </div>
                </div>
        </section>

        <section class="section-features" id="section-features">
            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <?php echo get_theme_mod('features-icon-1'); ?>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <?php echo get_theme_mod('features-title-1')?>
                        </h3>
                        <p class="feature-box__text">
                            <?php echo get_theme_mod('features-content-1'); ?>
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <?php echo get_theme_mod('features-icon-2'); ?>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <?php echo get_theme_mod('features-title-2')?>
                        </h3>
                        <p class="feature-box__text">
                            <?php echo get_theme_mod('features-content-2'); ?>
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <?php echo get_theme_mod('features-icon-3'); ?>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <?php echo get_theme_mod('features-title-3')?>
                        </h3>
                        <p class="feature-box__text">
                            <?php echo get_theme_mod('features-content-3'); ?>
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <?php echo get_theme_mod('features-icon-4'); ?>
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <?php echo get_theme_mod('features-title-4')?>
                        </h3>
                        <p class="feature-box__text">
                            <?php echo get_theme_mod('features-content-4'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-tours" id="section-tours">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    <?php echo get_theme_mod('mptours-title'); ?>
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">
                                    <?php echo get_theme_mod('tour-1-name'); ?>
                                </span>
                            </h4>
                            <div class="card__details">
                                <?php echo get_theme_mod('tour-1-content'); ?>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <?php if(get_theme_mod('tour-1-price')): ?>
                                    <div class="card__price-box">
                                        <p class="card__price-only">
                                            <?php _e('Only', 'natours')?>
                                        </p>
                                        <p class="card__price-value">
                                            <?php echo get_theme_mod('tour-1-price'); ?>
                                        </p>
                                    </div>
                                <?php endif; ?>

                                <?php if( ! get_theme_mod('tour-1-button-hide') ): ?>
                                    <a href="#popup-1" class="btn btn--white">
                                        <?php echo get_theme_mod('tour-1-button-text'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">
                                     <?php echo get_theme_mod('tour-2-name'); ?>
                                </span>
                            </h4>
                            <div class="card__details">
                                <?php echo get_theme_mod('tour-2-content'); ?>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only"><?php _e('Only', 'natours'); ?></p>
                                    <p class="card__price-value">
                                    <?php echo get_theme_mod('tour-2-price'); ?>
                                    </p>
                                </div>

                                <?php if( ! get_theme_mod('tour-2-button-hide') ): ?>
                                    <a href="#popup-2" class="btn btn--white">
                                        <?php echo get_theme_mod('tour-2-button-text'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">
                                    <?php echo get_theme_mod('tour-3-name'); ?>
                                </span>
                            </h4>
                            <div class="card__details">
                                <?php echo get_theme_mod('tour-3-content'); ?>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only"><?php _e('Only', 'natours'); ?></p>
                                    <p class="card__price-value">
                                        <?php echo get_theme_mod('tour-3-price'); ?>
                                    </p>
                                </div>

                                <?php if( ! get_theme_mod('tour-3-button-hide') ): ?>
                                    <a href="#popup-3" class="btn btn--white">
                                        <?php echo get_theme_mod('tour-3-button-text'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php if( ! get_theme_mod('mptours-button-hide') ): ?>    
                <div class="u-center-text u-margin-top-huge">
                    <a href="<?php echo get_theme_mod('mptours-button-url'); ?>" class="btn btn--green">
                        <?php echo get_theme_mod('mptours-button-text'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </section>

        <section class="section-stories" id="section-stories">
            <?php if(get_theme_mod('story-video-1')): ?>
                <div class="bg-video">
                    <video class="bg-video__content" autoplay muted loop>
                        <source src="<?php echo wp_get_attachment_url(get_theme_mod('story-video-1')); ?>" type="video/mp4">
                        <source src="<?php echo wp_get_attachment_url(get_theme_mod('story-video-2')); ?>" type="video/webm">   
                        Your browser is not supported      
                    </video>
                </div>
            <?php endif; ?>

            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    <?php echo get_theme_mod('story-heading'); ?>
                </h2>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('story-1-image'))); ?>" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">
                            <?php echo get_post(get_theme_mod('story-1-image'))->post_excerpt;; ?>
                        </figcaption> 
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <?php echo get_theme_mod('story-1-title'); ?>
                        </h3>
                        <p><?php echo get_theme_mod('story-1-content'); ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="<?php echo natours_sanitize_image(wp_get_attachment_url(get_theme_mod('story-2-image'))); ?>" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">
                            <?php echo get_post(get_theme_mod('story-2-image'))->post_excerpt;; ?>
                        </figcaption> 
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            <?php echo get_theme_mod('story-2-title'); ?>
                        </h3>
                        <p><?php echo get_theme_mod('story-2-content'); ?></p>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-book" id="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form action="#" class="form">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">Start booking now</h2>
                            </div>

                            <div class="form__group">
                                <input type="text" class="form__input" placeholder="Full Name" id="name" required autocomplete="off">
                                <label for="name" class="form__label">Full Name</label>
                            </div>

                            <div class="form__group">
                                <input type="email" class="form__input" placeholder="Email address" id="email" required autocomplete="off">
                                <label for="email" class="form__label">Email address</label>
                            </div>

                            <div class="form__group u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="size">
                                    <label for="small" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Small tour group
                                    </label>
                                </div>

                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="size">
                                    <label for="large" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Large tour group
                                    </label>
                                </div>
                            </div>

                            <div class="form__group">
                                <button class="btn btn--green">Next step &rarr;</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php if( ! get_theme_mod('tour-1-button-hide') ): ?>
        <div class="popup" id="popup-1">
            <div class="popup__content">
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-small">
                        <?php echo get_theme_mod('tour-1-popup-heading'); ?>
                    </h2>
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        <?php echo get_theme_mod('tour-1-popup-subheading'); ?>
                    </h3>
                    <p class="popup__text">
                        <?php echo get_theme_mod('tour-1-popup-content'); ?>
                    </p>
                    <?php if( get_theme_mod('tour-1-popup-button-text') ): ?>
                        <a href="<?php echo get_theme_mod('tour-1-popup-button-url'); ?>" class="btn btn--green">
                            <?php echo get_theme_mod('tour-1-popup-button-text'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if( ! get_theme_mod('tour-2-button-hide') ): ?>
        <div class="popup" id="popup-2">
            <div class="popup__content">
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-small">
                        <?php echo get_theme_mod('tour-2-popup-heading'); ?>
                    </h2>
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        <?php echo get_theme_mod('tour-2-popup-subheading'); ?>
                    </h3>
                    <p class="popup__text">
                        <?php echo get_theme_mod('tour-2-popup-content'); ?>
                    </p>
                    <?php if( get_theme_mod('tour-2-popup-button-text') ): ?>
                        <a href="<?php echo get_theme_mod('tour-2-popup-button-url'); ?>" class="btn btn--green">
                            <?php echo get_theme_mod('tour-2-popup-button-text'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if( ! get_theme_mod('tour-3-button-hide') ): ?>
        <div class="popup" id="popup-3">
            <div class="popup__content">
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                    <h2 class="heading-secondary u-margin-bottom-small">
                        <?php echo get_theme_mod('tour-3-popup-heading'); ?>
                    </h2>
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        <?php echo get_theme_mod('tour-3-popup-subheading'); ?>
                    </h3>
                    <p class="popup__text">
                        <?php echo get_theme_mod('tour-3-popup-content'); ?>
                    </p>
                    <?php if( get_theme_mod('tour-3-popup-button-text') ): ?>
                        <a href="<?php echo get_theme_mod('tour-3-popup-button-url'); ?>" class="btn btn--green">
                            <?php echo get_theme_mod('tour-3-popup-button-text'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>