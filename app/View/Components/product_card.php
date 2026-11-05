<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class product_card extends Component
{
    public $name;
    public $category;
    public $price;
    public $instock;
    public $badge;
    public $image;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $category, $price, $instock, $badge, $image)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->instock = $instock;
        $this->badge = $badge;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product_card');
    }
}
