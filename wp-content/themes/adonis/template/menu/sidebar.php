<?php
/* MENU CREATE */
function sidebarCreate ( $menuName )
{
    $topMenu_items = wp_get_nav_menu_items( $menuName );
    $menuItemCount = FALSE;

    $sidebarMenu = "<ul class=\"sidenav\" id=\"mobile-demo\">";

    foreach ( $topMenu_items as $menuItem )
    {
        if ( is_object( $menuItem ) || is_array( $menuItem ) )
        {
            if ( ! $menuItem->menu_item_parent )
            {
                if ( $menuItemCount )
                {
                    $sidebarMenu .= "</ul></div></li></ul></li>";
                }

                if ( $menuItem->url === '#!' )
                {
                    $sidebarMenu .= "<li class=\"sidenav-item\">
                                            <ul class=\"collapsible sidenav-dropdown\">
                                                <li class=\"sidenav-dropdown-list\">
                                                    <div class=\"collapsible-header\">{$menuItem->title}</div>
                                                    <div class=\"collapsible-body\">
                                                    <ul>";
                }
                else
                {
                    $sidebarMenu .= "<li class=\"sidenav-item\"><a href=\"{$menuItem->url}\">{$menuItem->title}</a></li>";
                }

                $menuItemCount = FALSE;
            }
            else
            {
                $sidebarMenu .= "<li><a class=\"sidenav-item\" href=\"{$menuItem->url}\">{$menuItem->title}</a></li>";
                $menuItemCount = TRUE;
            }
        }
    }

    $sidebarMenu .= '</ul>';

    return $sidebarMenu;
}


if ( get_locale() == 'ru_RU' )
{
    $sidebarMenu = sidebarCreate( 'rusMenu' );
}
elseif ( get_locale() == 'en_GB' )
{
    $sidebarMenu = sidebarCreate( 'enMenu' );
}
elseif ( get_locale() == 'de_DE' )
{
    $sidebarMenu = sidebarCreate( 'deMenu' );
}

echo $sidebarMenu;

?>