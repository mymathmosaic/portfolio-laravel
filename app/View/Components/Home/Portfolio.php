<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css'],
                'title' => 'Portfolio Landing page built with Laravel and  Tailwindcss',
                'image' => url('/img/portfolio-laravel.png'),
                'github' => 'https://github.com/mymathmosaic/portfolio-laravel'
            ],
            [
                'category' => ['Yii2', 'Bootstrap'],
                'title' => 'E-commerce website with Yii2',
                'image' => url('/img/yii2-ecommerce.jpg'),
                'github' => 'https://github.com/mymathmosaic'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'REST API with Laravel 8 and Sanctum',
                'image' => url('/img/laravel-rest-api.png'),
                'github' => 'https://github.com/tradovic'
            ],
            [
                'category' => ['PHP'],
                'title' => 'PHP MVC Framework',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/tradovic'
            ],
            [
                'category' => ['Yii2', 'VueJs'],
                'title' => 'Yii2 + VueJs Notes application',
                'image' => url('/img/yii2-vue-notes.png'),
                'github' =>  'https://github.com/tradovic'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
