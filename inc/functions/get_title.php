<?php
       /*
     * Title function that Echo the Page title in case
     * the page has variable $pageTitle and echo default title for other pages
    */

    function getTitle() {
        global $pageTitle;
        if (isset($pageTitle)) { 
            echo $pageTitle; 
        } else {
            echo 'Aymane Benhima | Full Stack Web Developer';
        }
    }
