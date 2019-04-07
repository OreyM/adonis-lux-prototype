<?php
/* MENU CREATE */
function menuCreate ( $menuName )
{
    $topMenu_items = wp_get_nav_menu_items( $menuName );
    $menuItemCount = FALSE;

    $topMenuCreating = '<ul class="right hide-on-med-and-down nav-menu">';

    foreach ( $topMenu_items as $menuItem )
    {
        if ( is_object( $menuItem ) || is_array( $menuItem ) )
        {
            if ( ! $menuItem->menu_item_parent )
            {
                if ( $menuItemCount )
                {
                    $topMenuCreating .= '</ul>';
                    $topMenuCreating .= '</li>';
                }


                if ( $menuItem->url === '#!' )
                {
                    $topMenuCreating .= '<li class="nav-menu-item nav-menu-dropdown">';
                    $topMenuCreating .= "<a class=\"dropdown-trigger\" data-target=\"dropdown-menu-1\" href='{$menuItem->url}'>{$menuItem->title}</a>";
                    $topMenuCreating .= "<ul id=\"dropdown-menu-1\" class=\"dropdown-content\" tabindex=\"0\">";
                }
                else
                {
                    $topMenuCreating .= '<li class="nav-menu-item">';
                    $topMenuCreating .= "<a class='nav-menu-title' href='{$menuItem->url}'>{$menuItem->title}</a>";
                    $topMenuCreating .= '</li>';
                }

                $menuItemCount = FALSE;
            }
            else
            {
                $topMenuCreating .= "<li tabindex=\"0\">";
                $topMenuCreating .= "<a href=\"{$menuItem->url}\">{$menuItem->title}</a>";
                $topMenuCreating .= "</li>";
                $menuItemCount = TRUE;
            }
        }
    }

    $topMenuCreating .= '</ul>';

    return $topMenuCreating;
}


if ( get_locale() == 'ru_RU' )
{
    $navMenu = menuCreate( 'rusMenu' );
}
elseif ( get_locale() == 'en_GB' )
{
    $navMenu = menuCreate( 'enMenu' );
}
elseif ( get_locale() == 'de_DE' )
{
    $navMenu = menuCreate( 'deMenu' );
}

echo $navMenu;

?>