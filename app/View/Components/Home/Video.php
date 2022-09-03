<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class Video extends Component
{
    public array $videos = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videos = [
            [
                'videoId' => 'kjsfdgfdsljghjfdghj',
                'title' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, iusto.',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, necessitatibus eligendi ab aspernatur pariatur reprehenderit itaque magnam voluptate numquam earum.',
            ],
            [
                'videoId' => 'lfsgjfdshgjkfdshjgh',
                'title' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, harum?',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum accusantium quibusdam molestias dolorem blanditiis distinctio perferendis! Quas incidunt corporis accusamus!',
            ],
            [
                'videoId' => 'kjfdshgjhdfsjghdsfjkhg',
                'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, tenetur!',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laudantium suscipit numquam optio eius veritatis tenetur harum libero hic praesentium!',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video');
    }
}
