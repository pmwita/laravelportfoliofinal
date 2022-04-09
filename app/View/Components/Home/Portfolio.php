<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['HTML', 'CSS'],
                'title' => 'INTERIOR DESIGN WEBSITE',
                'image' => url('/img/interior.jpg'),
                'github' => 'https://pmwita.github.io/Interiordesignwebsite/'
            ],
            [
                'category' => ['HTML', 'Bootstrap'],
                'title' => 'Online Store Site',
                'image' => url('/img/onlinestore.jpg'),
                'github' => 'https://pmwita.github.io/OnlineStoreSite/'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'I AM LINET Photography Website',
                'image' => url('/img/IAMLINET.jpg'),
                'github' => 'https://pmwita.github.io/IAMLINET/'
            ],
            [
                'category' => ['PHP'],
                'title' => 'A TINY ECOMMERCE WEBSITE',
                'image' => url('/img/tinyecommerce.jpg'),
                'github' => 'https://pmwita.github.io/TINYECOMMERCESITE/'
            ],
            [
                'category' => ['PHP', 'Bootstrap'],
                'title' => 'GISIRE ACADEMY SCHOOL WEBSITE',
                'image' => url('/img/gisireschool.jpg'),
                'github' => 'https://pmwita.github.io/schoolwebsite/'
            ],
            [
                'category' => ['HTML'],
                'title' => 'A RESTAURANT WEBSITE',
                'image' => url('/img/restaurant1.png'),
                'github' =>  'https://pmwita.github.io/restaurantwebsite/'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
