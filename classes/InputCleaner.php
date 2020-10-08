<?php

class InputCleaner
{
    public static function clean_input_text($text)
        {
            $text = strip_tags($text);
            $text = str_replace(" ","",$text);
            $text = strtolower($text);
            return $text;
        }

    
    public static function clean_input_password($text)
    {
        $text = strip_tags($text);
        return $text;
    }
    
}

?>