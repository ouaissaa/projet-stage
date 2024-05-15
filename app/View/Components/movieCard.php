<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class movieCard extends Component
{
    public $ppMov;
    public $genres;
    /**
     * Create a new component instance.
     */
    public function __construct($ppMov, $genres)
    {
        $this->ppMov = $ppMov;
        $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.movie-card');
    }
}
