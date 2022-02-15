<?php ob_start(); ?>


<?php 
        while($article = $aff->fetch()) { ?>

    <article class="section--bloc">
        <div class="section__bloc--1">
            <h1><?= $article['titre'] ?></h1>
            <p><?= $article['article']?></p>
            <p><?= $article['create_date']?></p>

        </div>
    </article>
<?php } ?>


<?php $newArticle = ob_get_clean(); ?>