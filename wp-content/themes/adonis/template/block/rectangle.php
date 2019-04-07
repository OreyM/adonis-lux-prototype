<?php

if ( get_locale() == 'ru_RU' )
{
    $pageID = 6;
    $linkText = 'подробнее';
}
elseif ( get_locale() == 'en_GB' )
{
    $pageID = 175;
    $linkText = 'detail';
}
elseif ( get_locale() == 'de_DE' )
{
    $pageID = 178;
    $linkText = 'näher';
}

?>

<section id="rectangle" class="content">
    <div class="container">
        <div class="row">
            <?php $forCount = 1; ?>
            <?php foreach ( get_field( 'mainPage_cards', $pageID ) as $cardsData): ?>
            <div class="col m3 s12 rectangle-item">
                <div class="item-wrap">
                    <div class="top-circle
                    <?= $forCount % 2 ? 'green-circle' : 'blue-circle'; ?>
                    green-circle"></div>
                    <div class="nomination">
                        <h4><?= $cardsData['mainPage_cardTitle']; ?></h4>
                    </div>
                    <div class="item-link">
                        <a href="<?= $cardsData['mainPage_link']; ?>" class="link">
                            <i class="material-icons dp48">keyboard_arrow_right</i>
                            <span><?= $linkText; ?></span>
                        </a>
                    </div>
                    <div class="item-img">
                        <img src="<?= $cardsData['mainPage_cardImg']; ?>" alt="">
                    </div>
                    <div class="circle-group">
                        <div class="big-circle"></div>
                        <div class="big-circle"></div>
                        <div class="middle-circle"></div>
                        <div class="middle-circle"></div>
                        <div class="small-circle"></div>
                    </div>
                </div>
            </div>
            <?php $forCount++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>