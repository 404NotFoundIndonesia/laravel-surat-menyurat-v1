<?php

namespace App\View\Components;

use App\Models\Letter;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LetterCard extends Component
{
    public Letter $letter;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Letter $letter = null)
    {
        $this->letter = $letter;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|string|Closure
    {
        return view('components.letter-card');
    }
}
