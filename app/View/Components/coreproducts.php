<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class coreproducts extends Component
{
    public $coreproducts;
    public $image;
    /**
     * Create a new component instance.
     */
    public function __construct($coreproducts, $image)
    {
        $this->coreproducts = $coreproducts;
        $this->image = $image;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.coreproducts');
    }
}
