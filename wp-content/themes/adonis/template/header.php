<header>
    <div id="lang">
        <div class="container">
            <div class="row">
                <div class="lang-wrap">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'langSwitch'
                        )
                    );
                    ?>
                </div>

            </div>
        </div>
    </div>
    <nav id="top-nav">
        <div class="container">
            <div class="row">
                <div class="nav-wrapper">
                    <a href="main-page.html" class="brand-logo">
                        <img src="<?= get_field('siteLogo', 67); ?>" alt="Адоніс Люкс | Производство пшена">
                    </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    <?php get_template_part ( 'template/menu/nav' ); ?>

                </div>
            </div>
        </div>
    </nav>

    <?php if (is_front_page() ): ?>
        <div id="top-header-image">

            <div class="header-img-wrap">
                <img src="<?= get_field('mainPage_titleImg'); ?>" alt="">
            </div>

            <div class="top-header-title-wrap">
                <div class="container">
                    <div class="row">
                        <div class="top-header-title">
                            <h1><?= get_field('mainPage_titleText'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <aside id="sidebar">
        <?php get_template_part ( 'template/menu/sidebar' ); ?>
    </aside>


</header>
