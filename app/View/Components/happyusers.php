<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class happyusers extends Component
{
    public $title;
    public $emoji;
    public $numbers;
    
    

    /**
     * Create a new component instance.
     */
    public function __construct($title, $emoji, $numbers)
    {
        $this->title = $title;
        $this->emoji = $emoji;
        $this->numbers = $numbers;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.happyusers');
    }
}
