<?php

namespace App\Livewire;

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
            $file_path = public_path(checkStoragePath($item->file_tugas));
            $metadata = parseMetadata($file_path);

            if (!$metadata) {
                continue;
            }

            $response = Http::get("http://127.0.0.1:5000/preprocess?filename=" . $item->filename);

            if ($response->successful()) {
                $data = $response->json();

                $metadata["pengumpulan_tugas_id"] = $item->id;
                $metadata["word_tokens"] = $data["word_tokens"];
                $metadata["created_at"] = Carbon::now();
                $metadata["updated_at"] = Carbon::now();

                // $item->metadata()->delete();
                $item->metadata()->create($metadata);
            } else {
                dd("Error: " . $response->status());
            }
        }

        return $this->js("window.location.reload()");
    }

    public function render()
    {
        return view('livewire.preprocess-button');
    }
}
