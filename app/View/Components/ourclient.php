<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ourclient extends Component
{
    public $imageclient;
    /**
     * Create a new component instance.
     */
    public function __construct($imageclient)
    {
        $this->imageclient = $imageclient;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ourclient');
    }
}
