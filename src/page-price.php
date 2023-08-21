<?php get_header(); ?>
<main class="main">
    <?php get_template_part('parts/page-head'); ?>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <section class="fee">
        <div class="fee__inner inner">
            <h2 class="fee__ttl page-sec-ttl">料金体系</h2>
            <div class="fee__figure">
                <div class="fee__figure__box">入会金 39,800円</div>
                <div class="fee__figure__icon"></div>
                <div class="fee__figure__box">月額費用</div>
            </div>
            <p class="fee__desc">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
        </div>
    </section>
    <section class="course">
        <div class="course__inner inner">
            <h2 class="course__ttl page-sec-ttl">料金表</h2>
            <ul class="course__list">
                <li class="course__item">
                    <h3 class="course__item-ttl">基礎プラン</h3>
                    <div class="course__item__body">
                        <p class="course__item__body-price"><?php the_field('price01'); ?><br><span class="course__item__body-small">*月額(税抜き価格)</span></p>
                        <ul class="course__item__list">
                            <li class="course__item__list__item">カリキュラム作成</li>
                            <li class="course__item__list__item">TOEFL学習サポート</li>
                            <li class="course__item__list__item">週一回のビデオMTG</li>
                        </ul>
                    </div>
                </li>
                <li class="course__item">
                    <h3 class="course__item-ttl">演習プラン</h3>
                    <div class="course__item__body">
                        <p class="course__item__body-price"><?php the_field('price02'); ?><br><span class="course__item__body-small">*月額(税抜き価格)</span></p>
                        <ul class="course__item__list">
                            <li class="course__item__list__item">カリキュラム作成</li>
                            <li class="course__item__list__item">TOEFL学習サポート</li>
                            <li class="course__item__list__item">週一回のビデオMTG</li>
                            <li class="course__item__list__item">月二回の模試(解説付き)</li>
                        </ul>
                    </div>
                </li>
                <li class="course__item">
                    <h3 class="course__item-ttl accent">おすすめ<br>志望校対策プラン</h3>
                    <div class="course__item__body">
                        <p class="course__item__body-price"><?php the_field('price03'); ?><br><span class="course__item__body-small">*月額(税抜き価格)</span></p>
                        <ul class="course__item__list">
                            <li class="course__item__list__item">カリキュラム作成</li>
                            <li class="course__item__list__item">TOEFL学習サポート</li>
                            <li class="course__item__list__item">週一回のビデオMTG</li>
                            <li class="course__item__list__item">月二回の模試(解説付き)</li>
                            <li class="course__item__list__item">週一の英語面接対策</li>
                        </ul>
                    </div>
                </li>
                <li class="course__item">
                    <h3 class="course__item-ttl">フレックスプラン</h3>
                    <div class="course__item__body">
                        <p class="course__item__body-price"><?php the_field('price04'); ?><br><span class="course__item__body-small">*月額(税抜き価格)</span></p>
                        <ul class="course__item__list">
                            <li class="course__item__list__item">※別途ご相談ください</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>