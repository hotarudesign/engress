<section class="success">
    <div class="success__inner inner">
        <h2 class="success__ttl sec-ttl">TOEFL成功事例</h2>
        <ul class="success__list">
            <li class="success__item">
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post() ?>
                        <h3 class="success__item-ttl"><?php the_field('model01_title'); ?></h3>
                        <figure class="success__item__avatar">
                            <img src="<?php the_field('model01_image'); ?>" class="success__item__avatar-img success__item__avatar-img01" alt="">
                        </figure>
                <?php endwhile;
                endif; ?>
                <div class="success__item__foot">
                    <div class="success__item__foot-head">
                        <p class="success__item__foot-category"><?php the_field('model01_category'); ?></p>
                        <p class="success__item__foot-name"><?php the_field('model01_name'); ?></p>
                    </div>
                    <p class="success__item__foot-desc"><?php the_field('model01_desc'); ?></p>
                </div>
            </li>
            <li class="success__item">
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post() ?>
                        <h3 class="success__item-ttl"><?php the_field('model02_title'); ?></h3>
                        <figure class="success__item__avatar">
                            <img src="<?php the_field('model02_image'); ?>" class="success__item__avatar-img success__item__avatar-img02" alt="">
                        </figure>
                <?php endwhile;
                endif; ?>
                <div class="success__item__foot">
                    <div class="success__item__foot-head">
                        <p class="success__item__foot-category"><?php the_field('model02_category'); ?></p>
                        <p class="success__item__foot-name"><?php the_field('model02_name'); ?></p>
                    </div>
                    <p class="success__item__foot-desc"><?php the_field('model02_desc'); ?></p>
                </div>
            </li>
            <li class="success__item">
                <?php if (have_posts()) :
                    while (have_posts()) :
                        the_post() ?>
                        <h3 class="success__item-ttl"><?php the_field('model03_title'); ?></h3>
                        <figure class="success__item__avatar">
                            <img src="<?php the_field('model03_image'); ?>" class="success__item__avatar-img success__item__avatar-img03" alt="">
                        </figure>
                <?php endwhile;
                endif; ?>
                <div class="success__item__foot">
                    <div class="success__item__foot-head">
                        <p class="success__item__foot-category"><?php the_field('model03_category'); ?></p>
                        <p class="success__item__foot-name"><?php the_field('model03_name'); ?></p>
                    </div>
                    <p class="success__item__foot-desc"><?php the_field('model03_desc'); ?></p>
                </div>
            </li>
        </ul>
    </div>
</section>