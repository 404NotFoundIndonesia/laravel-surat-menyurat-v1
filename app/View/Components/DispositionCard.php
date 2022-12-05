<?php

namespace App\View\Components;

use App\Models\Disposition;
use App\Models\Letter;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DispositionCard extends Component
{
    public Disposition $disposition;
    public Letter $letter;

    /**
     * @param Disposition $disposition
     * @param Letter $letter
     */
    public function __construct(Disposition $disposition, Letter $letter)
    {
        $this->disposition = $disposition;
        $this->letter = $letter;
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
