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

    /**
     * Input form function that generate inputs in the form
     */

     function input($id) {
         $value = isset($_POST[$id]) ? $_POST[$id] : '';
        return "<input type='text' name='$id' id='$id' value='$value' required>";
     }