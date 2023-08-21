<?php
if (is_page('price')) : ?>
    <div class="page-head price">
        <h2 class="page-head__ttl">コース・料金</h2>
    </div>
<?php elseif (is_post_type_archive("blog")) : ?>
    <div class="page-head blog">
        <h2 class="page-head__ttl">ブログ</h2>
    </div>
<?php elseif (is_tax()) : ?>
    <div class="page-head blog">
        <h2 class="page-head__ttl">ブログ</h2>
    </div>
<?php elseif (is_single()) : ?>
    <div class="page-head blog">
        <h2 class="page-head__ttl">ブログ</h2>
    </div>
<?php elseif (is_post_type_archive('news')) : ?>
    <div class="page-head news">
        <h2 class="page-head__ttl">お知らせ</h2>
    </div>
<?php elseif (is_page('contact')) : ?>
    <div class="page-head contact">
        <h2 class="page-head__ttl">お問い合わせ・資料請求</h2>
    </div>
<?php endif; ?>