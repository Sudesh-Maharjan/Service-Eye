<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class blogcards extends Component
{
    public $blogtitle;
    public $image;
    public $blogdescription;
    public $update;
   
    /**
     * Create a new component instance.
     */
    public function __construct($blogtitle,$image,$blogdescription,$update)
    {
        $this->blogtitle=$blogtitle;
        $this->image=$image;
        $this->blogdescription=$blogdescription;
        $this->update=$update;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blogcards');
    }
}
