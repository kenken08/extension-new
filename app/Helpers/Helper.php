<?php
/**
* change plain number to formatted currency
*
* @param $number
* @param $currency
*/
function form_error_message($name, $errors)
{
    $message = "";

    if($errors->has($name)){
        $message .= '<span class="text-danger small">&emsp;&nbsp;' . $errors->first($name) . "</span>";
    }

    return $message;
}