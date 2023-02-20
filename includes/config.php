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
    case "confirmation-delete.php":
        $page_title = "confirmation-delete page";
        $meta_desc = "This is the confirmation page to delete the items that a user want to sell.";
        break;
    case "dashboard.php":
        $page_title = "dashboard page";
        $meta_desc = "This is the dashboard page where a logged  user can see his or her items and delete or edit them.";
        break;
    case "delete-fav.php":
        $page_title = "delete-fav page";
        $meta_desc = "This is the delete favourites items page.";
        break;
    case "delete.php":
        $page_title = "delete page";
        $meta_desc = "This is the delete items to sell page.";
        break;
    case "edit.php":
        $page_title = "edit page";
        $meta_desc = "This is the edit items to sell page.";
        break;
    case "favourites.php":
        $page_title = "favourites page";
        $meta_desc = "This is favourite items page when a logged user can see his or her favourites items.";
        break;
    case "index-sell.php":
        $page_title = "index-sell page";
        $meta_desc = "This is the sell page when a logged user can upload the items that he or she is intentresting in sell.";
        break;
    case "login.php":
        $page_title = "login page";
        $meta_desc = "This is the login page.";
        break;
    case "logout.php":
        $page_title = "logout page";
        $meta_desc = "This is the logout page.";
        break;
    case "process-edit.php":
        $page_title = "process-edit page";
        $meta_desc = "This is the page for processing the editions of the items that a logged user wants to sell.";
        break;
    case "process-fav.php":
        $page_title = "process-fav page";
        $meta_desc = "This is the page for processing the logged user's favourites items.";
        break;
    case "process-signUp.php":
        $page_title = "process-signUp page";
        $meta_desc = "This is the page for processing the sign up.";
        break;
    case "process-sell.php":
        $page_title = "process-sell page";
        $meta_desc = "This is the page for processing the sell of the items.";
        break;
    case "sign-up.php":
        $page_title = "sign-up page";
        $meta_desc = "This is the sign up page.";
        break;
    case "validate-email.php":
        $page_title = "validate-email page";
        $meta_desc = "This is the page to validate the email.";
        break;
    case "link-accessories-page.php":
        $page_title = "accessories page";
        $meta_desc = "This is the accesories link page.";
        break;
    case "link-entertainment-page.php":
        $page_title = "entertainment page";
        $meta_desc = "This is the entertainment link page.";
        break;
    case "link-kids-page.php":
        $page_title = "kids clothes page";
        $meta_desc = "This is the kids clothes link page.";
        break;
    case "link-men-page.php":
        $page_title = "men's clothes page";
        $meta_desc = "This is the men's clothes link page.";
        break;
    case "link-petCare-page.php":
        $page_title = "pet care product page";
        $meta_desc = "This is the pet care product link page.";
        break;
    case "link-shoes-page.php":
        $page_title = "shoes page";
        $meta_desc = "This is the shoes link page.";
        break;
    case "link-women-page.php":
        $page_title = "women's clothes page";
        $meta_desc = "This is the women's clothes link page.";
        break;
    case "link-sport-page.php":
        $page_title = "sport page";
        $meta_desc = "This is the sport products link page.";
        break;
}
