<?php

namespace App\Livewire;

use Livewire\Component;

class CheckSimilarityButton extends Component
{
    public $label;
    public $daftarTugas;

    public function checkSimilarity()
    {
        dd("OK");
    }

    public function render()
    {
        return view('livewire.check-similarity-button');
    }
}
