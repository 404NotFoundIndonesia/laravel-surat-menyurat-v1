<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputTextareaForm extends Component
{
    public string $name, $label, $value;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $label
     * @param string $value
     */
    public function __construct(string $name, string $label, string $value = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.input-textarea-form');
    }
}
