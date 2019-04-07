<section id="about" class="content overflow-image"
         style="background-image: url('<?= get_field( 'mainPage_aboutImg' ); ?>')">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <div class="content-title-wrap">
                    <h3 class="content-title"><?= get_field( 'mainPage_aboutTitle' ); ?></h3>
                </div>
                <div class="content-text-wrap">
                    <?= get_field( 'mainPage_aboutText' ); ?>
                </div>
            </div>
            <div class="col xl6 hide-on-med-and-down">
            </div>
        </div>
    </div>
</section>