<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class MultiLanguageButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function trans(): string
    {
        return LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
    }

    public function capitalLang()
    {
        return strtoupper($this->trans());
    }

    public function currentUrl()
    {
        return LaravelLocalization::getLocalizedURL($this->trans());
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.multi-language-button');
    }
}
