<?php

//configuration file

switch (basename($_SERVER['PHP_SELF'])) { //return the trailing name of the pathname

    case "index.php":
        $page_title = "Home page";
        $meta_desc = "This is some information about the home page.";
        break;
    case "item-page.php":
        $page_title = "Item page";
        $meta_desc = "This is some information about the item page.";
        break;
    case "search-page.php":
        $page_title = "Item page";
        $meta_desc = "This is some information about the item page.";
        break;
    case "welcome.php":
        $page_title = "Item page";
        $meta_desc = "This is welcome page to login or sign up.";
        break;
}
