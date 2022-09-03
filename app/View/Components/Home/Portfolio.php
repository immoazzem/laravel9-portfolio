<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;

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
                'category' => ['Laravel','jQuery', 'Bootstrap', 'JavaScript', 'MySql'],
                'title' => 'School Management with Laravel',
                'image' => url('/img/sms-laravel.png'),
                'github' => 'https://github.com/immoazzem/Laravel-School-Management',
            ],
            [
                'category' => ['PHP','jQuery', 'Bootstrap', 'JavaScript', 'MySql'],
                'title' => 'Restaurant Management with PHP',
                'image' => url('/img/rms-php.png'),
                'github' => 'https://github.com/immoazzem/Restaurant-Management-System',
            ],
            [
                'category' => ['Laravel','Tailwind.css', 'Vue3', 'MySql'],
                'title' => 'Vaccine Registration with Laravel and Vue3',
                'image' => url('/img/vac-laravel-vue.png'),
                'github' => 'https://github.com/immoazzem/vaccine',
            ],
            [
                'category' => ['Vue3', 'Tailwind.css', 'REST api'],
                'title' => 'Local Weather in Realtime',
                'image' => url('/img/weather-vue.png'),
                'github' => 'https://github.com/immoazzem/vaccine',
            ]
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
