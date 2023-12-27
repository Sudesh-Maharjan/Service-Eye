<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class trainingbanner extends Component
{

    public $title;
public $shortdescription;
public $description;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$description,$shortdescription)
    {
        $this->title = $title;
        $this->description=$description;
        $this->shortdescription=$shortdescription;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.trainingbanner');
    }
}
