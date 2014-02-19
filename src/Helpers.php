<?php

namespace Test;


class Helpers {

    public static function fetch($fn, $context = []) {
        ob_start();
        call_user_func($fn, $context);
        return ob_get_clean();
    }

    public static function section($context, $options) {
        $fn = $options['fn'];

        if (is_array($context)) {
            foreach ($context as $context_row) {
                call_user_func($fn, $context_row);
            }
        } elseif($context) {
            call_user_func($fn, $context);
        }
    }
}