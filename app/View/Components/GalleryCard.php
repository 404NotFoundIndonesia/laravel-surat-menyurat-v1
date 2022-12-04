<?php

namespace App\View\Components;

use App\Models\Letter;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GalleryCard extends Component
{
    public string $filename, $extension, $path;
    public Letter $letter;

    /**
     * @param string $filename
     * @param string $extension
     * @param string $path
     * @param Letter|null $letter
     */
    public function __construct(string $filename, string $extension, string $path, Letter $letter = null)
    {
        $this->filename = $filename;
        $this->extension = $extension;
        $this->path = $path;
        $this->letter = $letter;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.gallery-card');
    }
}
