<?php

namespace App\Livewire;

use Livewire\Component;

class CarouselCard extends Component
{
    public $images = [
        'img1.jpg',
        'img2.jpg',
        'img3.jpg',
    ];

    public function render()
    {
        return view('livewire.carousel-card');
    }
}
