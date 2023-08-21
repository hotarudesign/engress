<?php get_header(); ?>
<main class="home">
    <div class="mv">
        <div class="mv__inner inner">
            <div class="hero">
                <h2 class="hero__ttl">TOEFL対策はEngress</h2>
                <p class="hero__lead">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="hero__btn">資料請求</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="hero__link">お問い合わせ</a>
            </div>
        </div>
    </div>
    <section class="question">
        <div class="question__inner inner">
            <h2 class="question__ttl sec-ttl">TOEFL学習でこんな悩みありませんか？</h2>
            <ul class="question__list">
                <li class="question__item">勉強の習慣が<br>身についていない</li>
                <li class="question__item">勉強しているはず<br>なのに点数が伸びない</li>
                <li class="question__item">正しい勉強方法が<br>わからない</li>
            </ul>
            <div class="question__foot">
                <div class="question__foot__inner">
                    <h3 class="question__foot-ttl">Engressは<br>TOEFLに特化したスクールです</h3>
                    <p class="question__foot-desc">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="feature">
        <div class="feature__inner inner">
            <h2 class="feature__ttl sec-ttl">TOEFL対策に特化したEngress3つの強み</h2>
            <ol class="feature__list">
                <li class="feature__item">
                    <div class="feature__body">
                        <div class="feature__body__txt">
                            <h3 class="feature__body__txt-ttl">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
                            <p class="feature__body__txt-desc">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
                        </div>
                        <p class="feature__body-label">特長 １</p>
                    </div>
                    <figure class="feature__item__thumb">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/feature01.webp' type='image/webp'>
                            <img src='<?php echo ImgPath; ?>/featire01.jpg' alt=''>
                        </picture>
                    </figure>
                </li>
                <li class="feature__item">
                    <div class="feature__body">
                        <div class="feature__body__txt">
                            <h3 class="feature__body__txt-ttl">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
                            <p class="feature__body__txt-desc">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
                        </div>
                        <p class="feature__body-label">特長 ２</p>
                    </div>
                    <figure class="feature__item__thumb">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/feature02.webp' type='image/webp'>
                            <img src='<?php echo ImgPath; ?>/feature02.jpg' alt=''>
                        </picture>
                    </figure>
                </li>
                <li class="feature__item">
                    <div class="feature__body">
                        <div class="feature__body__txt feature__body__txt03">
                            <h3 class="feature__body__txt-ttl">平均3ヶ月でTOEFL iBT20点アップ</h3>
                            <p class="feature__body__txt-desc">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
                        </div>
                        <p class="feature__body-label">特長 ３</p>
                    </div>
                    <figure class="feature__item__thumb">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/feature03.webp' type='image/webp'>
                            <img src='<?php echo ImgPath; ?>/feature03.png' alt=''>
                        </picture>
                    </figure>
                </li>
            </ol>
            <div class="feature__foot">
                <h3 class="feature__foot-ttl">Engressの料金プランはこちら</h3>
                <a href="<?php echo esc_url(home_url('/price')); ?>" class="feature__foot-btn">料金を見てみる</a>
            </div>
        </div>
    </section>
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
    <section class="flow">
        <div class="flow__inner inner">
            <h2 class="flow__ttl sec-ttl">ご利用の流れ</h2>
            <ol class="flow__list">
                <li class="flow__item">
                    <p class="flow__item-num">01</p>
                    <h3 class="flow__item-ttl">お問い合わせ</h3>
                    <p class="flow__item-desc">まずはフォームまたはお電話からお申し込みください。</p>

                </li>
                <li class="flow__item">
                    <p class="flow__item-num">02</p>
                    <h3 class="flow__item-ttl">ヒアリング</h3>
                    <p class="flow__item-desc">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>

                </li>
                <li class="flow__item">
                    <p class="flow__item-num">03</p>
                    <h3 class="flow__item-ttl">学習プランのご提供</h3>
                    <p class="flow__item-desc">目標達成のために最適な学習プランをご提案致します。</p>

                </li>
                <li class="flow__item">
                    <p class="flow__item-num">04</p>
                    <h3 class="flow__item-ttl">ご入会</h3>
                    <p class="flow__item-desc">お申込み完了後、レッスンがスタートします。</p>

                </li>
            </ol>
        </div>
    </section>
    <section class="faq">
        <div class="faq__inner inner">
            <h2 class="faq__ttl sec-ttl">よくある質問</h2>
            <ul class="faq__list">
                <li class="faq__item">
                    <div class="faq__item__body">
                        <p class="faq__item__body-txt">Engressはサラリーマンでも学習を続けられるでしょうか？</p>
                        <button class="faq__item__body-btn"></button>
                    </div>
                    <div class="faq__item__answer">
                        <p class="faq__item__answer-txt">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                    </div>
                </li>
                <li class="faq__item">
                    <div class="faq__item__body">
                        <p class="faq__item__body-txt">教材はオリジナルのものを使用しているのでしょうか？</p>
                        <button class="faq__item__body-btn"></button>
                    </div>
                    <div class="faq__item__answer">
                        <p class="faq__item__answer-txt">オリジナルのものを使用しています。</p>
                    </div>
                </li>
                <li class="faq__item">
                    <div class="faq__item__body">
                        <p class="faq__item__body-txt">講師に日本人はいますか？</p>
                        <button class="faq__item__body-btn"></button>
                    </div>
                    <div class="faq__item__answer">
                        <p class="faq__item__answer-txt">日本人も在籍しております。</p>
                    </div>
                </li>
                <li class="faq__item">
                    <div class="faq__item__body">
                        <p class="faq__item__body-txt">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
                        <button class="faq__item__body-btn"></button>
                    </div>
                    <div class="faq__item__answer">
                        <p class="faq__item__answer-txt">海外大学合格に向けたサポートも行なっております。</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <?php get_template_part('parts/sidebar-front'); ?>
    <?php get_template_part('parts/cta'); ?>
</main>
<?php get_footer(); ?>