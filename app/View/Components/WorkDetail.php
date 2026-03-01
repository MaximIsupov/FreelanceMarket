<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\User;

class WorkDetail extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $id,
        public string $title,
        public string $description = '',
        public string $price,
        public string $time = '',
        public string $type = 'jobs',
        public ?User $user = null,
        public bool $isCurrentUserOwner = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.work-detail');
    }
}
