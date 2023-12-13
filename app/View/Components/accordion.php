<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class accordion extends Component
{
    public $titleaccordion;
    /**
     * Create a new component instance.
     */
    public function __construct($titleaccordion)
    {
        $this->titleaccordion = $titleaccordion;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.accordion');
    }
}
