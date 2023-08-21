<?php get_header(); ?>
<main class="main">
    <?php get_template_part('parts/page-head'); ?>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <div class="page-container">
        <div class="contact__inner inner">
            <p class="contact__desc">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
            <?php the_content(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>