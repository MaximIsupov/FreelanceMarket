<?php

namespace App\View\Components;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $id,
        public string $title,
        public string $time,
        public string $price,
        public string $type,
        public User $user
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
