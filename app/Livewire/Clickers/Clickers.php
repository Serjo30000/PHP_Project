<?php

namespace App\Livewire\Clickers;

use Livewire\Component;

class Clickers extends Component
{
    public static $cl=0;
    #[On('get-click')]
    public function click(): void{
        $this->cl++;
    }
    public function render()
    {
        return view('livewire.clickers.clickers');
    }
}
