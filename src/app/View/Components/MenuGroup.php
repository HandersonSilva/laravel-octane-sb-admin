<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class MenuGroup extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label = '',
        public string $labelGroupItem = 'Items',
        public string $icon = '',
        public string $id = '',
        public mixed  $activeRoutes = null,
    )
    {
        $this->id = Str::slug($this->label);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu-group');
    }
}
