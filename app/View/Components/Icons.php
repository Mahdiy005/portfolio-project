<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Icons extends Component
{
    public $icons;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->icons = [
            '<i class="fe fe-layers"></i>',
            '<i class="fe fe-layers" />',
            '<i class="fe fe-layers" />',
            '<i class="fe fe-layers" />',
            '<i class="fe fe-layers" />',
            '<i class="fe fe-layers" />',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icons');
    }
}
