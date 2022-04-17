<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonSb extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label,
        public string $class,
        public string $type,
        public string $icon)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button-sb');
    }
}
