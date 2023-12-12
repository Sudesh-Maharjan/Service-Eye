<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class trainingcard extends Component
{
    public $tcimg;
    public $w1;
    public $w2;
    public $desc;
    /**
     * Create a new component instance.
     */
    public function __construct($w1, $w2 ,$tcimg, $desc)
    {
        $this->tcimg = $tcimg;
        $this->w1 = $w1;
        $this->w2 = $w2;
        $this->desc = $desc;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.trainingcard');
    }
}
