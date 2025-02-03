<?php

// check if we use rtl or ltr based on currenr lang
if (! function_exists('is_rtl')) {
    function is_rtl()
    {
        return Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() == 'ar';
    }
}
