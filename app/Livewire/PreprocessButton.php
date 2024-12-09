<?php

namespace App\Livewire;

use App\Models\Metadata;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PreprocessButton extends Component
{
    public $label;
    public $daftarTugas;

    public function preprocess()
    {
        $tugas = $this->daftarTugas->map(function ($item) {
            $explodedPath = explode("/", $item["file_tugas"]);
            $item->filename = $explodedPath[count($explodedPath) - 1];

            return $item;
        });

        foreach ($tugas as $index => $item) {
            $response = Http::get("http://127.0.0.1:5000/preprocess?filename=" . $item->filename);

            if ($response->successful()) {
                $data = $response->json();

                Metadata::create([
                    "pengumpulan_tugas_id" => $item->id,
                    "title" => NULL,
                    "subject" => NULL,
                    "author" => NULL,
                    "creator" => NULL,
                    "producer" => NULL,
                    "pages" => NULL,
                    "creation_date" => NULL,
                    "mod_date" => NULL,
                    "word_tokens" => $data["word_tokens"],
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]);
            } else {
                dd("Error: " . $response->status());
            }
        }

        dd("Berhasil");
    }

    public function render()
    {
        return view('livewire.preprocess-button');
    }
}
