<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButton extends Component
{
    public string $color;
    public string $text;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href, public string $type)
    {
        if($type == 'create') {
            $this->color = 'primary';
            $this->text = __('messages.add-new-service');
        } elseif($type == 'show') {
            $this->color = 'info';
            $this->text = __('messages.show');
        } elseif($type == 'edit') {
            $this->color = 'warning';
            $this->text = __('messages.update');
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
