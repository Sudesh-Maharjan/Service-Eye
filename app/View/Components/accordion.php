<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class accordion extends Component
{
    public $titleaccordion;
    public $titledescription;
    /**
     * Create a new component instance.
     */
    public function __construct($titleaccordion,$titledescription)
    {
        $this->titleaccordion = $titleaccordion;
        $this->titledescription=$titledescription;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.accordion');
    }
}
