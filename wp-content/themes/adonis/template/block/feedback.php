<?php

if ( get_locale() == 'ru_RU' )
{
    $pageID = 6;
}
elseif ( get_locale() == 'en_GB' )
{
    $pageID = 175;;
}
elseif ( get_locale() == 'de_DE' )
{
    $pageID = 178;
}

echo do_shortcode( get_field( 'mainPage_feedback', $pageID ) );

/*

<section id="feedback" class="content content-feedback">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <div class="content-info-wrap">
                    <div class="content-title-wrap">
                        <h3 class="content-title">Партнерство</h3>
                    </div>
                    <div class="content-text-wrap">
                        <p>Потенциальные партнеры могут связаться с нами на прямую. Наша компания приглашает все заинтересованные организации к долгосрочному и взаимовыгодному сотрудничеству. </p>
                    </div>
                </div>
            </div>
            <div class="col l6 s12">
                <form role="form" method="" id="feedback-form">
                    <div class="feedback-wrap">
                        <div class="feedback-input-wrap">
                            <input type="text" id="feedback-name" name="name" placeholder="Ваше Имя" required>
                        </div>
                        <div class="feedback-input-wrap">
                            <input type="email" id="feedback-email" name="email" placeholder="Ваш E-mail" required>
                        </div>
                        <div class="feedback-submit-wrap">
                            <button class="feedback-btn">отправить</button>
                        </div>
                        <div class="circle"></div>
                        <div class="feedback-bg top"></div>
                        <div class="feedback-bg bottom"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

*/

?>
