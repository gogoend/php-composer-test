<!--
/*
 * @Author: gogoend
 * @Date: 2020-06-22 16:06:24
 * @LastEditors: gogoend
 * @LastEditTime: 2020-06-22 16:08:02
 * @FilePath: \php-composer-test\app\Views\news\index.php
 * @Description: 
 */  
 -->
<h2><?= $title ?></h2>
<?php if (!empty($news) && is_array($news)) : ?>

    <?php foreach ($news as $news_item) : ?>

        <h3><?= $news_item['title'] ?></h3>

        <div class="main">
            <?= $news_item['text'] ?>
        </div>
        <p><a href="<?= '/news/' . $news_item['slug'] ?>">View article</a></p>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>