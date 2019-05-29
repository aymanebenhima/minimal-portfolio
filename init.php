<?php

    // Routes

    $tpl    = 'inc/templates/'; // Template Directory
    $css    = 'layout/css/'; // CSS Directory
    $func   = 'includes/functions/'; // functions Directory
    $js     = 'layout/js/'; // js Directory
    $lang   = 'inc/languages/'; // languages Directory
    $img    = 'layout/img/'; // Images Directory
    $lib    = 'inc/lib/'; // lib Directory

    
    // Include the Important files
   // include $func . 'functions.php';
    include 'config.php';
    include $tpl . 'header.php';

    // Include Intro on all page except the one with no_navbar variable
   // if (!isset($no_intro)) { include $tpl . 'intro.php'; }
   if(!isset($no_nav)) {
   include $tpl . 'nav.php';
   }
   // include $lib . 'debug.php';