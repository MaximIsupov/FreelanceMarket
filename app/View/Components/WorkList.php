<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class worklist extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public string $fullPageUrl = '',
        public string $fullPageText = "Смотреть все",
        public array $posts = [],
        public bool $latestPosts = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.work-list');
    }
}
