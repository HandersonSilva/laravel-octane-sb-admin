<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputSb extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $value = '',
        public string $placeholder = '',
        public string $class = '',
        public string $label = '',
        public bool   $required = false,
        public string $type = 'text')
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-sb');
    }
}
