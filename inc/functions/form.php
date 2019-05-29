<?php
    /**
     * Input form function that generate inputs in the form
     */

     function input($id) {
         $value = isset($_POST[$id]) ? $_POST[$id] : '';
        return "<input type='text' name='$id' id='$id' value='$value' required>";
     }