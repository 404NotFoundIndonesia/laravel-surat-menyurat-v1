<?php

namespace App\View\Components;

use App\Models\Disposition;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DispositionCard extends Component
{
    public Disposition $disposition;

    /**
     * @param Disposition|null $disposition
     */
    public function __construct(Disposition $disposition = null)
    {
        $this->disposition = $disposition;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.disposition-card');
    }
}
