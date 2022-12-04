<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardCardSimple extends Component
{
    public string $label;
    public string $color;
    public string $icon;
    public int $value;
    public float $percentage;
    public bool $daily;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $value, $daily, $color, $icon, $percentage)
    {
        $this->label = $label;
        $this->value = $value;
        $this->daily = $daily;
        $this->color = $color;
        $this->icon = $icon;
        $this->percentage = $percentage ?? 0.00;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard-card-simple');
    }
}
