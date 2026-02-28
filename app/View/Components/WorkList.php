<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Pagination\LengthAwarePaginator;

class worklist extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public ?LengthAwarePaginator $posts = null,
        public bool $latestPosts = false,
        public string $type = 'jobs',
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
