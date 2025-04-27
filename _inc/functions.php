<?php

function get_menu(array $pages) {
    $menuItems = '';
    foreach($pages as $page_name => $page_url) {
        $menuItems .= '<li class="nav-item">';
        $menuItems .= '<a class="nav-link" href="' . $page_url . '">' . $page_name . '</a';
        $menuItems .= '</li>';

    }
    return $menuItems;
}

?>