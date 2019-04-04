<?php get_header(); ?>

<header>
    <div id="lang">
        <div class="container">
            <div class="row">
                <div class="lang-wrap">
                    <ul class="lang-list">
                        <li class="lang-item">
                            <a href="#!" class="lang-select active-lang">russian</a>
                        </li>
                        <li class="lang-item">
                            <a href="#!" class="lang-select">english</a>
                        </li>
                        <li class="lang-item">
                            <a href="#!" class="lang-select">deutsch</a>
                        </li>
                    </ul>
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

                    <ul class="right hide-on-med-and-down nav-menu">
                        <li class="nav-menu-item">
                            <a class="nav-menu-title" href="about.html">о предприятии</a>
                        </li>
                        <li class="nav-menu-item nav-menu-dropdown">
                            <a class="dropdown-trigger" href="#!" data-target="dropdown-menu-1">продукция</a>
                            <ul id="dropdown-menu-1" class="dropdown-content" tabindex="0">
                                <li tabindex="0">
                                    <a href="item-page.html">пшено</a>
                                </li>
                                <li tabindex="0">
                                    <a href="item-page-2.html">крупа пшеничная</a>
                                </li>
                                <li tabindex="0">
                                    <a href="item-page-3.html">крупа ячневая</a>
                                </li>
                                <li tabindex="0">
                                    <a href="item-page-4.html">крупа перловая</a>
                                </li>
                                <!--<li class="divider" tabindex="0"></li>-->
                            </ul>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-title" href="service.html">услуги</a>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-title" href="purchase.html">закупаем</a>
                        </li>
                        <li class="nav-menu-item">
                            <a class="nav-menu-title" href="contacts.html">контакты</a>
                        </li>
                    </ul>

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
        <ul class="sidenav" id="mobile-demo">
            <li class="sidenav-item"><a href="about.html">о предприятии</a></li>
            <li class="sidenav-item">
                <ul class="collapsible sidenav-dropdown">
                    <li class="sidenav-dropdown-list">
                        <div class="collapsible-header">продукция</div>
                        <div class="collapsible-body">
                            <ul>
                                <li><a class="sidenav-item" href="item-page.html">пшено</a></li>
                                <li><a class="sidenav-item" href="item-page-2.html">крупа пшеничная</a></li>
                                <li><a class="sidenav-item" href="item-page-3.html">крупа ячневая</a></li>
                                <li><a class="sidenav-item" href="item-page-4.html">крупа перловая</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="sidenav-item"><a href="service.html">услуги</a></li>
            <li class="sidenav-item"><a href="purchase.html">закупаем</a></li>
            <li class="sidenav-item"><a href="contacts.html">контакты</a></li>
        </ul>
    </aside>


</header>

<?php get_footer(); ?>
