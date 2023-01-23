<?php

//configuration file

switch (basename($_SERVER['PHP_SELF'])) { //return the trailing name of the pathname

    case "index.php":
        $page_title = "Home page";
        $meta_desc = "This is some information about the home page.";
        break;
}
