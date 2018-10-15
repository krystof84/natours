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

                            <!-- <pre>
                                <?php var_dump( wp_get_attachment_url(! get_theme_mod('about-image-1')) ); ?>
                            </pre> -->

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
                <h2 class="heading-secondary">Most popular tours</h2>
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
                                    The sea explorer
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>3 day tour</li>
                                    <li>Up to 30 people</li>
                                    <li>2 tour guides</li>
                                    <li>Sleep in cozy hotels</li>
                                    <li>Difficulty: easy</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">297$</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
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
                                    The Forest Hiker
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>7 day tour</li>
                                    <li>Up to 40 people</li>
                                    <li>6 tour guides</li>
                                    <li>Sleep in provident tents</li>
                                    <li>Difficulty: medium</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">497$</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
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
                                    The snow adventurer
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>5 day tour</li>
                                    <li>Up to 15 people</li>
                                    <li>3 tour guides</li>
                                    <li>Sleep in provident tents</li>
                                    <li>Difficulty: hard</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">897$</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Book now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="#" class="btn btn--green">Discover all tours</a>
            </div>
        </section>

        <section class="section-stories" id="section-stories">
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="img/video.mp4" type="video/mp4">
                    <source src="img/video.webm" type="video/webm">   
                    Your browser is not supported      
                </video>
            </div>

            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">We make people genuinely happy</h2>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/nat-8.jpg" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">Marry Smith</figcaption> 
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">I had the best week ever with my family</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, sunt officia laborum consequuntur vero voluptatum! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero ex ut quidem laudantium consectetur tempore aperiam expedita provident sint voluptate!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/nat-9.jpg" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">Jack Wilson</figcaption> 
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">Wow! Mt live is completely different now</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, sunt officia laborum consequuntur vero voluptatum! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero ex ut quidem laudantium consectetur tempore aperiam expedita provident sint voluptate!</p>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="#" class="btn-text">Read all stories &rarr;</a>
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

    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__left">
                <img src="img/nat-8.jpg" alt="Tour photo" class="popup__img">
                <img src="img/nat-9.jpg" alt="Tour photo" class="popup__img">
            </div>
            <div class="popup__right">
                <a href="#section-tours" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small">Start booking now</h2>
                <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before booking</h3>
                <p class="popup__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quidem ipsa, quisquam possimus expedita dignissimos numquam autem modi praesentium quam? Iusto magnam porro obcaecati est iure debitis ratione, deleniti ducimus nesciunt, dolore accusantium dolor blanditiis architecto.</p>
                <a href="#" class="btn btn--green">Book now</a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>